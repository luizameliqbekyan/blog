<?php
session_start();
$errors = [];
$success = [];
$_SESSION['error'] = array();


$servername="localhost";
$usename="root";
$password="";

$conn=new mysqli($servername,$usename,$password);
if($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);

}  echo "Connected succesfully"."<br>";

$sql= "CREATE DATABASE IF NOT EXISTS shop_db";
if($conn->query($sql) === TRUE) {
    echo "Created succesfully"."<br>";
}
else {echo "Error creating database: "."<br>" . $conn->error;}

$conn=new mysqli($servername,$usename,$password, "shop_db");
if($conn->connect_error) {
    die("Connection 2 failed: " ."<br>". $con->connect_error);

}


$sqlUser = "CREATE TABLE IF NOT EXISTS user(
     namee VARCHAR(50) NOT NULL,
     surname VARCHAR(50) NOT NULL,
     email VARCHAR(100) NOT NULL,
     datee DATE ,
     passwordd VARCHAR(70),
     phone VARCHAR(50),
     gender VARCHAR(10),
     addres VARCHAR(50)
     )";
    
   

if($conn->query($sqlUser) === TRUE) {
    echo "Table created succesfully"."<br>";
}
else {echo "Error creating table: "."<br>" . $conn->error;}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["name"] ?? "");
    $surname = test_input($_POST["surname"] ?? "");
    $email = test_input($_POST["email"] ?? "");
    $date = test_input($_POST["date"] ?? "");
    $password = $_POST["password"] ?? "";
    $password2 = $_POST["password2"] ?? "";
    $phone = test_input($_POST["phone"] ?? "");
    $gender = test_input($_POST["gender"] ?? "");
    $address = test_input($_POST["address"] ?? "");


    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $hashedPassword2 = password_hash($password2, PASSWORD_DEFAULT);
    if (empty($name)) {
        $_SESSION['error']['name'] = "Please enter name <br>";
    } elseif (!preg_match("/^[a-zA-Z'-]+$/", $name)) {
        $_SESSION['error']['name'] = "Name can only contain letters, apostrophes, and hyphens";
    } else {
        $success['name'] = "Name is valid";
    }

    if (empty($surname)) {
        $_SESSION['error']['surname'] = "Please enter surname";
    } elseif (!preg_match("/^[a-zA-Z'-]+$/", $surname)) {
        $_SESSION['error']['surname'] = "Surname can only contain letters, apostrophes, and hyphens";
    } else {
        $success['surname'] = "Surname is valid";
    }

    if (empty($email)) {
        $_SESSION['error']['email'] = "Please enter email";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['error']['email'] = "$email is not a valid email address";
    } else {
        $success['email'] = "$email is a valid email address";
    }

    if (empty($date)) {
        $_SESSION['error']['date'] = "Please enter date";
    } else {
        try {
            $dateOfBirth = new DateTime($date);
            $now = new DateTime();
            $interval = $now->diff($dateOfBirth);
            $age = $interval->y;

            if ($age < 18) {
                $_SESSION['error']['date'] = "You must be at least 18 years old (Current age: $age)";
            } else {
                $success['date'] = "Age is valid ($age years old)";
            }
        } catch (Exception $e) {
            $_SESSION['error']['date'] = "Invalid date format";
        }
    }

    if (empty($phone)) {
        $_SESSION['error']['phone'] = "Phone number is required";
    } elseif (!preg_match('/^\+374 \d{2} \d{3} \d{3}$/', $phone)) {
        $_SESSION['error']['phone'] = "Invalid phone number format. Use: +374 XX XXX XXX";
    } else {
        $success['phone'] = "Valid phone number";
    }

    if (empty($password)) {
        $_SESSION['error']['password'] = "Password is required";
    }

    if (empty($password2)) {
        $_SESSION['error']['password2'] = "Please repeat the password";
    } elseif ($password !== $password2) {
        $_SESSION['error']['password2'] = "Passwords do not match";
    } else {
        $success['password2'] = "Passwords match";
    }

    if (empty($_SESSION['error'])) {
        $sqlInsert = "INSERT INTO user (namee,surname,email,datee,passwordd,phone,gender,addres)
                     VALUES ('".$_POST['name']."', '".$_POST['surname']."', '".$_POST['email']."',
                     '".$_POST['date']."','".$_POST['password']."','$hashedPassword','".$_POST['gender']."',
                     '".$_POST['address']."')";

        if($conn->query($sqlInsert) === TRUE) {
                   $_SESSION['success'] = 'Registered successfully!';

        }
        else {echo "Error saving user: "."<br>" . $conn->error;}
        header("Location: indexform.php");
        exit();
    }

    header("Location: indexform.php");
    exit();
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}




// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     $targetDir = __DIR__ . "/img/";
//     $fileName = basename($_FILES["photo"]["name"]);
//     $targetFile = $targetDir . $fileName;

//     $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
//     $maxSize = 5 * 1024 * 1024 * 1024;

//     if (!isset($_FILES["photo"]) || $_FILES["photo"]["error"] !== 0) {
//         echo "No file selected or there was an upload error.";
//         exit;
//     }
//     if (!in_array($_FILES["photo"]["type"], $allowedTypes)) {
//         echo "Only JPG, PNG, or GIF files are allowed.";
//         exit;
//     }
//       if ($_FILES["photo"]["size"] > $maxSize) {
//         echo "File is too large. Maximum size is 5GB.";
//         exit;
//     }
//     if (move_uploaded_file($_FILES["photo"]["tmp_name"], $targetFile)) {
//         echo "Image uploaded successfully!";
//         echo "<br>Saved in: blog/img/" . $fileName;
//     } else {
//         echo "Error uploading image.";
//     }
// }

?>
