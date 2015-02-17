<html>
<body>

<form action="index.php" method="get">
<select name="per1" id="per1">
  <option selected="selected">Choose one</option>
  <?php
    foreach($names as $name) { ?>
      <option value="<?= $name['name'] ?>"><?= $name['name'] ?></option>
  <?php
    } ?>
</select> 
</form>

</body>
</html>
