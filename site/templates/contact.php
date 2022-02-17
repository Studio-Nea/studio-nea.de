<?php snippet('header') ?>
                <div class="menu-item right rotate">
                    <a class="menu-link studio" href="<?= $site->url() ?>/studio">Studio</a>
                    <div class="menu-tease right studio"></div>
                </div>
                <div class="menu-item left rotate">
                    <a class="menu-link start" href="<?= $site->url() ?>">Start</a>
                    <div class="menu-tease left start"></div>
                </div>           
            </nav>
            <div onclick="switchbody()" class="switch" href="#"></div>
        </header>
        <div id="container">
            <main>
                <section>
                    <div class="layer">
                        <div class="intro mask">
                            <?= $page->text()->kirbytext() ?>
                        </div>
                    </div>
                </section>
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
            </main>
        </div>
<?php snippet('footer') ?>