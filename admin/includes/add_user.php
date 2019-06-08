<?php
if (isset($_POST['create_user'])) {
    $user_firstname = $_POST['user_firstname'];
    $user_lastname = $_POST['user_lastname'];
    $user_name = $_POST['user_name'];
    $user_password = $_POST['user_password'];
    $user_email = $_POST['user_email'];
    $user_role = $_POST['user_role'];

    // move_uploaded_file($post_image_temp, "../images/$post_image");

    $query = "INSERT INTO users ( user_firstname,user_lastname ,user_name,user_password,user_email,user_role) ";

    $query .= "VALUES( '{$user_firstname}','{$user_lastname}','{$user_name}','{$user_password}', '{$user_email}','{$user_role}' )";

    $create_user_query = mysqli_query($conn, $query);

    confirm_query($create_user_query);
}
?>

<form action="" method="post" enctype="multipart/form-data">

<div class="form-group">
    <labal for="title">First Name</labal>
    <input type="text" class="form-control" name="user_firstname">
</div>

<div class="form-group">
    <labal for="title">Last Name</labal>
    <input type="text" class="form-control" name="user_lastname">
</div>

<div class="form-group">
   <select name="user_role" id="">
    <option value="subscriber">Select Option</option>
    <option value="admin">admin</option>
    <option value="subscriber">subscriber</option>
   </select>
</div>
<!-- <div class="form-group">
    <labal for="post_image">Post Image</labal>
    <input type="file" name="image">
</div> -->

<div class="form-group">
    <labal for="post_tags">User Name</labal>
    <input type="text" class="form-control" name="user_name">
</div>

<div class="form-group">
    <labal for="post_content">Password</labal>
   <input type="password"class="form-control" name="user_password">
</div>

<div class="form-group">
    <labal for="post_content">Email</labal>
   <input type="email" class="form-control" name="user_email">
</div>

<div class="form-group">
    <input type="submit" class="btn btn-primary" name="create_user" value="add user">
</div>

</form>
