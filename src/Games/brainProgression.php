<?php

namespace BrainGames\brainProgression;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\showDescriptionGame;
use function BrainGames\Engine\compareAnswers;
use function BrainGames\Engine\endOfGame;

function brainProgressionGame($name): void
{
    $game = 'progression';
    showDescriptionGame($game);
    $countCorrectAnswer = compareAnswers($game, $name);
    endOfGame($name, $countCorrectAnswer);
}
