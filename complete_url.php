<?PHP
/*// Program to display URL of current page. 
  
if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') 
    $link_page = "https"; 
else
    $link_page = "http"; 
  
// Here append the common URL characters. 
$link_page .= "://"; 
  
// Append the host(domain name, ip) to the URL. 
$link_page .= $_SERVER['HTTP_HOST']; 
  
// Append the requested resource location to the URL 
$link_page .= $_SERVER['REQUEST_URI']; 
      
// Print the link_page 
echo $link_page; 
?> 


<?php 
// Program to display current page URL. 
  
$link_page = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 
                "https" : "http") . "://" . $_SERVER['HTTP_HOST'] .  
                $_SERVER['REQUEST_URI']; 
  
echo $link_page; 
?> 


<?php 
// Program to display complete URL     
      
if(isset($_SERVER['HTTPS']) &&  
            $_SERVER['HTTPS'] === 'on') 
    $link_page = "https"; 
    else
        $link_page = "http"; 
  
// Here append the common URL  
// characters. 
$link_page .= "://"; 
      
// Append the host(domain name, 
// ip) to the URL. 
$link_page .= $_SERVER['HTTP_HOST']; 
      
// Append the requested resource 
// location to the URL 
$link_page .= $_SERVER['PHP_SELF']; 
      
// Display the link_page 
echo $link_page; */
?> 


<?php 
// Program to display complete URL 
  
$link_page = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] 
                === 'on' ? "https" : "http") . "://" . 
          $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']; 
  
// Display the complete URL 
echo $link_page; 
?> 