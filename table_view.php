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

    <title>Table View</title>
</head>
<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color:#f54040;">
        Student Registration Application
    </nav>

   <div class="container">
       
    <a href="add_new.php" class="btn btn-dark mb-3">Add New</a>

    <table class="table table-striped table-primary text-center">
        <thead class="table-dark">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Email</th>
                <th scope="col">Gender</th>
                <th scope="col">Father Name</th>
                <th scope="col">Mother Name</th>
                <th scope="col">Address</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Country</th>
                <th scope="col">Date of Birth</th>
                <th scope="col">Edit data</th>
                <th scope="col">Delete Data</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "db_conn.php";

            $sql = "SELECT * FROM `crud`";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['First_name'] ?></td>
                <td><?php echo $row['Last_name'] ?></td>
                <td><?php echo $row['email'] ?></td>
                <td><?php echo $row['gender'] ?></td>
                <td><?php echo $row['father_name'] ?></td>
                <td><?php echo $row['mother_name'] ?></td>
                <td><?php echo $row['address'] ?></td>
                <td><?php echo $row['phone_number'] ?></td>
                <td><?php echo $row['country'] ?></td>
                <td><?php echo $row['date_of_birth'] ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $row['id'] ?>" class="link-dark">
                        <i class="fa-solid fa-pen-to-square fs-5 me-3"></i>
                    </a>
                </td>
                <td>
                    <a href="confirm_delete.php?id=<?php echo $row['id'] ?>" class="link-dark">
                        <i class="fa-solid fa-trash fs-5 me-3"></i>
                    </a>
                </td>
            </tr> 
            <?php
            }
            ?>
        </tbody>
    </table>
    <a href="index.php" class="btn btn-danger mb-3">Cancel</a>
   </div>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>
