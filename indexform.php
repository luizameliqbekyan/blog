<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM</title>
    <link rel="stylesheet" href="styleform.css">
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>
<body >
   
    <form action="form-submit.php" method="post"> 
    <h2 style="align-self: center;">Personal information</h2>
        <div>
        <label for="name">Name</label>
        <input type="text" id="name" name="name">
        </div>
        <div>
        <label for="surname">Surname</label>
        <input type="text" id="surname" name="surname">
        </div>
          <div>
        <label for="email">Email</label>
        <input type="email" id="email" name="email">
        </div>
        <div>
        <label for="password">Password</label>
        <input type="text" id="password" name="password">
        </div>
         <div>
        <label for="password2">Repeat password</label>
        <input type="text" id="password2" name="password2">
        </div>
         <label for="username">Username</label>
        <input type="text" id="username" name="username">
        </div>
        <div>
        <label for="date">Birth Date</label>
        <input type="date" id="date" name="date">
        </div>
        <div>
        <label for="gender">Gender</label>
         <select name="gender" id="gender">
            <option value="">Female</option>
            <option value="">Male</option>
            <option value="">Other</option>
         </select>
        </div>
        <div>
        <label for="adress">Adress</label>
        <input type="textarea" id="adress" name="address">
        </div>
        <div>
        <label for="phone">Phone</label>
        <input type="text" id="phone" name="phone">
        </div>
        <input type="submit">
        <input type="reset">
    </form>


</body>
</html>