<?php
/*
portal-config.php

Used to store all of our WEB120 configuration information

*/

//prevents data from being sent early
ob_start();


//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

//die;

switch(THIS_PAGE){

    case 'index.php':
        $title = "Claudia's Home Page";
    break;

    case 'aboutme.php':
        $title = "About Claudia";

    break;

    case 'services.php':
        $title = "Claudia's services";
    break;

    case 'faqs.php':
        $title = "Frequently Asked Questions";
    break;

    case 'contactme.php':
        $title = "Claudia's Contact Page";
    break;


    default:
        $title = THIS_PAGE;
}

/*here we create a function to generate links and keep the
highlight on the current page*/
    // Creating a function to generate links and keep the 
    // highlight on the current page

 //place URL & labels in the array here for navigation:
    $nav1['index.php'] = "Home";
    $nav1['aboutme.php'] = "About me";
    $nav1['services.php'] = "Services";
    $nav1['faqs.php'] = "FAQs";
    $nav1['contactme.php'] = "Contact me";
      
// <a href="index.php">Home</a>
// <a href="aboutme.html" >About me</a>
// <a href="services.php">Services</a>
// <a href="faqs.php">FAQs</a>
// <a href="contactme.php">Contact me</a


function makeLinks ($nav1)
{
    $myReturn = '';
    foreach($nav1 as $url => $text){

        if($url == THIS_PAGE){
            $myReturn .="<a class=\"active\" href=\"$url\">$text</a>";
        }else{
            $myReturn .="<a href=\"$url\">$text</a>";
        }
    }
    
    return $myReturn;
}
   




?>
