<?php snippet('header') ?>
                <div class="menu-item top horizontal">
                    <a class="menu-link shop" href="<?= $site->url() ?>/shop">Shop</a>
                    <div class="menu-tease top shop"></div>
                </div>
                <div class="menu-item right rotate">
                    <a class="menu-link contact" href="<?= $site->url() ?>/contact">Contact</a>
                    <div class="menu-tease right contact"></div>
                </div>
                <div class="menu-item bottom horizontal">
                    <a class="menu-link work" href="<?= $site->url() ?>/work">Work</a>
                    <div class="menu-tease bottom work"></div>
                </div>
                <div class="menu-item left rotate">
                    <a class="menu-link studio" href="<?= $site->url() ?>/studio">Studio</a>
                    <div class="menu-tease left studio"></div>
                </div>           
            </nav>
            <div onclick="switchbody()" class="switch" href="#"></div>
            <a class="journal" href="<?= $site->url() ?>/journal"></a>
        </header>
        <div id="container">
            <main>
                <section>
                    <div class="layer">
                        <h1></h1>
                    </div>
                </section>
            </main>
        </div>
<?php snippet('footer') ?>