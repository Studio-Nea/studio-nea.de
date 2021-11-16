<?php snippet('header') ?>
                <div class="menu-item bottom horizontal">
                    <a class="menu-link start" href="<?= $site->url() ?>/start">Start</a>
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