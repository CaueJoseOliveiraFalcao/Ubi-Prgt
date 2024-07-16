<?php
namespace tests\Permission;

use App\Models\Permission;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Http\Kernel;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cache;
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
    public function test_user_has_permission_to_access_route()
    {
                /** @var User $user */
        $user = User::factory()->create();
        $user->givePermissionTo('admin');
        $this->actingAs($user);

        $response = $this->get('/test-route'); // Certifique-se de que 'admin' está correto aqui
        $response->assertStatus(200);
    }
    public function test_cache(){

        
            /** @var User $user */
            $user = User::factory()->createOne();

            Permission::query()->create(['permission' => 'edit-articles']);
                 $fromCache = Cache::get('permissions');
                 dump($fromCache);
                $this->assertCount(1 , $fromCache);
    }
    public function test_user_register(){
                    /** @var User $user */
                    $user = User::factory()->createOne();
                    $this->assertNotNull($user);

                    $this->assertDatabaseHas('users' , [
                        'id' => $user->id,
                        'email' => $user->email,
                    ]);
    }
    }

