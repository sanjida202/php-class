<?php
 include("./connection.php");

 if(isset($_POST["submit"])){
    $id =(int) $_GET["id"];
    $description = $_POST["description"];
    $due_date = $_POST["due_date"];
    $status = $_POST["status"];

    // echo gettype($id) ;
    if($status == 1){
        $sql = "UPDATE tasks SET description='".$description."',due_date='".$due_date."',completion_date=now(), status=1 WHERE id=$id";
    }else{
        $sql = "UPDATE tasks SET description='".$description."',due_date='".$due_date."', status=0 WHERE id=$id";
    }
    
    
    if ($conn->query($sql) === TRUE) {
        $_SESSION['message'] = "Task updated successfully";
        header("Location: pending-tasks.php");
    } else {
        echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
    }
    $conn->close();
  
 }