<?php
include "db_conn.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = isset($_POST['id']) ? intval($_POST['id']) : 0;

    $sql = "DELETE FROM `crud` WHERE id = ?";
    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "i", $id);
        $result = mysqli_stmt_execute($stmt);

        if ($result) {
            header("Location: table_view.php?msg=Record deleted successfully");
            exit();
        } else {
            echo "Failed:" . mysqli_stmt_error($stmt);
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "Failed to prepare statement:" . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
