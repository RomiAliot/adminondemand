<?php

 function adminondemand_settings() {

    add_menu_page('Admin ON Demand', 'Admin On Demand Tools', 'administrator', 'adminondemand_settings','adminondemand_tools','', 20);
    add_submenu_page( 'adminondemand_settings','reservations', 'reservations','administrator','AOD_reservations', 'AOD_reservations');



 }

 add_action('admin_menu', 'adminondemand_settings');

  function adminondemand_tools (){

  }

  function AOD_reservations(){

  ?>

    <div class="wrap">

      <h1>Reservations</h1>	<br>

      <table class="wp-list-table widefat striped">

      	    <thead>
      	      <tr>
      	         <th class="manage-column">ID</th>
      	         <th class="manage-column">Name</th>
      	         <th class="manage-column">Date</th>
      	         <th class="manage-column">E-mail</th>
      	         <th class="manage-column">Phone</th>
      	         <th class="manage-column">Service</th>
                 <th class="manage-column">Delete</th>

      	      </tr>
     	    </thead>

     	    <tbody>
     	    	<?php global $wpdb;

     	    	    $reservations= $wpdb->prefix . 'reservations';
     	    	    $bookings = $wpdb->get_results(" SELECT * FROM $reservations", ARRAY_A);
     	    	    foreach($bookings as $booking):

     	    	 ?>
     	    	  <tr>
     	    	  	 <td><?php echo $booking['id']; ?></td>
     	    	  	 <td><?php echo $booking['name']; ?></td>
     	    	  	 <td><?php echo $booking['day']; ?></td>
     	    	  	 <td><?php echo $booking['email']; ?></td>
     	    	  	 <td><?php echo $booking['phone']; ?></td>
     	    	  	 <td><?php echo $booking['service']; ?></td>

                 <td>
                   <a class="delete-bookings" href="#" data-reservations="<?php echo $booking['id']; ?>"> Delete </a>

                 </td>

     	    	  </tr>

     	  

     	    	<?php endforeach; ?>
     	    </tbody>




      </table>

    </div>

<?php



  }









