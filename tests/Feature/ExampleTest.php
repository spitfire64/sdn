<?php

test('returns a successful response', function () {
    $response = $this->get(route('home'));

    $response
        ->assertOk()
        ->assertSee('<title>Solid Digital Nordic AB</title>', false)
        ->assertDontSee('Laravel')
        ->assertSee('/images/sdn-favicon.png?v=3', false)
        ->assertDontSee('favicon.svg')
        ->assertSee('Snabb och kostnadseffektiv app-utveckling')
        ->assertDontSee('Snabbt och kostnadseffektivt.')
        ->assertSee('hej@solid-digital.se')
        ->assertSee('https://beta.createfood.online/sv')
        ->assertDontSee('https://createfood.online/welcome/lang/swedish')
        ->assertDontSee('/login')
        ->assertDontSee('/register')
        ->assertDontSee('/dashboard');
});

test('account routes are not available', function () {
    $this->get('/login')->assertNotFound();
    $this->get('/register')->assertNotFound();
    $this->get('/dashboard')->assertNotFound();
    $this->get('/forgot-password')->assertNotFound();
});
