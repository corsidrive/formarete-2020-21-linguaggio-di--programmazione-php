<?php

/**
 * Imperativo
 * 
 * @var string $searchText testo da cercare nella chiave "taskName"
 * @var array  $taskList elenco delle task dove cercare
 * @return array  $result un nuovo array con  il risultato della ricerca
 */
function searchText(string $searchText, array $taskList):array
{

    $result = [];
    foreach ($taskList as $taskItem) {
        if(strpos($taskItem['taskName'], $searchText) !== false )
        {
              $result[] = $taskItem;   
        }
    }
    return $result;
} 
