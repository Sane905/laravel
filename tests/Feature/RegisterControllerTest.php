<?php

namespace Tests\Feature;

use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseTransactions; // 追加
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RegisterControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $user = factory(User::class)->create(); // 変更(ファクトリでユーザーデータを作成)

        $response = $this
            ->actingAs($user) // 変更(ファクトリで作ったユーザーデータでログイン中状態を作る)
            ->get(route('home'));

        $response->assertStatus(200)
            ->assertViewIs('home');
    }
}
