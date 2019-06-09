<!-- <form action="" method="post" enctype="multipart/form-data">
<div class="form-group">
    <labal for="title">first name</labal>
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
    <select name="user_category" id="">
    <?php
$query = "SELECT * FROM users";
$select_users = mysqli_query($conn, $query);
confirm_query($select_users);
while ($row = mysqli_fetch_assoc($select_users)) {
    $user_id = $row['user_id'];
    $user_role = $row['user_role'];
    echo "<option value='{$user_id}'>{$user_role}</option>";
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
    <input type="file" name="image">
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

</form> -->