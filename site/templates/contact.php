<?php snippet('header') ?>
                <div class="menu-item right rotate">
                    <a class="menu-link studio" href="<?= $site->url() ?>/studio">Studio</a>
                </div>
                <div class="menu-item left rotate">
                    <a class="menu-link start" href="<?= $site->url() ?>">Start</a>
                </div>           
            </nav>
        </header>
        <div id="container">
            <section>
                <div class="layer">
                    <div class="grid grid-3">
                        <div class="grid-item">
                            <?= $page->textfirst()->kt() ?>
                        </div>
                        <div class="grid-item">
                            <?= $page->textsecond()->kt() ?>
                        </div>
                        <div class="grid-item">
                            <?= $page->textthird()->kt() ?>
                        </div>
                    </div>
                </div>
            </section>
        </div>
<?php snippet('footer') ?>