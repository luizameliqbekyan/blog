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
        <label for="fulname">Fulname</label>
        <input type="text" id="fulname" >
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
    <h2 style="align-self: center;">Contact information</h2>
        <div>
        <label for="adress">Adress</label>
        <input type="textarea" id="adress" >
        </div>
        <div>
        <label for="phone">Phone</label>
        <input type="text" id="phone" >
        </div>
         <div>
        <label for="email">Email</label>
        <input type="email" id="email" >
        </div>
    <h2 style="align-self: center;">Education information</h2>
        <label for="profession">Profession</label>
         <select name="prof" id="profession" >
            <option value="">Programmer</option>
            <option value="">Data enginer</option>
            <option value="">Teacher</option>
            <option value="">Singer</option>
            <option value="">Poet</option>
         </select>
         <label for="course">Course</label>
         <select id="course">
            <option value="">1</option>
            <option value="">2</option>
            <option value="">3</option>
            <option value="">4</option>
         </select>
          <div>
        <label for="grade">Grade</label>
        <input type="number" id="grade" >
        </div>
        <input type="submit">
        <input type="reset">
    </form>


</body>
</html>