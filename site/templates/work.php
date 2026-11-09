<?php snippet('header') ?>

<div class="work">
    <div class="page-info">
        <div class="intro-subtitle">
            <p class="subtitle"><?= $page->subtitle()->html() ?></p>

            <!-- ICON -->
            <?php if ($icon = $page->subtitleIcon()->toFile()): ?>
                <img src="<?= $icon->url() ?>" alt="">
            <?php endif; ?>
        </div>

        <div class="titles-container">
            <div class="title-container">
                <h1><?= $page->title1()->html() ?></h1>
                <h1 class="ampersand"><?= $page->title_styled()->html() ?></h1>
            </div>
        </div>

        <p>
            <?= $page->description()->html() ?>
        </p>
    </div>
    <div class="my-work">
        <?php foreach ($page->children()->listed()->filterBy('intendedTemplate', 'project') as $project): ?>

            <div class="my-work-card">
                <?php if ($image = $project->cover()->toFile()): ?>
                    <img
                        src="<?= $image->url() ?>"
                        alt="<?= $project->projectTitle()->html() ?>"
                        class="project-image"
                    >
                <?php endif; ?>

                <p class="project-number">0<?= $project->projectNumber()->html() ?></p>
                <h3><?= $project->projectTitle()->html() ?></h3>
                <p class="project-discription"><?= $project->projectDescription()->html() ?></p>
            </div>

        <?php endforeach; ?>

    </div>

</div>

</div>


<?php snippet('footer') ?>