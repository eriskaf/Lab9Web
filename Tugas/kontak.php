<?php require('header.php'); ?>
<div class="content">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak</title>
    <link rel="stylesheet" href="style.css">
</head>
<div id="container">
    <header>
       
    </header>
    

<body>
    <header>
        <h2>Form Kontak</h2>
        <br>
        <form action="proses.php" method="POST" >
            <fieldset>
                <legend>Form</legend>
                <br>
                <p>
                    <label for="nama">Nama</label>
                    <input type="text" id="nama" name="nama">
                </p>
                <br>
                <p>
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email">
                </p>
                <br>
                <p>
                    <label for="hp">No Handphone</label>
                    <input type="text" id="hp" name="hp">
                </p>
                <br>
                <p>
                    <label for="message">Message</label>
                    <textarea name="message" id="message" cols="22" rows="3"></textarea>
                </p>
                <br>
                <p>
                    <label>Jenis Kelamin</label>
                    <input type="radio" id="jk_l" name="kelamin" value="L" /><label for="jk_l">Laki-Laki</label>
                    <input type="radio" id="jk_p" name="kelamin" value="P" /><label for="jk_p">Perempuan</label>
                </p>
                <br>
                <p>
                    <input type="submit" value="KIRIM">
                </p>
            </fieldset>

            <style> form p > label { 
                display: inline-block; 
                width: 100px; 
                } 
                form input[type="text"], form textarea { 
                    border: 2px solid #197a43; 
                } 
                form input[type="submit"] { 
                    border: 2px solid #197a43; 
                    background-color: #197a43; 
                    color: #ffffff; 
                    font-weight: bold; 
                    padding: 15px 25px; 
                } 
            </style>
        </form>
    </header>
</body>
</html>
</div>
<?php require('footer.php'); ?>