<?php

namespace BrainGames\Calc;

use function BrainGames\Engine\runRounds;

const DESCRIPTION = 'What is the result of the expression?';
const ROUNDS = 3;

function runCalc(): void
{
    $rounds = [];
    for ($i = 0; $i < ROUNDS; $i++) {
        $operator = ['+', '-', '*'];
        $operator = $operator[array_rand($operator)];
        $operand1 = random_int(1, 100);
        $operand2 = random_int(1, 100);
        $question = "{$operand1} {$operator} {$operand2}";
        $correctAnswer = calculate($operator, $operand1, $operand2);
        $rounds[] = [$question, $correctAnswer];
    }
    runRounds(DESCRIPTION, $rounds);
}

function calculate(string $operator, int $operand1, int $operand2): int
{
    return match ($operator) {
        '+' => $operand1 + $operand2,
        '-' => $operand1 - $operand2,
        '*' => $operand1 * $operand2,
        default => throw new \Exception("The operator {$operator} is undefined\n")
    };
}
