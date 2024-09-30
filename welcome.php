<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Page Title</title>

  <!-- Favicon links -->
  <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
  <link rel="manifest" href="favicon/site.webmanifest">

  <!-- Material Design Lite links -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</head>

<body>
  <h1>Welcome to my Awesome Webpage</h1>

  <!-- Simple header with scrollable tabs -->
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Enter your name: &nbsp;&nbsp;</span>

        <form action="#">
          <div class="mdl-textfield mdl-js-textfield">
            <input class="mdl-textfield__input" type="text" id="sample1">
            <label class="mdl-textfield__label" for="sample1">Text</label>
          </div>
        </form>

        <button class="mdl-button mdl-js-button mdl-button--raised" onclick="window.location.href = 'tabone.html';">
          Submit
        </button>
      </div>
    </header>

    <!-- Other content -->
    <div class="mdl-layout__tab-bar mdl-js-ripple-effect">
      <a href="#scroll-tab-1" class="mdl-layout__tab is-active">Red</a>
      <a href="#scroll-tab-2" class="mdl-layout__tab">Purple</a>
      <a href="#scroll-tab-3" class="mdl-layout__tab">Pink</a>
      <a href="#scroll-tab-4" class="mdl-layout__tab">Blue</a>
      <a href="#scroll-tab-5" class="mdl-layout__tab">Green</a>
      <a href="#scroll-tab-6" class="mdl-layout__tab">Yellow</a>
    </div>

    <main class="mdl-layout__content">
      <section class="mdl-layout__tab-panel is-active" id="scroll-tab-1">
        <div class="page-content">
          <button onclick="window.location.href = 'tabone.html';">CLICK MEEEE</button>
        </div>
      </section>
      <!-- Additional sections for other tabs -->
    </main>
  </div>
</body>

</html>