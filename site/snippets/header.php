<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $page->title() ?> | Hajar Aarab </title>

    <link rel="stylesheet" href="<?= url('assets/css/style.css') ?>">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Figtree:wght@400;500;600;700&family=Fraunces:opsz,wght@9..144,400;9..144,500;9..144,600&display=swap" rel="stylesheet">
</head>

<body>

<div class="container"> 
    <header>
        <div class="logo">
            <p class="logo-text">H</p>
            <a class="logo-link"href="<?= $site->url() ?>">Hajar<br>Aarab</a>
        </div>

        <nav>
            <ul>
                <?php foreach ($site->children()->listed() as $item): ?>
                    <li>
                        <a class="menu-link" href="<?= $item->url() ?>">
                            <?= $item->title() ?>
                        </a>
                    </li>
                <?php endforeach ?>
            </ul>
        </nav>

        <div class="contact-btn-container">
            <a class="contact-btn" href="<?= $site->find('contact')->url() ?>">
                Let's Talk
                <img class="button-arrow" src="<?= url('assets/icons/arrow-white.png') ?>" alt="Arrow">
            </a>
        </div>
        
    </header>