<?php

class Task {
    
    public $id;
    public $taskName;
    public $status;
    public $expirationDate;

    public function isExpired($expirationString):bool
    {
        try {
            $expiration = new DateTime($expirationString);
            $task = new DateTime($this->expirationDate); 
         
            // non è oggi
            if($expiration->format('Ymd') === $task->format('Ymd')){
                return false;
            }
            
        } catch (\Throwable $th) {
            return $th;
        }
        return $expiration->getTimestamp() > $task->getTimestamp(); 
    }

    public function getExpirationDate()
    {
        return $this->expirationDate;
    }
}