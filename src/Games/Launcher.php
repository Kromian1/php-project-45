<?php

namespace BrainGames\Launcher;

use function cli\line;
use function cli\prompt;
use function BrainGames\Calc\runCalc;
use function BrainGames\Even\runEven;
use function BrainGames\Gcd\runGcd;
use function BrainGames\Prime\runPrime;
use function BrainGames\Progression\runProgression;

function runLauncher(): void
{
    line('Greetings, stranger!');
    while (true) {
        line("The following games are currently available:
    1. Brain Even;
    2. Brain Calc;
    3. Brain GCD;
    4. Brain Prime;
    5. Brain Progression.
    0. Exit.");

        $numberOfGame = prompt('Choose the number of the game you would like to play');
        switch ($numberOfGame) {
            case '0':
                line('Goodbye!');
                exit(0);
            case '1':
                line('You choose Brain Even.');
                runEven();
                break;
            case '2':
                line('You choose Brain Calc.');
                runCalc();
                break;
            case '3':
                line('You choose Brain GCD.');
                runGcd();
                break;
            case '4':
                line('You choose Brain Prime.');
                runPrime();
                break;
            case '5':
                line('You choose Brain Progression.');
                runProgression();
                break;
            default:
                line("Unknown game number. Choose another game!");
                break;
        }
        line("\n");
    }
}
