<?php

    include_once('../adodb/adodb.inc.php');
    // include_once('Lib/connect.php');
    include_once('../schoolmanager/includes/func_generalfunctions_.php');
    //include_once('../Lib/general_mainclass_.php');
  

class Academic_MainClass extends AppGeneralClass {  
     

private $username;
private $userpass;
    
function __construct($username,$szpassword)
{
    
    $this->username = $username;
    $this->userpass = $szpassword;
    
    parent::__construct($username,$szpassword);
    parent::set_dbuserName($username);
    parent::set_dbpassword($szpassword);
    //parent::set_OrgIdentity($_SESSION['org']);
    // parent::set_App('iKolilu');
    
    
}

}

?>
