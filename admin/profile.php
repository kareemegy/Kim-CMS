<?php include "includes/components/admin_header.php"?>
<?php
if (isset($_SESSION['user_name'])) {

    $user_name = $_SESSION['user_name'];
    $query = "SELECT * FROM users WHERE user_name = '{$user_name}' ";
    $select_user_profile_query = mysqli_query($conn, $query);
    confirm_query($select_user_profile_query);

    while ($row = mysqli_fetch_array($select_user_profile_query)) {
        $user_id = $row['user_id'];
        $user_name = $row['user_name'];
        $user_password = $row['user_password'];
        $user_firstname = $row['user_firstname'];
        $user_lastname = $row['user_lastname'];
        $user_email = $row['user_email'];
        $user_role = $row['user_role'];
    }
}
?>

<?php

if (isset($_POST['update_profile'])) {
    $user_firstname = $_POST['user_firstname'];
    $user_lastname = $_POST['user_lastname'];
    $user_name = $_POST['user_name'];
    $user_password = $_POST['user_password'];
    $user_email = $_POST['user_email'];

    $query = "UPDATE users SET user_firstname = '$user_firstname', user_lastname = '$user_lastname' ,user_name = '$user_name',
    user_password = '$user_password' , user_email = '$user_email'  WHERE user_name = '{$user_name}'";

    $edit_post = mysqli_query($conn, $query);
    confirm_query($edit_post);
}

?>
    <div id="wrapper">
        <!-- Navigation -->
       <?php include "includes/components/admin_navigation.php"?>
        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome to admin
                            <small>author</small>
                        </h1>


<form action="" method="post" enctype="multipart/form-data">

<div class="form-group">
    <labal for="title"> user_firstname </labal>
    <input type="text" class="form-control" name="user_firstname" value = "<?php echo $user_firstname ?>">
</div>

<div class="form-group">
    <labal for="title">user_lastname  </labal>
    <input type="text" class="form-control" name="user_lastname" value = "<?php echo $user_lastname ?>">
</div>


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
    <input type="submit" class="btn btn-primary" name="update_profile" value="Update Profile">
</div>

</form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    <?php include "includes/components/admin_footer.php"?>
