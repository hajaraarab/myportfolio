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