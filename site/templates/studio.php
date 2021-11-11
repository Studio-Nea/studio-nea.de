<?php snippet('header') ?>
                <div class="menu-item top horizontal">
                    <a class="menu-link shop" href="#">Shop</a>
                </div>
                <div class="menu-item right rotate">
                    <a class="menu-link contact" href="#">Start</a>
                </div>
                <div class="menu-item bottom horizontal">
                    <a class="menu-link work" href="#">Work</a>
                </div>
                <div class="menu-item left rotate">
                    <a class="menu-link studio" href="#">Contact</a>
                </div>           
            </nav>
        </header>
        <div id="container">
            <div class="layer">
                <div class="grid grid-2">
                    <div class="column">
                        <h1><?= $page->title() ?></h1>
                        <?= $page->text() ?>
                    </div>
                </div>
            </div>
        </div>
<?php snippet('footer') ?>