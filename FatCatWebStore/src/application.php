<?php 

session_start();

//$isUserLogedIn = false;  
//$webApplicionVisitorUsername = "";

//var_dump($_GET);
//var_dump(isset($_GET['username']));

//if(isset($_GET['username'])) {
//    $webApplicionVisitorUsername = $_GET['username']  ;
//    
//    
//}

if(isset($_POST['username'])) {
//    $webApplicionVisitorUsername   = $_POST['username']  ;
    //$isUserLogedIn               = true;
//    $_SESSION['user_name']       = $webApplicionVisitorUsername;
     $_SESSION['user_name']        = $_POST['username']  ;
   // $_SESSION['ís_user_loged_in'] = $isUserLogedIn ;
    $_SESSION['is_user_loged_in'] = true ;
  
   
}
function  is_user_loged_in()  {
    if(isset($_SESSION['is_user_loged_in'])) {
    return $_SESSION['is_user_loged_in'];
    }
    return false ;
}
function get_username() {
    if(isset( $_SESSION['user_name'])) {
        return $_SESSION['user_name'] ;
    }
    
    
    return "" ;
}


function application_slogan($webApplicionTitle)
{ echo "<strong class='logo'> $webApplicionTitle </strong>" ;
   }
function  greet_visitor_greeting (){
    
        $vsitorGreatingMaessageIndex = rand(1,10);
    $shouldGreatingBePlesant     = $vsitorGreatingMaessageIndex > 1 &&
                                   $vsitorGreatingMaessageIndex < 5;
    $shouldGreatingBeRude        = $vsitorGreatingMaessageIndex > 6 &&
                                   $vsitorGreatingMaessageIndex < 8;
    $shouldGreatingBeUsual       = $vsitorGreatingMaessageIndex ==9 ||
                                   $vsitorGreatingMaessageIndex ==10;
    $visitorUsername             = get_username() ;
    
    if(!$visitorUsername){
        return "<span> Здрасти Гостенино </span>";
    }    
    
    if($shouldGreatingBePlesant){
    return "<span> Как я караш $visitorUsername </span>";
    }
    If($shouldGreatingBeRude){
    return "<span> Много си голям $visitorUsername </span>";
    }
    If ($shouldGreatingBeUsual){
     return "<span> Машина си $visitorUsername </span>";
    }
    return "<span> Здрасти  $visitorUsername </span>";
}
   
function slogan (){
        $webApplicionTitle = "Fat Cat Web Store" ;
        application_slogan($webApplicionTitle);
//        greet_visitor ($visitorUsername);
        //$returnedValueVariable = greet_visitor_greeting($visitorUsername);
        echo greet_visitor_greeting(); //
}
    
function main_menu () {

    echo  '<ul>';
        if(is_user_loged_in()) :      
             echo "<li class='list--item'><a href='index.php'>Home</a></li>";  
             echo "<li class='list--item'><a href='store.php'>Store</a></li>";
             echo "<li class='list--item'><a href='logout.php'>Logout</a></li>";
         else: 
             echo "<li class='list--item'><a href='index.php'>Home</a></li>";
             echo "<li class='list--item'><a href='signin.php'>Sign In</a></li>"; 
             echo "<li class='list--item'><a href='signup.php'>Sign Up</a></li>";   
         endif;     
         echo '</ul>';
         
}

function redirect($location){
    header("Location: $location");
}