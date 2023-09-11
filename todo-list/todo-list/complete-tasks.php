<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <title>Todo List</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Todo List</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
               <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <?php if(isset($_SESSION['username'])):?>
                <li class="nav-item">
                   <a class="nav-link" href="complete-tasks.php">Complete Tasks</a>
               </li>
               <li class="nav-item">
                   <a class="nav-link" href="pending-tasks.php">Pending Tasks</a>
               </li>
               <li class="nav-item">
                   <a class="nav-link" href="add-task.php">Add Task</a>
               </li>
               <li class="nav-item">
                   <a class="nav-link" href="logout.php">Logout</a>
               </li>
            <?php else: ?>
                <li class="nav-item">
                   <a class="nav-link" href="register.php">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                </li>
           <?php endif ?>
            
        </ul>
        </div>
    </div>
</nav>
<div class="register-area">  
    <div class="container"> 
        <div id="main">
            <div id="login">
                <h2>Complete Tasks</h2>
                <hr/>
                <?php if(isset($_SESSION['message'])){ ?>
                       <span> <?php echo $_SESSION['message'];?></span>
                  <?php 
                       unset($_SESSION['message']);
                     }
                ?>
                <form method="post" action="./search-task.php?status=1" name="searchForm" class="d-flex">
                    <input name="startDate" id="startDate" type="text" placeholder="From Date:"
                    onfocus="(this.type='date')" class="me-2" required="required">
                    <input name="endDate" id="endDate" class="me-2" type="text" placeholder="To Date:"
                    onfocus="(this.type='date')" required="required">
                    <button class="btn btn-outline-success" type="submit" name="submit">Search</button>
                </form>
                
                <br><br>
                <?php if(isset($_SESSION["search_tasks"])):?>
                    <h2>Search Results:</h2>
                <?php unset($_SESSION['search_tasks']); endif ?>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Task Description</th>
                            <th scope="col">Due Date</th>
                            <th scope="col">Completion Date</th>
                        </tr>
                    </thead>
                    <tbody>
                       <?php if(!isset($_SESSION["search_tasks"])): require("./complete-tasks_script.php") ?>
                       <?php endif?>
                       <?php if(isset($_SESSION["search_tasks"])): 
                           foreach($_SESSION["search_tasks"] as $key=>$tasks):?>
                            <tr>
                                <th scope='row'><?php echo $key+1 ?></th>
                                <td><?php echo $tasks["description"] ?></td>
                                <td><?php echo date("d/m/Y",strtotime($tasks["due_date"])) ?>
                                <td><?php echo date("d/m/Y",strtotime($tasks["completion_date"])) ?>
                            </tr>
                           <?php endforeach ?>
                           <?php endif ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div> 
</div>
<div class="footer-area">
   <div class="container">
       <div class="col-md-12">
          <div class="footer">
             <p>Footer</p>
          </div>
       </div>
   </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>