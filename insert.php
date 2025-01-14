<?php
include 'conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $record_id = isset($_POST['record_id']) ? $_POST['record_id'] : null;
    $full_name = $_POST['full_name'];
    $user_email = $_POST['user_email'] . "@gmail.com";
    $phone_number = $_POST['phone_number'];
    $user_address = $_POST['user_address'];
    $occupation = $_POST['occupation'];
    $user_gender = $_POST['user_gender'];
    $user_hobby = $_POST['user_hobby'];
    $marital_status = $_POST['marital_status'];

    if ($record_id) {
        $query = "UPDATE user SET 
                    name='$full_name', 
                    email='$user_email', 
                    hp='$phone_number', 
                    alamat='$user_address', 
                    job='$occupation', 
                    gender='$user_gender', 
                    hobby='$user_hobby', 
                    status='$marital_status' 
                WHERE id=$record_id";
    } else {
        $query = "INSERT INTO user (name, email, hp, alamat, job, gender, hobby, status)
                  VALUES ('$full_name', '$user_email', '$phone_number', '$user_address', '$occupation', '$user_gender', '$user_hobby', '$marital_status')";
    }

    if ($conn->query($query) === TRUE) {
        header("Location: select.php");
        exit();
    } else {
        echo "<script>alert('Kesalahan saat menyimpan data: " . $conn->error . "');</script>";
    }
}
?>
