<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 */
?>
<?php
$footerHideBlog = false;
$footerHidePost = false;
$pagePost = is_single();
$pageBlog = is_home(); ?>
		</div><!-- #content -->
<?php if (!$pageBlog && !$pagePost || $pageBlog && !$footerHideBlog || $pagePost && !$footerHidePost) { ?>
        <footer class="u-clearfix u-footer u-white" id="sec-17a6">
  <div class="u-clearfix u-sheet u-sheet-1">
    <?php $logo = theme_get_logo(array(
            'default_src' => "/images/Jireh-Investments-Realtors-icon.png",
            'default_url' => home_url('/'),
            'default_width' => '72'
        )); ?><a <?php if (is_customize_preview()) echo 'data-default-src="' . esc_url($logo['default_src']) . '" '; ?>href="<?php echo esc_url($logo['url']); ?>" class="u-image u-logo u-image-1 custom-logo-link" data-image-width="72" data-image-height="63" title="Jireh Investments Realtors">
      <img <?php if ($logo['svg']) {echo 'style="width:'.$logo['width'].'px"';} else {echo 'style="width:auto"';}?>src="<?php echo esc_url($logo['src']); ?>" class="u-logo-image u-logo-image-1" data-image-width="72">
    </a>
    <div class="u-align-left u-social-icons u-spacing-10 u-social-icons-1">
      <a class="u-social-url" target="_blank" href="https://facebook.com/Carol.Real.Estate.Agent">
        <span class="u-icon u-icon-circle u-social-facebook u-social-type-color u-icon-1">
          <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-d874"></use></svg>
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 112 112" x="0px" y="0px" id="svg-d874" style="color: rgb(59, 89, 152);"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M73.5,31.6h-9.1c-1.4,0-3.6,0.8-3.6,3.9v8.5h12.6L72,58.3H60.8v40.8H43.9V58.3h-8V43.9h8v-9.2
            c0-6.7,3.1-17,17-17h12.5v13.9H73.5z"></path></svg>
        </span>
      </a>
      <a class="u-social-url" target="_blank" href="https://linkedin.com/in/carol-walton-aa3735117">
        <span class="u-icon u-icon-circle u-social-linkedin u-social-type-color u-icon-2">
          <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-ea45"></use></svg>
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 112 112" x="0px" y="0px" id="svg-ea45" style="color: rgb(0, 122, 185);"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M41.3,83.7H27.9V43.4h13.4V83.7z M34.6,37.9L34.6,37.9c-4.6,0-7.5-3.1-7.5-7c0-4,3-7,7.6-7s7.4,3,7.5,7
            C42.2,34.8,39.2,37.9,34.6,37.9z M89.6,83.7H76.2V62.2c0-5.4-1.9-9.1-6.8-9.1c-3.7,0-5.9,2.5-6.9,4.9c-0.4,0.9-0.4,2.1-0.4,3.3v22.5
            H48.7c0,0,0.2-36.5,0-40.3h13.4v5.7c1.8-2.7,5-6.7,12.1-6.7c8.8,0,15.4,5.8,15.4,18.1V83.7z"></path></svg>
        </span>
      </a>
    </div>
    <div class="u-border-1 u-border-white u-expanded-width u-line u-line-horizontal u-opacity u-opacity-50 u-line-1"></div>
    <p class="u-align-center u-text u-text-1">By searching you agree to the <a href="[page_68145746]" class="u-btn u-button-style u-none u-text-palette-1-base u-btn-1">Terms of Use</a>, and <a href="[page_26933767]" class="u-btn u-button-style u-none u-text-palette-1-base u-btn-2">Privacy Policy</a>. <br>
      <br>© 2020 <a href="[page_75386379]" class="u-btn u-button-style u-none u-text-palette-1-base u-btn-3">Jireh Investments Realtors</a>. All rights reserved.  
    </p>
  </div>
</footer>
<?php } ?>
        
        
	</div><!-- .site-inner -->
</div><!-- #page -->

<?php wp_footer(); ?>
<?php back_to_top(); ?>
</body>
</html>
