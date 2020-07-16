<?php include __DIR__ . '/database.php'; ?>
<?php// include __DIR__ . '/function.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="dist/app.css">
    <title></title>
  </head>
  <body>
    <div class="wrapper">
      <header>
        <div class="container">
          <div class="logo">
            <img src="img/logo-small.svg" alt="logo">
          </div>
          <select class="generi" name="">
            <option value="generi">Generi</option>
            <option value="jazz">Jazz</option>
            <option value="metal">Metal</option>
            <option value="rock">Rock</option>
            <option value="pop">Pop</option>

          </select>

        </div>
      </header>
      <main>
        <div class="cds-container">

          <?php foreach ($database as $data) {?>
          <div class="cd">

            <img src="<?php echo $data['poster']; ?>" alt="poster">
            <h2><?php echo $data['title'] ?></h2>
            <span class="author"><?php echo $data['author'] ?></span>
            <span class="year"><?php echo $data['year'] ?></span>

          </div>
          <?php  } ?>

        </div>
      </main>

    </div>

  </body>
</html>
