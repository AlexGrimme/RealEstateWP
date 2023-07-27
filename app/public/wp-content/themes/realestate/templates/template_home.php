<?php
/**
 * Template Name: Home Page
 */
?>
<?php get_header(); ?>
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="home_post">
                    <?php
                    // The Query.
                    $args = array(
                        'post_type' => 'our_news',
                    );
                    $the_query = new WP_Query($args);
                    ?>
                    <?php if ($the_query->have_posts()): ?>
                        <?php while ($the_query->have_posts()): ?>
                        <?php $the_query->the_post(); ?>
                        <div class="home_post__info_block">
                            <img src="<?php echo wp_get_attachment_image_url(get_post_thumbnail_id($post->ID),'full'); ?>" class="home_post__chel" alt="man">
                            <h1><?php the_title(); ?></h1>
                            <p class="home_post__info"><?php echo get_the_date(); ?> - <?php the_author(); ?></p>
                            <p class="home_post__block"><?php the_content(); ?></p>
                            <a href="<?php the_permalink(); ?>" class="home_post__button">Read More</a>
                        </div>

                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container-fluid">
        <div class="home_mini_post_all">
            <div class="row">
                <div class="col-8">
                    <div class="row">
                        <div class="col-6 g-0">
                            <div class="home_mini_post">
                                <img src="assets/img/post_thumb1.png" alt="Ludi" class="img_realtors">
                                <div class="home_mini_post__info_block">
                                    <p class="home_post__mini__info">11/05/2018 - John Blank</p>
                                    <h1>Placeholder Title Demo Text Placeholder </h1>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                    </p>
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 g-0">
                            <div class="home_mini_post">
                                <img src="assets/img/post_thumb2.png" alt="Ludi" class="img_realtors">
                                <div class="home_mini_post__info_block">
                                    <p class="home_post__mini__info">11/05/2018 - John Blank</p>
                                    <h1>Placeholder Title Demo Text Placeholder </h1>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                    </p>
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 g-0">
                            <div class="home_mini_post">
                                <img src="assets/img/post_thumb3.png" alt="Ludi" class="img_realtors">
                                <div class="home_mini_post__info_block">
                                    <p class="home_post__mini__info">11/05/2018 - John Blank</p>
                                    <h1>Placeholder Title Demo Text Placeholder </h1>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                    </p>
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 g-0">
                            <div class="home_mini_post">
                                <img src="assets/img/post_thumb4.png" alt="Ludi" class="img_realtors">
                                <div class="home_mini_post__info_block">
                                    <p class="home_post__mini__info">11/05/2018 - John Blank</p>
                                    <h1>Placeholder Title Demo Text Placeholder </h1>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                    </p>
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="nav_menu">
                        <h1>Discover More</h1>

                        <form>
                            <input type="text" placeholder="Search">
                        </form>

                        <h2>Categories</h2>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-6 g-0">
                                    <div class="nav_menu_col">
                                        <a href="#">Buying</a>
                                        <a href="#">Selling</a>
                                        <a href="#">Listing</a>
                                        <a href="#">Mortgages</a>
                                        <a href="#">Placeholder</a>
                                    </div>
                                </div>
                                <div class="col-6 g-0">
                                    <div class="nav_menu_col">
                                        <a href="#">Buying</a>
                                        <a href="#">Selling</a>
                                        <a href="#">Listing</a>
                                        <a href="#">Mortgages</a>
                                        <a href="#">Placeholder</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h2>Archived</h2>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-6 g-0">
                                    <div class="nav_menu_col">
                                        <a href="#">January 2017</a>
                                        <a href="#">February 2017</a>
                                        <a href="#">March 2017</a>
                                        <a href="#">April 2017</a>
                                        <a href="#">May 2017</a>
                                    </div>
                                </div>
                                <div class="col-6 g-0">
                                    <div class="nav_menu_col">
                                        <a href="#">January 2017</a>
                                        <a href="#">February 2017</a>
                                        <a href="#">March 2017</a>
                                        <a href="#">April 2017</a>
                                        <a href="#">May 2017</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h2>Popular</h2>
                        <div class="post_n">
                            <img class="nav_menu__imgs" src="assets/img/Nav_menu__img.png" alt="peoples_img">
                            <h3>Placeholder Title Demo Text</h3>
                            <p>11/05/2018 - John Blank</p>
                        </div>
                        <div class="post_n">
                            <img class="nav_menu__imgs" src="assets/img/Nav_menu__img2.png" alt="peoples_img">
                            <h3>Placeholder Title Demo Text</h3>
                            <p>11/05/2018 - John Blank</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <Div class="selector">

    </Div>
</section>
<?php get_footer(); ?>
