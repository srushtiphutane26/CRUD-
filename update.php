<?php
include 'conn.php';
if(count($_POST)!= 0)
{
    extract($_POST);
    extract($_GET);
    $query="UPDATE USER SET username='$username', address='$address', hobbies='$Hobbies',gender='$genderRadios',dateofbirth='$dob' WHERE id='$id'";
    // echo $query;
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
            <div class=" col-lg-6">            
                    <form>
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
                        
                        <!-- <fieldset class="form-group">
                            <div class="row">
                                <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
                                <div class="col-sm-10">
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="genderRadios" id="gridRadios1" value="option1" checked>
                                    <label class="form-check-label" for="gridRadios1">
                                        Female
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="genderRadios" id="gridRadios2" value="option2">
                                    <label class="form-check-label" for="gridRadios2">
                                    Male
                                    </label>
                                    </div>                                
                                </div>
                            </div>
                        </fieldset> -->
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" name="genderRadios">
                            <label class="form-check-label" for="inlineCheckbox1">Female</label>
                            </div>
                            <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" name="genderRadios">
                            <label class="form-check-label" for="inlineCheckbox2">Male</label>
                        </div>
                        <div class="form-group"> Hobbies
                            <input type="text" class="form-control" type="text" placeholder="" name="Hobbies">
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