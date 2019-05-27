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
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Title</th>
                                    <th>Author</th>
                                    <th>Category</th>
                                    <th>Status</th>
                                    <th>Image</th>
                                    <th>Tags</th>
                                    <th>Comments</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
<?php
$query = "SELECT * FROM posts";
$select_posts = mysqli_query($conn, $query);
while ($row = mysqli_fetch_assoc($select_posts)) {
    $post_id = $row['post_id'];
    $post_author = $row['post_author'];
    $post_title = $row['post_title'];
    $post_category_id = $row['post_category_id'];
    $post_status = $row['post_status'];
    $post_image = $row['post_image'];
    $post_tags = $row['post_tags'];
    $post_comments_count = $row['post_comment_count'];
    $post_date = $row['post_date'];

    echo "<tr>";
    echo "<td>$post_id</td>";
    echo "<td>$post_author</td>";
    echo "<td>$post_title</td>";
    echo "<td>$post_category_id</td>";
    echo "<td>$post_status</td>";
    echo "<td> <img width='100px' src='../images/$post_image' alt ='image_NOT_FOUND'> </td>";
    echo "<td>$post_tags</td>";
    echo "<td>$post_comments_count</td>";
    echo "<td>$post_date</td>";
    echo "</tr>";
}
?>
<!--
                                    <td>1</td>
                                    <td>karim mostafa</td>
                                    <td>Bootstrab Framwork</td>
                                    <td>Bootstrab</td>
                                     <td>Status</td>
                                    <td>Image</td>
                                    <td>Tags</td>
                                    <td>Comments</td>
                                    <td>Date</td> -->

                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    <?php include "includes/components/admin_footer.php"?>
