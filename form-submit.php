<?php
$errors = [];
$success = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["name"] ?? "");
    $surname = test_input($_POST["surname"] ?? "");
    $email = test_input($_POST["email"] ?? "");
    $date = test_input($_POST["date"] ?? "");
    $password = $_POST["password"] ?? ""; 
    $password2 = $_POST["password2"] ?? "";
    $phone = test_input($_POST["phone"] ?? "");
    $gender = test_input($_POST["gender"] ?? "");

    if (empty($name)) {
        $errors['name'] = "Name is required";
    } elseif (!preg_match("/^[a-zA-Z'-]+$/", $name)) {
        $errors['name'] = "Name can only contain letters, apostrophes, and hyphens";
    } else {
        $success['name'] = "Name is valid";
    }

    if (empty($surname)) {
        $errors['surname'] = "Surname is required";
    } elseif (!preg_match("/^[a-zA-Z'-]+$/", $surname)) {
        $errors['surname'] = "Surname can only contain letters, apostrophes, and hyphens";
    } else {
        $success['surname'] = "Surname is valid";
    }

    if (empty($email)) {
        $errors['email'] = "Email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "$email is not a valid email address";
    } else {
        $success['email'] = "$email is a valid email address";
    }

    if (empty($date)) {
        $errors['date'] = "Date of birth is required";
    } else {
        try {
            $dateOfBirth = new DateTime($date);
            $now = new DateTime();
            $interval = $now->diff($dateOfBirth);
            $age = $interval->y;

            if ($age < 18) {
                $errors['date'] = "You must be at least 18 years old (Current age: $age)";
            } else {
                $success['date'] = "Age is valid ($age years old)";
            }
        } catch (Exception $e) {
            $errors['date'] = "Invalid date format";
        }
    }

    if (empty($phone)) {
        $errors['phone'] = "Phone number is required";
    } elseif (!preg_match('/^\+374 \d{2} \d{3} \d{3}$/', $phone)) {
        $errors['phone'] = "Invalid phone number format. Use: +374 XX XXX XXX";
    } else {
        $success['phone'] = "Valid phone number";
    }

    if (empty($password)) {
        $errors['password'] = "Password is required";
    }

    if (empty($password2)) {
        $errors['password2'] = "Please repeat the password";
    } elseif ($password !== $password2) {
        $errors['password2'] = "Passwords do not match";
    } else {
        $success['password2'] = "Passwords match";
    }


    echo "<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Validation Results</title>
</head>
<body>
    <div class='container'>
        <h2>Form Validation Results</h2>";

    if (!empty($errors)) {
        echo "<h3>Errors Found:</h3>";
        foreach ($errors as $field => $error) {
            echo "<div class='error'><span class='label'>" . ucfirst($field) . ":</span> $error</div>";
        }
    }

    if (!empty($success)) {
        echo "<h3>Valid Fields:</h3>";
        foreach ($success as $field => $message) {
            echo "<div class='success'><span class='label'>" . ucfirst($field) . ":</span> $message</div>";
        }
    }

  
    if (empty($errors)) {
        echo "<p style='color: #155724; font-weight: bold; font-size: 18px;'>All validations passed! Form can be processed.</p>";
    } else {
        echo "<p style='color: #721c24; font-weight: bold;'> Please correct the errors above.</p>";
    }
    echo "</div>";

    echo "<a href='indexform.php' class='back-button'>← Back to Form</a>
    </div>
</body>
</html>";

} else {
    header("Location: indexform.php");
    exit();
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

