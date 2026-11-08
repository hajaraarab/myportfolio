<?php snippet('header') ?>

<main class="home" id="home">
    <div class="hero-section">
        <div class="content">
            <div class="intro-subtitle">
                <p class="subtitle"><?= $page->intro()->html() ?></p>
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

            <div class="hero-buttons">

                <?php if ($page->button1Text()->isNotEmpty() && $page->button1Link()->isNotEmpty()): ?>
                    <a 
                        href="<?= $page->button1Link()->toUrl() ?>"
                        class="primary-btn"
                    >
                        <?= $page->button1Text()->esc() ?>
                    </a>
                <?php endif; ?>

                <?php if ($page->button2Text()->isNotEmpty() && $page->button2Link()->isNotEmpty()): ?>
                    <a 
                        href="<?= $page->button2Link()->toUrl() ?>"
                        class="secondary-btn"
                    >
                        <?= $page->button2Text()->esc() ?>
                    </a>
                <?php endif; ?>

            </div>

            <p class="subtitle dark"><?= $page->socialsTitle()->html() ?></p>


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

</div> <!-- einde container -->

<div class="about-me-section">
    
    <div class="container">

        <div class="content">
            <div class="section-one">
                <div class="intro-subtitle">
                    <p class="subtitle"><?= $page->aboutMeSubtitle()->html() ?></p>

                    <!-- ICON -->
                    <?php if ($icon = $page->introIcon()->toFile()): ?>
                        <img src="<?= $icon->url() ?>" alt="">
                    <?php endif; ?>
                </div>

                <h2><?= $page->aboutTitle()->html() ?></h2>
            </div>

            <p class="section-two"><?= $page->aboutMeDescription()->html() ?></p>

            <div class="section-three">
                <ul class="skills-list">
                    <?php foreach ($page->skills()->toStructure() as $skill): ?>
                        <li>
                            <?= $skill->skill()->html() ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>

    </div>

</div>

<div class="container">
    <div class="my-skills-section">
        <div class="intro-subtitle">
            <p class="subtitle"><?= $page->mySkillsSubtitle()->html() ?></p>

            <!-- ICON -->
            <?php if ($icon = $page->skillsSubtitleIcon()->toFile()): ?>
                <img src="<?= $icon->url() ?>" alt="">
            <?php endif; ?>
        </div>

        <h2><?= $page->mySkillsTitle()->html() ?></h2>
    </div>
</div>

<?php snippet('footer') ?>