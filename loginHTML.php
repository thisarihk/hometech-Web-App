<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="login_validation.php" method="GET">
        <fieldset>
            <legend>Login Information</legend>
            <br>
            <label>Username</label>
            <input type="text" name="username" id="username" />
            <br><br>
            <label>Password</label>
            <input type="text" name="password" id="password" />
            <br><br> 
            <button type="submit">Submit</button>
            <button type="reset">Reset</button>
            <br><br>
            <a href="login_validation.php?sample=this_is_sample_text">Click to load login validation</a>
            <!-- Can pass many variables using '&': <a href="login_validation.php?sample=this_is_sample_text&another_one"> -->
        </fieldset>
    </form>
    <?php 
    //Comment
    ?>
    
</body>
</html>