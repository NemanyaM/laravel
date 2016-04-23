<?php

use App\Post;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class BlogTest extends TestCase
{

    use DatabaseTransactions;

    /** @test */
    public function it_shows_a_form()
    {
        $this->visit('/')
            ->see('New Post:');
    }

    /** @test */
    public function it_shows_existing_posts()
    {
        $post = factory(Post::class)->create();

        $this->visit('/')
            ->see('mytitle');
    }

    /** @test */
    public function it_can_create_posts()
    {
        $this->visit('/')
            ->type('My first post', 'title')
            ->type('My first post body', 'body')
            ->press('Create')
            ->seePageIs('/')
            ->see('My first post')
            ->see('My first post body');
    }

    /** @test */
    public function it_doesnt_show_posts_header_if_we_dont_have_any_posts()
    {
        $this->visit('/')
            ->dontSee('Posts:');

        $post = factory(Post::class)->create();

        $this->visit('/')
            ->see('Posts:');
    }

    /** @test */
    public function it_can_edit_posts()
    {
        $post = factory(Post::class)->create();

        $this->visit('/posts/' . $post->id . '/edit')
            ->type('My first edited post', 'title')
            ->type('My first edited post body', 'body')
            ->press('Save')
            ->seePageIs('/')
            ->see('My first edited post')
            ->see('My first edited post body');

    }

    public function it_throws_404_if_the_id_is_non_numerical()
    {
        $this->expectException('Symfony\Component\HttpKernel\Exception\NotFoundHttpException');
        $this->visit('/posts/asd/edit');
    }

    /** @test */
    public function it_can_delete_posts()
    {
        $post = factory(Post::class)->create();

        $this->visit('/')
            ->press('Delete')
            ->seePageIs('/')
            ->dontSee('mytitle')
            ->dontSee('mybody');

    }
}
