<?php

/* This class will include everything associated with users:
 * Registration
 * Login
 * Logout
 */

class UserClass{
    
    
    /* __constructor()
     * Constructor will be called every time Login class is called ($login = new Login())
     */
     public function __construct(){
         
        /* Check if user is logged in. */
        $this->isLoggedIn(); 
         
        /* If login data is posted call validation function. */
        if (isset($_POST["UserRegistration"])) {
            $this->UserRegistration();
        }
         
     } /* End __constructor() */
     
     
    /* function isLoggedIn()
     * Check if user is already logged in, if not then prompt login form.
     */
    public function isLoggedIn(){
        
        /* Require credentials for DB connection. */
        require ('variables/dbconnect.php');

        if(!empty(@$_SESSION['user_id'])){   
            return true;        
        } else {    
            return false;
        }

    } /* End isLoggedIn() */
     
     
    /* function UserLogin()
     * Function that validates user login data, cross-checks with database.
     */
    public function UserLogin(){
        
    } /* End UserLogin() */
    
    
    /* function UserLogout()
     * Logs user out, destroys all session data.
     */
    public function UserLogout(){
        
        session_destroy();  // Destroy all session data.
        header('Location: index.php');
        
    } /* End UserLogout() */ 
    
    
    /* Function UserRegistration()
    * Function that includes new company registration to HelpIT portal.
    * Data is taken from registration.php form, converted to prevent SQL injection 
    * and checked that values are filled and cross checked againts database to  
    * confirm that the company name doesn't exist already.
    */
    function UserRegistration(){

        /* Require credentials for DB connection */
        require ("variables/dbconnect.php");
        
        $stmt = $conn->prepare("INSERT INTO members (username, email, password, phone) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssis", $username, $email, $password, $phone);
        $username = $_POST['username'];
        $email = "Test@test.ee";
        $password = 123;
        $phone = "Test";
        $stmt->execute();
        echo "New records created.";
        $stmt->close();    
    


        /* Check that data has been submitted 
        if(isset($_POST['username'])){

            /* User input variables converted to string to prevent SQL injections 
            $username = mysqli_real_escape_string($conn,trim($_POST['username']));  
            $password = mysqli_real_escape_string($conn,trim($_POST['password']));
            $securing = password_hash($password, PASSWORD_DEFAULT);
            $email = mysqli_real_escape_string($conn,($_POST['email']));
            $company = mysqli_real_escape_string($conn,trim($_POST['company']));
            $shortUser = substr($company, 0, 2) . substr($username, 0, 3) . substr($username, -1);

            if(!empty($username) && !empty($password) && !empty($email)){      // If fields are filled then continue to cross check with database againt same company names
                $checkavailable = "SELECT * FROM `users` WHERE company = '$company'"; // Query to cross check Company name with database.
                $result = mysqli_query($conn, $checkavailable);
                if ($result->num_rows != 0) {      // If company with the same name is found
                    header('Location: registration.php?created=false');    // Return user to newuser.php
                    $registered = FALSE;
                } else {    // If no company is found with the same name
                    $sql = "INSERT INTO `users` (`id`, `username`, `email`, `password`, `company`, `isadmin`, `shortuser`) VALUES ('', '$username', "
                            . "'$email', '$securing', '$company', '1', '$shortUser');";
                    $result = mysqli_query($conn, $sql);
                    header('Location: registration.php?created=true');    // Return user to newuser.php
                }
            }   /* /EndIF 
        }   /* /EndIF */ 

    }   /* End UserRegistration() */
    
    
}

