<?php

namespace BrainGames\brainEven;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\welcomeUser;
use function BrainGames\Engine\showDescriptionGame;
use function BrainGames\Engine\compareAnswers;

function brainEvenGame()
{
    $name = welcomeUser();
    showDescriptionGame();
    compareAnswers($name);
}
