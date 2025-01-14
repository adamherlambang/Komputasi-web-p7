<?php
include 'conn.php';

$data_query = $conn->query("SELECT * FROM user");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pengguna</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Daftar Pengguna</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>HP</th>
                    <th>Alamat</th>
                    <th>Pekerjaan</th>
                    <th>Jenis Kelamin</th>
                    <th>Hobi</th>
                    <th>Status</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($user = $data_query->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $user['id']; ?></td>
                    <td><?php echo $user['name']; ?></td>
                    <td><?php echo $user['email']; ?></td>
                    <td><?php echo $user['hp']; ?></td>
                    <td><?php echo $user['alamat']; ?></td>
                    <td><?php echo $user['job']; ?></td>
                    <td><?php echo $user['gender']; ?></td>
                    <td><?php echo $user['hobby']; ?></td>
                    <td><?php echo $user['status']; ?></td>
                    <td>
                        <a href="forminsert.html?edit_id=<?php echo $user['id']; ?>" class="btn btn-warning">Ubah</a>
                        <a href="delete.php?remove_id=<?php echo $user['id']; ?>" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
