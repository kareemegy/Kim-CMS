<?php include "includes/components/admin_header.php"?>

    <div id="wrapper">
<?php
if ($conn) {
    echo "hello from db";
}
;
?>
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
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    <?php include "includes/components/admin_footer.php"?>
