 <form action="" method="post">
    <div class="form-group">
        <label for="cat-title">Update Category </label>

<?php // receive the name of cat_title

if (isset($_GET['edit'])) {
    $cat_id = $_GET['edit'];
    $query = "SELECT * FROM categories WHERE cat_id = $cat_id  ";
    $select_categories_id = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($select_categories_id)) {
        $cat_id = $row['cat_id'];
        $cat_title = $row['cat_title'];
        ?>
 <input class="form-control" type="text" name="cat_title" value="<?php if (isset($cat_title)) {
            echo $cat_title;
        }?>">

 <?php }}?>

<?php
//////////// Updata QUERY
if (isset($_POST['update_category'])) {
    $the_cat_title = $_POST['cat_title'];
    $query = "UPDATE categories SET cat_title='{$the_cat_title}' WHERE cat_id=$cat_id";
    $update_cat = mysqli_query($conn, $query);
    if (!$update_cat) {
        die("QUERY FAILED " . mysqli_error($conn));
    }
}
;
?>
    </div>
        <div class="form-groub">
        <input class = "btn btn-primary" type="submit" name="update_category" value ="Update Category ">
    </div>
</form>