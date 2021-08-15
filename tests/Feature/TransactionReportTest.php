<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TransactionReportTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {

        
        $response = $this->get('/');
        $response->assertStatus(200);
    }


    public function createTransaction(){

        $response->assertSessionHas('status', 'Comment has been created sucessfully'); //ok

    }


    public function getTransactions(){

        $response->assertSessionHas('status', 'Comment has been founded'); //ok

    }


    public function updateTransaction(){

        $response->assertSessionHas('status', 'Comment has been updated sucessfully');

    }
}
