<?php /*opening php tag*/
/*
portal-config.php

Used to store all of our IT162 configuration information

*/

//echo basename($_SERVER['PHP_SELF']);

//echo THIS_PAGE;

//die;

//site keys for web-students.com
$siteKey = "";
$secretKey = "";

//this helps eliminate PHP date errors
date_default_timezone_set('America/Los_Angeles');//

//this constant allows a page to know it's own url/name
define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE){
        
    case 'index.php':
        $title = "Web Development Examples by Jena Delp";
        $logo = 'fa-home';
        $PageID = 'Client Questionnaire';
    break;
        
        case 'flexbox.php':
        $title = "Flexbox Research";
        $logo = 'fa fa-fw fa-cube';//change this fontawesome icon!
        $PageID = 'Flexbox Research';
    break;
        
        case 'galleries.php':
        $title = "Galleries and Sliders";
        $logo = 'fa fa-fw fa-camera-retro';//change this fontawesome icon!
        $PageID = 'Galleries and Sliders';
    break;
        
        case 'youtube.php':
        $title = "Google Youtube Video";
        $logo = 'fa fa-fw fa-youtube-square';//change this fontawesome icon!
        $PageID = 'Google Youtube Video';
    break;
        
        case 'shoppingcarts.php':
        $title = "Shopping Carts";
        $logo = 'fa fa-fw fa-shopping-basket';//change this fontawesome icon!
        $PageID = 'Shopping Carts';
    break;
        
        case 'sitevsapp.php':
        $title = "Responsive Website vs Native App";
        $logo = 'fa fa-fw fa-html5';//change this fontawesome icon!
        $PageID = 'Responsive Website vs Native App';
    break;
        
        case 'webcam.php':
        $title = "Live Web Cameras (2)";
        $logo = 'fa fa-fw fa-eye';//change this fontawesome icon!
        $PageID = 'Live Web Cameras';
    break;
        
        case 'calendar.php':
        $title = "Google Calendar";
        $logo = 'fa fa-fw fa-calendar';//change this fontawesome icon!
        $PageID = 'Google Calendar';
    break;
        
        case 'map.php':
        $title = "Google Map";
        $logo = 'fa fa-fw fa-map-o';//change this fontawesome icon!
        $PageID = 'Google Map';
    break;
        
    default:
        $title = THIS_PAGE;
        $logo = 'fa-home';
        $PageID = '';
        
}

//*get rid of font awesome $logo if you don't want to change*/
/*here we're creating a function to generate links and keep the highlight on the current page*/

    
    
    //return $myReturn;
    




/*closing php tag*/
?> 