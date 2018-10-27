<!DOCTYPE html>
<html>
<head>
    <title>CRUD PHP Sederhana</title>
</head>
<body>
    <h3>tambah</h3>
    <a href="index.php">Tambah Data</a>
 
    <table border="1px">
    <tr>
        <th>id</th>
        <th>username</th>
        <th>password</th>
        <th>level</th>
        <th>fullname</th>
    </tr>
 
    <?php while($row = mysqli_fetch_assoc($data)){ ?>
    <tr>
        <td><?php echo $row['id'] ;?></td>
        <td><?php echo $row['username'] ;?></td>
        <td><?php echo $row['password'] ;?></td>
        <td><?php echo $row['level'] ;?></td>
        <td><?php echo $row['fullname'] ;?></td>
        <td>
            <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a> | 
            <a href="#">Hapus</a>
            <a href="Delete.php?id=<?php echo $row['id']; ?>">Delete</a> | 
            <a href="#">Hapus</a>

        </td>
    </tr>
    <?php
    } // end while
    
    mysqli_close($conn); // menutup koneksi ke database
    ?>
    
    </table>
 
</body>
</html>