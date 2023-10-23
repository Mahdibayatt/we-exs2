<aside class="left-sidebar">
    <section class="sidebox">
        <h3>akharin mataleb</h3>
        <ul>
            <?php 
            $q= new WP_Query(
                array("post_per_page"=>5)
            );
            while($q->have_posts())
            {
                $q->the_post();
                ?>
            <li><a href="<?php the_permalink()?>"><?php the_title()?></li>
            <?php
            }
             wp_reset_postdata();
            ?>


        </ul>
    </section>

    <section class="sidebox">
        <ul>
            <h3>akharin mataleb</h3>
            <?php 
            $q= new WP_Query(
                array("post_per_page"=>10,
                        "orderby"=>"comment_count",
                        "order"=>"DECS"
                )
                /**
 *مرتب سازی براساس اخرین دیدگاه.
 */

            );
            while($q->have_posts())
            {
                $q->the_post();
                ?>
            <li><a href="<?php the_permalink()?>"><?php the_title()?></li>
            <?php
            }
             wp_reset_postdata();
            ?>


        </ul>
    </section>

    <section class="sidebox">
        <ul>
            <h3>porbazdid tarin ha</h3>
            <?php 
            $q= new WP_Query(
                array("post_per_page"=>10,
                        "orderby"=>"comment_count",
                        "order"=>"DECS"
                )
                /**
 *و پر بازدید ترین ها مرتب سازی براساس دیدگاه.
 */

            );
            while($q->have_posts())
            {
                $q->the_post();
                ?>
            <li><a href="<?php the_permalink()?>"><?php the_title()?></li>
            <?php
            }
             wp_reset_postdata();
            ?>


        </ul>
    </section>

    <section class="adsbox">
        <ul>

            <li><a href="#">
                    <span>tablighat oi;gkjvgjh,jml</span>
                    <span>tablighat oi;gkjvgjh,jml</span>
                    <span>tablighat oi;gkjvgjh,jml</span>
                    <span>tablighat oi;gkjvgjh,jml</span>
            </li>

        </ul>
    </section>