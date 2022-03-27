<?php include 'includes/header.php';?>

<!-- Start cut out here -->

<!-- Contact me section Start  -->
<main class="wrappercontactme">
<?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "pablospanish9@msn.com";  //place your/your client's email address here
        $toName = "CLIENT NAME HERE"; //place your client's name here
        $website = "CLIENT WEBSITE NAME HERE";  //place NAME of your client's website

        echo loadContact('simple.php');#demonstrates a simple contact form
        //echo loadContact('multiple.php');#demonstrates multiple form elements

	?>
</main>
<!-- Contact me section End  -->

<?php include 'includes/footer.php';?>