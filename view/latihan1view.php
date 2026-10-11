<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>
    <?php
    $i = 1;
    foreach ($datamhs as $mhs) {
    ?>
     <tr>
                <td><?= $i++; ?>.</td>
                <td><?= $mhs['nim']; ?></td>
                <td><?= $mhs['nama']; ?></td>
                <td><?= $mhs['alamat']; ?></td>
                <td><?= $mhs['no_hp']; ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
Admin: <?= htmlspecialchars($nama_user) ?>
</body>
</html>
