<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD Application</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        body 
        {
            background-image: url('ima.avif');
            background-size: cover;
            background-repeat: no-repeat;
            height: 100vh;
            margin: 0;
            padding: 0;
            font-family: 'Arial', 'Helvetica', sans-serif;
            color: #fff;
        }

        
        body::after 
        {
            content: "";
            background: url('ima.avif') center/cover no-repeat; 
            position: fixed;
            top: 100;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: -1;
        }


        .navbar 
        {
            background-color: ;
            color: white;
            text-align: center;
            font-size: 2.5rem;
            padding: 1rem;
            margin-top: 20px; 
        }


        .container {
            text-align: center;
            margin-top: 10px;
        }

        .btn-dark {
            background-color: #343a40;
            border-color: #343a40;
        }

        .btn-dark:hover {
            background-color: #292b2c;
            border-color: #292b2c;
        }
    </style>
</head>

<body>
<nav class="navbar  justify-content-center fs-3 mb-5">
        <h1>Welcome to the XYZ COLLEGE</h1>
    </nav>

    <div class="container">
        <h1 class="mb-4">Student Registration Application</h1>
        <p class="lead">Manage student records.</p><br>

        <a href="add_new.php" class="btn btn-dark btn-lg">Add Student Records</a><br><br>
        <a href="table_view.php" class="btn btn-dark btn-lg">View Student Records</a>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>
