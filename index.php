<!DOCTYPE html>
<html lang="cs">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="theme-color" content="#4285f4">

        <title>Tomáš Vykoukal</title>

        <link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicons/favicon-16x16.png">
        <link rel="manifest" href="/favicons/site.webmanifest">
        <link rel="mask-icon" href="/favicons/safari-pinned-tab.svg" color="#603cba">
        <link rel="shortcut icon" href="/favicons/favicon.ico">
        <meta name="msapplication-TileColor" content="#603cba">
        <meta name="msapplication-config" content="/favicons/browserconfig.xml">
        <meta name="theme-color" content="#ffffff">

        <meta property="og:image" content="/img/og-image.jpg">
        <meta property="og:image:width" content="279">
        <meta property="og:image:height" content="279">
        <meta property="og:title" content="Tomáš Vykoukal">
        <meta property="og:description" content="Frontend developer">
        <meta property="og:url" content="<?php echo parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH); ?>">

        <link rel="stylesheet" href="/css/normalize.css">
        <link rel="stylesheet" href="/css/burger-menu.css">
        <link rel="stylesheet" href="/css/custom.css">
        <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                $("#nav-icon").click(function(){
                    $("body").toggleClass("sidemenu--open");
                });

                $("#darker").click(function(){
                    $("body").removeClass("sidemenu--open");
                });
            });
        </script>
    </head>

    <body>
        <nav id="menu" role="navigation">
            <ul>
                <li><a href="https://github.com/tvikito" target="_blank" title="Little from my work">Github</a></li>
                <li><a href="https://teamtreehouse.com/tomasvykoukal" target="_blank" title="Look daddy what I learn already!">Learning</a></li>
            </ul>
            <ul>
                <li><a href="https://www.linkedin.com/in/tomasvykoukal/" target="_blank" title="My success. Or...?">LinkedIn</a>
                <li><a href="https://www.linkedin.com/in/tomasvykoukal/" target="_blank" title="My online life">Facebook</a>
                <li><a href="https://www.linkedin.com/in/tomasvykoukal/" target="_blank" title="How I see world around me">Instagram</a>
                <li><a href="https://www.linkedin.com/in/tomasvykoukal/" target="_blank" title="Yeah, I know what is trendy!">Twitter</a>
                <li><a href="mailto:vykoukal.tom@gmail.com?subject=Hi there! Wanna ask you something" title="Ok so. Just email me something!">Email</a></li>
            </ul>

        </nav>

        <div id="page">
            <div id="darker"></div>
            <div class="container h-100 flex flex-column center">

                <header class="sm-d-flex flex_align--center padding-15" id="header">
                    <div class="margin_right--auto padding-tb-10" id="logo">
                        <a href="/">
                            <img class="inline-block-center" src="/img/tomas-vykoukal.png" alt="Tomáš Vykoukal">
                            <h1 class="inline-block-center">Tomáš Vykoukal</h1>
                        </a>
                    </div>
                    <div class="padding-tb-10" id="menu-toogle" >
                        <div id="nav-icon">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </header>

                <main class="row margin_left-right--auto margin_top-bottom--auto padding-15 padding-tb-20" id="main-content-front">

                    <article>
                        <img class="img-ja" src="/img/ja_100.jpg" srcset="/img/ja_100.jpg, /img/ja_200.jpg" width="100" height="100" alt="Tomáš Vykoukal">
                        <h1>Papa of your frontend</h1>
                        <p></p>
                    </article>

                </main>

                <footer class="padding-10" role="contentinfo">
                    <p><small>© <?php echo date("Y"); ?> created with my youngest sister and oldest grandma<br>by <abbr title="papa means Italian father">papa</abbr> Tomas</small></p>
                </footer>
            </div>
        </div>
    </body>
</html>
