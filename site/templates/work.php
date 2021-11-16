<?php snippet('header') ?>
                <div class="menu-item top horizontal">
                    <a class="menu-link start" href="<?= $site->url() ?>">Start</a>
                </div>          
            </nav>
        </header>
        <div id="container">
            <div class="layer">
                <div class="grid grid-2">
                    <div class="column">
                        <h1><?= $page->title() ?></h1>
                        <?= $page->text() ?>
                    </div>
                </div>
            </div>
        </div>
<?php snippet('footer') ?>