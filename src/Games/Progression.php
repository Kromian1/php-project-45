<?php

namespace BrainGames\Progression;

use function BrainGames\Engine\runRounds;

const DESCRIPTION = 'What number is missing in the progression?';
const ROUNDS = 3;

function runProgression(): void
{
    $rounds = [];
    for ($i = 0; $i < ROUNDS; $i++) {
        $length = random_int(5, 10);
        $difference = random_int(1, 10);
        $firstNumber = random_int(1, 100);

        $progression = [];
        for ($j = 0; $j < $length; $j++) {
            $progression[] = $firstNumber + $j * $difference;
        }

        $hiddenNumber = random_int(0, $length - 1);
        $correctAnswer = $progression[$hiddenNumber];

        $hiddenProgression = $progression;
        $hiddenProgression[$hiddenNumber] = '..';
        $question = implode(' ', $hiddenProgression);

        $rounds[] = [$question, $correctAnswer];
    }
    runRounds(DESCRIPTION, $rounds);
}
