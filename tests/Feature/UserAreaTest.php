<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserAreaTest extends TestCase
{
    use RefreshDatabase;

    public function test_legacy_user_area_urls_redirect_to_existing_pages(): void
    {
        $user = User::factory()->create(['role' => 'user']);

        $this->actingAs($user)->get('/user/dashboard')->assertRedirect('/dashboard');
        $this->actingAs($user)->get('/user/profile')->assertRedirect('/profile');
        $this->actingAs($user)->get('/user/settings')->assertRedirect('/profile');
    }

    public function test_user_area_requires_authentication(): void
    {
        $this->get('/user/dashboard')->assertRedirect('/login');
    }

    public function test_user_dashboard_and_profile_render(): void
    {
        $user = User::factory()->create(['role' => 'user']);

        $this->actingAs($user)->get('/dashboard')->assertOk()->assertSee($user->name);
        $this->actingAs($user)->get('/profile')->assertOk();
    }
}
