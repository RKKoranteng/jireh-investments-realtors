<?php global $post;
if (!theme_the_post()) return;
 $post0 = $post;
 ?>
<?php $skip_min_height = false; ?><section class="u-clearfix u-section-1" id="sec-c4bf">
  <div class="u-clearfix u-sheet u-sheet-1">
    <div class="u-clearfix u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-gutter-30 u-layout-spacing-vertical u-layout-wrap u-layout-wrap-1">
      <div class="u-layout">
        <div class="u-layout-row">
          <?php if ($post0 !== null) { ?><?php $post_image = theme_get_post_image(array('class' => 'u-align-left u-blog-control u-container-style u-image u-layout-cell u-left-cell u-size-26 lazyload u-image-1', 'default' => '/images/default-image.jpg', 'background' => true)); ?><?php } ?><div class="u-align-left u-blog-control u-container-style u-image u-layout-cell u-left-cell u-size-26 lazyload u-image-1 <?php echo 'post-background-image-' . count($GLOBALS['theme_background_images_styles']); ?>" src="" data-image-width="1080" data-image-height="1080" data-bg="url(&quot;<?php echo $post_image; ?>&quot;)">
            <div class="u-container-layout u-container-layout-1"></div>
          </div>
          <div class="u-align-left-md u-align-left-xl u-align-left-xs u-container-style u-layout-cell u-right-cell u-size-34 u-layout-cell-2">
            <div class="u-container-layout u-valign-middle u-container-layout-2">
              <?php if ($post0 !== null) { ?><h2 class="u-blog-control u-text u-text-1">
                <?php if (!is_singular()): ?><a class="u-post-header-link" href="<?php the_permalink(); ?>"><?php endif; ?><?php the_title(); ?><?php if (!is_singular()): ?></a><?php endif; ?>
              </h2><?php } ?>
              <div class="u-metadata u-metadata-1">
                <?php if ($post0 !== null) { ?><span class="u-meta-author u-meta-icon"><a class="url u-textlink" href="<?php echo get_author_posts_url(get_the_author_meta('ID')) ?>" title="<?php echo esc_attr(__('View all posts by ' . get_the_author(), 'jirehrealtors')) ?>">
                                        <span class="fn n"><?php echo get_the_author(); ?></span>
                                   </a></span><?php } ?>
                <?php if ($post0 !== null) { ?><span class="u-meta-date u-meta-icon"><?php if($post->post_type !== "page"){ echo get_the_date(); }?></span><?php } ?>
              </div>
              <?php if ($post0 !== null) { ?><div class="u-blog-control u-post-content u-text u-text-2"><?php echo is_singular() ? theme_get_content() : theme_get_excerpt(); ?></div><?php } ?>
              <?php if ($post0 !== null) { ?><a href="<?php the_permalink(); ?>" class="u-blog-control u-link u-link-1"><?php _e(sprintf(__('Read more', 'jirehrealtors'))); ?></a><?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section><?php if ($skip_min_height) { echo "<style> .u-section-1, .u-section-1 .u-sheet {min-height: auto;}</style>"; } ?>