<?php

class Task {
    
    public $id;
    public $taskName;
    public $status;
    public $expirationDate;

    public function isExpired(DateTime $expiration):bool
    {
        try {
            // $today = new DateTime(); //oggi
            // $expiration = new DateTime($expirationString);
            $task = new DateTime($this->expirationDate); 
         
            // non è oggi
            if($expiration->format('Ymd') === $task->format('Ymd')){
                return false;
            }
            return $expiration->getTimestamp() > $task->getTimestamp(); 
            
        } catch (\Throwable $th) {
            return $th;
        }
    }

    public function getExpirationDate()
    {
        return $this->expirationDate;
    }
}