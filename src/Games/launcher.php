<?php

namespace BrainGames\launcher;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\welcomeUser;
use function BrainGames\brainCalc\brainCalcGame;
use function BrainGames\brainEven\brainEvenGame;
use function BrainGames\brainGcd\brainGcdGame;
use function BrainGames\brainPrime\brainPrimeGame;
use function BrainGames\brainProgression\brainProgressionGame;

/*function isInteractive(): bool
{
    // Проверяем, подключен ли STDIN к терминалу
    if (function_exists('posix_isatty')) {
        return posix_isatty(STDIN);
    }
    // Для Windows или если posix недоступен
    if (function_exists('stream_isatty')) {
        return stream_isatty(STDIN);
    }
    // Если ничего не доступно, предполагаем интерактивный режим
    return true;
}
*/
function startGames(): void
{
    line("Greetings, stranger!
The following games are currently available:
    1. Brain Even;
    2. Brain Calc;
    3. Brain GCD;
    4. Brain Prime;
    5. Brain Progression.");
        // Для тестов - если скрипт запущен неинтерактивно, просто завершаемся
/*    // if (!isInteractive()) {
        line("Running in non-interactive mode. Goodbye!");
        return;
    }*/
    $numberOfGame = prompt('Choose the number of the game you would like to play');
    switch ($numberOfGame) {
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
}
