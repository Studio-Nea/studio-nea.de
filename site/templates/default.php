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
                <div class="menu-item top horizontal">
                    <a class="menu-link shop" href="#">Shop</a>
                </div>
                <div class="menu-item right rotate">
                    <a class="menu-link contact" href="#">Contact</a>
                </div>
                <div class="menu-item bottom horizontal">
                    <a class="menu-link work" href="#">Work</a>
                </div>
                <div class="menu-item left rotate">
                    <a class="menu-link studio" href="#">Studio</a>
                </div>           
            </nav>
        </header>
        <div id="container">
            <div class="grid grid-2">
                <div class="column">
                    <h1><?= $page->title() ?></h1>
                    <?= $page->text() ?>
                </div>
            </div>
        </div>
        <footer>

        </footer>
    </body>
</html>