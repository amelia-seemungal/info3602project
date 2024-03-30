<?php
    get_header();
    while(have_posts()){
        the_post();
        ?>

<div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/soapswithcandles.jpg')?>;"></div>
    <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title"><?php the_title() ?></h1>
    </div>  
  </div>

  <div class="container container--narrow page-section">

  <?php
  $testArray = get_pages(array(
    'child_of'=> get_the_ID()
  ));
  $theParent= wp_get_post_parent_ID(get_the_ID());
  if($theParent or $testArray){?>
      <div class="page-links">
      <h2 class="page-links__title">
        <a href="<?php echo get_permalink($theParent); ?>">
        <?php echo get_the_title($theParent); echo $theParent?> </a>
  </h2>
      <ul class="min-list">
        <?php 
        if($theParent){
          $findChildrenOf = $theParent;
        }
        else{
          $findChildrenOf = get_the_ID();
        }
        wp_list_pages(array(
        'title_li'=>NULL,
        'child_of'=> $findChildrenOf,
        'sort_column' => 'menu_order' 
        ));
        ?>
        </ul> 
    </div>
    <?php } ?>
  

  </div class="generic-content">
    <?php the_content() ?>
  </div>
  
</div>

    <?php
    }
    get_footer();
    ?>