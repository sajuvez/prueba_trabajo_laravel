<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Proyecto;
use Illuminate\Support\Facades\DB;
// use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProyectsModuleTest extends TestCase
{

    use RefreshDatabase;

    /** @test */ //test 1
    function it_shows_the_proyects_list()
    {
        factory(Proyecto::class)->create([
            'Nombre' => 'Proyecto 1'
        ]);
        factory(Proyecto::class)->create([
            'Nombre' => 'Proyecto 2',
        ]);
        $this->get('/proyectos')
            ->assertStatus(200)
            ->assertSee('Proyectos')
            ->assertSee('Proyecto 1')
            ->assertSee('Proyecto 2');
    }
    /** @test */
    function it_shows_a_default_message_if_the_proyects_list_is_empty()
    {
        $this->get('/proyectos')
            ->assertStatus(200)
            ->assertSee('No hay proyectos registrados.');
    }

    /** @test */
    function it_displays_the_proyects_details()
    {
      $proyect = factory(Proyecto::class)->create([
        'Nombre'=> 'Proyecto 1'
      ]);
        $this->get('/proyectos/'.$proyect->id)
            ->assertStatus(200)
            ->assertSee('Proyecto 1');
    }

    /** @test */
    function it_displays_a_404_error_if_the_proyect_is_not_found()
    {
        $this->get('/proyectos/999')
            ->assertStatus(404)
            ->assertSee('Página no encontrada');
    }

    /** @test */
    function it_loads_the_new_proyects_page()
    {
        $this->get('/proyectos/nuevo')
            ->assertStatus(200)
            ->assertSee('Crear nuevo proyecto');
    }
    /** @test */
    function it_creates_a_new_proyect()
    {
      $this->withoutExceptionHandling();

      $this->post('/proyectos/',[
        'Nombre'=>'Proyecto_1',
        'Descripción'=>'Desarrolo de test 1'
      ])->assertRedirect(route('proyectos.index'));

      $this->assertDatabaseHas('proyectos',[
        'Nombre'=>'Proyecto_1',
        'Descripción'=>'Desarrolo de test 1'
      ]);
    }

    /**@test*/
    function the_name_is_required()
    {
      $this->post('/proyectos/',[
        'Nombre'=>'Proyecto_1',
        'Descripción'=>'Desarrolo de test 1'
      ])->assertRedirect(route('proyectos.index'))
      ->assertSessionHasErrors(['Nombre']);

      $this->assertDatabaseMissing('proyectos',[
        'Descripción'=>'desarrolo de test 1',
      ]);
    }
}
