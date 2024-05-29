<?php

namespace Tests\Browser;

use App\Models\User; 
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegisterTest extends DuskTestCase
{

    public function testExample(): void
    {
        

        $this->browse(function (Browser $browser) {
            $email = 'prueba@email.com';
            $password = '12345678';
            
            $browser->visit('http://127.0.0.1:8000')
            ->pause(1000)
            ->clickLink('Register')
            ->waitForLocation('/register')
            ->assertPathIs('/register')
            ->assertSee('Name')
            ->pause(1000)
            ->type('name', 'test')
            ->pause(1000)
            ->type('email', $email)
            ->pause(1000)
            ->type('password', $password)
            ->pause(1000)
            ->type('password_confirmation', $password)
            ->pause(1000)
            ->pause(1000)
            ->press('REGISTER') 
            ->pause(1000)
            ->waitForLocation('/dashboard')
            ->assertPathIs('/dashboard')
            ->assertSee('Dashboard')
            ->pause(1000)
            ->press('test')
            ->pause(600)
            ->clickLink('Log Out')
            ->waitForLocation('/')
            ->assertPathIs('/')
            ->assertSee('Laracasts');
            User::where('email', $email)->delete();
        });
    }
}
