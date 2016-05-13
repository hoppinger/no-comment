<?php

class NoComment {
  function filters() {

  }

  function actions() {
    add_action('admin_bar_menu',[ $this, 'remove_from_admin_bar' ], 999);
    add_action('admin_menu', [ $this, 'remove_from_menu' ]);
  }

  function remove_from_admin_bar( $wp_admin_bar ) {
    $wp_admin_bar->remove_node('comments');
  }

  function remove_from_menu( $wp_admin_bar ) {
    remove_menu_page('edit-comments.php');
  }
}
