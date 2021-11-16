<?php snippet('header') ?>
                <div class="menu-item top horizontal">
                    <a class="menu-link shop" href="<?= $site->url() ?>/shop">Shop</a>
                </div>
                <div class="menu-item right rotate">
                    <a class="menu-link studio" href="<?= $site->url() ?>/studio">Studio</a>
                </div>
                <div class="menu-item bottom horizontal">
                    <a class="menu-link work" href="<?= $site->url() ?>/work">Work</a>
                </div>
                <div class="menu-item left rotate">
                    <a class="menu-link start" href="<?= $site->url() ?>">Start</a>
                </div>           
            </nav>
        </header>
        <div id="container">
            <div class="layer">
                <h1><?= $page->title() ?></h1>
                <?= $page->text() ?>
                return '<div class="grid">' . implode($html) . '</div>';
            </div>
        </div>
<?php snippet('footer') ?>