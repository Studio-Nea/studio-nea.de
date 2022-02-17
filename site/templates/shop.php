<?php snippet('header') ?>
                <div class="menu-item bottom horizontal">
                    <a class="menu-link start" href="<?= $site->url() ?>">Start</a>
                    <div class="menu-tease bottom start"></div>
                </div>         
            </nav>
            <div class="scroll">
                <div class="scroll-content">    
                    <div class="scroll-title">
                        <span>Shop Chummy Shit</span>
                        <span id="ticker"></span>
                    </div>
                </div>
            </div>
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
                    <div class="layer">
                        <div class="grid grid-2">
                            <div class="grid-item"></div>
                        </div>
                    </div>
                </section>
            </main>
        </div>
<?php snippet('footer-shop') ?>