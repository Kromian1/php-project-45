<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

function runRounds(string $description, array $rounds): void
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);

    line($description);


    $countCorrectAnswer = 0;

    foreach ($rounds as [$question, $correctAnswer]) {
        line("Question: {$question}");
        $userAnswer = prompt('Your answer');
        if ($userAnswer !== (string)$correctAnswer) {
            line(
                "'%s' is wrong answer ;(. Correct answer was '%s'.\nLet's try again, %s!",
                $userAnswer,
                $correctAnswer,
                $name
            );
            return;
        } else {
            line('Correct!');
            $countCorrectAnswer++;
        }
    }


    if ($countCorrectAnswer === 3) {
        line("Congratulations, %s!", $name);
    }
}
