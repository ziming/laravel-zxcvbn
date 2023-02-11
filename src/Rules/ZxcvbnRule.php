<?php

namespace Ziming\LaravelZxcvbn\Rules;

use Illuminate\Contracts\Validation\InvokableRule;
use ZxcvbnPhp\Zxcvbn;

class ZxcvbnRule implements InvokableRule
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
    public function __invoke($attribute, mixed $value, $fail): void
    {
        if ($this->zxcvbn->passwordStrength($value, $this->userInputs)['score'] < $this->minZxcvbnScore) {
            $fail('The :attribute must be stronger.');
        }
    }
}
