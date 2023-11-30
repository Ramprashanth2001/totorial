<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm Delete</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            border-radius: 80px;
            box-shadow: 0 0 200px hsl(0, 100%, 50%);
            padding: 50px;
            text-align: center;
        }

        h2 {
            color: #1d252d;
        }

        p {
            margin-bottom: 20px;
            color: #555;
        }

        form {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 50px;
        }

        button, a {
            padding: 10px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            text-decoration: none;
            color: #fff;
            font-weight: bold;
        }

        button {
            background-color: #d9534f;
        }

        a {
            background-color: #5bc0de;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Confirm Delete</h2>
        <?php
        $id = $_GET['id'];
        echo '<p>Are you sure you want to delete the record with ID ' . $id . '?</p>';
        ?>
        <form method="post" action="delete.php">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <button type="submit">Yes, delete</button>
            <a href="table_view.php">No, cancel</a>
        </form>
    </div>
</body>
</html>
