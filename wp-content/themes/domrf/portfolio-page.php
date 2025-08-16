<?php
/*
Template Name: portfolio-page
*/
?>

<?php get_header(); ?>

<?php
    include_once 'modal-windows/modal-form-with-contacts.php';
?>


<?php
    include_once 'modal-windows/modal-form-with-contacts.php';
?>

<div class="default-header">
    <style>
    .single-header,
    .default-header {
        background-image: url("<?php echo get_template_directory_uri(); ?>/assets/superuploads/images/single-bg.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center center;
    }
    </style>

    <?php
        include_once 'blocks/header.php';
    ?>    

    <div class="top-preroll">
        <div class="container">
            <div class="flex-row">
                <div class="top-preroll-wrap">
                    <div class="breadcrumbs-real hidden-print"><span><span><a href="/lugansk/">Каталог</a> <span
                                    class="separator">|</span> <span class="breadcrumb_last"
                                    aria-current="page">Проекты</span></span></span></div>
                    <h1 class="imitation-h1">Проект дома</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <h2>тут будет проект портфолио</h2>
</div>


<?php
    include_once('blocks/excursion.php');
?>


<?php get_footer(); ?>