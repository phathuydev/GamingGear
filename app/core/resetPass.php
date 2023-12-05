<?php
session_start();
//Đổi mật khẩu user
if (isset($_POST['resetpass'])) {
    $email = $_POST['email'];
    $resetpass_HashSecret = "OQJSUFBVHCYDJFOEJFGSLOWGYWBEYGB";
    $hashEmail = hash_hmac('sha256', $email, $resetpass_HashSecret);
    $emailforgot = $_SESSION['hashEmail'];
    if ($hashEmail !== $emailforgot) {
        $msgEmail = 'The imported email is not the same as the original email!';
    } else {
        $user_reset = $_SESSION['resetPass'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
        if (empty($password)) {
            $msgReset = 'Do not leave blank!';
        } elseif (empty($cpassword)) {
            $msgCpass = 'Do not leave blank!';
        } elseif ($password != $cpassword) {
            $notMatch = 'Re-entered password does not match, please re-enter!';
        } elseif (strlen($password) < 6) {
            $strlenPass = 'Password must contain at least 6 characters!';
        } else {
            $servername = "localhost";
            $username = "root";
            $password = "mysql";
            $dbname = "gg";
            try {
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $hashed_password = password_hash($_POST['password'], PASSWORD_DEFAULT);
                $user_id = $user_reset;
                $sql = "UPDATE users SET user_password = :hashed_password WHERE user_id = :user_id";

                $stmt = $conn->prepare($sql);
                $stmt->bindParam(':hashed_password', $hashed_password, PDO::PARAM_STR);
                $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);

                if ($stmt->execute()) {
                    unset($_SESSION['hashEmail']);
                    unset($_SESSION['resetPass']);
                    header('Location: http://gaminggear.vn/home');
                } else {
                    $err = 'An unknown error!';
                }
            } catch (PDOException $e) {
                echo '';
            }
            $conn = null;
        }
    }
}
