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
                <span>Name:</span>
                <input type="text" class="input-field" name="name" value="" />
            </label>
        </div>
        <div>
            <label for="field1" class="form-group">
                <span>Phone Number:</span>
                <input type="number" class="input-field" name="phone_number" value="" />
            </label>
        </div>
        <div>
            <label for="field1" class="form-group">
                <span>IMEI:</span>
                <input type="number" class="input-field" name="imei" value="" />
            </label>
        </div>
        <div>
            <label for="field1" class="form-group">
                <span>Work Info:</span>
                <textarea name="field1" class="textarea-field"></textarea>
            </label>
        <div>
            <label for="field1" class="form-group">
                <span>Done/Reject:</span> <br>
                <input type="radio" class="input-field" name="d/r" id="d/r">Done
                <input type="radio" class="input-field" name="d/r" id="d/r">Reject
            </label>
        </div>
        <div>
            <label for="field1" class="form-group">
                <span>Date:</span>
                <input type="date" class="input-field" name="date_of_birth" value="" />
            </label>
        </div>
        </form>
    </div>
</body>
</html>