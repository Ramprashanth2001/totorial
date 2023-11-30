<?php
include "db_conn.php";
$id = $_GET['id'];

if(isset($_POST['submit'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $father_name = $_POST['father_name'];
    $mother_name = $_POST['mother_name'];
    $address = $_POST['address'];
    $phone_number = $_POST['phone_number'];
    $country = $_POST['country'];
    $date_of_birth = $_POST['date_of_birth'];

    $sql ="UPDATE `crud` SET 
            `First_name`='$first_name',
            `Last_name`='$last_name',
            `email`='$email',
            `gender`='$gender',
            `father_name`='$father_name',
            `mother_name`='$mother_name',
            `address`='$address',
            `phone_number`='$phone_number',
            `country`='$country',
            `date_of_birth`='$date_of_birth'
            WHERE id=$id";


    $result = mysqli_query($conn, $sql);

    if($result) {
        header("Location: table_view.php?msg=Data updated successfully");
    }
    else {
        echo "Failed:" .mysqli_error($conn);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        body {
            background-image: url('images.jpeg');
            background-size: 1000% 1000%;
            background-repeat: no-repeat;
        }
    </style>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
    crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" 
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>PHP CRUD application</title>
</head>
<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" >
    <h1>Student Registration Application</h1>
    </nav>

    <div class="container">
       <div class="text-center mb-4">
            <h3> Edit Student Information</h3>
            <p>Click update after changing any Information</p>
       </div>
       
       <?php
       $sql = "SELECT * FROM `crud` WHERE id = $id LIMIT 1";
       $result = mysqli_query($conn, $sql);
       $row = mysqli_fetch_assoc($result);
       ?>
       <div class="container d-flex justify-content-center">
            <form action="" method="post" style ="width:50vw; min-width:300px;">
                <div class ="row m">
                    <div class = "col">
                        <label class = "form-label">First Name:</label>
                        <input type="text" class="form-control" name="first_name"
                        value = "<?php echo $row['First_name'] ?>">
                    </div>

                    <div class = "col">
                        <label class = "form-label">Last Name:</label>
                        <input type="text" class="form-control" name="last_name"
                        value = "<?php echo $row['Last_name'] ?>">
                    </div>
                </div>

                <div class ="mb-3">
                    <label class = "form-label">Email:</label>
                    <input type="text" class="form-control" name="email"
                    value = "<?php echo $row['email'] ?>"> 
                </div>

                <div class="form-group mb-3">
                    <label>Gender:</label>  &nbsp;
                    <input type="radio" class="form-check-input" name="gender"
                    id="male" value="male" <?php echo($row['gender']=='male')?
                    "checked":""; ?>>
                    <label for="male" class="form-input-label">Male</label>
                    &nbsp;
                    <input type="radio" class="form-check-input" name="gender"
                    id="female" value="female" <?php echo($row['gender']=='female')?
                    "checked":""; ?>>
                    <label for="female" class="form-input-label">Female</label>
                    &nbsp;
                    <input type="radio" class="form-check-input" name="gender"
                    id="others" value="others" <?php echo($row['gender']=='others')?
                    "checked":""; ?>>
                    <label for="others" class="form-input-label">Others</label>
                </div>

                <div class ="mb-3">
                    <label class = "form-label">Father Name:</label>
                    <input type="text" class="form-control" name="father_name"
                    value = "<?php echo $row['father_name'] ?>">
                </div>

                <div class ="mb-3">
                    <label class = "form-label">Mother Name:</label>
                    <input type="text" class="form-control" name="mother_name"
                    value = "<?php echo $row['mother_name'] ?>">
                </div>

                <div class ="mb-3">
                    <label class = "form-label">Address:</label>
                    <input type="text" class="form-control" name="address"
                    value = "<?php echo $row['address'] ?>">
                </div>

                <div class ="mb-3">
                    <label class = "form-label">Phone Number:</label>
                    <input type="text" class="form-control" name="phone_number"
                    value = "<?php echo $row['phone_number'] ?>">
                </div>

                <div class ="mb-3">
                    <label class = "form-label">Country:</label>
                    <input type="text" class="form-control" name="country"
                    value = "<?php echo $row['country'] ?>">
                </div>

                <div class ="mb-3">
                    <label class = "form-label">Date of Birth:</label>
                    <input type="date" class="form-control" name="date_of_birth"
                    value = "<?php echo $row['date_of_birth'] ?>">
                </div>

                <div>
                   <button type="submit" class="btn btn-success" name="submit">Update</button> 
                    <a href="table_view.php" class="btn btn-danger">Cancel</a>
                </div>
            </form>
        </div>  
    </div>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>
