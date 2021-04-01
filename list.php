<?php
session_start();

if(!isset($_SESSION["user_id"])){
    echo "Please login to add task";
    ?>
    <a href="login.php">Login Now</a>
    <?php
    die();
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <?php
    include_once('db.php');
    $userId=$_SESSION["user_id"];
    $tasks = $mysqli->query("select * from tasks where user_id=$userId");
    ?>
    <div class="container">
    <h3>Welcome <?=$_SESSION["username"]?></h3>
    <a href="logout.php">Logout</a>
        <h3>Task list</h3>
        <a href="add.php" class="btn btn-info">Add Task</a>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Details</th>
                    <th>Status</th>
                    <th>Update</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($task = $tasks->fetch_object()) {

                ?>
                    <tr>
                        <td><?= $task->name ?></td>
                        <td><?= $task->details ?></td>
                        <td>
                            <?php
                            if ($task->status == 0) {
                            ?>
                                <span class="badge badge-warning">Pending</span>
                            <?php
                            } else if ($task->status == 1) {
                            ?>
                                <span class="badge badge-primary">Running</span>
                            <?php
                            } else {
                            ?>
                                <span class="badge badge-success">Completed</span>
                            <?php
                            }
                            ?>
                        </td>
                        <td>
                            <a class=" btn-sm btn btn-primary" href="update.php?id=<?= $task->id ?>&status=<?= $task->status ?>">Update</a>
                        </td>
                        <td>
                            <a class=" btn-sm btn btn-info" href="edit.php?id=<?= $task->id ?>">Edit</a>
                            <a class=" btn-sm btn btn-danger" href="delete.php?id=<?= $task->id ?>">Delete</a>
                        </td>

                    </tr>

                <?php
                }

                ?>
            </tbody>
        </table>
    </div>
</body>

</html>