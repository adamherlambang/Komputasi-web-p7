<?php
include 'conn.php';

if (isset($_GET['remove_id'])) {
    $record_id = $_GET['remove_id'];
    $delete_query = "DELETE FROM user WHERE id=$record_id";

    if ($conn->query($delete_query) === TRUE) {
        header("Location: select.php");
        exit();
    } else {
        echo "<script>alert('Kesalahan saat menghapus data: " . $conn->error . "');</script>";
    }
}
?>
