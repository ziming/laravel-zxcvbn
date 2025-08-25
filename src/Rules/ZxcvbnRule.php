<?php

namespace Ziming\LaravelZxcvbn\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use ZxcvbnPhp\Zxcvbn;

readonly class ZxcvbnRule implements ValidationRule
{
    private Zxcvbn $zxcvbn;
    private int $minZxcvbnScore;

    public function __construct(private array $userInputs = [], int $minZxcvbnScore = -1)
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
    public function validate(string $attribute, #[\SensitiveParameter] mixed $value, Closure $fail): void
    {
        if ($this->zxcvbn->passwordStrength($value, $this->userInputs)['score'] < $this->minZxcvbnScore) {
            $fail(__('The :attribute must be stronger.'));
        }
    }
}
