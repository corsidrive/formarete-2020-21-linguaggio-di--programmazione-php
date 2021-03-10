<?php
/**
 * Funzione di ordine superiore funzione che restituisce una funzione
 * Programmazione Funzionale - dichiarativo 
 */
function _searchText($searchText) {
    // "Latte" // "php"
    return function ($taskItem) use ($searchText) {
            
            // [0] => "prendere il latte" --> 12 != --> true
            // [1] => "fare benzina" --> false  --> false !== false
            // [2] => "latte per il viso" --> 0  !== falso ---> true
            $result = strpos($taskItem['taskName'] ,$searchText) !== false;
            return $result;
    };
    
    // return 10 ;
}

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
