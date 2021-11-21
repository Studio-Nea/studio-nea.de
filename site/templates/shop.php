<?php snippet('header') ?>
                <div class="menu-item bottom horizontal">
                    <a class="menu-link start" href="<?= $site->url() ?>">Start</a>
                </div>         
            </nav>
        </header>
        <div id="container">
            <section>
                <div class="layer">
                    <h1><?= $page->title() ?></h1>
                    <?= $page->text() ?>
                    <div class="grid grid-2">
                    </div>
                </div>
            </section>
        </div>
<?php snippet('footer') ?>