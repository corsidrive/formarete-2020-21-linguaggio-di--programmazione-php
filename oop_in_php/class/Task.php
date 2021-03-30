<?php

class Task {
    
    public $id;
    public $taskName;
    public $status;
    public $expirationDate;

    public function isExpired($expiration):bool
    {
        // istanza della classe DateTime
        $expiration = new DateTime($expiration);
        $task = new DateTime($this->expirationDate); 
        
        // non è oggi
        if($expiration->format('Ymd') === $task->format('Ymd')){
            return false;
        }
        
        return $expiration->getTimestamp() > $task->getTimestamp(); 
    }

    public function getExpirationDate()
    {
        return $this->expirationDate;
    }
}