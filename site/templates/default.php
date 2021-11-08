<html lang="de">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $site->title() ?></title>
        <?= css('assets/css/style.css') ?>
        <link rel="icon" type="image/svg+xml" href="<?= $site->url() ?>/assets/images/favicon.svg">
        <link rel="icon" type="image/png" href="<?= $site->url() ?>/assets/images/favicon.png">
    </head>
    <body>
        <header>
            <a class="switch" href="#"></a>
            <nav class="menu">
                <a class="menu-shop" href="#">Shop</a>
                <a class="menu-contact rotate" href="#">Contact</a>
                <a class="menu-work" href="#">Work</a>
                <a class="menu-studio rotate" href="#">Studio</a>
            </nav>
        </header>
        <div id="container">
            <h1><?= $page->title() ?></h1>
            <?= $page->text() ?>
        </div>
        <footer>

        </footer>
    </body>
</html>