<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="task.css">
    <title>Pending Task</title>
</head>
<body>
    <div class="container">
      <?php
      if(isset($_GET['msg'])){
        $msg = $_GET['msg'];

      }
      ?>
      <div class="row">
        <div class="row-mb-3">
      <label for="">
        Form Date: <input type="text">
        To Date: <input type="text">
        <a href="#" class="btn btn-success mb-2">Search</a>
       </label>
       </div>
       </div> 
<table class="table table-hover text-center">
  <thead class="table-secondary">
    <tr>
      <th scope="col"></th>
      <th scope="col">Task Description</th>
      <th scope="col">Due Date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <!-- <?php
    include "db_conn.php";

    $sql = "SELECT * FROM `crud`";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
      ?> -->
    <tr>
      <td><?php echo $row[''] ?></td>
      <td><?php echo $row['task_description'] ?></td>
      <td><?php echo $row['due_date'] ?></td>
      <td>
        <a href="edit.php?id=<?php echo $row['id']?>" class="dark-link"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
        <a href="delete.php?id=<?php echo $row['id']?>" class="dark-link" style="background-color: brown;"><i class="fa-solid fa-trash fs-5"></i></a>
      </td>
    </tr>
    <?php
    }
?>
  </tbody>
</table>

  
    </div>
</body>
</html>