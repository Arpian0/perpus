<!DOCTYPE html>
<html>

<head>
    <title>List Anggota</title>
</head>

<body>
    <h1>List Anggota</h1>

    <table>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Waktu Pembuatan</th>
        </tr>

        <?php foreach ($members as $member) : ?>
            <tr>
                <td><?php echo $member['id']; ?></td>
                <td><?php echo $member['name']; ?></td>
                <td><?php echo $member['email']; ?></td>
                <td><?php echo $member['created_at']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>