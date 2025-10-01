<?php

namespace BrainGames\Even;

use function BrainGames\Engine\runRounds;

const DESCRIPTION = 'Answer "yes" if the number is even, otherwise answer "no".';
const ROUNDS = 3;

function runEven(): void
{
    $rounds = [];
    for ($i = 0; $i < ROUNDS; $i++) {
        $question = random_int(1, 100);
        $correctAnswer = isEven($question) ? 'yes' : 'no';
        $rounds[] = [$question, $correctAnswer];
    }
    runRounds(DESCRIPTION, $rounds);
}

function isEven(int $question): bool
{
    return $question % 2 === 0;
}
