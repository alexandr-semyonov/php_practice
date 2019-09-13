<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>News</title>
</head>
<body>
  <a href="index.php">Back</a>
  <article>
  <h2><?php echo $this->data['article']->getArticle()['заголовок'] ?></h2>
    <p><?php echo $this->data['article']->getArticle()['текст'] ?></p>
    <cite><?php echo $this->data['article']->getArticle()['автор'] ?></cite>
  </article>
</body>
</html>