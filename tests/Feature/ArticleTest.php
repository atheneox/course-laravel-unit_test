<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Models\Article;

class ArticleTest extends TestCase
{

    public function test_create_article()
    {

        $test_article = [
            'name' => 'My test post with comment',
            'description' => 'This is a test functional post'
        ];


        $response = $this->post('/api/articles', $test_article);

        $response
            ->assertStatus(200)
            ->assertJson([
                'msg' => 'article saved successfully',
            ]);

    }

}
