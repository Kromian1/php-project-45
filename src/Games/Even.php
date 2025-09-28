<?php

namespace BrainGames\Even;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\runRounds;

const DESCRIPTION = 'Answer "yes" if the number is even, otherwise answer "no".';
const ROUNDS = 3;

function brainEvenGame(): void
{
    $rounds = [];
    for ($i = 0; $i < ROUNDS; $i++) {
        $question = random_int(1, 100);
        $correctAnswer = $question % 2 === 0 ? 'yes' : 'no';
        $rounds[] = [$question, $correctAnswer];
    }
    runRounds(DESCRIPTION, $rounds);
}
