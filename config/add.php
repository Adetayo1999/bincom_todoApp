<?php

      require_once "db.php";
        $msg = $msgClass = "";

      if(filter_has_var(INPUT_POST , 'submit')){
           
        $name = htmlspecialchars($_POST['todo']);


           if(!empty($name)){
               
          $pdo = Database();


          $sql = "INSERT INTO todolist(todo) VALUES(:todo)";


            $stmt = $pdo->prepare($sql);


            if($stmt->execute(['todo' => $name])){
                    $msg = "Todo Successfully Added";
                    $msgClass = "alert-success";
            }
            else{
                $msg = "Error In Submission";
                $msgClass = "alert-danger"; 
            }

           }







      }



?>