<h1>Edit Book</h1>

<form action="/books/update/<?= $book['id'] ?>" method="post">
    <label for="title">Title:</label>
    <input type="text" name="title" value="<?= $book['title'] ?>" required><br>

    <label for="author">Author:</label>
    <input type="text" name="author" value="<?= $book['author'] ?>" required><br>

    <input type="submit" value="Update">
</form>