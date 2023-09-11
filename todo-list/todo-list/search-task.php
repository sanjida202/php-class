<?php 
   session_start();
   include("./connection.php");

   if(isset($_POST["submit"])){
      $startDate = $_POST['startDate'];
      $endDate = $_POST['endDate'];
      $status = $_GET['status'];
      if($status==1){
         $check_search_tasks = $conn->query("SELECT * FROM tasks WHERE completion_date BETWEEN '".$startDate."' AND '".$endDate."' AND status=1 ORDER BY id DESC");
         $_SESSION['search_tasks'] = $check_search_tasks->fetch_all(MYSQLI_ASSOC);
         header("Location: complete-tasks.php");
      }else{
         $check_search_tasks = $conn->query("SELECT * FROM tasks WHERE due_date BETWEEN '".$startDate."' AND '".$endDate."' AND status=0 ORDER BY id DESC");
         $_SESSION['search_tasks'] = $check_search_tasks->fetch_all(MYSQLI_ASSOC);
         header("Location: pending-tasks.php");
      }
      
      
   }



