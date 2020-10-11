<!--
session_abort — Discard session array changes and finish session
Returns TRUE on success or FALSE on failure.
finishes session without saving data. 
Thus the original values in session data are kept.

-->

<?php
    // Choose the path that you used it in first part 
    //session_save_path('Your path here');
   
    //session_start();
   
    // If you want to close session and keep your original data in your path , you should use session_abort()
   // session_abort();
   
    //var_dump(session_status()== PHP_SESSION_ACTIVE);
   
    // Output : bool(False) , it means your session closed .
?>

<!--
///////////////////////////////////////////////////////////////////////////////////////////////

session_id — Get and/or set the current session id
string session_id ([ string $id ] )
The constant SID can also be used to retrieve the current name
 and session id as a string suitable for adding to URLs
If id is specified, it will replace the current session id.
session_id() needs to be called before session_start() for that purpose
session_id() returns the session id for the current session or 
the empty string ("") if there is no current session (no current session id exists).

-->
<?php
//session_start();
//echo session_id();
?>
<!--
/////////////////////////////////////////////////////////////////////////////////

session_register — Register one or more global variables with the current session
session_register() accepts a variable number of arguments, 
any of which can be either a string holding the name of a variable or
 an array consisting of variable names or other arrays. For each name,
session_register() registers the global variable with that name in the
current session.
Returns TRUE on success or FALSE on failure.

-->

<!--
session_is_registered — Find out whether a global variable is registered in a session
bool session_is_registered ( string $name )
session_is_registered() returns TRUE if there is a global variable with
 the name name registered in the current session, FALSE otherwise.

-->
<?PHP
$sid =4;
if(session_is_registered($sid))
{
     echo 'true';
 }
 else{
   echo 'false';
 }
$test = 'Here';
session_register('test');
echo $_SESSION[$sid];
 function session_is_registered($test)
 {
     if (isset($_SESSION[$test]))
    return true;
     else
     return false;

?>