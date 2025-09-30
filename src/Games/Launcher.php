<?php

namespace BrainGames\Launcher;

use function cli\line;
use function cli\prompt;
use function BrainGames\Calc\brainCalcGame;
use function BrainGames\Even\brainEvenGame;
use function BrainGames\Gcd\brainGcdGame;
use function BrainGames\Prime\brainPrimeGame;
use function BrainGames\Progression\brainProgressionGame;

function startGames(): void
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
                brainEvenGame();
                break;
            case '2':
                line('You choose Brain Calc.');
                brainCalcGame();
                break;
            case '3':
                line('You choose Brain GCD.');
                brainGcdGame();
                break;
            case '4':
                line('You choose Brain Prime.');
                brainPrimeGame();
                break;
            case '5':
                line('You choose Brain Progression.');
                brainProgressionGame();
                break;
            default:
                line("Unknown game number. Goodbye!");
                break;
        }
        line("\n");
    }
}
