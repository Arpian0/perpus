<h1>Borrowed Books</h1>

<a href="/borrows/create">Borrow Book</a>

<table>
    <thead>
        <tr>
            <th>Book</th>
            <th>User Name</th>
            <th>Borrow Date</th>
            <th>Return Date</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($borrows as $borrow) : ?>
            <tr>
                <td><?= $borrow['book_id'] ?></td>
                <td><?= $borrow['user_name'] ?></td>
                <td><?= $borrow['borrow_date'] ?></td>
                <td><?= $borrow['return_date'] ?></td>
                <td>
                    <a href="/borrows/returnBook/<?= $borrow['id'] ?>">Return</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>