<?php
/* DB Constants management */
/* I have used constants instead of direct name declared in data base to avoid sql query injection and direct access to db for db integrity*/
/*User_account --> used for saving singed in user details*/
define('TBL_USER_ACCOUNT','user_account');
define('COL_user_account__user_id','user_account.user_id');
define('COL_user_account__email_id','user_account.email_id');
define('COL_user_account__password','user_account.password');
define('COL_user_account__contact_name','user_account.contact_name');
define('COL_user_account__mobile_number','user_account.mobile_number');
/*department_master --> used for saving department master details*/
define('TBL_DEPARTMENT_MASTER','department_master');
/*priority_master --> used for saving priority master details*/
define('TBL_PRIORITY_MASTER','priority_master');
/*category_master --> used for saving category master details*/
define('TBL_CATEGORY_MASTER','category_master');
?>