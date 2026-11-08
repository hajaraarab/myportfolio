<div class="container">

    <div class="featured-projects">
        <div class="intro-subtitle">
            <p class="subtitle"><?= $page->featuredProjectsSubtitle()->html() ?></p>
            <!-- ICON -->
            <?php if ($icon = $page->featuredProjectsIcon()->toFile()): ?>
                <img src="<?= $icon->url() ?>" alt="">
            <?php endif; ?>
        </div>

        <h2><?= $page->featuredProjectsTitle()->html() ?></h2>
    </div>

</div>