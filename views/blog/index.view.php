<!DOCTYPE html>
<html lang="lv">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Visi ieraksti</title>
</head>
<body>
  <h1>Visi bloga ieraksti</h1>
    <ul>
        <?php foreach($posts as $post){?>
        <li> <a href="/show?id=<?= $post["id"]?>"> <?= $post["content"]?> </a></li>
        <?php } ?>
    </ul>
    <a href="/create">create a post</a>
</body>
</html>