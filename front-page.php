<?php get_header(); ?>

<div class="hero">
    <?php if(get_field('img')): ?>
        <div style="background-image: url('<?php the_field('img'); ?>');" class="our-image" />
        <?php if(get_field('hero_text')): ?>
            <div class="caption-hero">
                <h3 class="text-center">
                    <?php the_field('hero_text'); ?>
                </h3>
                
            </div>
            <?php endif; ?>
        </div>
        <?php endif; ?>
</div>

<?php get_footer(); ?>