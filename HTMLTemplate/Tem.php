﻿<?php include_once '../includes/header.php'; ?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>TEMP</title>
    <meta charset="utf8">
    <link href="SASS/SASS.css" rel="stylesheet" />
</head>
<body>
    <div id="wrapper">
        <header>
            <div>
                <a href="index.php">
                    Saksia.com
                </a> <br />
                <span>
                    Together for green future
                </span>
            </div>
        </header>
        <div id="content">
            <section>
            <!--Here lies all dynamic content-->
            </section>
            <div id="sidebar"></div>
            <nav>
                <ul>
                   <?php
                   $categories = getCategories();

                   foreach ($categories as $category) {
                       echo '<li>';

                       echo '<a href="' . 'viewTopics.php?' . $category['category_ID'] . '">' . $category['category_name'] . '</a>';

                       echo '</li>';
                   }

                   ?>
                </ul>
            </nav>
            <footer>
                <ul>
                    <li>

                        <a href="">FAQ</a>

                    </li>
                    <li>

                        <a href="">Contacts</a>

                    </li>
                    <li>

                        <a href="">Help</a>

                    </li>
                    <li>
                        <img src="images/giHubImg.png" />
                    </li>
                    <li>
                        <div id="fb-root" ></div>
                        <script>
                            (function (d, s, id) {
                                var js, fjs = d.getElementsByTagName(s)[0];
                                if (d.getElementById(id)) return;
                                js = d.createElement(s); js.id = id;
                                js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
                                fjs.parentNode.insertBefore(js, fjs);
                            }(document, 'script', 'facebook-jssdk'));</script>
                        <div style="background-color:white" class="fb-like-box" data-href="https://www.facebook.com/pages/Saksiacom/1605229196370501?sk=info" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="false"></div>
                    </li>
                </ul>
            </footer>
        </div>
    </div>
</body>
</html>