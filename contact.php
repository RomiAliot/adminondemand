<?php /* Template Name: contact page */ get_header(); ?>

	<section id="hero-section" class="contact-page">

     	   
          <div class="hero-section-inner  container-fluid" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/services-hero.png); background-size:cover ,contain;background-repeat: no-repeat;" >

            	<div class="">
            		
		              <h1 class="text-center align-middle">Home/CONTACT US</h1>

            	</div>
		
			</div><!--END HERO-->	

     	
     </section><!-- END HERO SECTION -->


  


     <section id="contact-form-section" class="container-fluid">

    	<div class="row" id="inner-sevices">

    		<div class="contact-title col-lg-12">

    			<h2 class="text-center"><span class="color-red">CONTACT US</span> FOR ANY INQUIRY</h2>
    			
    		</div>

    	    <div class="container-fluid col-lg-12">


    	        <?php 

    	           while(have_posts()): the_post();
    	               the_content();

    	           endwhile;

    	         ?>



	    		<!--<form id="contact-us" action="">


                    <div class="form-group ">
		    			<label for="name" class="sr-only"></label>
		    			<input type="text" class="form-control" name="name" id="contact-name" placeholder="You Name">
		    			
	    		    </div>

                    <div class="form-group ">
			    			<label for="email" class="sr-only"></label>
			    			<input type="email" class="form-control"  name="email" id="email-contact" placeholder="Your email">
			    			<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
	    		    </div>

                    <div class="form-group">
		    			<label for="subject"></label>
		    			<textarea type="text" class="form-control" name="subject" id="subject-contact" placeholder="Your Message"></textarea>
	    		    </div>

	    			<input type="submit" class=" submit-contact col-lg-12" value="submit">



	    		</form>-->

    	    </div>

		</div><!--inner row-->	

		 <div class="contact-info container-fluid">
		 	<div class="row text-center">

               <i class="fa fa-phone-square col-lg-4 align-right" aria-hidden="true"></i>
               <h3 class="col-lg-4 text-left"> P.O. Box 224621  Dallas TX 75222  Phone 214-354-0024</h3>

		 </div>
		 </div>  
      
     	
     </section><!-- END CONTACT FORM SECTION -->



<section id="" class="container-fluid" > 

<div class="quote-form-background" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/calendar.jpg); background-repeat: no-repeat; background-size: cover;"> 

 <div class="quote-form ">

	  <div class="col-lg-12">

	  	<h2 class="text-center"><span class="color-red">BOOK </span>OUR SERVICES</h2>

	  </div>
      
      <form class="reservation" method="post">

		    <div class="row">
		  	
				    <div class="form-group col-md-6">
				      <label for=""></label>
				      <input type="text" name="reservationname" class="form-control" id="reservation-name" placeholder="Name" required>
				    </div>

				    <div class="form-group col-md-6">
				      <label for=""></label>
				      <input type="email" name="reservationemail" class="form-control" id="reservation-email" placeholder="Email" required>
				    </div>
		  
		    </div>

		    <div class="row">

				     <div class="form-group col-md-6">
				      <label for=""></label>
				      <input type="number" name="reservationphone" class="form-control" id="reservation-phone" placeholder="Phone">
				    </div>

				    <div class="form-group col-md-6">
				      <label for=""></label>
				      <input type="datetime-local" name="reservationdate" class="form-control" id="reservation-date" placeholder="Email" required>
				    </div>
		  
		    </div>

		    <div class="row">

			     <div class="form-group col-md-12">
			      <label for=""></label>
			      <input type="text" name="reservationservice" class="form-control" id="reservation-service" placeholder="Service you want to book">
			    </div>

		    </div>

		    <button type="submit" name="send" class="btn-reservation">BOOK NOW </button>
		    <input type="hidden" name="oculto" value="1">
     </form>


 </div>
</div><!--QUOTE-FORM-->

</section>


<?php get_footer(); ?>
