<?php include "includes/header.php"?>

 <?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "jndelp@gmail.com";  //place your/your client's email address here
        $toName = "Jena Delp"; //place your client's name here
        $website = "Contact Form Test";  //place NAME of your client's website

        echo loadContact('simple.php');#demonstrates a simple contact form
        //echo loadContact('multiple.php');#demonstrates multiple form elements

	?>

  

    
  
 
</section>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside>
 <h2>Basic Website Design Cycle</h2>

    
   <ul>
       <li><a href="https://www.beewits.com/website-design-questionnaire/"> Website design questionnaire</a></li>
       <li><a href="https://www.creativebloq.com/wireframes/top-wireframing-tools-11121302">Wireframing Tools</a></li>
        <li><a href="https://www.pcmag.com/how-to/how-to-create-a-website">How to Create A Website</a></li>
</ul> 
 
 
</aside>
<!-- END RIGHT COL -->
        


   
    
    
   
        
 
<?php include "includes/footer.php"?>