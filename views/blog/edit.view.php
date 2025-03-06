<!DOCTYPE html>
<html>
<head>
    <title>Edit Post</title>
</head>
<body>
    <h1>Edit Post</h1>
    <form method="POST" action="/update">
        <input type="hidden" name="id" value="<?= htmlspecialchars($post['id']) ?>">
        <label for="content">Content:</label>
        <textarea id="content" name="content"><?= htmlspecialchars($post['content']) ?></textarea>
        <br>
        <button type="submit">Update</button>
    </form>
</body>
</html>