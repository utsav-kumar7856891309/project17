<?php
function validatePassword($password) {
    if (strlen($password) < 8) {
        return "Password must be at least 8 characters long.";
    }
    if (!preg_match('/[A-Z]/', $password)) {
        return "Password must contain at least one uppercase letter.";
    }
    if (!preg_match('/[a-z]/', $password)) {
        return "Password must contain at least one lowercase letter.";
    }
    if (!preg_match('/[0-9]/', $password)) {
        return "Password must contain at least one number.";
    }
    if (!preg_match('/[\@\#\$\%\&\*\!]/', $password)) {
        return "Password must contain at least one special character (@, #, $, %, &, *, !, etc.).";
    }

    return "Password is valid!";
}

$password = "Test@123";
echo validatePassword($password);
?>
