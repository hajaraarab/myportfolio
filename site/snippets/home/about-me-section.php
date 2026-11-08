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