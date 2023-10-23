<div class="footer-nav">
    <div class="main-footer">
        <div class="about">
            <h5>darbare ma</h5>
            <p>uihghfsfawerstyukljnjbvcfdsteretrjyhvcrfeasdfgiukjcxzsEwa5yuyi</p>
        </div>
        <div class="social">
            <h5>ba ma hamrah bashid</h5>
            <ul>
                <li><a href="#"></a><img src="<?php echo get_template_directory_uri();?>/images/Facebook.png" alt="">
                </li>
                <li><a href="#"></a><img src="<?php echo get_template_directory_uri();?>/images/Twitter.png" alt="">
                </li>
                <li><a href="#"></a><img src="<?php echo get_template_directory_uri();?>/images/Linkedin.png" alt="">
                </li>
                <li><a href="#"></a><img src="<?php echo get_template_directory_uri();?>/images/Google+.png" alt="">
                </li>
            </ul>
        </div>
        <div class="support">
            <h5>hamiyan ma </h5>
            <ul>
                <?php 
            $q= new WP_Query(
                array("post_per_page"=>24,
                "post_type"=>"support",
                )

            );
            while($q->have_posts())
            {
                $q->the_post();
                ?>
                <li><a href="<?php the_comment()?>"><?php the_post_thumbnail(array("40,40"))?></li>
                <?php
            }
             wp_reset_postdata();
            ?>
            </ul>
        </div>

        </footer>