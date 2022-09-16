<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        a, input {
            margin-top: 30px;
            margin-left: 10px;
        }

    </style>
</head>
<body>
    <table border="1" cellspacing="0" cellpadding="10" >
            
            <tr>
                <td rowspan="3"><img width="370px" src="<?=$_GET["foto"];?>" alt="Foto Siswa"></td>
                <td>Nama</td>
                <td><?= $_GET["nama"] ?></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><?= $_GET["alamat"] ?></td>
            </tr>
            <tr>
                <td>Telepon</td>
                <td><?= $_GET["no"] ?></td>
            </tr>
    </table>
    <a href="Admin.php"><input type="button" value="Kembali coy!"></a>
</body>
</html>