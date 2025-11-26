<?php
// session_start();
// $errors = [];
// $success = [];
// $_SESSION['error'] = array();

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $name = test_input($_POST["name"] ?? "");
//     $surname = test_input($_POST["surname"] ?? "");
//     $email = test_input($_POST["email"] ?? "");
//     $date = test_input($_POST["date"] ?? "");
//     $password = $_POST["password"] ?? "";
//     $password2 = $_POST["password2"] ?? "";
//     $phone = test_input($_POST["phone"] ?? "");
//     $gender = test_input($_POST["gender"] ?? "");
//     $address = test_input($_POST["address"] ?? "");

//     if (empty($name)) {
//         $_SESSION['error']['name'] = "Please enter name <br>";
//     } elseif (!preg_match("/^[a-zA-Z'-]+$/", $name)) {
//         $_SESSION['error']['name'] = "Name can only contain letters, apostrophes, and hyphens";
//     } else {
//         $success['name'] = "Name is valid";
//     }

//     if (empty($surname)) {
//         $_SESSION['error']['surname'] = "Please enter surname";
//     } elseif (!preg_match("/^[a-zA-Z'-]+$/", $surname)) {
//         $_SESSION['error']['surname'] = "Surname can only contain letters, apostrophes, and hyphens";
//     } else {
//         $success['surname'] = "Surname is valid";
//     }

//     if (empty($email)) {
//         $_SESSION['error']['email'] = "Please enter email";
//     } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//         $_SESSION['error']['email'] = "$email is not a valid email address";
//     } else {
//         $success['email'] = "$email is a valid email address";
//     }

//     if (empty($date)) {
//         $_SESSION['error']['date'] = "Please enter date";
//     } else {
//         try {
//             $dateOfBirth = new DateTime($date);
//             $now = new DateTime();
//             $interval = $now->diff($dateOfBirth);
//             $age = $interval->y;

//             if ($age < 18) {
//                 $_SESSION['error']['date'] = "You must be at least 18 years old (Current age: $age)";
//             } else {
//                 $success['date'] = "Age is valid ($age years old)";
//             }
//         } catch (Exception $e) {
//             $_SESSION['error']['date'] = "Invalid date format";
//         }
//     }

//     if (empty($phone)) {
//         $_SESSION['error']['phone'] = "Phone number is required";
//     } elseif (!preg_match('/^\+374 \d{2} \d{3} \d{3}$/', $phone)) {
//         $_SESSION['error']['phone'] = "Invalid phone number format. Use: +374 XX XXX XXX";
//     } else {
//         $success['phone'] = "Valid phone number";
//     }

//     if (empty($password)) {
//         $_SESSION['error']['password'] = "Password is required";
//     }

//     if (empty($password2)) {
//         $_SESSION['error']['password2'] = "Please repeat the password";
//     } elseif ($password !== $password2) {
//         $_SESSION['error']['password2'] = "Passwords do not match";
//     } else {
//         $success['password2'] = "Passwords match";
//     }

//     if (empty($_SESSION['error'])) {
//         $_SESSION['success'] = 'Registered successfully!';
//         header("Location: indexform.php");
//         exit();
//     }

//     header("Location: indexform.php");
//     exit();
// }

// function test_input($data) {
//     $data = trim($data);
//     $data = stripslashes($data);
//     $data = htmlspecialchars($data);
//     return $data;
// }
var_dump($_POST);
var_dump($_FILES);
?>
