<?php 
/* Template Name: home */ 
get_header(); 
?>

<main>
    <section class="test">
        <h2 class="test__title">Категорії</h2>
        <div class="custom-posts-container">
            <div class="categories-navigation">
                <?php
                $terms = get_terms(array(
                    'taxonomy' => 'custom_category',
                    'hide_empty' => false,
                ));
                
                foreach ($terms as $index => $term) {
                    echo '<button class="category-button" data-target="#swiper-' . esc_attr($term->slug) . '">' . esc_html($term->name) . '</button>';
                }
                ?>
            </div>

            <?php
            foreach ($terms as $term) :
                $query = new WP_Query(array(
                    'post_type' => 'custom_post',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'custom_category',
                            'field' => 'slug',
                            'terms' => $term->slug,
                        ),
                    ),
                    'posts_per_page' => 6,
                ));
                ?>

                <div class="custom-category-section swiper-container-wrapper" id="swiper-<?php echo esc_attr($term->slug); ?>" style="display: none;">
                    <?php if ($query->have_posts()) : ?>
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <?php while ($query->have_posts()) : $query->the_post(); ?>
                                    <div class="swiper-slide">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php if (get_field('img')): ?>
                                                <img width="600px" height="300px" src="<?php echo esc_url(get_field('img')['url']); ?>" alt="<?php echo esc_attr(get_field('img')['alt']); ?>">
                                            <?php elseif (has_post_thumbnail()): ?>
                                                <?php the_post_thumbnail('medium'); ?>
                                            <?php endif; ?>
                                            <div class="content-box__wrapper">
                                            <h5 class="titli-category"><?php echo esc_html($term->name); ?></h5>
                                            <h3 class="acf-title"><?php echo esc_html(get_field('title')); ?></h3>
                                            <p class="acf-text"><?php echo esc_html(get_field('text')); ?></p>
                                            <a class="acf-link" href="#"><p class="acf-detail"><?php echo esc_html(get_field('detal')); ?></p></a>
                                            </div>
                                        </a>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                            <div class="swiper-nav">
                                <div class="swiper-prev">
                                    <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M27 41L18 32L27 23" stroke="#797979" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                                <div class="swiper-next">
                                    <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M18 41L27 32L18 23" stroke="#797979" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                                <div class="swiper-custom-pagination"></div>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php wp_reset_postdata(); ?>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>
