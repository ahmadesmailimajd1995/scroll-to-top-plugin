<?php

function scroll_to_top () {
    return '<a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="fas fa-arrow-up"></i></a>';
}

add_shortcode( 'stt_scroll_shortcode', 'scroll_to_top');
