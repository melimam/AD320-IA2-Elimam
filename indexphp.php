<?php 
$name = $_GET['name'];
$email = $_GET['email'];
$phone = $_GET['phone'];
$state = $_GET['state'];
echo "<ul>
        <li>Name: ".$name."</li>
        <li>Email: ".$email."</li>
	 ";
if (!empty($phone) ) {
  echo "
        <li>Phone: ".$phone."</li>  
";
}
if (!empty($state) ) {
  echo "
        <li>State: ".$state."</li>  
";
}
echo "
</ul>";
?>