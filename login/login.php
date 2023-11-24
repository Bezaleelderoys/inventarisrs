<?php
include_once("../config/koneksi.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../src/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <title>RS Global</title>
</head>
<body>
    <div class="login">
        <div class="login-title">
            <h1><i class="bi bi-activity"></i> RS Global</h1>
        </div>
        <form method="post" action="login.php">
            <label>Username</label><br>
            <input type="text" name="username" required><br>
            <label>Password</label><br>
            <input type="password" name="password" required><br>
            <?php
            session_start();
            include_once("../config/koneksi.php");
            if (isset($_POST['submit'])){      
                if ($stmt = $koneksi->prepare('SELECT id, password FROM user WHERE username = ?')) {
                    // Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
                    $stmt->bind_param('s', $_POST['username']);
                    $stmt->execute();
                    // Store the result so we can check if the account exists in the database.
                    $stmt->store_result();
                    if ($stmt->num_rows > 0) {
                        $stmt->bind_result($id, $password);
                        $stmt->fetch();
                        // Account exists, now we verify the password.
                        // Note: remember to use password_hash in your registration file to store the hashed passwords.
                        if ($_POST['password'] === $password) {
                            // Verification success! User has logged-in!
                            // Create sessions, so we know the user is logged in, they basically act like cookies but remember the data on the server.
                            session_regenerate_id();
                            $_SESSION['loggedin'] = TRUE;
                            $_SESSION['name'] = $_POST['username'];
                            $_SESSION['id'] = $id;
                            header('Location: ../index.php');
                        } else {
                            echo "Password Salah";
                        }
                    } else {
                        echo "Username Tidak Ditemukan";
                    }
                
                    $stmt->close();
                }
            }
            ?>
            <input type="submit" value="Login" name="submit">
        </form>
    </div>
</body>
</html>