<?php

namespace BrainGames\Gcd;

use function BrainGames\Engine\runRounds;

const DESCRIPTION = 'Find the greatest common divisor of given numbers.';
const ROUNDS = 3;

function runGcd(): void
{
    $rounds = [];
    for ($i = 0; $i < ROUNDS; $i++) {
        $num1 = random_int(1, 100);
        $num2 = random_int(1, 100);
        $question = "{$num1} {$num2}";
        $correctAnswer = getGCD($num1, $num2);
        $rounds[] = [$question, $correctAnswer];
    }
    runRounds(DESCRIPTION, $rounds);
}

function getGCD(int $num1, int $num2): int
{
    while ($num2 !== 0) {
        $tempArg = $num1;
        $num1 = $num2;
        $num2 = $tempArg % $num2;
    }
    return $num1;
}
