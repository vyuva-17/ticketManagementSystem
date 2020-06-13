<?php
session_start();
ini_set('display_errors','off');
include_once ('../config/config.ini');
include_once ('../config/dbConstants.php');

 $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS,DB_NAME);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "<pre>"; print_r($_REQUEST);
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
function postUserData(){
    global $conn;
    $email=$_REQUEST["email"];
    $pwdtemp=$_REQUEST["password"];
    $pwd=md5($pwdtemp);
    $name='Yuvanesh';
    $mobile_number= 8668032131;
    $sql = "INSERT INTO ".TBL_USER_ACCOUNT."(".COL_user_account__email_id.",".COL_user_account__password.",".COL_user_account__contact_name.",".COL_user_account__mobile_number.")
     VALUES ('$email','$pwd','$name','$mobile_number')";
     if (mysqli_query($conn,$sql)) {
        $last_id = mysqli_insert_id($conn);
         $_SESSION['log_id']=$last_id;
        return getUserData($last_id);
    }else{
         return "Error: " . $sql . "<br>" . $conn->error;
     } 
}

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
?>
