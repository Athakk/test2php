<?php 
if(!$_POST)

$siswa = [
    [
        "id" => "1",
        "foto" => "atha.jpg",
        "nama" => "Athallah Firmansyah",
        "alamat" => "Simo magerejo 14/2",
        "no" => "08768390201"
    ],
    [
        "id" => "2",
        "foto" => "atha2.jpg",
        "nama" => "Athillah Firmansyah",
        "alamat" => "Manukan Kulon",
        "no" => "086748107560"
    ],
    [
        "id" => "3",
        "foto" => "alip.jpg",
        "nama" => "Alifia Firmansyah",
        "alamat" => "Arica indonesia",
        "no" => "086574810944"
    ],
    [
        "id" => "4",
        "foto" => "kul.jpg",
        "nama" => "Atha kul abis Firmansyah",
        "alamat" => "Simo gunung barat tol",
        "no" => "084431778909"
    ],
];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        a, input{
                margin-top: 30px;
                margin-left: 10px;
            }
    </style>
</head>
<body>

    <h1>Data Siswa(admin coy)</h1>
    <table border="1" width="40%" cellspacing="0" cellpadding="10" >
        <tr>
            <th>No</th>
            <th>Foto</th>
            <th>Nama</th>
            <th>Aksi</th>
        </tr>

        <?php foreach ($siswa as $data) : ?>
        <tr align="center">
            <td><?= $data['id']?></td>
            <td><img width="140px" src="<?= $data["foto"];?>" alt="Foto Siswa"></td>
            <td><?= $data['nama']?></td>
            <td><a href="detail.php?nama=<?= $data["nama"]; ?>&alamat=<?= $data["alamat"]; ?>&no=<?= $data["no"]; ?>&foto=<?= $data["foto"]; ?>"><input type="button" value="Detail"></a></td>
        </tr>
        <?php endforeach; ?>

    </table>
    <a href="Login.php"><input type="button" value="Logout"></a>

</body>
</html>