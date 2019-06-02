<?php

if (isset($_GET['p_id'])) {
    $the_post_id = $_GET['p_id'];
}

$query = "SELECT * FROM posts WHERE post_id = $the_post_id";
$select_posts_by_id = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($select_posts_by_id)) {
    $post_id = $row['post_id'];
    $post_author = $row['post_author'];
    $post_title = $row['post_title'];
    $post_category_id = $row['post_category_id'];
    $post_status = $row['post_status'];
    $post_image = $row['post_image'];
    $post_tags = $row['post_tags'];
    $post_comments_count = $row['post_comment_count'];
    $post_date = $row['post_date'];
    $post_content = $row['post_content'];
}

if (isset($_POST['update_post'])) {
    $post_author = $_POST['post_author'];
    $post_title = $_POST['post_title'];
    $post_category_id = $_POST['post_category'];
    $post_status = $_POST['post_status'];
    $post_image = $_FILES['image']['name'];
    $post_image_temp = $_FILES['image']['name'];
    $post_content = $_POST['post_content'];
    $post_tags = $_POST['post_tags'];

    move_uploaded_file($post_image_temp, "../images/$post_image");

    $query = "UPDATE posts SET post_author = '$post_author', post_title = '$post_title' ,post_category_id = '$post_category_id',
    post_status = '$post_status' , post_image = '$post_image' , post_tags = '$post_tags',
    post_comment_count = $post_comments_count , post_date = now() , post_content = '$post_content' WHERE post_id=$the_post_id";

    // $edit_post = mysqli_query($conn, $query);
    // confirm_query($edit_post);
}

?>


<form action="" method="post" enctype="multipart/form-data">

<div class="form-group">
    <labal for="title">Post Title</labal>
    <input  type="text" class="form-control" name="post_title" value="<?php echo $post_title ?>">
</div>


<div class="form-group">
    <select name="post_category" id="">
    <?php
$query = "SELECT * FROM categories";
$select_categories = mysqli_query($conn, $query);
confirm_query($select_categories);
while ($row = mysqli_fetch_assoc($select_categories)) {
    $cat_id = $row['cat_id'];
    $cat_title = $row['cat_title'];
    echo "<option value='{$cat_id}'>{$cat_title}</option>";
}
?>
    </select>
</div>

<div class="form-group">
    <labal for="title">Post author</labal>
    <input type="text" class="form-control" name="post_author" value="<?php echo $post_author ?>">
</div>

<div class="form-group">
    <labal for="post_status">Post Status</labal>
    <input type="text" class="form-control" name="post_status" value="<?php echo $post_status ?>">
</div>

<div class="form-group">
    <img width="100px" src="../images/<?php echo $post_image; ?>" alt="image" name = "post_image">
</div>

<div class="form-group">
    <labal for="post_tags">Post Tags</labal>
    <input type="text" class="form-control" name="post_tags" value="<?php echo $post_tags ?>">
</div>

<div class="form-group">
    <labal for="post_content">Post Content</labal>
    <textarea class="form-control" name="post_content" id="" cols="30" rows="10" ><?php echo $post_content ?></textarea>
</div>

<div class="form-group">
    <input type="submit" class="btn btn-primary" name="update_post" value="Public Post">
</div>

</form>
