<?php get_header(); ?>

<!-- ::::::::::::::::::::: Page Title Section:::::::::::::::::::::::::: -->
<?php while (have_posts()) : the_post(); ?>
    <section class="page-title" <?php if (has_post_thumbnail()) : ?> style="background:url(<?php the_post_thumbnail_url('large') ?>)" <?php endif; ?>>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- breadcrumb content -->
                    <div class="page-breadcrumbd">
                        <h2><?php the_title(); ?></h2>
                        <p><a href="<?php echo get_site_url(); ?>">Home</a> / <?php the_title(); ?></p>
                    </div><!-- end breadcrumb content -->
                </div>
            </div>
        </div>
    </section><!-- end breadcrumb -->

    <!-- ::::::::::::::::::::: Block Section:::::::::::::::::::::::::: -->
    <section class="single-portfolio-wrapper section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <!-- single portfolio images -->
                    <div class="single-portfolio-images">
                        <?php 
                        $img = get_post_meta(get_the_ID(), 'preview_image', true);
                        ?>
                        <?php if(!empty($img)): ?>
                            <img class="img-responsive" src="<?php echo $img; ?>" alt="">
                        <?php else: 
                            the_post_thumbnail('large');
                        endif;
                            ?>
                    </div>
                </div>
                <div class="col-md-4">
                    <!-- single portfolio info -->
                    <div class="single-portfolio-inner">
                        <header class="single-portfolio-title">
                            <?php 
                                $sub_title = get_post_meta(get_the_ID(), 'sub_title', true);
                                $link = get_post_meta(get_the_ID(), 'single_link_text', true);
                                $url = get_post_meta(get_the_ID(), 'single_link_url', true);
                                $gorups = get_post_meta(get_the_ID(), 'group_demo', true);

                            ?>
                            <a><?php if(!empty($sub_title)){
                                echo $sub_title;
                            } ?></a>
                            <?php the_content(); ?>
                            
            
                            <ul class="portfolio-meta">

                                <?php if(!empty($gorups)): foreach($gorups as $gorup):?>
                                    <li><span> <?php echo $gorup['title']; ?> </span> <?php echo $gorup['value']; ?></li>
                                <?php endforeach;endif;?>
                            </ul>
                        </div>
                        <?php if(!empty($link)): ?>
                            <a class="btn btn-primary" href="<?php echo $url; ?>"> <?php echo $link; ?> </a>
                        <?php endif;?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endwhile; ?>

<?php get_footer(); ?>