<?php

require_once "db.php";



 function todoList(){

           $pdo = Database();


           $sql = "SELECT * FROM todolist ORDER BY created_at DESC";


             $stmt =  $pdo->prepare($sql);
             
             
             if($stmt->execute()){

                   return $stmt->fetchAll(PDO::FETCH_ASSOC);
             }


 }