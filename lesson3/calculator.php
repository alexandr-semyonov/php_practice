<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Calculator</title>
</head>
<body>
  <form action="calc.php" method="get">
    Num1<input type="text" name="num1">
    &nbsp
    <select name ="operation">
      <option value="+">+</option>
      <option value="-">-</option>
    </select>
    &nbsp
    Num2<input type="text" name="num2">
    <button type="submit">Done!</button>
  </form>
</body>
</html>