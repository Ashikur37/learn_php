<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Task</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<?php
    
    //db connection
        include_once("db.php");
        
    //if form is submitted
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $valid=true;
        //validating name
        if(!$_POST["name"]){
            $nameError="Please enter the task name";
             $valid=false;

        }
        //validating details
        if(!$_POST["details"]){
            $detailsError="Please enter the task details";
            $valid=false;

        }
        $id=$_POST["id"];

        $name=$_POST["name"];
        $details=$_POST["details"];
        //insert into database
        if($valid){
            /**
             * 0 for pending
             * 1 for running
             * 2 for complete
             */
            $sql="update tasks set name='$name',details='$details' where id=$id";
            $mysqli->query($sql);
            //redirect to list
            header('location:list.php');
        }




    }
    else{
        $id=$_GET["id"];
        $tasks=$mysqli->query("select * from tasks where id=$id");
        
        while($task=$tasks->fetch_object()){
            $name=$task->name;
            $details=$task->details;
        }
    }
?>
    <div class="container">
    <h4>Edit Task</h4>
        <form action="edit.php" method="post">
                <input type="hidden" name="id" value="<?=$id?>">
                <div class="form-group">
                    <label for="">Name</label>
                    <input value="<?=$name?>" type="text" class="form-control" name="name">
                    <span class="text text-danger">
                    <?=isset($nameError)?$nameError:''?>
                     </span>
                    
                </div>
                <div class="form-group">
                    <label for="">Details</label>
                    <textarea name="details" class="form-control" id="" cols="10" rows="5"><?=$details?></textarea>
                    <span class="text text-danger">
                    <?=isset($detailsError)?$detailsError:''?>
                    </span>

                </div>         
                <button class="btn btn-info">Edit</button>   
        </form></div>
</body>
</html>