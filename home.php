<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP: Second Activity</title>
</head>
<body>
<div class = "container">
  <form action="get.php" method = "GET">
      <h1>Welcome to the canteen! Here are the prices:</h1>
      <ul>
        <li>Fishball - 30 PHP</li>
        <li>Kikiam - 40 PHP</li>
        <li>Corndog - 50 PHP</li>
      </ul>
      <label for = "food">Choose your order:</label>
      <select name = "food" id = "food">
        <option value = "fishball">Fishball</option>
        <option value = "kikiam">Kikiam</option>
        <option value = "corndog">Corndog</option>
      </select>
      <p>Quantity:
          <input type="text" name="quantity" size="30" maxlength="30"/>
      </p>
      <p>Cash:
          <input type="text" name="cash" size="30" maxlength="30"/>
      </p>
      <label>
          <input type="submit" value = "SUBMIT" name = "submitName"/>
      </label> 
  </form>
</div>
</body>
</html>