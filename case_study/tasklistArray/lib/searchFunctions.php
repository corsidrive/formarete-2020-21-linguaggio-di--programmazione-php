<?php
/**
 * Funzione di ordine superiore funzione che restituisce una funzione
 * Programmazione Funzionale - dichiarativo 
 */
function searchText($searchText) {
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


