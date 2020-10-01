<section class="u-clearfix u-section-1" id="sec-0967">
  <div class="u-clearfix u-sheet u-sheet-1" style="min-height: auto;">
<?php
if ( is_singular( 'attachment' ) ) {
    // Parent post navigation.
    the_post_navigation( array(
        'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'jirehrealtors' ),
    ) );
} elseif ( is_singular( 'post' ) ) {
    // Previous/next post navigation.
    $nav_html = get_the_post_navigation(array(
        'next_text' => '%title &raquo',
        'prev_text' => '&laquo %title',
    ));
    $nav_html = str_replace(
        array(
            '<a',
            'post-navigation',
        ),
        array(
            '<a class="u-btn u-button-style u-hover-palette-1-base u-palette-1-light-1 u-btn-1"',
            'post-navigation  u-gallery-text',
        ), $nav_html
    );
    echo $nav_html;
}
?>
</div>
</section>