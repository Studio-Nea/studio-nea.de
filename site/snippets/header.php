<html lang="de">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $site->title() ?></title>
        <?= css('assets/css/style.css') ?>
        <?= js('assets/js/script.js') ?>
        <link rel="icon" type="image/svg+xml" href="<?= $site->url() ?>/assets/images/favicon.svg">
        <link rel="icon" type="image/png" href="<?= $site->url() ?>/assets/images/favicon.png">
    </head>
    <body class="page-<?= $page->uid() ?>">
        <header>
            <nav class="menu">