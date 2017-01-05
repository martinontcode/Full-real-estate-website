<?php if(!isset($_SESSION)) { session_start();} 
/* Start session, this is necessary, it must be the first thing in the PHP document after <?php syntax ! */ 
        
/* Real estate portal called weRent
 * weRent is an easy place to advertise your real estate that you would like to rent out
 * or to find an appartment to rent for customers.
 * Includes user accounts, ability to add new estate objects, unique pages for each object, contact form, search/ filter form.
 * @author MartinoEst
 * @link https://github.com/martinoest/
 * @license http://opensource.org/licenses/MIT MIT License
 * 
 * Minimum 5.6 PHP version required!
 */
   

/* Require login.php to call login function */
require("classes/UserClass.php");

/* Call for login function */
$UserView = new UserClass();

/* If user is logged in member view is provided, otherwise guest view */
if($UserView->isLoggedIn() == true){
  include("views/memberView.php");
} else {
  include("views/guestView.php");
}
