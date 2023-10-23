<aside class="left-sidebar">
    <section class="sidebox">
        <h3>آخرین مطالب</h3>
        <ul>
            <?php
            $q=new WP_Query(
                array("posts_per_page"=>10)
            );
            while($q->have_posts())
            {
                $q->the_post();
                ?>
            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            <?php
            }
            wp_reset_postdata();

            ?>


        </ul>
    </section>
    <section class="sidebox">
        <h3>پرمبحث ترین</h3>
        <ul>
            <?php
            $q=new WP_Query(
                array(
                    "posts_per_page"=>10,
                    "orderby"=>"comment_count",
                    "order"=>"DECS"

                )
            );
            while($q->have_posts())
            {
                $q->the_post();
                ?>
            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            <?php
            }
            wp_reset_postdata();

            ?>
        </ul>
    </section>
    <?php dynamic_sidebar( 'artabaz_sidebar_ads' ); ?>
    <section class="sidebox">
        <h3>پر بازدید ترین ها</h3>
        <ul>
            <?php
            $q=new WP_Query(
                array(
                    "posts_per_page"=>10,
                    "orderby"=>"comment_count",
                    "order"=>"DECS"

                )
            );
            while($q->have_posts())
            {
                $q->the_post();
                ?>
            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            <?php
            }
            wp_reset_postdata();

            ?>
        </ul>
    </section>
    <section class="sidebox">
        <h3>دانلود نرم افزارهای پیشنهادی</h3>
        <ul>
            <li>
                <div class="thumb">
                    <img src="<?php bloginfo('template_url')?>/images/soft/windows8.gif" alt="" title="">
                </div>
                <div class="dicsoft">
                    <h4><a href="#">ویندوز 8.1 Windows 8.1-April2014</a></h4>
                    <p>نسخه نهایی ویندوز 8.1 آپدیت آپریل 2014</p>
                </div>
                <div class="clear"></div>
            </li>
            <li>
                <div class="thumb">
                    <img src="<?php bloginfo('template_url')?>/images/soft/chrome.gif" alt="" title="">
                </div>
                <div class="dicsoft">
                    <h4><a href="#">مرورگر کروم Google Chrome</a></h4>
                    <p>نسخه نهایی 33.0.375</p>
                </div>
                <div class="clear"></div>
            </li>
            <li>
                <div class="thumb">
                    <img src="<?php bloginfo('template_url')?>/images/soft/firefox.gif" alt="" title="">
                </div>
                <div class="dicsoft">
                    <h4><a href="#">مرورگر فایرفاکس Mozilla Firefox</a></h4>
                    <p>نسخه نهایی 28.0</p>
                </div>
                <div class="clear"></div>
            </li>
            <li>
                <div class="thumb">
                    <img src="<?php bloginfo('template_url')?>/images/soft/photoshop.png" alt="" title="">
                </div>
                <div class="dicsoft">
                    <h4><a href="#">دانلود نرم افزار Photoshop CC</a></h4>
                    <p>نسخه نهایی ویندوز 8.1 آپدیت آپریل 2014</p>
                </div>
                <div class="clear"></div>
            </li>
            <li>
                <div class="thumb">
                    <img src="<?php bloginfo('template_url')?>/images/soft/yahoom.gif" alt="" title="">
                </div>
                <div class="dicsoft">
                    <h4><a href="#">نرم افزار یاهو مسنجر Yahoo Messenger</a></h4>
                    <p>نسخه نهایی 11.5.3</p>
                </div>
                <div class="clear"></div>
            </li>
            <li>
                <div class="thumb">
                    <img src="<?php bloginfo('template_url')?>/images/soft/winrar.gif" alt="" title="">
                </div>
                <div class="dicsoft">
                    <h4><a href="#">نرم افزار فشرده سازی WinRar</a></h4>
                    <p>نسخه نهایی 5.1</p>
                </div>
                <div class="clear"></div>
            </li>
            <li>
                <div class="thumb">
                    <img src="<?php bloginfo('template_url')?>/images/soft/idm.gif" alt="" title="">
                </div>
                <div class="dicsoft">
                    <h4><a href="#">Internet Download Manager</a></h4>
                    <p>نسخه نهایی 6.19.2</p>
                </div>
                <div class="clear"></div>
            </li>
            <li>
                <div class="thumb">
                    <img src="<?php bloginfo('template_url')?>/images/soft/nero.gif" alt="" title="">
                </div>
                <div class="dicsoft">
                    <h4><a href="#">نرم افزار رایت سی دی Nero Platinum</a></h4>
                    <p>نسخه نهایی 15.0.046</p>
                </div>
                <div class="clear"></div>
            </li>
        </ul>



    </section>
    <section class="sidebox">
        <h3>پرمبحث ترین</h3>
        <ul>
            <?php
            $q=new WP_Query(
                array(
                    "posts_per_page"=>10,
                    "orderby"=>"comment_count",
                    "order"=>"DECS"

                )
            );
            while($q->have_posts())
            {
                $q->the_post();
                ?>
            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            <?php
            }
            wp_reset_postdata();

            ?>
        </ul>
    </section>
    <?php dynamic_sidebar( 'artabaz_text_ads' ); ?>
</aside>