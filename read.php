<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container" style="padding-top:50px">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered table-responsive-md">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Username</th>
                            <th scope="col">Address</th>
                            <th scope="col">Hobbies</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Date of Birth</th>  
                            <th scope="col">Delete</th>
                            <th scope="col">Update</th>
                        </tr>
                    </thead>
                    <?php 
                    include 'conn.php';
                    $query= "SELECT * FROM USER";
                    $result = mysqli_query($conn,$query);
                    while($res=mysqli_fetch_array($result)){
                    
                    ?>
                        <tbody>
                            <tr>
                                <th scope="row"><?php echo $res['id'] ?></th>
                                <td><?php echo $res['name'] ?></td>
                                <td><?php echo $res['address'] ?></td>
                                <td><?php echo $res['gender'] ?></td>
                                <td><?php echo $res['hobbies'] ?></td>
                                <td><?php echo $res['dateofbirth'] ?></td>
                                <td><a href="delete.php?id=<?php echo $res['id']?>"><input type="button" class="btn btn-danger" name="" id="" value="Delete"></a></td>
                                <td><a href="update.php?id=<?php echo $res['id']?>"><input type="button" class="btn btn-success" value="Update"></a></td>
                            </tr>                            
                        </tbody>
                    <?php }?>
                </table>
                <h5>
                        <a href="create.php">
                        <div class="form-group row">
                            <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Create user</button>
                            </div>
                        </div>
                        </a>
                    </h5>    
            </div>  
        </div>
    </div>
</body>
</html>