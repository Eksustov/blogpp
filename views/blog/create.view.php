<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Blog Post</title>
</head>
<body>
    <h1>Create a New Blog Post</h1>
    <form action="/store" method="POST">
        <label for="content">Content:</label>
        <textarea name="content" id="content" rows="5" required></textarea>
        <br><br>

        <button type="submit">Create Post</button>
    </form>
    <br>
    <a href="/">Back to all posts</a>
</body>
</html>