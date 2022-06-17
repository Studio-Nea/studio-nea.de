<?php snippet('header') ?>
                <div class="menu-item top horizontal">
                    <a class="menu-link start" href="<?= $site->url() ?>">Start</a>
                    <div class="menu-tease top start"></div>
                </div> 
                <div class="menu-item bottom horizontal">
                    <a class="menu-link shop" href="<?= $site->url() ?>/shop">Shop</a>
                    <div class="menu-tease bottom shop"></div>
                </div>          
            </nav>
        </header>
        <div id="container">
            <main>
                <section>
                    <h1><?= $data->title() ?></h1>
                    <?= $data->text()->kirbytext() ?>
                    <ul>
                        <?php foreach($data->children()->listed() as $project): ?>
                        <li>
                            <figure>
                                <img src="<?= $project->image()->url() ?>" alt="<?= $project->title() ?>">
                            </figure>
                        </li>
                        <?php endforeach ?>
                    </ul>
                </section>
            </main>
        </div>
<?php snippet('footer') ?>