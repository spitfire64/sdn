<?php

test('returns a successful response', function () {
    $response = $this->get(route('home'));

    $response
        ->assertOk()
        ->assertSee('Solid Digital Nordic AB')
        ->assertSee('hej@solid-digital.se')
        ->assertSee('createfood.online');
});
