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
    <!-- Wrapper -->
    <div class="wrapper">
      <!-- Header-->
      <header>
        <!-- Container -->
        <div class="container">
          <!-- Logo -->
          <div class="logo">
            <img src="img/logo-small.svg" alt="logo">
          </div>
          <!-- Fine Logo -->
          <!-- Select -->
          <select class="authors" name="">
            <option value="all">all</option>
          </select>
          <!-- Fine Select -->

        </div>
        <!-- Fine Container -->
      </header>
      <!-- Fine Header-->
      <!-- Main -->
      <main>
        <!-- Cds container -->
        <div class="cds-container">
        </div>
        <!-- Fine Cds container -->
      </main>
      <!-- Fine Main -->

    </div>
    <!-- Fine Wrapper -->

    <!-- Handlebars cd-template -->
    <script id="cd-template" type="text/x-handlebars-template">
      <!-- Singolo cd -->
      <div data="{{{ author }}}" class="cd">
        <img src="{{ poster }}" alt="{{ title }}">
        <h2>{{ title }}</h2>
        <span class="author ">{{ author }}</span>
        <span class="year">{{ year }}</span>
      </div>
      <!-- Fine Singolo cd -->

    </script>
    <!-- Fine Handlebars cd-template -->
    <!-- Handlebars author-template -->
    <script id="author-template" type="text/x-handlebars-template">
      <option data="{{{ author }}}" value="{{{ author }}}">{{ author }}</option>

    </script>
      <!-- Fine Handlebars author-template -->

    <script type="text/javascript" src="dist/app.js"></script>

  </body>
</html>
