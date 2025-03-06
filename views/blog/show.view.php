<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Post</title>
</head>
<body>
    <p><?= nl2br(htmlspecialchars($post["content"])) ?></p>
    <a href="/edit?id=<?= $_GET["id"]?>"> EDIT </a>
    <br></br>
    <form action="/destroy" method="POST" onsubmit="return confirm('Are you sure you want to delete this post?');">
    <input type="hidden" name="id" value="<?= htmlspecialchars($post['id']) ?>">
        <button type="submit">Delete Post</button>
    </form>
    <br></br>
    <a href="/">Back to all posts</a>
</body>
</html>