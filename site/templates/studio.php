<?php snippet('header') ?>
                <div class="menu-item right rotate">
                    <a class="menu-link start" href="<?= $site->url() ?>">Start</a>
                </div>
                <div class="menu-item left rotate">
                    <a class="menu-link contact" href="<?= $site->url() ?>/contact">Contact</a>
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