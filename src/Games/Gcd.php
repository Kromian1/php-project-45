<?php

namespace BrainGames\Gcd;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\runRounds;

const DESCRIPTION = 'Find the greatest common divisor of given numbers.';
const ROUNDS = 3;

function brainGcdGame(): void
{
    $rounds = [];
    for ($i = 0; $i < ROUNDS; $i++) {
        $argument1 = random_int(1, 100);
        $argument2 = random_int(1, 100);
        $question = "{$argument1} {$argument2}";
        while ($argument2 !== 0) {
            $tempArg = $argument1;
            $argument1 = $argument2;
            $argument2 = $tempArg % $argument2;
        }
        $correctAnswer = $argument1;
        $rounds[] = [$question, $correctAnswer];
    }
    runRounds(DESCRIPTION, $rounds);
}
