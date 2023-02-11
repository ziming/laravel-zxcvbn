<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Validator;
use Ziming\LaravelZxcvbn\Rules\ZxcvbnRule;
use ZxcvbnPhp\Zxcvbn;

it('fails with weak passwords', function () {
    $weakPassword = Arr::random(['zxcvbn', 'qwerty', '12345678']);

    $validator = Validator::make(['password' => $weakPassword], [
        'password' => ['required', new ZxcvbnRule]
    ]);

    expect($validator->fails())->toBeTrue();
});
