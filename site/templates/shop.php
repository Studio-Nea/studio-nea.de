<?php snippet('header') ?>
                <div class="menu-item bottom horizontal">
                    <a class="menu-link start" href="<?= $site->url() ?>">Start</a>
                </div>         
            </nav>
        </header>
        <div id="container">
            <div class="layer">
                <div class="grid grid-2">
                    <h1><?= $page->title() ?></h1>
                    <?= $page->text() ?>
                </div>
            </div>
        </div>
<?php snippet('footer') ?>