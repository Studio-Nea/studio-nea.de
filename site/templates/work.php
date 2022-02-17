<?php snippet('header') ?>
                <div class="menu-item top horizontal">
                    <a class="menu-link start" href="<?= $site->url() ?>">Start</a>
                    <div class="menu-tease top start"></div>
                </div>          
            </nav>
        </header>
        <div id="container">
            <main>
                <section>
                    <div class="layer">
                        <div class="intro">
                            <?= $page->text()->kirbytext() ?>
                        </div>
                    </div>
                </section>
                <section>
                    <div class="grid grid-2">
                        <div class="grid-item"></div>
                    </div>
                </section>
            </main>
        </div>
<?php snippet('footer') ?>