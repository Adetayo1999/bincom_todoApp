<?php


function Database(){
    
   try{
    $pdo = new PDO('mysql:host=localhost;', 'tomiwa' , 'panasonic99');


   }
   catch(PDOException $e){
          die("Error In Connection ".$e->getMessage());
   }


       $sql = "CREATE DATABASE IF NOT EXISTS todoapp";
        
       $stmt = $pdo->prepare($sql);


       if($stmt->execute()){
           
       $pdo = new PDO('mysql:host=localhost;dbname=todoapp', 'tomiwa' , 'panasonic99');

         
                 $sql = "CREATE TABLE IF NOT EXISTS todolist(
                      id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
                      todo VARCHAR(255) NOT NULL ,
                      created_at TIMESTAMP NOT NULL  DEFAULT CURRENT_TIMESTAMP() 
                 )";



                  $stmt = $pdo->prepare($sql);


                  if($stmt->execute()){
                        return $pdo;
                  }
       }
}


  






?>
