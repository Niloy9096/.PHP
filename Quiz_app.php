<?php

$questions = [
    ['question' => 'What is 2+2?', 'correct' => '4'],
    ['question' => 'What is the capital of France?', 'correct' => 'Paris'],
    ['question' => 'When did Bangladesh gain independence?', 'correct' => '1971'],
    ['question' => 'What is the national flower of Bangladesh?', 'correct' => 'Water Lily'],
    ['question' => 'Who is the real GOAT of football', 'correct' => 'Cristiano Ronaldo'],
    
];

$answers = [];

foreach($questions as $index => $question){

    echo ($index+1) . "." . $question['question'] . "\n";
    $answers[] =trim(readline("Your Answer: "));

}



function evaluateQuiz(array $questions, array $answers):int{

    $score = 0;

    foreach($questions as $index => $question){

        if($answers[$index] == $question['correct']){

            $score++;

        }

    }
    return $score;

}



$score = evaluateQuiz($questions, $answers);

echo "\n You scored $score out of " . count($questions) . "\n";

if($score == count($questions)){

    echo "Excellent Job Man! \n";
}elseif ($score > 1) {
    echo "Very Good effort!\n";
} else {
    echo "Opps! Better luck next time!\n";
}