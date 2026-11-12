<?php

use App\Models\User;

beforeEach(function () {
    $this->markTestSkipped('Accounts are disabled on the public site.');
});

test('confirm password screen can be rendered', function () {
    $user = User::factory()->create();

    $response = $this->actingAs($user)->get(route('password.confirm'));

    $response->assertOk();
});
