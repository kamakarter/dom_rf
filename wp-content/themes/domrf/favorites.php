<?php
/*
Template Name: favorites
*/
?>

<?php get_header(); ?>


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
                    <div class="breadcrumbs-real hidden-print"><span><span><a href="/lugansk/">ОдессаСтрой</a> <span
                                    class="separator">|</span> <span class="breadcrumb_last"
                                    aria-current="page">Избранное</span></span></span></div>
                    <h1 class="imitation-h1">Избранное</h1>
                </div>
            </div>
        </div>
    </div>
</div>


<main>
    <section id="category-wrapper" style="padding-top: 50px;">
        <div class="container">
            <div class="flex-row">
                <div>У вас нет постов в избранном</div>
            </div>
        </div>
    </section> <input type="hidden" id="is_favorites" value="1">


    <?php
        include_once('blocks/smeta-form.php')
    ?>


    <?php
        include_once('blocks/contacts.php')
    ?>
</main>



<?php get_footer(); ?>