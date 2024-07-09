<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
class PermissionUserTest extends TestCase
{
    /**@test */
    public function givePermissionTest()
    {
        $user = User::factory()->create();

        $user->givePermissionTo('admin');

        $this->assertTrue($user->hasPermissionTo('admin'));

        $this->assertDatabaseHas('permissions' , [
            'permission' => 'admin',
        ]);

    }
}
