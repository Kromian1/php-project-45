<?php

namespace BrainGames\Calc;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\runRounds;

const DESCRIPTION = 'What is the result of the expression?';
const ROUNDS = 3;

function brainCalcGame(): void
{
    $rounds = [];
    for ($i = 0; $i < ROUNDS; $i++) {
        $operator = ['+', '-', '*'];
        $operator = $operator[array_rand($operator)];
        $argument1 = random_int(1, 100);
        $argument2 = random_int(1, 100);
        $question = "{$argument1} {$operator} {$argument2}";
        switch ($operator) {
            case '+':
                $correctAnswer = $argument1 + $argument2;
                break;
            case '-':
                $correctAnswer = $argument1 - $argument2;
                break;
            case '*':
                $correctAnswer = $argument1 * $argument2;
                break;
            default:
                exit;
        }
        $rounds[] = [$question, $correctAnswer];
    }
    runRounds(DESCRIPTION, $rounds);
}
