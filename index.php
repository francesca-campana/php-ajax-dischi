<?php include __DIR__ . '/database.php'; ?>

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
          <select class="authors" name="">


          </select>

        </div>
      </header>
      <main>
        <div class="cds-container">

          <?php foreach ($database as $data) {?>
          <div class="cd">

            <img src="<?php echo $data['poster']; ?>" alt="<?php echo $data['author'] ?>">
            <h2><?php echo $data['title'] ?></h2>
            <span class="author"><?php echo $data['author'] ?></span>
            <span class="year"><?php echo $data['year'] ?></span>

          </div>
          <?php  } ?>

        </div>
      </main>

    </div>

    <script type="text/javascript" src="dist/app.js"></script>

  </body>
</html>
