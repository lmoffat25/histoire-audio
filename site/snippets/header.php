<!doctype html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?= $site->title() ?> | <?= $page->title() ?></title>

<!-- JQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>


<!-- CSS -->
  <?= css(['assets/css/app.css', '@auto']) ?>
<!-- JS -->
  <?= js(['assets/js/compiled/global.min.js', '@auto']) ?>

</head>
<body>

  <div class="page">
    <header class="header">
      <a class="logo" href="<?= $site->url() ?>"><?= $site->title() ?></a>

      <nav id="menu" class="menu">
        <?php foreach ($site->children()->listed() as $item): ?>
        <?= $item->title()->link() ?>
        <?php endforeach ?>
      </nav>
    </header>
