<?php snippet('header') ?>

<main class="home" id="home">
    <div class="hero-section">
        <div class="content">
            <div class="intro-subtitle">
                <h3><?= $page->intro()->html() ?></h3>
                <!-- ICON -->
                <?php if ($icon = $page->introIcon()->toFile()): ?>
                    <img src="<?= $icon->url() ?>" alt="">
                <?php endif; ?>
            </div>

            <div class="titles-container">
                <div class="title-container">
                    <h1><?= $page->title1()->html() ?></h1>
                    <h1 class="ampersand"><?= $page->ampersand()->html() ?></h1>
                </div>

                <h1><?= $page->title3()->html() ?></h1>
            </div>

            <p class="header-text">
                <?= $page->description()->html() ?>
            </p>
        </div>
        
        <div class="image">
            <?php if ($heroImage = $page->heroImage()->toFile()): ?>
                <img
                    src="<?= $heroImage->url() ?>"
                    alt="<?= $heroImage->alt()->or('Hero image') ?>"
                    class="hero-image"
                >
            <?php endif; ?>
        </div>
    </div>
</main>

<?php snippet('footer') ?>