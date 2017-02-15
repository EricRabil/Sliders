<?php
include 'corepage.php';
//Below are the values submitted by the step2 interface
/**
 * <input type='text' name='admin_username' placeholder='Administrator Username*' size=50%>
							    <br>
							    <input type='password' name='admin_password' placeholder='Administrator Password*' size=50%>
							    <br>
							    <input type='text' name='admin_email' placeholder='Administrator E-Mail*' size=50%>
							    <br>
							    <input type='text' name='optional_contact_address' placeholder='(Optional) Address' size=50%>
							    <br>
							    <input type='text' name='optional_contact_number' placeholder='(Optional) Phone Number' size=50%>
							    <br>
							    <input type='text' name='optional_contact_email' placeholder='(Optional) Contact E-Mail' size=50%>
							    <br>
							    <input type='text' name='optional_paypal_email' placeholder='(Optional) PayPal E-MAil' size=50%>
							    <br>
							    <label>User hierarchy
							    <input type='checkbox' name='optional_enable_user_hierarchy' value='1'></label><br>
 *
 **/
 function filter($value){
   return strip_tags(mysql_real_escape_string($value));
 }
 function processString($str){
     return strip_tags(mysql_real_escape_string($str));
 }
 $adminPW = strip_tags(mysql_real_escape_string($_POST['admin_password']));
 $adminUN = strip_tags(mysql_real_escape_string($_POST['admin_username']));
 $adminEM = strip_tags(mysql_real_escape_string($_POST['admin_email']));
 if(empty($adminPW) || empty($adminUN) || empty($adminEM)){
   //THE USER DID NOT FILL REQUIRED VALUES!
   $abortProcess = true;
 }
 if(!$abortProcess){
   $op_c_address = processString($_POST['optional_contact_address']);
   $op_c_num = processString($_POST['optional_contact_number']);
   $op_c_email = processString($_POST['optional_contact_email']);
   $op_p_email = processString($_POST['optional_paypal_email']);
   //^^^ Optional Contcat Address, Number, Email, and PayPal E-Mail - More PayPal information will be added as soon as more required values are discovered
   $con = mysqli_connect();
 }else{
   //Provide user with an error and a restart button - TODO: Redirect back to step2.php with a $_SESSION    //flag to show error on page
 }
?>