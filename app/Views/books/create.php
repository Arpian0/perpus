<h1>Add Book</h1>

<form action="/books/store" method="post">
    <label for="title">Title:</label>
    <input type="text" name="title" required><br>

    <label for="author">Author:</label>
    <input type="text" name="author" required><br>

    <input type="submit" value="Save">
</form>