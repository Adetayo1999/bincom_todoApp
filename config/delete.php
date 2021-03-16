<?php

      $id =  $_GET['id'];

             if(!isset($id)){
                    header("Location:../dist/index.php");
             }
             


             require_once "db.php";
             
           
                      $pdo = Database();

                      $sql = "DELETE FROM todolist WHERE id = :id";

                      $stmt = $pdo->prepare($sql);

                         if($stmt->execute(['id'=> $GLOBALS['id']])){
                            header("Location:../dist/index.php");
                         }


         

          

              



?>