<?php
$activePage = basename($_SERVER['PHP_SELF'], ".php");
$projectPages = ['multipurpose', 'projecten', 'wecollect', 'opdrachtgeversportaal', 'customerjourney'];
?>
<header id="main-header">
    <div class="container">
        <div class="grid">
            <nav class="main-nav">
                <div class="responsive-nav">
                    <div class="bar"></div>
                    <div class="bar"></div>
                    <div class="bar"></div>
                </div>
                <ul class="nav-links">
                    <li class="col-1 brand"><a href="/" class="sandesh">Sandesh</a></li>
                    <li class="col-1">
                        <a href="/projecten" class="nav-link undefined <?= in_array($activePage, $projectPages) ? 'active' : '' ?>">Projecten</a>
                    </li>
                    <li class="col-1 col-offset-1">
                        <a href="/contact" class="nav-link undefined <?= urlIs('/contact') ? 'active' : '' ?>">Contact</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
