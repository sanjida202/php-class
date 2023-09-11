<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form action="registration.php" method="post">
        <div>
            <label for="field1" class="form-group">
                <span>Task Description:<span class="required">*</span></span>
                <textarea name="field1" class="textarea-field"></textarea>
            </label>
        </div>
        <div>
            <label for="field1" class="form-group">
                <span>Completion Date:<span class="required">*</span></span>
                <input type="number" class="input-field" name="contact_number" value="" />
            </label>
        </div>
        <div>
        <div class="form-btn">
            <input type="submit" value="Save" class="btn btn-success" name="submit">
        </div>
        </form>
</html>