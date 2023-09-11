<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Todo List</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="register.php">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Log In</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="register-area">
    <div class="container">
        <div class="main">
            <div id="login">
                <h2>Register Form</h2>
                <hr/>
                <form action="" method="POST" name="RegistrationForm">
                <label class="general">Name*:</label>
                <input type="text" name="name" id="name" placeholder="Enter your name:"> <br><br>
                <label class="general">Contact Number*:</label>
                <input type="number" name="phone" id="phone" required="required" placeholder="+880.........."> <br><br>
                <label class="general">Email:</label>
                <input type="email" name="email" id="email" required="required" placeholder="Enter your Email here:"> <br><br>
                <label class="general">Date of Birth:</label>
                <input type="date" name="dob" id="dob" required="required"> <br><br>
                <label class="general">Address:</label>
                <textarea name="address" id="address" required="required"></textarea> <br><br>
                <label class="general">Password:</label>
                <input type="password" name="password" id="password"required="required" placeholder="************"> <br><br>
                <label class="general">Confirm Password:</label>
                <input type="password" name="c_password" id="c_password" required="required" placeholder="************"> <br><br>
                <input type="submit" value="Save" name="submit">
            </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>