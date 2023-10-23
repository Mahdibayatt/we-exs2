<?php get_header(); ?>
<div class="clear"></div>
<div class="welearn-container">
    <div class="welearn-post">
        <?php
            $c=array();
            $mytags=array();
            while(have_posts())
            {
                the_post();
                $mycat=wp_get_post_categories(get_the_ID());
                $t2=wp_get_post_tags(get_the_ID());

                foreach($t2 as $junk)
                {
                    $mytags[]=$junk->term_id;
                }

                ?>

        <article class="post">
            <header>
                <div class="post-title">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                </div>
            </header>

            <div class="post-content">
                <?php  the_content(""); ?>
            </div>
            <footer>
                <div> <a href="#"
                        onmouseover="tooltip.pop(this,'#sub1<?php the_ID(); ?>',{position:0,effect:'slide'})"><span
                            class="fa fa-user fa-2x"></span></a>
                    <div style="display:none">
                        <div id="sub1<?php the_ID(); ?>">نویسنده: <?php the_author(); ?></div>
                    </div>
                </div>
                <div> <a href="#"
                        onmouseover="tooltip.pop(this,'#sub2<?php the_ID(); ?>',{position:0,effect:'slide'})"><span
                            class="fa fa-sitemap fa-2x"></span></a>
                    <div style="display:none">
                        <div id="sub2<?php the_ID(); ?>">دسته: <?php the_category(","); ?></div>
                    </div>
                </div>
                <div> <a href="#"
                        onmouseover="tooltip.pop(this,'#sub3<?php the_ID(); ?>',{position:0,effect:'slide'})"><span
                            class="fa fa-calendar fa-2x"></span></a>
                    <div style="display:none">
                        <div id="sub3<?php the_ID(); ?>">تاریخ انتشار: <?php echo get_the_date("Y/m/d"); ?></div>
                    </div>
                </div>
                <div> <a href="#"
                        onmouseover="tooltip.pop(this,'#sub4<?php the_ID(); ?>',{position:0,effect:'slide'})"><span
                            class="fa fa-comments-o fa-2x"></span></a>
                    <div style="display:none">
                        <div id="sub4<?php the_ID(); ?>">نظرات: <?php echo get_comments_number(); ?></div>
                    </div>
                </div>
                <div> <a href="#"
                        onmouseover="tooltip.pop(this,'#sub5<?php the_ID(); ?>',{position:0,effect:'slide'})"><span
                            class="fa fa-tags fa-2x"></span></a>
                    <div style="display:none">
                        <div id="sub5<?php the_ID(); ?>">برچسب ها: <?php  the_tags(""); ?></div>
                    </div>
                </div>

            </footer>
        </article>



        <?php
            }
            wp_reset_query();
            ?>

        <div class="clear"></div>

        <div class="post-meta"> <a href="#" class="download"
                onmouseover="tooltip.pop(this,'#sub10',{position:0,effect:'slide'})"> <span
                    class="fa fa-download fa-lg"></span> دانلود </a>
            <div style="display:none">
                <div id="sub10"><?php

                        $t=get_post_meta(get_the_ID(),"link",true) ;
                        $t=explode("\n",$t);
                        $c=1;

                        foreach($t as $junk)
                        {
                            echo "<a href='$junk'>لینک $c</a><br>";
                            $c++;
                        }

                        ?></div>
            </div>
            <a href="#" class="help" onmouseover="tooltip.pop(this,'#sub11',{position:0,effect:'slide'})"> <span
                    class="fa fa-life-ring fa-lg"></span> راهنما </a>
            <div style="display:none">
                <div id="sub11"><?php echo nl2br(get_post_meta(get_the_ID(),"help",true)) ; ?></div>
            </div>
            <a href="#" class="password" onmouseover="tooltip.pop(this,'#sub12',{position:0,effect:'slide'})"> <span
                    class="fa fa-key fa-lg"></span> رمز فایل </a>
            <div style="display:none">
                <div id="sub12"><?php echo get_post_meta(get_the_ID(),"ramz",true); ?></div>
            </div>
            <a href="#" class="info" onmouseover="tooltip.pop(this,'#sub13',{position:0,effect:'slide'})"> <span
                    class="fa fa-info fa-lg"></span> مشخصات فایل </a>
            <div style="display:none">
                <div id="sub13"><?php echo nl2br(get_post_meta(get_the_ID(),"info",true)) ; ?></div>
            </div>
        </div>

        <div class="clear"></div>


        <div class="related">
            <h4>مطالب مرتبط</h4>
            <ul>
                <?php

                    $q=new WP_Query(
                        array(
                            "posts_per_page"=>6,
                            "category__in"=>$mycat,
                            "tag__in"=>$mytags,
                            "post__not_in"=>array(get_the_ID()),
                            "orderby"=>"rand"

                        )
                    );

                    while($q->have_posts())
                    {
                        $q->the_post();
                       // var_dump(the_title());
                        ?>
                <li> <a href="<?php the_permalink(); ?>" class="info"
                        onmouseover="tooltip.pop(this,'#sub14',{position:0,effect:'slide'})">
                        <?php the_post_thumbnail(); ?>
                        <div style="display:none">
                            <div id="sub14"><?php the_title(); ?></div>
                        </div>
                    </a> </li>

                <?php
                    }
                    wp_reset_postdata();

                    ?>

            </ul>
        </div>
        <?php
            if ( comments_open() || get_comments_number() ) {
                comments_template();
            }

            ?>
    </div>



    <?php get_sidebar("single"); ?>
</div>
</div>
<div class="clear"></div>
<?php get_footer(); ?>