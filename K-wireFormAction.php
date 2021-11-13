<?php 

/* check whether the $_POST array contains a key called send, the name attribute of the form submit button */
if (array_key_exists('send', $_POST))
	{	//mail processing script

		$to = 'jasonhesch@gmail.com';
		$subject = '[K-wire.com] Quote Request';
		
		//Array of wire labels
		$wireLabel = array("KM71-100","KM71-101","KM71-102","KM71-104","KM71-103","KM71-105","KM71-106","KM71-107","KM71-108","KM71-109","KM71-021","KM71-022","KM71-023","KM71-025","KM71-110","KM71-111","KM71-112","KM71-114","KM71-113","KM71-121","KM71-122","KM71-123","KM71-130","KM71-131","KM71-132","KM71-133","KM71-134","KM71-170","KM71-171","KM71-172","KM71-174","KM71-175","KM71-151","KM71-152","KM71-154","KM71-153","KM71-161","KM71-162","KM71-163","KM71-200","KM71-201","KM71-202","KM71-203","KM71-204","KM71-206","KM71-207","KM71-209","KM71-030","KM71-031","KM71-032","KM71-033","KM71-211","KM71-212","KM71-214","KM71-213","KM71-230","KM71-241","KM71-242","KM71-243","KM71-151","KM71-152","KM71-153","KM71-262","KM71-263","KM71-293","KM71-301","KM71-302","KM71-303","KM71-304","KM71-310","KM71-312","KM71-313","KM71-314","KM71-315","KM71-307","KM71-450","KM71-453","KM71-456","KM71-459","KM71-462","KM71-465","KM71-468","KM71-510","KM71-513","KM71-516","KM71-519","KM71-522","KM71-525","KM71-528","KM71-680","KM71-600","KM71-603","KM71-606","KM71-609","KM71-612","KM71-615","KM71-618","KM71-660","KM71-663","KM71-666","KM71-669","KM71-672","KM71-675","KM71-678","KM71-880","KM71-883","KM71-886","KM71-889","KM71-892","KM71-895","KM71-898","KM71-480","KM71-483","KM71-486","KM71-489","KM71-492","KM71-495","KM71-498","KM71-630","KM71-633","KM71-636","KM71-639","KM71-642","KM71-645","KM71-648","KM71-750","KM71-753","KM71-756","KM71-759","KM71-762","KM71-765","KM71-768","KM71-770","KM71-773","KM71-776","KM71-779","KM71-782","KM71-785","KM71-788","KM71-730","KM71-733","KM71-736","KM71-739","KM71-742","KM71-745","KM71-748","KM71-700","KM71-703","KM71-706","KM71-709","KM71-712","KM71-715","KM71-718");
		
		//process the $_POST variables
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		
		//for loop processing text box variables. Goes thru each text box name from POST global variable and assigns to an array element.
		for($n=0;$n<=152;$n++)
		{
			$wires[$n] = $_POST['KM'.$n];
		}
		
		
		//build the message
		$message = "Name: $name\n\n";
		$message .= "Email: $email\n\n";
		$message .= "Phone: $phone\n\n";
		
		//building message from text boxes. Include only those text boxes variable which hold data. Go thru each text box and test whether it is not null. If variable holds data add to message string. Retrieve product label from array above. The order of the label corresponds with the product text box order in the form. e.g first label KM1-100 corresponds to the first text box for k-wire smooth 4" .7mm.
		for($n=0;$n<=152;$n++)
		{
			if($wires[$n]!=0)
				$message .= "$wireLabel[$n]: $wires[$n]\n";
		}
		
		
		
		//send it
		$mailSent = mail($to, $subject, $message);
	}
?>

<html>
<style>
.warning
{
	font-weight:bold;
	color:#ff0000;
}
</style>


<body>


<?php 
 if ($_POST && !$mailSent) {
//display a failure message
?>

<p class="warning">Sorry, there was a problem sending your message.</p>

<?php 
 }
 elseif ($_POST && $mailSent) {
//display an acknowledgement
?>

<p><strong>Your message has ben sent. Thank you.</strong></p>
<a href="#">Home</a>

<?php } ?>

</body>
</html>