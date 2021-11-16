<?php snippet('header') ?>
                <div class="menu-item top horizontal">
                    <a class="menu-link start" href="<?= $site->url() ?>">Start</a>
                </div>          
            </nav>
        </header>
        <div id="container">
            <div class="layer">
                <h1><?= $page->title() ?></h1>
                <?= $page->text() ?>
                return '<div class="grid grid-2">' . implode($html) . '</div>';
            </div>
        </div>
<?php snippet('footer') ?>