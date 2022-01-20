<?php snippet('header') ?>
                <div class="menu-item right rotate">
                    <a class="menu-link start" href="<?= $site->url() ?>">Start</a>
                </div>
                <div class="menu-item left rotate">
                    <a class="menu-link contact" href="<?= $site->url() ?>/contact">Contact</a>
                </div>           
            </nav>
            <div onclick="switchbody()" class="switch" href="#"></div>
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
            </main>
        </div>
<?php snippet('footer') ?>