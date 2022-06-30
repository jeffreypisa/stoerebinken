<?php
  function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
  }
  add_filter('upload_mimes', 'cc_mime_types');
  
  add_filter('jpeg_quality', function($arg){return 90;});
   add_filter('wp_editor_set_quality', function($arg){return 90;});
?>