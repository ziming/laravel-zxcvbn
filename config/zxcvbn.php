<?php

declare(strict_types=1);

return [
    // If you wish to override the default min score in the config,
    // you can do so by passing in a second argument to the ZxcvbnRule constructor.
    // e.g. new ZxcvbnRule([], 4)
    'min_score' => env('ZXCVBN_MIN_SCORE', 3),
];
