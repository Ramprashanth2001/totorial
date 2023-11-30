<?php
include "db_conn.php";

if(isset($_POST['submit'])) {
    $first_name = $_POST['first_name'] ?? '';
    $last_name = $_POST['last_name'] ?? '';
    $email = $_POST['email'] ?? '';
    $gender = $_POST['gender'] ?? '';
    $father_name = $_POST['father_name'] ?? '';
    $mother_name = $_POST['mother_name'] ?? '';
    $address = $_POST['address'] ?? '';
    $phone_number = $_POST['phone_number'] ?? '';
    $country = $_POST['country'] ?? '';
    $date_of_birth = $_POST['date_of_birth'] ?? '';

    $check_email_query = "SELECT * FROM `crud` WHERE `email`='$email'";
    $check_email_result = mysqli_query($conn, $check_email_query);

    if(mysqli_num_rows($check_email_result) > 0) 
    {
        $email_exists_error = "Email already exists. Please use a different email.";
    } else
    {
        $sql = "INSERT INTO `crud`(`id`, `First_name`, `Last_name`, `email`, `gender`, 
                `father_name`, `mother_name`, `address`, `phone_number`, `country`, `date_of_birth`) 
                VALUES (NULL,'$first_name','$last_name','$email','$gender',
                '$father_name','$mother_name','$address','$phone_number','$country','$date_of_birth')";

        $result = mysqli_query($conn, $sql);

        if($result) 
        {
            header("Location: index.php?msg=New record created successfully");
        }
        else 
        {
            echo "Failed:" .mysqli_error($conn);
        }
    }
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        body 
        {
            background-image: url('vim.jpeg');
            background-size: cover;
            background-repeat: no-repeat;
            height: 100vh;
            margin: 0;
            padding: 0;
            font-family: 'Arial', 'Helvetica', sans-serif;
            color: #fff;
        }
    </style>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
    crossorigin="anonymous">
    <!-- Font Awesome -->
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
            <h3> Add New User</h3>
            <p>Complete the form below to add a new user</p>
       </div> 
       <div class="container d-flex justify-content-center">
            <form action="" method="post" style ="width:50vw; min-width:300px;">
                <div class ="row m">
                    <div class = "col">
                        <label class = "form-label">First Name:</label>
                        <input type="text" class="form-control" name="first_name">
                    </div>

                    <div class = "col">
                        <label class = "form-label">Last Name:</label>
                        <input type="text" class="form-control" name="last_name">
                    </div>
                </div>

                <div class ="mb-3">
                    <label class = "form-label">Email:</label>
                    <input type="text" class="form-control" name="email"
                    placeholder="Enter Your Email"> 
                    <?php
                    if (isset($email_exists_error)) {
                        echo '<div class="alert alert-danger mt-2" role="alert">' . $email_exists_error . '</div>';
                    }
                    ?>
                </div>

                <div class="form-group mb-3">
                    <label>Gender:</label>  
                    &nbsp;
                    <input type="radio" class="form-check-input" name="gender"
                    id="male" value="male">
                    <label for="male" class="form-input-label">Male</label>
                    &nbsp;
                    <input type="radio" class="form-check-input" name="gender"
                    id="female" value="female">
                    <label for="female" class="form-input-label">Female</label>
                    &nbsp;
                    <input type="radio" class="form-check-input" name="gender"
                    id="others" value="others">
                    <label for="others" class="form-input-label">Others</label>
                </div>

                <div class ="mb-3">
                    <label class = "form-label">Father Name:</label>
                    <input type="text" class="form-control" name="father_name">
                </div>

                <div class ="mb-3">
                    <label class = "form-label">Mother Name:</label>
                    <input type="text" class="form-control" name="mother_name">
                </div>

                <div class ="mb-3">
                    <label class = "form-label">Address:</label>
                    <input type="text" class="form-control" name="address">
                </div>

                <div class ="mb-3">
                    <label class = "form-label">Phone Number:</label>
                    <input type="text" class="form-control" name="phone_number">
                </div>

                <div class ="mb-3">
                    <label class = "form-label">Country:</label>
                    <input type="text" class="form-control" name="country">
                </div>

                <div class ="mb-3">
                    <label class = "form-label">Date of Birth:</label>
                    <input type="date" class="form-control" name="date_of_birth">
                </div>

                <div>
                   <button type="submit" class="btn btn-success  mb-3" name="submit">Save</button> 
                    <a href="index.php" class="btn btn-danger mb-3">Cancel</a>
                </div>
            </form>
            
        </div>  
    </div>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>
