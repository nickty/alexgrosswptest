<?php get_header(); ?>

<div class="hero">
    <?php if(get_field('img')): ?>
        <div style="background-image: url('<?php the_field('img'); ?>');" class="our-image" />
        <?php if(get_field('hero_text')): ?>
            <div class="hero-text">
                <h3 class="hero-tdext">
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
        <div class="body-text">
            <?php if(get_field('bodytext')): ?>
                <p>    <?php the_field('bodytext'); ?> </p>
                
           <?php endif; ?>
        </div>
    </div>
   
  </div>
</div>

<section class="teaser-section">
    <div class="container">
        
        <div class="row teaser-holder">
            <div class="col-sm-4">
                <div class="teaser">
                    <?php if(get_field('title')): ?>
       
                        <div>
                            <h2><?php the_field('title'); ?></h2>
                        </div>
                    <?php endif; ?>
                </div>
                <img src="<?php the_field('mobile-image'); ?>" alt="" srcset="">
            </div>
            <div class="col-sm-8">
                <?php the_field('teaser-body'); ?>
            
            
                <div>
                    <button  class="btn mt-5"><?php the_field('btn-text'); ?></button>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="three-columns">
    <div class="container">
        <div class="header-3columns">
        <h2 class="mb-3"><?php the_field('header'); ?></h2>
       
      <div class="row">
            <div class="col-sm-4">
                <img src="<?php the_field('c1-image'); ?>" alt="" srcset="">
                <h2>
                <?php the_field('c1-title'); ?>
                </h2>
                <p>
                <?php the_field('c1-content') ?>
                </p>
                <button class="btn"><?php the_field('c1-btn'); ?></button>
            </div>
            <div class="col-sm-4">
                <img src="<?php the_field('c2-image'); ?>" alt="" srcset="">
                <h2>
                <?php the_field('c2-title'); ?>
                </h2>
                <p>
                <?php the_field('c2-content') ?>
                </p>
                <button  class="btn"><?php the_field('c2-btn'); ?></button>
            </div>
            <div class="col-sm-4">
                <img src="<?php the_field('c3-image'); ?>" alt="" srcset="">
                <h2>
                <?php the_field('c3-title'); ?>
                </h2>
                <p>
                <?php the_field('c3-content') ?>
                </p>
                <button  class="btn"><?php the_field('c3-btn'); ?></button>
            </div>
       </div>  
        
       
    </div>
</section>

<section class="freq">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <img src="<?php the_field('frequenzumrichter-image'); ?>" alt="" srcset="">
                
            </div>
            <div class="col-sm-8 fleq-inner-flex">
                <h2>
                <?php the_field('frequenzumrichter-title'); ?>
                </h2>
                <p>
                <?php the_field('frequenzumrichter-body') ?>
                </p>
                <button  class="btn"><?php the_field('frequenzumrichter-btn'); ?></button>
            </div>
        </div>    
    </div>
</section>

<section class="geba">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 fleq-inner-flex">
                <h2>
                <?php the_field('gebaudeautomation-title'); ?>
                </h2>
                <p>
                <?php the_field('gebaudeautomation-body') ?>
                </p>
                <button  class="btn"><?php the_field('gebaudeautomation-btn'); ?></button>
            </div>
            <div class="col-sm-4">
                <img src="<?php the_field('gebäudeautomation-image'); ?>" alt="" srcset="">
                
            </div>
        </div>
    </div>
</section>

<section class="motoren">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <img src="<?php the_field('motoren-image'); ?>" alt="" srcset="">
                
            </div>
            <div class="col-sm-8 fleq-inner-flex">
                <h2>
                <?php the_field('motoren-title'); ?>
                </h2>
                <p>
                <?php the_field('motoren-body') ?>
                </p>
                <button  class="btn"><?php the_field('motoren-btn'); ?></button>
            </div>
        </div>
    </div>
</section>

<section class="digital">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 fleq-inner-flex">
                <h2>
                <?php the_field('digitalisierung-title'); ?>
                </h2>
                <p>
                <?php the_field('digitalisierung-body') ?>
                </p>
                <button  class="btn"><?php the_field('digitalisierung-btn'); ?></button>
            </div>
            <div class="col-sm-4">
                <img src="<?php the_field('digitalisierung-image'); ?>" alt="" srcset="">
                
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>