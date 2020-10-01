<?php global $post;
if (!theme_the_post()) return;
 $post0 = $post;
 ?>
<?php $skip_min_height = false; ?><section class="u-clearfix u-section-1" id="sec-0967">
  <div class="u-clearfix u-sheet u-sheet-1">
    <?php if ($post0 !== null) { ?><h2 class="u-blog-control u-custom-font u-expanded-width u-heading-font u-text u-text-1">
      <?php if (!is_singular()): ?><a class="u-post-header-link" href="<?php the_permalink(); ?>"><?php endif; ?><?php the_title(); ?><?php if (!is_singular()): ?></a><?php endif; ?>
    </h2><?php } ?>
    <div class="u-carousel u-gallery u-layout-carousel u-lightbox u-no-transition u-show-text-none u-gallery-1" data-interval="5000" data-u-ride="carousel" id="carousel-eedf">
      <ol class="u-absolute-hcenter u-carousel-indicators u-carousel-indicators-1">
        <li data-u-target="#carousel-eedf" data-u-slide-to="0" class="u-active u-grey-70 u-shape-circle" style="width: 10px; height: 10px;"></li>
        <li data-u-target="#carousel-eedf" data-u-slide-to="1" class="u-grey-70 u-shape-circle" style="width: 10px; height: 10px;"></li>
      </ol>
      <div class="u-carousel-inner u-gallery-inner" role="listbox">
        <div class="active u-active u-carousel-item u-gallery-item">
          <div class="u-back-slide">
            <img class="u-back-image u-expanded lazyload" data-src="#default-image.jpg">
          </div>
          <div class="u-over-slide u-over-slide-1">
            <h3 class="u-gallery-heading">Sample Title</h3>
            <p class="u-gallery-text">Sample Text</p>
          </div>
        </div>
        <div class="u-carousel-item u-gallery-item">
          <div class="u-back-slide">
            <img class="u-back-image u-expanded lazyload" data-src="#default-image.jpg">
          </div>
          <div class="u-over-slide u-over-slide-2">
            <h3 class="u-gallery-heading">Sample Title</h3>
            <p class="u-gallery-text">Sample Text</p>
          </div>
        </div>
      </div>
      <a class="u-absolute-vcenter u-carousel-control u-carousel-control-prev u-grey-70 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-carousel-control-1" href="#carousel-eedf" role="button" data-u-slide="prev">
        <span aria-hidden="true">
          <svg viewBox="0 0 451.847 451.847"><path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path></svg>
        </span>
        <span class="sr-only">
          <svg viewBox="0 0 451.847 451.847"><path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path></svg>
        </span>
      </a>
      <a class="u-absolute-vcenter u-carousel-control u-carousel-control-next u-grey-70 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-carousel-control-2" href="#carousel-eedf" role="button" data-u-slide="next">
        <span aria-hidden="true">
          <svg viewBox="0 0 451.846 451.847"><path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path></svg>
        </span>
        <span class="sr-only">
          <svg viewBox="0 0 451.846 451.847"><path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path></svg>
        </span>
      </a>
    </div>
    <div class="u-metadata u-metadata-1">
      <?php if ($post0 !== null) { ?><span class="u-meta-date u-meta-icon"><?php if($post->post_type !== "page"){ echo get_the_date(); }?></span><?php } ?>
      <?php if ($post0 !== null) { ?><?php $categories = theme_get_category_list(); if ($categories):?><span class="u-meta-category u-meta-icon"><?php echo $categories; ?></span><?php endif; ?><?php } ?>
    </div>
    <?php if ($post0 !== null) { ?><div class="u-blog-control u-expanded-width-sm u-expanded-width-xl u-expanded-width-xs u-post-content u-text u-text-2"><?php echo is_singular() ? theme_get_content() : theme_get_excerpt(); ?></div><?php } ?>
    <a href="https://nicepage.com" class="u-btn u-button-style u-hover-palette-1-base u-palette-1-light-1 u-btn-1">Request Info</a>
  </div>
</section><?php if ($skip_min_height) { echo "<style> .u-section-1, .u-section-1 .u-sheet {min-height: auto;}</style>"; } ?>
