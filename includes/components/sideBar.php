 <div class="col-md-4">

          <!-- Blog Search Well -->
          <div class="well">
            <h4>Blog Search</h4>
            <form action="search.php" method="post">
            <div class="input-group">
              <input name = "search" type="text" class="form-control" />
              <span class="input-group-btn">
                <button name = "submit" class="btn btn-default" type="submit">
                  <span class="glyphicon glyphicon-search"></span>
                </button>
              </span>
            </div>
            </form> <!--Search form  -->
            <!-- /.input-group -->
          </div>
          <!-- Blog Categories Well -->
          <div class="well">

<?php
$query = "SELECT * FROM categories ";
$select_categories_sideBar = mysqli_query($conn, $query);
?>
          <h4>Blog Categories</h4>
          <div class="row">
            <div class="col-lg-12">

              <ul class="list-unstyled">
<?php
while ($row = mysqli_fetch_assoc($select_categories_sideBar)) {
    $cat_title = $row['cat_title'];
    echo "<li id = 'js'><a href='#'>{$cat_title}</a></li>";
}

?>

              </ul>
            </div>

            </div>
            <!-- /.row -->
          </div>

          <!-- Side Widget Well -->
         <?php include "widget.php";?>
        </div>
        <script src="js/test.js"></script>
      </div>