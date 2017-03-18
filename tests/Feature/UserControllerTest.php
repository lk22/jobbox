<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserControllerTest extends TestCase
{
    /**
     * @test
     */
    public function all() {
        $this->get(route('api.users.all'))->assertStatus(200);

        $this->json('GET', route('api.users.all'))->assertJsonStructure([
            '*' => [
                'firstname',
                'middlename',
                'lastname',
                'email',
                'avatar',
                'is_admin',
                'has_active_email',
                'dream_job_title'
            ]
        ]);
    }
}
