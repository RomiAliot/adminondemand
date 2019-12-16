<?php


   function adminondemand_delete(){
    if(isset($_POST ['tipo'])) {
        if($_POST['tipo'] == 'eliminar') {
            global $wpdb;
            $table = $wpdb->prefix . 'reservations';

            $id_registro = $_POST ['id'];

            $registro = $wpdb->delete( $table, array('id' => $id_registro ), array('%d'));
        }
    }



    die(json_encode($registro));

   }
   add_action( 'wp_ajax_adminondemand_delete', 'adminondemand_delete' );

  function adminondemand_save () {
     global $wpdb;
     

    if (isset($_POST ['send']) && $_POST ['oculto'] == "1" ):
    	
    	$name = sanitize_text_field( $_POST ['reservationname']);
        $email = sanitize_text_field( $_POST ['reservationemail']);
        $phone = sanitize_text_field( $_POST ['reservationphone']);
        $date = sanitize_text_field( $_POST ['reservationdate']);
        $service = sanitize_text_field( $_POST ['reservationservice']);

        $tabla = $wpdb->prefix . "reservations";

         $datos = array(

    	'name' => $name,
    	'email' => $email,
    	'phone' => $phone,
    	'day' => $date,
    	'service' => $service

    	);

    $formato = array(

    	'%s',
    	'%s',
    	'%s',
    	'%s',
    	'%s'

    	);

    $wpdb->insert($tabla, $datos,$formato);

    $url = get_page_by_title('thanks for book');
    wp_redirect( get_permalink( $url->ID));
    exit();



    endif;

  }

  add_action( 'init', 'adminondemand_save');