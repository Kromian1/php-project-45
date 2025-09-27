<?php

namespace BrainGames\Cli;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\welcomeUser;
use function BrainGames\brainCalc\brainCalcGame;
use function BrainGames\brainEven\brainEvenGame;
use function BrainGames\brainGcd\brainGcdGame;
use function BrainGames\brainPrime\brainPrimeGame;
use function BrainGames\brainProgression\brainProgressionGame;

function startGames()
{
    $name = welcomeUser();
    line("The following games are currently available:
    1. Brain Even;
    2. Brain Calc;
    3. Brain GCD;
    4. Brain Prime;
    5. Brain Progression.");
    $numberOfGame = prompt('Choose the number of the game you would like to play');
    switch ($numberOfGame) {
        case '1':
            line('You choose Brain Even.');
            brainEvenGame($name);
            break;
        case '2':
            line('You choose Brain Calc.');
            brainCalcGame($name);
            break;
        case '3':
            line('You choose Brain GCD.');
            brainGcdGame($name);
            break;
        case '4':
            line('You choose Brain Prime.');
            brainPrimeGame($name);
            break;
        case '5':
            line('You choose Brain Progression.');
            brainProgressionGame($name);
            break;
        default:
            line("Unknown game number. Goodbye!");
            exit(0);
    }
}
