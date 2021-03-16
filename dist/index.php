<?php

    include_once "../config/add.php";
    include_once "../config/data.php";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO Application</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h2>TodoList <span>Application</span></h2>

        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
            <input type="text" name="todo">
            <input type="submit" value="Submit" name="submit">
        </form>
    </header>

    <div class="container">



    <?php
          $data = todoList();
          
          

          foreach($data as $datum):
              ?>

        <div class="todo">
            <label for="todo">
                <input type="checkbox" name="check" >
                 <p><?php echo $datum['todo']?></p>
            </label>
            <a href="../config/delete.php?id=<?php echo $datum['id']?>"> X </a>
        </div>

          <?php endforeach;?>
     


        
    </div>


    <footer>
        <p>Copyright &copy; 2021</p>
    </footer>

    <script src="main.js"></script>
</body>
</html>