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

<div class="container">
  <div class="row">
    <div class="col-sm">
    <?php if(get_field('bodytext')): ?>
       
                <div class="text-center">
                    <?php the_field('bodytext'); ?>
                </div>
                
       
    <?php endif; ?>
    </div>
    
  </div>
</div>

<section class="teaser-section">
    <div class="container">
        <div class="teaser">
        <?php if(get_field('title')): ?>
       
       <div class="text-center">
           <?php the_field('title'); ?>
       </div>
        <?php endif; ?>
        </div>
        <div class="col">
            <img src="<?php the_field('mobile-image'); ?>" alt="" srcset="">
        </div>
        <div class="col">
        <?php if(get_field('teaser-body')): ?>
       
       <div class="text-center">
           <?php the_field('teaser-body'); ?>
       </div>
       <div class="btn">
        <button><?php the_field('btn-text'); ?></button>
       </div>
        <?php endif; ?>
        </div>
    </div>
</section>

<section class="three-columns">
    <div class="container">
        <div class="header-3columns">
        <?php the_field('header'); ?>
       
      
        <div class="col">
            <img src="<?php the_field('c1-image'); ?>" alt="" srcset="">
            <h2>
            <?php the_field('c1-title'); ?>
            </h2>
            <p>
            <?php the_field('c1-content') ?>
            </p>
            <button><?php the_field('c1-btn'); ?></button>
        </div>
        <div class="col">
            <img src="<?php the_field('c2-image'); ?>" alt="" srcset="">
            <h2>
            <?php the_field('c2-title'); ?>
            </h2>
            <p>
            <?php the_field('c2-content') ?>
            </p>
            <button><?php the_field('c2-btn'); ?></button>
        </div>
        <div class="col">
            <img src="<?php the_field('c3-image'); ?>" alt="" srcset="">
            <h2>
            <?php the_field('c3-title'); ?>
            </h2>
            <p>
            <?php the_field('c3-content') ?>
            </p>
            <button><?php the_field('c3-btn'); ?></button>
        </div>
        
        
       
    </div>
</section>

<section class="freq">
    <div class="container">
    <div class="col">
            <img src="<?php the_field('frequenzumrichter-image'); ?>" alt="" srcset="">
            
        </div>
        <div class="col">
            
            <?php the_field('frequenzumrichter-title'); ?>
            </h2>
            <p>
            <?php the_field('frequenzumrichter-body') ?>
            </p>
            <button><?php the_field('frequenzumrichter-btn'); ?></button>
        </div>
    </div>
</section>

<section class="geba">
    <div class="container">
        <div class="col">
            
            <?php the_field('gebaudeautomation-title'); ?>
            </h2>
            <p>
            <?php the_field('gebaudeautomation-body') ?>
            </p>
            <button><?php the_field('gebaudeautomation-btn'); ?></button>
        </div>
        <div class="col">
            <img src="<?php the_field('gebäudeautomation-image'); ?>" alt="" srcset="">
            
        </div>
        
    </div>
</section>

<section class="motoren">
    <div class="container">
    <div class="col">
            <img src="<?php the_field('motoren-image'); ?>" alt="" srcset="">
            
        </div>
        <div class="col">
            
            <?php the_field('motoren-title'); ?>
            </h2>
            <p>
            <?php the_field('motoren-body') ?>
            </p>
            <button><?php the_field('motoren-btn'); ?></button>
        </div>
    </div>
</section>

<section class="digital">
    <div class="container">
        <div class="col">
            
            <?php the_field('digitalisierung-title'); ?>
            </h2>
            <p>
            <?php the_field('digitalisierung-body') ?>
            </p>
            <button><?php the_field('digitalisierung-btn'); ?></button>
        </div>
        <div class="col">
            <img src="<?php the_field('digitalisierung-image'); ?>" alt="" srcset="">
            
        </div>
        
    </div>
</section>

<?php get_footer(); ?>