<?php include "includes/components/admin_header.php"?>
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
                            <small>Author</small>
                        </h1>
<?php
if (isset($_GET['source'])) {
    $source = $_GET['source'];

} else {
    $source = '';
}
switch ($source) {
    case 'add_post':
        include "includes/add_post.php";
        break;

    case 'edit_post':
        include "includes/post_edit.php";
        break;

    default:include "includes/view_all_comments.php";
        break;
}
?>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    <?php include "includes/components/admin_footer.php"?>
