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

        <div class="skills-cards">

            <?php foreach ($page->skillCards()->toStructure() as $card): ?>
                <div class="skill-card">
                    <div class="skill-icon">
                        <?php if ($icon = $card->icon()->toFile()): ?>
                            <img src="<?= $icon->url() ?>" alt="">
                        <?php endif; ?>
                    </div>

                    <h3><?= $card->title()->html() ?></h3>  
                    <p><?= $card->description()->html() ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<div class="tools-banner">
    <div class="tools-banner-container">
        <div class="container">
            <p class="tools-banner-title">
                <?= $page->toolsBannerTitle()->html() ?>
            </p>

            <div class="tools-list">
                <?php foreach ($page->tools()->toStructure() as $tool): ?>
                    <p class="tool">
                        <?= $tool->tool()->html() ?>
                    </p>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>