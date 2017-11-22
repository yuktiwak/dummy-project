
<?php 
        	if(isset($_POST['submit']))
		{

        $to =$_POST['Email'];
        
       // $from=E_FROM;
       $from='santaji_it7@yahoo.com';
        $subject = "New Enquiry Message ";
         $subject1 = "Thanks for your interest";
        $headers = "From: " . $from . "\r\n";
        $headers .= "Reply-To: ". $from . "\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
       $message1 = "<table style='width:600px;height:300px;border:solid 4px #35a8da;font-size:18px;margin:0 auto;'>
       
    <tr>
      <td>
        <table style='width:599px;height:299px;border:solid 1px #35a8da;'>
    <tr>
      <td valign='top'>
  <p>Dear &nbsp;".$_POST['name'].",\r\n";
        $message1 .= " <br>Thank you! We will contact you shortly.<br> <br><br> <br><br> 
		<br>Santaji Mahavidyalaya<br>
             0712-2283953, 2286305<br>
            santaji_it7@yahoo.com</p>
      </td>
    </tr>
  </table>
        </td>
    </tr>
  </table>";
             $message ="<table style='width:600px;height:300px;border:solid 4px #35a8da;font-size:18px;margin:0 auto;'>
    <tr>
      <td>
        <table style='width:599px;height:299px;border:solid 1px #35a8da;'>
    <tr>
      <td valign='top'>
  <p>Hello,\r\n<br>";
        
        $message .="Full Name:".$_POST['name']."\r\n <br>";
		$message .="Email:".$_POST['Email']."\r\n<br>";
		 $message .="Subject:".$_POST['Subject']."\r\n <br>";
		  $message .="Message:".$_POST['Message']."\r\n <br>";
        
         "<br> <br><br> <br><br> <br><br>Santaji Mahavidyalaya<br>

              0712-2283953, 2286305<br>
            santaji_it7@yahoo.com</p>
      </td>
    </tr>
  </table>
        </td>
    </tr>
  </table>"; 

    	mail($from, $subject, $message, $headers);
        mail($to, $subject1, $message1, $headers);  
       //print "<script>Document.Location='contact-us.php?msg=Thank You! for your interest.We will get back to you shortly.'</script>";
           
		
		print "<script>alert ('Thank You! for showing your interest. We will get back to you shortly.');</script>";
        
           
       
}
?>
<!--contact start here-->
<div class="contact">
	<div class="container">
		<div class="contact-main">
			<div class="col-md-6 contact-left">
				<div class="contact-top">
					<h2>Contact Info</h2>
					<!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>-->
			    </div>
				<?php 
				$query=mysql_query("select * from users u, manager_details m where u.user_id = 89  ");
			     $res=mysql_fetch_array($query);?>
				<div class="conta-1">
					<div class="con-phone">
						<span class="con-ph"> </span>
						<div class="con-para">
							<h6>Phone</h6>
							<p><?php echo $res['mobile']?>,<?php echo $res['phone']?></p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="conta-2">
					<div class="con-address">
						<span class="con-location"> </span>
						<div class="con-para">
							<h6>Address</h6>
							<p> <?php echo $res['address']?></p>
						</div>
					</div>
				</div>
				<div class="conta-2">
					<div class="con-address">
						<span class="con-email"> </span>
						<div class="con-para">
							<h6>Email</h6>
							<p><?php echo $res['email_address']?></p>
						</div>
					</div>
				</div>
			 </div>
			<div class="col-md-6 contact-right">
				<div class="contact-top">
					<h3>Send a Message</h3>
					<!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>-->
				</div>
				 <form  id="contact-form" enctype="multipart/form-data" action="" method="post">
						<input type="text" name="name" class="shart" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
					 	<input type="text" name="Email" class="shart" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
					 	<input type="text" class="long" name="Subject" value="Subject" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Subject';}">
				         <textarea value="Message" name="Message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>
                        <input type="submit" value="Submit">
				</form>
				</div>
		  <div class="clearfix"> </div>
		</div>
		<!--<div class="map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1861.04206824892!2d79.06845905012992!3d21.10921157038753!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd4bf7987e4368b%3A0x27c219943ec8223a!2sSantaji+Mahavidyalaya!5e0!3m2!1sen!2sin!4v1449737705951"> </iframe>
		</div>-->
	</div>
</div>
<!--contact end here-->
<!--footer start here-->
