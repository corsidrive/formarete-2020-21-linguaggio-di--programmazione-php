<?php
require './vendor/testTools/testTool.php';
require './class/Task.php';

$dataset = [
    ['2021-03-29','2021-03-30', true, 'task scaduta ieri'],
    ['2021-03-30','2021-03-30', false, 'task di oggi'],
    ['2021-03-31','2021-03-30', false,'task che scade domani'],
    ['1969-12-31','1970-01-01', true, 'task scaduta ieri'],
    ['1970-01-01','1970-01-01', false, 'task di oggi'],
    ['1970-01-02','1970-01-01', false,'task che scade domani'],
];

foreach ($dataset as $testCase) {

    // list equivale a 
    // $inputDate = $testCase[0];  
    // $expected = $testCase[1];  
    // $description = $testCase[2];  
    
    list($inputDate, $today, $expected, $description) = $testCase;
   
    $task = new Task();
    $task->taskName = 'ciccio';
    $task->expirationDate =  $inputDate;
    $task->status = 'done';     

    assertEquals($expected, $task->isExpired($today), $description);
}



