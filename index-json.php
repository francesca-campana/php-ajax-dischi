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
          <select class="authors" name="">
            <option value="all">all</option>


            </select>


        </div>
      </header>
      <main>
        <div class="cds-container">

        </div>
      </main>

    </div>

    <!-- Handlebars cd-template -->
    <script id="cd-template" type="text/x-handlebars-template">
      <div class="cd">

        <img src="{{ poster }}" alt="{{ title }}">
        <h2>{{ title }}</h2>
        <span class="author">{{ author }}</span>
        <span class="year">{{ year }}</span>

      </div>

    </script>
    <!-- Fine Handlebars cd-template -->
    <!-- Handlebars author-template -->
    <script id="author-template" type="text/x-handlebars-template">
      <option value="{{{ author }}}">{{ author }}</option>

    </script>
      <!-- Fine Handlebars author-template -->

    <script type="text/javascript" src="dist/app.js"></script>

  </body>
</html>
