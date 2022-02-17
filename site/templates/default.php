<?php snippet('header') ?>
                <div class="menu-item top horizontal">
                    <a class="menu-link shop" href="<?= $site->url() ?>/shop">Shop</a>
                </div>
                <div class="menu-item right rotate">
                    <a class="menu-link contact" href="<?= $site->url() ?>/contact">Contact</a>
                    <div class="page-tease right contact"></div>
                </div>
                <div class="menu-item bottom horizontal">
                    <a class="menu-link work" href="<?= $site->url() ?>/work">Work</a>
                </div>
                <div class="menu-item left rotate">
                    <a class="menu-link studio" href="<?= $site->url() ?>/studio">Studio</a>
                    <div class="page-tease left studio"></div>
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