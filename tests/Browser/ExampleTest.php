<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use App\User;

class ExampleTest extends DuskTestCase
{
    use DatabaseMigrations;
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Laravel');
        });
    }

    public function testSendMessage() {
        $user1 = factory(User::class)->create([
            'name' => 'John Doe'
        ]);
        $user2 = factory(User::class)->create([
            'name' => 'Jane Doe'
        ]);

        $this->browse(function ($first, $second) use ($user1, $user2) {
            $first->loginAs($user1)
                  ->visit('/chat')
                  ->waitFor('.chat-composer');

            $second->loginAs($user2)
                   ->visit('/chat')
                   ->waitFor('.chat-composer')
                   ->type('#message', 'Hey John')
                   ->press('Send');

            $first->waitForText('Hey John')
                  ->assertSee('Jane Doe');
        });
    }
}
