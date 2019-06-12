<?php session_start();?>
<?php include "database/db.php";?>
<?php
if (isset($_POST['login'])) {
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];
    $user_name = mysqli_real_escape_string($conn, $user_name);
    $password = mysqli_real_escape_string($conn, $password);
    $query = "SELECT * FROM users WHERE user_name='{$user_name}' ";
    $select_user_query = mysqli_query($conn, $query);
    if (!$select_user_query) {
        die("QUERY FAILED " . mysqli_error($conn));
    }
    while ($row = mysqli_fetch_assoc(($select_user_query))) {
        $db_user_id = $row['user_id'];
        $db_user_name = $row['user_name'];
        $db_user_password = $row['user_password'];
        $db_user_first_name = $row['user_firstname'];
        $db_user_last_name = $row['user_lastname'];
        $db_user_role = $row['user_role'];
    }
    if ($user_name !== $db_user_name && $password !== $db_user_password) {
        header("Location:../index.php");
    } else if ($user_name == $db_user_name && $password == $db_user_password) {
        $_SESSION['user_name'] = $db_user_name;
        $_SESSION['first_name'] = $db_user_first_name;
        $_SESSION['first_last'] = $db_user_last_name;
        $_SESSION['user_role'] = $db_user_role;
        header("Location:../admin");
    } else {
        header("Location:../index.php");
    }
}

// if ($user_name === $db_user_name && $password === $db_user_password) {
//     $_SESSION['user_name'] = $db_user_name;
//     $_SESSION['first_name'] = $db_user_first_name;
//     $_SESSION['first_last'] = $db_user_last_name;
//     $_SESSION['user_role'] = $db_user_role;
//     header("Location:../admin");
// } else {
//     header("Location:../index.php");
// }
