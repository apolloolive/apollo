


<?php




$charset = "utf-8"; 

$to1      = 'apolloolive@gmail.com';
$to2      = 'lianbangccama@gmail.com';
$to3      = 'lianbang@ccama.net';
$mailList = 'apolloolive@gmail.com, lianbangccama@gmail.com, lianbang@ccama.net';



$displayName = '------Name------'."\r\n";
$displayContact =     '------Contact------'."\r\n";
$displayContent =   '------Message------'."\r\n";




$name = $_POST['name'];
$contactDetails = $_POST['contact'];

$subject = 'ÐÂÑ¯ÎÊ' ;

$message = $displayName.$name.$displayContact.$contactDetails.$displayContent.$_POST['messageContent'];


	
$headers = 'MIME-Version: 1.0' . "\r\n"; 

$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n"; // Additional headers 

$headers .= 'Reply-To: Admin<>' . "\r\n"; 

$headers .= 'From: Admin<>' . "\r\n"; 



mail($to1, $subject, $message, $headers);
mail($to2, $subject, $message, $headers);
mail($to3, $subject, $message, $headers);


echo "<script type='text/javascript'>alert('We have received your query, and will contact you ASAP !!!')</script>";

 echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index.html">'; 




?>