<!doctype html>
<html class="no-js" lang="en">

    <head>
        <meta charset="UTF-8">
        <title><?php echo html($site->title()) ?></title>

        <meta name="author" content="Robin Rendle">
        <meta name="description" content="Robin Rendle is a designer from the UK and this is where he writes about publishing, networks and books.">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="author" href="https://plus.google.com/104389809267012182640">

        <!-- favicons -->
        <link rel="shortcut icon" href="/assets/images/icons/favicon.ico">
        <link rel="shortcut icon" href="/assets/images/icons/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/assets/images/icons/favicon_144.png">

        <!-- Styles -->
        <link href="/assets/css/screen.css" rel="stylesheet">
        <link rel="stylesheet" media="print" href="/assets/css/print.css">
        <!-- RSS -->
        <link rel="alternate" type="application/rss+xml" href="<?php echo url('/feed') ?>" title="Essays, articles and notes feed " />
        <!-- Fonts -->
        <link href="//cloud.webtype.com/css/4d2bc22e-add9-4624-b921-366855a4f74c.css" rel="stylesheet" type="text/css" />
        <!-- Modernizr -->
        <script src="/assets/js/modernizr-2.5.3-min.js"></script>
    </head>

    <body class="<?php echo html($page->title()) ?>">

        <header role="banner">
            <figure class="avatar">
                <a href="/"><img src="/assets/images/logo/campfire.jpg"/></a>
            </figure>
        </header>

        <section role="main">
            <article class="container">
            <?php $featured = $pages->children()->last(); ?>

                <?php $hero = $featured->images()->find ( html($featured->hero()) ) ?>

                <?php if ($featured->hero() ) : ?>
                    <figure class="hero">
                        <img src="<?php echo $hero->url() ?>" alt="<?php echo $hero->title() ?>" />
                    </figure>
                <?php endif ?>

                <header class="<?php echo $featured->header() ?>">
                    <h1 class="hero"><?php echo $featured->title() ?></h1>
                    <div class="meta">
                        <p>By Robin Rendle</p>
                        <time datetime="<?php echo $featured->date ?>"><?php echo $featured->season ?></time>
                    </div>
                </header>

                <?php echo markdown($featured->excerpt()) ?>
                <?php echo markdown($featured->text()) ?>

                <?php if ($featured->meta()) { ?>
                    <footer class="about">
                        <?php echo markdown($featured->meta()) ?>
                    </footer>
                <?php } ?>


            </article>
        </section>

<?php snippet('footer') ?>
