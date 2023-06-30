<h1>Borrow Book</h1>

<form action="/borrows/store" method="post">
    <label for="book_id">Book:</label>
    <select name="book_id" required>
        <?php foreach ($books as $book) : ?>
            <option value="<?= $book['id'] ?>"><?= $book['title'] ?></option>
        <?php endforeach; ?>
    </select><br>

    <label for="user_name">User Name:</label>
    <input type="text" name="user_name" required><br>

    <label for="borrow_date">Borrow Date:</label>
    <input type="date" name="borrow_date" required><br>

    <label for="return_date">Return Date:</label>
    <input type="date" name="return_date" required><br>

    <input type="submit" value="Borrow">
</form>