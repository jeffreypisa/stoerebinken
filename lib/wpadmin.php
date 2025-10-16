<?php
function remove_menus(){
  
  // remove_menu_page( 'edit.php' );                   //Posts
  remove_menu_page( 'edit-comments.php' );          //Comments
  
}
add_action( 'admin_menu', 'remove_menus' );

// Voeg custom CSS toe in de admin
function my_admin_css() {
    echo '<style>
        .acf-field-68d11d0d2b470 iframe {
            height: 150px !important;
        }
    </style>';
}
add_action( 'admin_head', 'my_admin_css' );


?>