<?php
   session_start();
   include("./connection.php");

   if(isset($_GET['id'])){
      $id = $_GET["id"];
      echo $id;
      $sql = "DELETE FROM tasks WHERE id=$id";
      
      if ($conn->query($sql) === TRUE) {
         $_SESSION['message'] = "Task deleted successfully.";
         header("Location: pending-tasks.php");
      } else {
         echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
      }
      $conn->close();
   }