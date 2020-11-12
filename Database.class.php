<?php
    
    /**
     * Class conexão
     */
    class Connection
    {
       public $connect;

       public function __construct()
       {
           $this->connect = new PDO("mysql:host=localhost;dbname=contact", "root", '');
           $this->connect->prepare("SET NAMES utf8");   
       }
       
    }