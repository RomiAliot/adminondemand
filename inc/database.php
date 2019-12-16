<?php


 function adminondemand_database() {

      global $wpdb;
      global $adminondemand_dbversion;
      $adminondemand_dbversion = '0.1';

      $table = $wpdb->prefix . 'reservations';

      $charset_collate = $wpdb->get_charset_collate();

      $sql = "CREATE TABLE $table (

           id mediumint(9) NOT NULL AUTO_INCREMENT,
           name varchar(50) NOT NULL,
           day datetime NOT NULL,
           email varchar(50) DEFAULT '' NOT NULL,
           phone varchar (12) NOT NULL,
           service longtext NOT NULL,
           PRIMARY KEY (id)

      ) $charset_collate; ";

      require_once(ABSPATH . 'wp-admin/includes/upgrade.php');

      dbDelta($sql);

      add_option ('adminondemand', $adminondemand_dbversion);


}

add_action ('after_setup_theme', 'adminondemand_database');