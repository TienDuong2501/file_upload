<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BasicTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testHomeNotAuth()
    {
        $response = $this->get('/home');

        $response->assertStatus(302);
    }

    public function testHomeAuth()
    {
        $user = factory(User::class)->create();
        $response = $this->actingAs($user, 'api')
                        ->get('/home');
        $response->assertStatus(200);
    }

    public function testPostResetPasss()
    {
        $user = factory(User::class)->create();
        $response = $this->post('/password/reset', ['email' => $user->email]);
        $response->assertStatus(302);
    }
    public function testLogin()
    {
        $response = $this->get('/login');
        $response->assertStatus(200);
    }
    public function testLogout()
    {
        $response = $this->post('/logout');
        $response->assertStatus(302);
    }
    public function testRegister()
    {
        $response = $this->get('/register');
        $response->assertStatus(200);
    }
    public function testGetResetPasss()
    {
        $response = $this->get('/password/reset');
        $response->assertStatus(200);
    }
    public function testRegisterSuccess()
    {
        $response = $this->post('/register', [
            'name' => 'duong',
            'email' => 'duong@gmail.com',
            'password' => '123456',
            'password_confirmation' => '123456',
        ]);
        $response->assertStatus(302);
    }
    public function testExample()
    {
        $this->assertTrue(true);
    }

    public function testHomePage()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function testTrue()
    {
        $foo = true;
        $this->assertTrue($foo);
    }

    public function sluggify($string, $separator = '-', $maxLength = 96)
    {
        $title = iconv('UTF-8', 'ASCII//TRANSLIT//IGNORE', $string);
        $title = preg_replace('%[^-/+|\w ]%', '', $title);
        $title = strtolower(trim(substr($title, 0, $maxLength), '-'));
        $title = preg_replace('/[\/_|+ -]+/', $separator, $title);

        return $title;
    }
}
