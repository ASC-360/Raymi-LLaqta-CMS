<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PublicationRouteTest extends TestCase
{
    use RefreshDatabase;

    public function test_admin_can_access_create_publication_route(): void
    {
        $admin = User::factory()->create([
            'role' => 'admin',
        ]);

        $this->actingAs($admin)
            ->get('/publicaciones/crear')
            ->assertOk();
    }
}
