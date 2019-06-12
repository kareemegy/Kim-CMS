<?php
// READ A USER BY ID
if (isset($_GET['p_id'])) {
    $the_user_id = $_GET['p_id'];
}

$query = "SELECT * FROM users WHERE user_id = $the_user_id";
$select_user_by_id = mysqli_query($conn, $query);
confirm_query($select_user_by_id);
while ($row = mysqli_fetch_assoc($select_user_by_id)) {
    $user_firstname = $row['user_firstname'];
    $user_lastname = $row['user_lastname'];
    $user_name = $row['user_name'];
    $user_password = $row['user_password'];
    $user_email = $row['user_email'];
    $user_role = $row['user_role'];

}

// Update the user
if (isset($_POST['update_user'])) {
    $user_firstname = $_POST['user_firstname'];
    $user_lastname = $_POST['user_lastname'];
    $user_name = $_POST['user_name'];
    $user_password = $_POST['user_password'];
    $user_email = $_POST['user_email'];
    // $user_role = $_POST['user_role'];

    $query = "UPDATE users SET user_firstname = '$user_firstname', user_lastname = '$user_lastname' ,user_name = '$user_name',
    user_password = '$user_password' , user_email = '$user_email'  WHERE user_id = $the_user_id "; // , user_role = '$user_role'

    $edit_post = mysqli_query($conn, $query);
    confirm_query($edit_post);
}
?>


<form action="" method="post" enctype="multipart/form-data">

<div class="form-group">
    <labal for="title"> user_firstname </labal>
    <input type="text" class="form-control" name="user_firstname" value = "<?php echo $user_firstname ?>">
</div>

<div class="form-group">
    <labal for="title">user_lastname  </labal>
    <input type="text" class="form-control" name="user_lastname" value = "<?php echo $user_lastname ?>">
</div>

<!-- select admin or subscriber -->

<!-- <div class="form-group">
   <select name="user_role" id="">
    <option value=' <?php echo $user_role ?> '> <?php echo $user_role ?></option> -->

<?php
// if ($user_role == 'admin') {
//     echo "<option value='admin'> admin </option>";
// } else {
//     echo "<option value='subscriber'> subscriber </option>";
// }
?>

   <!-- </select>
</div> -->
<!-- <div class="form-group">
    <labal for="post_image">Post Image</labal>
    <input type="file" name="image">
</div> -->

<div class="form-group">
    <labal for="post_tags"> user_name </labal>
    <input type="text" class="form-control" name="user_name" value = "<?php echo $user_name ?>">
</div>

<div class="form-group">
    <labal for="post_content"> user_password </labal>
   <input type="password"class="form-control" name="user_password" value = '<?php echo $user_password ?>'>
</div>

<div class="form-group">
    <labal for="post_content"> user_email </labal>
   <input type="email" class="form-control" name="user_email" value = '<?php echo $user_email ?>'>
</div>

<div class="form-group">
    <input type="submit" class="btn btn-primary" name="update_user" value="Update User">
</div>

</form>
