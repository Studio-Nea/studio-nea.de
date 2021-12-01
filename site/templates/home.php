<?php snippet('header') ?>
                <div class="menu-item top horizontal">
                    <a class="menu-link shop" href="<?= $site->url() ?>/shop">Shop</a>
                </div>
                <div class="menu-item right rotate">
                    <a class="menu-link contact" href="<?= $site->url() ?>/contact">Contact</a>
                </div>
                <div class="menu-item bottom horizontal">
                    <a class="menu-link work" href="<?= $site->url() ?>/work">Work</a>
                </div>
                <div class="menu-item left rotate">
                    <a class="menu-link studio" href="<?= $site->url() ?>/studio">Studio</a>
                </div>           
            </nav>
        </header>
        <div id="container">
            <section>
                <div class="layer">
                    <h1>
                        <?php if ($coverImage = $page->files()->findBy('template', 'logo')) {echo $coverImage->url();} ?>
                    </h1>
                </div>
            </section>
        </div>
<?php snippet('footer') ?>