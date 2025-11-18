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
   
    <form action=""> 
    <h2 style="align-self: center;">Personal information</h2>
        <div>
        <label for="name">Name</label>
        <input type="text" id="name" >
        </div>
        <div>
        <label for="surname">Surname</label>
        <input type="text" id="surname" >
        </div>
          <div>
        <label for="email">Email</label>
        <input type="email" id="email" >
        </div>
        <div>
        <label for="password">Password</label>
        <input type="text" id="password">
        </div>
         <div>
        <label for="password2">Repeat password</label>
        <input type="text" id="password2">
        </div>
        <div>
        <label for="date">Birth Date</label>
        <input type="date" id="date" >
        </div>
        <div>
        <label for="gender">Gender</label>
         <select name="Gender" id="gender">
            <option value="">Female</option>
            <option value="">Male</option>
            <option value="">Other</option>
         </select>
        </div>
        <div>
        <label for="age">Age</label>
        <input type="number" id="age" required>
        </div>
        <div>
        <label for="adress">Adress</label>
        <input type="textarea" id="adress" >
        </div>
        <div>
        <label for="phone">Phone</label>
        <input type="text" id="phone" >
        </div>
        <input type="submit">
        <input type="reset">
    </form>


</body>
</html>