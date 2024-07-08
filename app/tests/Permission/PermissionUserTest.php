<?php
namespace tests\Permission;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckPermission;
class PermissionUserTest extends TestCase
{

    public function testGivePermissionTest(): void
    {
        /** @var User $user */
        $user = User::factory()->createOne();

        $user->givePermissionTo('admin');

        $this->assertTrue($user->hasPermissionTo('admin'));

        $this->assertDatabaseHas('permissions' , [
            'permission' => 'admin',
        ]);
        
    }

    }

