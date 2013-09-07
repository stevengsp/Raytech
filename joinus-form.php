<!doctype html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
<meta charset="UTF-8">
<meta name="viewport" content="initial-scale=1">
<title>Join us</title>

<link rel="stylesheet" href="script/form.css">
<link rel="stylesheet" href="script/main.css">


</head>
<body>
<div id="backbar">
	  <div id="backbar-buttons">
            <span><a href="javascript:history.back()">Back<img src="images/back-button.png"></a></span>
      </div>
    </div>
<div class="page-inner">

<? 
			if(isset($_POST['baction']))  { 
                    // Contact subject
                    $subject ="RayTech Join Us from"; 
                    // Details
                    $message ='Full Name: '.$_POST['fname'].'<br>';
					$message .='IC No: '.$_POST['fic'].'<br>';
					$message .='Age: '.$_POST['fage'].'<br>';
					$message .='Citizen: '.$_POST['fcitizen'].'<br><br>';
					$message .='Address 1: '.$_POST['faddress1'].'<br><br>';
					$message .='Address 2: '.$_POST['faddress2'].'<br><br>';
					$message .='Postcode: '.$_POST['fpostcode'].'<br><br>';
					$message .='Country: '.$_POST['fcountry'].'<br><br>';
					$message .='Office: '.$_POST['foffice'].'<br><br>';
					$message .='Fax: '.$_POST['ffax'].'<br><br>';
					$message .='Mobile: '.$_POST['fmobile'].'<br><br>';
					$message .='Home Tel: '.$_POST['fhome'].'<br><br>';
					$message .='Email: '.$_POST['femail'].'<br><br>';
					$message .='Current Business: '.$_POST['fbusiness'].'<br><br>';
					$message .='If accepted, who will assist you in the business: '.$_POST['fassists'].'<br><br>';
					
                    // Mail of sender
                    $mail_from=$_POST['femail']; 
                    // From 
					$header= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                    $header.='From: '.$fname.'<'.$mail_from.'>' . "\r\n" . 'Reply-To: raytechv90@gmail.com' . "\r\n";
                    
                    // Enter your email address
                    $to ='raytechv90@gmail.com';
                    
                    $send_contact=mail($to,$subject,$message,$header);
                    
                    // Check, if message sent to your email 
                    // display message "We've recived your information"
                    if($send_contact){
                    	echo "<script>alert('Thank you for Join US, Our personnels will get in touch with you in the soonest time'); self.location='contact.html';</script>";
                    } else {
                    	echo "<script>alert('Join Us Form - Message Fail'); self.location='contact.html';</script>";
                    }
                } else {
					print '
       <form id="form1" name="form1" method="post" action="joinus-form.php">
    <table width="100%">
      <tr>
        <td colspan="3"><h1>Franchise Application</h1></td>
      </tr>
      <tr>
        <td colspan="3"><input type="text" name="fname" placeholder="Name / Organisation" class="w100"></td>
      </tr>
      <tr>
        <td colspan="3"><input type="text" name="fic" placeholder="IC No" class="w100"></td>
      </tr>
      <tr>
        <td><input type="text" name="fage" placeholder="Age" class="w100"></td>
        <td></td>
        <td><input type="text" name="fcitizen" placeholder="Citizen" class="w100"></td>
      </tr>
      <tr>
        <td colspan="3"><input type="text" name="faddress1" placeholder="Address1" class="w100"></td>
      </tr>
      <tr>
        <td colspan="3"><input type="text" name="faddress2" placeholder="Address2" class="w100"></td>
      </tr>
      <tr>
        <td><input type="text" name="fpostcode" placeholder="Postcode" class="w100"></td>
        <td></td>
        <td><input type="text" name="fcountry" placeholder="Country" class="w100"></td>
      </tr>
      <tr>
        <td><input type="text" name="foffice" placeholder="Office Tel" class="w100"></td>
        <td></td>
        <td><input type="text" name="ffax" placeholder="Fax" class="w100"></td>
      </tr>
      <tr>
        <td><input type="text" name="fmobile" placeholder="Mobile No" class="w100"></td>
        <td></td>
        <td><input type="text" name="fhome" placeholder="Home Tel" class="w100"></td>
      </tr>
      <tr>
        <td colspan="3"><input type="text" name="femail" placeholder="Email Address" class="w100"></td>
      </tr>
      <tr>
        <td colspan="3"><input type="text" name="fbusiness" placeholder="Current Business" class="w100"></td>
      </tr>
      <tr>
        <td colspan="3"><input type="text" name="fassists" placeholder="If accepted, who will assists you in the business" class="w100"></td>
      </tr>
      <tr>
        <td colspan="3"><input type="submit" name="baction" value="Send us a Message"></td>
        
      </tr>
    </table>
  </form>
		';
				}
				?>
                
  
</div>


 
</body>
</html>
<!-- Localized -->