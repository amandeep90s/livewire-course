<?php

namespace Tests\Feature\Livewire;

use App\Livewire\CreatePosts;
use App\Models\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class CreatePostsTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(CreatePosts::class)
            ->assertStatus(200);
    }

    /** @test */
    public function can_create_new_post()
    {
        $post = Post::whereTitle('Some title')->first();

        $this->assertNull($post);

        Livewire::test(CreatePosts::class)->set('title', 'Some title')->set('content', 'Some content')->call('save');

        $post = Post::whereTitle('Some title')->first();

        $this->assertNotNull($post);
        $this->assertEquals('Some title', $post->title);
        $this->assertEquals('Some content', $post->content);
    }

    /** @test */
    public function title_is_required()
    {
        Livewire::test(CreatePosts::class)
            ->set('title', '')
            ->set('content', '')
            ->call('save')
            ->assertHasErrors(['title' => 'required']);
    }
}
