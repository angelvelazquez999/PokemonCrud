<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ExampleTest extends DuskTestCase
{
    
    public function testBasicExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000')
                ->assertSee('Laracasts')
                ->pause(200)
                ->clickLink('Log in')
                ->pause(200)
                ->waitForLocation('/login')
                ->assertPathIs('/login')
                ->assertSee('Email')
                ->pause(200)
                ->type('email', 'admin@admin.com')
                ->pause(200)
                ->type('password', '12345678')
                ->pause(200)
                ->press('LOG IN') 
                ->pause(200)
                ->waitForLocation('/dashboard')
                ->assertPathIs('/dashboard')
                ->assertSee('Dashboard')
                ->pause(200)
                ->clickLink('Students')
                ->pause(200)
                ->waitForLocation('/students')
                ->assertPathIs('/students')
                ->assertSee('Students List')
                ->pause(200)
                ->clickLink('Create')
                ->pause(200)
                ->waitForLocation('/students/create')
                ->assertPathIs('/students/create')
                ->assertSee('Create Student')
                ->pause(200)
                ->type('name', 'prueba ejemplo')
                ->pause(200)
                ->type('age', '80')
                ->pause(200)
                ->press('Save')
                ->pause(200)
                ->waitForLocation('/students')
                ->assertPathIs('/students')
                ->assertSee('prueba ejemplo')
                ->pause(200)
                ->clickLink('Edit')
                ->pause(200)
                ->assertSee('Edit Student')
                ->pause(200)
                ->type('name', 'prueba edit')
                ->pause(200)
                ->type('age', '85')
                ->pause(200)
                ->press('Save')
                ->pause(200)
                ->waitForLocation('/students')
                ->assertPathIs('/students')
                ->assertSee('Students List')
                ->pause(200)
                ->press('Delete')
                ->pause(200)
                ->press('OK')
                ->pause(200)
                ->press('admin')
                ->pause(200)
                ->clickLink('Log Out');
        });
    }
}
