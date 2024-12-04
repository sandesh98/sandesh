<?php require 'partials/head.php'; ?>

<!-- Content -->
<div id="inner">
    <section class="mb-xl">
        <div class="container mb-md">
            <div class="grid">
                <div class="col-3">
                    <h2 class="grid-title">Projecten</h2>
                </div>
                <div class="col-5 text-right">
                    <nav id="filters">
                        <ul class="filters">
                            <li><a href="#" data-filter="grid-item" class="active filter">Alles</a></li>
                            <li><a href="#" data-filter="werk" class="filter">Werk</a></li>
                            <li><a href="#" data-filter="school" class="filter">School</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="container">
            <div id="project-grid" class="masonry-grid">

                <!-- Project -->
                <a href="/opdrachtgeversportaal" class="werk grid-item col-8">
                    <div class="thumb">
                        <img src="../resources/images/project/opdrachtgeversportaal/project-image.jpg">
                    </div>
                    <div class="caption">
                        <div class="title">JEX - Opdrachtgeversportaal</div>
                        <div class="subtitle">Prototype</div>
                    </div>
                </a>
            
                <!-- Project -->
                <a href="/customerjourney" class="werk grid-item col-8">
                    <div class="thumb">
                        <img src="../resources/images/project/urencustomerjourney/project-image.jpg">
                    </div>
                    <div class="caption">
                        <div class="title">JEX - Uren Customer Journey</div>
                        <div class="subtitle">Prototype</div>
                    </div>
                </a>

                <!-- Project -->
                <a href="/globetrotters" class="school grid-item col-8">
                    <div class="thumb">
                        <img src="../resources/images/project/globetrotters/project-image.jpg">
                    </div>
                    <div class="caption">
                        <div class="title">Schoolproject - Globetrotters</div>
                        <div class="subtitle">Game</div>
                    </div>
                </a>

                <!-- Project -->
                <a href="/wecollect" class="school grid-item col-8">
                    <div class="thumb">
                        <img src="../resources/images/project/wecollect/project-image.jpg">
                    </div>
                    <div class="caption">
                        <div class="title">Schoolproject - WECOLLECT</div>
                        <div class="subtitle">Prototype</div>
                    </div>
                </a>

            </div>
        </div>
    </section>
</div>
<!-- /Content -->

<?php require 'partials/footer.php'; ?>
