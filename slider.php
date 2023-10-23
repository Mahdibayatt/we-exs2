<section id="metro-box">
    <?php


    $c=0;
    $q2=new WP_Query(
        array("category_name"=>"slider_big","posts_per_page"=>3)
    );
    while($q2->have_posts())
    {
        $c++;
        $q2->the_post();
        ?>
    <div class="column">

        <div class="metro-item big">
            <div class="box-img"> <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail();  ?></a>
                <div class="metro-content color_6">
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <div class="description">
                        <?php the_excerpt(); ?>
                    </div>
                </div>
            </div>
        </div>
        <?php
            $q=new WP_Query(
                array("category_name"=>"slider_small","posts_per_page"=>4,"paged"=>$c)
            );
            while($q->have_posts())
            {
                $q->the_post();
                ?>

        <div class="metro-item">
            <div class="box-img"> <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail();  ?></a>
                <div class="metro-content color_1">
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <div class="description">
                        <?php the_excerpt(); ?>
                    </div>
                </div>
            </div>
        </div>



        <?php
            }
            wp_reset_postdata();
            ?>


    </div>


    <?php
    }
    wp_reset_postdata();
    ?>




</section>