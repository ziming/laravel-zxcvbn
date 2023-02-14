<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Ziming\LaravelZxcvbn\Rules\ZxcvbnRule;

it('fails with weak passwords', function () {
    $weakPassword = Arr::random(['zxcvbn', 'qwerty', '12345678']);

    $validator = Validator::make(['password' => $weakPassword], [
        'password' => ['required', new ZxcvbnRule([], 4)],
    ]);

    expect($validator->fails())->toBeTrue();
});

it('passes with strong passwords', function () {
    $strongPassword = Str::password();

    $validator = Validator::make(['password' => $strongPassword], [
        'password' => ['required', new ZxcvbnRule([], 4)],
    ]);

    expect($validator->passes())->toBeTrue();
});
