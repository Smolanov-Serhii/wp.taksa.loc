<?php
/* Template Name: Текстовый блок */
get_header();
$post_id = get_the_ID();
?>
    <main class="news <?php if($post_id == 56){echo 'fixed';};?>">
        <section class="main-section">
            <h1 style="color:red;">
                <?php the_title();?>
            </h1>
            <?php the_content();?>
        </section>
    </main>
<?php
get_footer();
