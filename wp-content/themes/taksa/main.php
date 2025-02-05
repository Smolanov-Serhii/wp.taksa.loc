<?php
/* Template Name: Главная */
get_header();
$post_id = get_the_ID();
?>

	<main class="news">
        <section class="main-section faq-section py-3">
            <div style="width: 100%;">
                <div class="w-lg-50 mx-auto">
                    <h1 class="mb-3" style="color: red"><?php the_title();?></h1>
                    <div class="accordion accordion-flush" id="accordionExample">
                        <?php
                        $counter = 1;
                        if( have_rows('voprosy_i_otvety', $post_id) ):
                            while( have_rows('voprosy_i_otvety', $post_id) ) : the_row();
                                $vopros = get_sub_field('vopros');
                                $otvet = get_sub_field('otvet');
                                ?>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="<?php echo '#coll' . $counter;?>" aria-expanded="true" aria-controls="<?php echo '#coll' . $counter;?>">
                                            <h5><?php echo $vopros;?></h5>
                                        </button>
                                    </h2>
                                    <div id="<?php echo 'coll' . $counter;?>" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <?php echo $otvet;?>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                $counter ++;
                            endwhile;
                        endif;
                        ?>
                    </div>
                </div>
            </div>
        </section>
	</main>
<?php
get_footer();
