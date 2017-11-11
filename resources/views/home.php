<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Test</title>
  </head>
  <body>
    <?php if (isset($id)): ?>
      <?php echo $id; ?>
    <?php endif; ?>
    <br><br>
    <?php foreach ($resultados as $pelicula => $value): ?>
      <?php echo $value ; ?>
      <br>
    <?php endforeach; ?>
  </body>
</html>
