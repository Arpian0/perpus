<h1>Books</h1>

<a href="/books/create">Add Book</a>

<table>
    <thead>
        <tr>
            <th>Title</th>
            <th>Author</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($books as $book) : ?>
            <tr>
                <td><?= $book['title'] ?></td>
                <td><?= $book['author'] ?></td>
                <td>
                    <a href="books/edit/<?= $book['id'] ?>">Edit</a>
                    <a href="books/delete/<?= $book['id'] ?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>