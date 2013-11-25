<!DOCTYPE html>

<html>

    <head>
        
        <link href="/css/styles.css" rel="stylesheet"/>
        <link href="http://yui.yahooapis.com/pure/0.3.0/pure-min.css" rel="stylesheet"/>

        <?php if (isset($title)): ?>
            <title>M.G.E: <?= htmlspecialchars($title) ?></title>
        <?php else: ?>
            <title>Meet, Eat, and Greet</title>
        <?php endif ?>

        <script src="/js/jquery-1.10.2.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/scripts.js"></script>

    </head>

    <body>

        <div class="container">

            <div id="top">
                <a href="/"><img alt="Meet, Great, and Eat" src="/img/Logo.png"/></a>
            </div>

            <div id="middle">
