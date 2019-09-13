<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>News</title>
</head>
<body>
  <?php
  foreach($data->getNews() as $record){ ?>
  <article>
  <h2><a href="article.php?id=<?php echo $record['id'] ?> "><?php echo $record['заголовок'] ?></a></h2>
    <p><?php echo $record['текст'] ?></p>
    <cite><?php echo $record['автор'] ?></cite>
  </article>
  <?php } ?>  
</body>
</html>