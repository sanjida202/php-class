<?php
   session_start();
   include("./connection.php");

   if(isset($_GET['id'])){
      $id = $_GET["id"];
      $date = date('Y-m-d H:i:s');
      $sql = "UPDATE tasks SET completion_date=now(), status=1 WHERE id=$id";
      
      if ($conn->query($sql) === TRUE) {
         $_SESSION['message'] = "Task completed successfully.";
         header("Location: complete-tasks.php");
      } else {
         echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
      }
      $conn->close();
   }