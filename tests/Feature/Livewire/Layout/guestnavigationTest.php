<?php

use Livewire\Volt\Volt;

it('can render', function () {
    $component = Volt::test('layout\guest-navigation');

    $component->assertSee('');
});
