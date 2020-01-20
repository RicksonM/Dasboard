<!DOCTYPE html>
    <html>
        <head>
            <title>Dashboard</title>
            <?php
                //require('verifica.php');
                //require('conecta.php');
                //$nome = $_SESSION["nome_user"];
            ?>
            <link rel="stylesheet" type="text/css" href="../css/css_dash/style.css">
            
        </head>
        <body>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <div class="grid-container">
                <div class="menu-icon">
                <i class="fas fa-bars header__menu"></i>
                </div>
                <header class="header">
                    <div class="header_search">Search...</div>
                    <div class="header_avatar">Your face</div>
                </header>

                <aside class="sidenav">
                    <div class="sidenav__close-icon">
                        <i class="fas fa-times"></i>
                    </div>
                    <ul class="sidenav__list">
                        <li class="sidenav__list-item">Item One</li>
                        <li class="sidenav__list-item">Item Two</li>
                        <li class="sidenav__list-item">Item Three</li>
                        <li class="sidenav__list-item">Item Four</li>
                        <li class="sidenav__list-item">Item Five</li>
                    </ul>
                </aside>
                <!--PRIMEIRA RADE DE ITENS -->
                <main class="main">
                    <div class="main-header">
                        <div class="main-header__heading">Hello User</div>
                        <div class="main-header__updates">Recent Items</div>
                    </div>
                    
                <!--SEGUNDA GRADE DE ITENS-->
                    <div class="main-overview">
                    <div class="overviewcard">
                        <div class="overviewcard__icon">Overview</div>
                        <div class="overviewcard__info">Card</div>
                    </div>
                    <div class="overviewcard">
                        <div class="overviewcard__icon">Overview</div>
                        <div class="overviewcard__info">Card</div>
                    </div>
                    <div class="overviewcard">
                        <div class="overviewcard__icon">Overview</div>
                        <div class="overviewcard__info">Card</div>
                    </div>
                    <div class="overviewcard">
                        <div class="overviewcard__icon">Overview</div>
                        <div class="overviewcard__info">Card</div>
                    </div>
                    </div>
                <!--TERCEIRA GRADE DE ITENS-->
                    <div class="main-cards">
                        <div class="card">Card</div>
                        <div class="card">Card</div>
                        <div class="card">Card</div>
                    </div>
                </main>

                <footer class="footer">
                    <div class="footer_copyright">&copy; 2020</div>
                    <div class="footer_signature">Made by me</div>
                </footer>
            </div>
        

            <script>
                const menuIconEl = $('.menu-icon');
                const sidenavEl = $('.sidenav');
                const sidenavCloseEl = $('.sidenav__close-icon');

                // Add and remove provided class names
                function toggleClassName(el, className) {
                if (el.hasClass(className)) {
                    el.removeClass(className);
                } else {
                    el.addClass(className);
                }
                }

                // Open the side nav on click
                menuIconEl.on('click', function() {
                toggleClassName(sidenavEl, 'active');
                });

                // Close the side nav on click
                sidenavCloseEl.on('click', function() {
                toggleClassName(sidenavEl, 'active');
                });
            </script>
        </body>

    </html>