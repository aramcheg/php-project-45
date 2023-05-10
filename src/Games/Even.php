<?php

namespace BrainGames\Games\Even;
require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../../bin/brain-even';

use function cli\line;
use function cli\prompt;

function getEvenOdd(string $userName): void
{
    line('Answer "yes" if the number is even, otherwise answer "no".');

    $count = 0;
    while ($count < 3) {
        $randomNumber = rand(1, 100);
        $answer = prompt("Question $randomNumber");

        (int) $randomNumber % 2 === 0 ? $evenOdd = true : $evenOdd = false;

        if (($evenOdd && $answer === 'yes') || (!$evenOdd && $answer === 'no')) {
            line("Your answer: $answer");
            line('Correct!');
            $count++;
            continue;
        } elseif (($evenOdd && $answer === 'no') || (!$evenOdd && $answer === 'yes')) {
            $answer === 'no' ? $altAnswer = 'yes' : $altAnswer = 'no';
            line("$answer is wrong answer ;(. Correct answer was %s.", $altAnswer);
            line("Let's try again, $userName.");
            break;
        } else {
            line('Incorrect data!!');
            break;
        }
    }
    $count === 3 ? line("Congratulations, %s!", $userName) : false;
}
