<?php

namespace Ziming\LaravelZxcvbn\Rules;

use Illuminate\Contracts\Validation\Rule;
use ZxcvbnPhp\Zxcvbn;

class ZxcvbnRule implements Rule
{
    private readonly Zxcvbn $zxcvbn;
    private readonly int $minZxcvbnScore;

    public function __construct(private readonly array $userInputs = [])
    {
        $this->zxcvbn = new Zxcvbn();
        $this->minZxcvbnScore = config('zxcvbn.min_score');
    }

    public function passes($attribute, $value)
    {
        return $this->zxcvbn
                ->passwordStrength($value, $this->userInputs)['score'] >= $this->minZxcvbnScore;
    }

    public function message()
    {
        // add translations in the future
        return 'The :attribute must be stronger.';
    }
}
