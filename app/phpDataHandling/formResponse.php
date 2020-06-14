<?php
session_start();
/*Includes for db config,dbconstants Details */
ini_set('display_errors','off');
include_once ('../config/config.ini');
include_once ('../config/dbConstants.php');
/*DB connection based on db config data to change dbconfiguratuion kindly refer config.ini which is in config folder */
 $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS,DB_NAME);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "<pre>"; print_r($_REQUEST);
/*switch to call the services based on given paramater the is no defaul paramater in switch */
switch ($_REQUEST['function']) {
	case "post":
			$result = postUserData();
		  echo json_encode($result);
			break;	
    case "getDeparmentData":
			$result = getDeparmentData();
			echo json_encode($result);
            break;
        
    case "getCategoryData":
        $result = getCategoryData();
        echo json_encode($result);
        break;
    
    case "getPriorityData":
        $result = getPriorityData();
        echo json_encode($result);
        break;
}   
/*post service for  post sign-in user data and send the sign in user db saved detils as response to it*/         	
function postUserData(){
    global $conn;
    $email=$_REQUEST["email"];
    $pwdtemp=$_REQUEST["password"];
    /* Password encrytion using md-5 hash algorithm for decryption encrypt the user given data and check if the hash values are same otherwise it is not a valid user since it is not having sign up functionality so we are not checking the sign in user is valid user or not based on sign up date if we need to do so then we have to create static signup data from db user with in that table are only considered as valid user*/
    $pwd=md5($pwdtemp);
    /*Nikhil as per our discussion I have inserted the static data to fetch in add ticket form*/
    $name='Yuvanesh';
    $mobile_number= 8668032131;
    $sql = "INSERT INTO ".TBL_USER_ACCOUNT."(".COL_user_account__email_id.",".COL_user_account__password.",".COL_user_account__contact_name.",".COL_user_account__mobile_number.")
     VALUES ('$email','$pwd','$name','$mobile_number')";
     /*Check the query inserted data or not if it not inserted then it give error as response otherwise it will give sign in user details as response*/
     if (mysqli_query($conn,$sql)) {
        $last_id = mysqli_insert_id($conn);
         $_SESSION['log_id']=$last_id;
        return getUserData($last_id);
    }else{
         return "Error: " . $sql . "<br>" . $conn->error;
     } 
}
 /*fetching the loged in user details based onlast insert id*/
 function getUserData($log_id){
    global $conn;
    $query = "SELECT * FROM ".TBL_USER_ACCOUNT." where ".COL_user_account__user_id." = ".$log_id;
    $result = mysqli_query($conn,$query);
    $rows = array();
   while($r = mysqli_fetch_assoc($result)) {
    $rows[]=$r;
   }
   return $rows;
 }
/*service for deparment master details to load department dropdown values in add ticket form*/
 function getDeparmentData(){
    global $conn;
    $query = "SELECT * FROM ".TBL_DEPARTMENT_MASTER;
    $result = mysqli_query($conn,$query);
    $rows = array();
   while($r = mysqli_fetch_assoc($result)) {
    $rows[]=$r;
   }
   return $rows;
 }
/*service for ccategory master details to load department dropdown values in add ticket form*/
  function getCategoryData(){
    global $conn;
    $query = "SELECT * FROM ".TBL_CATEGORY_MASTER;
    $result = mysqli_query($conn,$query);
    $rows = array();
   while($r = mysqli_fetch_assoc($result)) {
    $rows[]=$r;
   }
   return $rows;
 }
/*service for priority master details to load department dropdown values in add ticket form*/
  function getPriorityData(){
    global $conn;
    $query = "SELECT * FROM ".TBL_PRIORITY_MASTER;
    $result = mysqli_query($conn,$query);
    $rows = array();
   while($r = mysqli_fetch_assoc($result)) {
    $rows[]=$r;
   }
   return $rows;
 }
mysqli_close($conn);
/*mysql connection is closed*/
?>
