<?php get_header();?>
<img class="img-fluid" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
    <div class="content-area">
        <main>
            <section class="slide">
                <div class="container">
                    <div class="row">
                        slide
                    </div>
                </div>
            </section>
            <section class="services">
            <div class="container">
                    <div class="row">
                        servicos
                    </div>
                </div>
            </section>
            <section class="middle-area">
            <div class="container">
                    <div class="row">
                        <aside class="side-bar col-md-4">
                            barra lateral
                        </aside>
                        <div class="news col-md-8">
                           <?php
                           //Se Houver Post
                            if(have_posts()):
                                //Enquanto Houver Post, mostre !
                                while(have_posts()): the_post();
                           ?>
                           
                           <?php get_template_part('template-part/content');?>

                           <?php 
                                endwhile;
                                    else:
                           ?>
                           <p>There Nothing yet to be displayed...</p>
                            <?php endif;?>
                        </div>
                    </div>
                </div>
            </section>
            <section class="map">
                <div class="container">
                    <div class="row">
                        mapa
                    </div>
                </div>   
            </section>
        </main>
    </div>
<?php get_footer();?>
