<?php

namespace Ziming\LaravelZxcvbn\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use ZxcvbnPhp\Zxcvbn;

class ZxcvbnRule implements ValidationRule
{
    private readonly Zxcvbn $zxcvbn;
    private readonly int $minZxcvbnScore;

    public function __construct(private readonly array $userInputs = [], int $minZxcvbnScore = -1)
    {
        $this->zxcvbn = new Zxcvbn();
        $this->minZxcvbnScore = ($minZxcvbnScore > -1) ? $minZxcvbnScore : config('zxcvbn.min_score');
    }

    /**
     * Run the validation rule.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @param  \Closure  $fail
     * @return void
     */
    public function validate(string $attribute,#[\SensitiveParameter] mixed $value, Closure $fail): void
    {
        if ($this->zxcvbn->passwordStrength($value, $this->userInputs)['score'] < $this->minZxcvbnScore) {
            $fail('The :attribute must be stronger.');
        }
    }
}
