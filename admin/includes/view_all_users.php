                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>User Name</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                    <th>Admin</th>
                                    <th>Subscriber</th>
                                </tr>
                            </thead>
                            <tbody>

<?php
$query = "SELECT * FROM users";
$select_users = mysqli_query($conn, $query);
confirm_query($select_users);
while ($row = mysqli_fetch_assoc($select_users)) {

    $user_id = $row['user_id'];
    $user_name = $row['user_name'];
    $user_password = $row['user_password'];
    $user_firstname = $row['user_firstname'];
    $user_lastname = $row['user_lastname'];
    $user_email = $row['user_email'];
    $user_image = $row['user_image'];
    $user_role = $row['user_role'];

    echo "<tr>";
    echo "<td>$user_id</td>";
    echo "<td>$user_name</td>";
    echo "<td>$user_firstname</td>";

    echo "<td>$user_lastname </td>";
    echo "<td>$user_email </td>";
    echo "<td>$user_role </td>";

    // $query = "SELECT * FROM users WHERE user_id =  $user_id";
    // $select_post_id_query = mysqli_query($conn, $query);
    // while ($row = mysqli_fetch_assoc($select_post_id_query)) {
    //     $post_id = $row['post_id'];
    //     $post_title = $row['post_title'];
    //     echo "<td><a href='../post.php?p_id=$post_id'>$post_title</a></td>";
    // }

    // echo "<td><a href='comments.php?approve='>Approve</a></td>";

    echo "<td><a href='users.php?source=edit_user&p_id={$user_id}'>Edit</a></td>";
    echo "<td><a href='users.php?delete=$user_id'>DELETE</a></td>";

    echo "<td><a href='users.php?change_to_admin={$user_id}'>Admin</a></td>";
    echo "<td><a href='users.php?change_to_sub={$user_id}'>Subscriber</a></td>";

    echo "</tr>";
}
?>
                            </tbody>
                        </table>

<?php

// User Edit
if (isset($_GET['change_to_admin'])) {
    $the_user_id = $_GET['change_to_admin'];
    $query = "UPDATE users SET user_role = 'admin' WHERE user_id = $the_user_id  ";
    $change_to_admin_query = mysqli_query($conn, $query);
    confirm_query($change_to_admin_query);
    header("Location: users.php");
}
// Comment Approve
if (isset($_GET['change_to_sub'])) {

    $the_user_id = $_GET['change_to_sub'];
    $query = "UPDATE users SET user_role = 'subscriber' WHERE user_id = $the_user_id  ";
    $change_to_subscriber_query = mysqli_query($conn, $query);
    confirm_query($change_to_subscriber_query);
    header("Location: users.php");

}

// User Delete
if (isset($_GET['delete'])) {
    $the_user_id = $_GET['delete'];
    $query = "DELETE FROM users WHERE user_id = {$the_user_id}";
    $delete_user_query = mysqli_query($conn, $query);
    confirm_query($delete_user_query);
    header("Location: users.php");
}

?>
