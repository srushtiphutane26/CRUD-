<?php
include 'conn.php';
// var_dump($conn);
if(count($_POST)!= 0)
{
    extract($_POST);
    $query="INSERT INTO USER(name,address,hobbies,gender,dateofbirth) VALUES ('$username','$address','$genderRadios','$Hobbies','$dob')";
    
    $result = mysqli_query($conn,$query);
    if($result==true){
        echo "submitted";
    }
    else
    {
        echo "Failed to submit";
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container" >
        <div class="row">
            <div class="col" style="background: #666; color: #FFF; padding:50px">  
                <h2 style="padding-bottom:50px">CRUD operation using php</h2>          
                    <form method="post">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Username</label>
                            <div class="col-sm-10">
                                <input type="name" class="form-control" id="inputEmail3" placeholder="Username" name="username">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Address</label>
                            <div class="col-sm-10">
                                <input type="add" class="form-control" id="inputEmail3" placeholder="Address" name="address">
                            </div>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" name="genderRadios">
                            <label class="form-check-label" for="inlineCheckbox1">Female</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" name="genderRadios">
                            <label class="form-check-label" for="inlineCheckbox2">Male</label>
                        </div>
                        <div class="form-group row">
                            <label for="hobbies" class="col-sm-2 col-form-label">Hobbies</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputEmail3" placeholder="Username" name="Hobbies">
                            </div>
                        </div>                        
                        <div class="form-group row">
                            <label for="dob" class="col-sm-2 col-form-label">Date of Birth</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputEmail3" placeholder="" name="dob">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>  
                    <h5>
                        <a href="read.php">
                        <div class="form-group row">
                            <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">View Users</button>
                            </div>
                        </div>
                        </a>
                    </h5>               
            </div>
        </div>
    </div>
</body>
</html>