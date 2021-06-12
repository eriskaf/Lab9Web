<?php
include("koneksi.php"); 

require('header.php'); 
//<div class="content">


//query untuk menampilkan data 
$sql = 'SELECT * FROM data_barang'; 
$result = mysqli_query($conn, $sql); 

?> 

<!DOCTYPE html> 
<html lang="en"> 
<head>
    <meta charset="UTF-8"> 
    <link href="style.css" rel="stylesheet" type="text/css" /> 
    <title>Data Barang</title> 
</head>
<body>
    <div class="container"> 
        <h1>Data Barang</h1> 
        <div class="main"> 
        <table> 
        <tr>
            <th>Gambar</th> 
            <th>Nama Barang</th> 
            <th>Katagori</th> 
            <th>Harga Jual</th> 
            <th>Harga Beli</th> 
            <th>Stok</th>
            <th>id</th> 
            <th>Aksi</th> 
        </tr>
        <?php if($result): ?> 
        <?php while($row = mysqli_fetch_array($result)): ?> 
        <tr>
            <td><img src="gambar/<?= $row['gambar'];?>" alt="<?= $row['nama'];?>"></td> 
            <td><?= $row['nama'];?></td> 
            <td><?= $row['kategori'];?></td> 
            <td><?= $row['harga_beli'];?></td> 
            <td><?= $row['harga_jual'];?></td> 
            <td><?= $row['stok'];?></td>            
            <td><?= $row['id_barang'];?></td>
            <td><a href="hapus.php?id=<?php echo $id['id']; ?>">hapus</a>
            <a href="ubah.php?id=<?php echo $id['id']; ?>">ubah</a></td>
        </tr> 
        <?php endwhile; else: ?> 
        <tr> 
            <td colspan="8">Belum ada data</td> 
        </tr> 
        <?php endif; ?> 
        </table> 
    </div> 
</div> 
</body>
</div>
<?php require('footer.php'); ?>
</html>