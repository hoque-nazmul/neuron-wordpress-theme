<?php get_header(); ?>
<section class="page-title" style="background image:url(<?php the_post_thumbnail_url('large') ?>)">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- breadcrumb content -->
                <div class="page-breadcrumbd">
                    <h2>News & Press</h2>
                    <p><a href="<?php echo get_site_url(); ?>">Home</a> / News Details</p>
                </div><!-- end breadcrumb content -->
            </div>
        </div>
    </div>
</section><!-- end breadcrumb -->
<section class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- post wrapper -->
                <div class="post-wrapper clearfix">
                    <!-- post thumbnail -->
                    <div class="single-thumb">
                        <a href="">
                            <?php the_post_thumbnail('large'); ?>
                        </a>
                    </div>

                    <!-- start single blog content -->
                    <div class="blog-content">
                        <!-- start single blog header -->
                        <header class="single-header">
                            <div class="single-post-title">
                                <h2><?php the_title(); ?></h2>
                            </div>
                            <!-- post meta -->
                            <div class="post-meta">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-user"></i>
                                            Ahmed Faruk
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-tag"></i>
                                            Marketing, Sales
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-calendar"></i>
                                            20 Mar 2017
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-comment"></i>
                                            25 Comments
                                        </a>
                                    </li>
                                    <li class="rating">
                                        <a href="#">
                                            Rating
                                        </a>
                                        <ul><a href="#">
                                            </a>
                                            <li><a href="#"></a><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        </ul>

                                    </li>
                                </ul>
                            </div>
                        </header><!-- /.end single blog header -->

                        <div class="entry-content">
                            <?php while (have_posts()) : the_post(); ?>

                                <?php the_content(); ?>

                            <?php endwhile; ?>
                        </div>

                        <!-- start social link -->
                        <div class="social-link">
                            <ul>
                                <li><a class="facebook" href="#">
                                        <i class="fa fa-facebook"></i>
                                        <span>1.6k</span>
                                    </a></li>
                                <li><a class="twitter" href="#">
                                        <i class="fa fa-twitter"></i>
                                        <span>1.6k</span>
                                    </a></li>
                                <li><a class="google" href="#">
                                        <i class="fa fa-google-plus"></i>
                                        <span>1.6k</span>
                                    </a></li>
                                <li><a class="linkedin" href="#">
                                        <i class="fa fa-linkedin"></i>
                                        <span>1.6k</span>
                                    </a></li>
                                <li><a class="pinterest" href="#">
                                        <i class="fa fa-pinterest-p"></i>
                                        <span>400</span>
                                    </a></li>
                                <li><a class="reddit" href="#">
                                        <i class="fa fa-reddit-alien"></i>
                                        <span>400</span>
                                    </a></li>
                                <li><a class="message" href="#">
                                        <i class="fa fa-envelope"></i>
                                        <span>400</span>
                                    </a></li>
                            </ul>
                        </div><!-- /.end social link -->



                    </div><!-- /.end single blog content -->

                    <!-- start comments wrapper -->
                    <div class="comments-wrapper">
                        <?php 
                            if ( comments_open() || get_comments_number() ) :
                                comments_template();
                            endif;
                        
                        ?>
                        


                    </div><!-- /.end comments wrapper -->

                    <div class="comments-responsed-wrapper">
                        <div class="single-post-title comment-title">
                            <h2>Commets (5)</h2>
                        </div>
                        <!-- post comments -->
                        <div class="comments-media">
                            <!-- 1st comment -->
                            <ol>
                                <li>
                                    <div class="comment-inner">
                                        <div class="comment-avatar">
                                            <img src="assets/img/comments/1.jpg" alt="">
                                        </div>
                                        <div class="comment-section">
                                            <header>
                                                <h2>Josef Milton</h2>
                                                <span> 15 minutes ago </span>
                                            </header>
                                            <div class="comment-content">
                                                <p>The challenge is to ensure that when a client visits your website they feel positive about your company. </p>
                                                <a href="#" class="btn-comment-replay">Replay</a>
                                            </div>
                                        </div>
                                    </div>

                                    <ul>
                                        <li>
                                            <div class="comment-inner">
                                                <div class="comment-avatar">
                                                    <img src="assets/img/comments/2.jpg" alt="">
                                                </div>
                                                <div class="comment-section">
                                                    <header>
                                                        <h2>Jonathon Bin</h2>
                                                        <span> 10 minutes ago </span>
                                                    </header>
                                                    <div class="comment-content">
                                                        <p>The challenge is to ensure that when a client visits your website they feel positive about your company. </p>
                                                        <a href="#" class="btn-comment-replay">Replay</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="comment-inner">
                                                <div class="comment-avatar">
                                                    <img src="assets/img/comments/1.jpg" alt="">
                                                </div>
                                                <div class="comment-section">
                                                    <header>
                                                        <h2>Josef Milton</h2>
                                                        <span> 5 minutes ago </span>
                                                    </header>
                                                    <div class="comment-content">
                                                        <p>The challenge is to ensure that when a client visits your website they feel positive about your company. </p>
                                                        <a href="#" class="btn-comment-replay">Replay</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ol>
                            <!-- 2nd comment -->
                            <ol>
                                <li>
                                    <div class="comment-inner">
                                        <div class="comment-avatar">
                                            <img src="assets/img/comments/3.jpg" alt="">
                                        </div>
                                        <div class="comment-section">
                                            <header>
                                                <h2>Tomas Udoya</h2>
                                                <span> 20 minutes ago </span>
                                            </header>
                                            <div class="comment-content">
                                                <p>The challenge is to ensure that when a client visits your website they feel positive about your company. </p>
                                                <a href="#" class="btn-comment-replay">Replay</a>
                                            </div>
                                        </div>
                                    </div>

                                    <ul>
                                        <li>
                                            <div class="comment-inner">
                                                <div class="comment-avatar">
                                                    <img src="assets/img/comments/2.jpg" alt="">
                                                </div>
                                                <div class="comment-section">
                                                    <header>
                                                        <h2>Josef Milton</h2>
                                                        <span> 15 minutes ago </span>
                                                    </header>
                                                    <div class="comment-content">
                                                        <p>The challenge is to ensure that when a client visits your website they feel positive about your company. </p>
                                                        <a href="#" class="btn-comment-replay">Replay</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ol>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>