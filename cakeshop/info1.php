<html>
<body>
<?php
echo "<h1 style='text-align:center;color:white;background-color:black;'>ORDER HAS BEEN PLACED</h1><br><br>";
echo "<h2 style='font-weight:cursive;'><span style='color:black;'>First Name</span>:".$_POST['fname'];
echo "<h2 style='font-weight:cursive;'><span style='color:black;'>Last Name</span>:".$_POST['lname'];
echo "<h2 style='font-weight:cursive;'><span style='color:black;'>Address</span>:".$_POST['houseadd'];
echo "<h2 style='font-weight:cursive;'><span style='color:black;'>Phone</span>:".$_POST['pho1'];
echo "<h2 style='font-weight:cursive;'><span style='color:black;'>Email Address</span>:".$_POST['city'];
echo "<h2 style='font-weight:cursive;'><span style='color:black;'>Cake Name</span>:".$_POST['select'];
echo "<h2 style='font-weight:cursive;'><span style='color:black;'>Quantity</span>:".$_POST['houseadd1'];
echo "<h2 style='font-weight:cursive;'><span style='color:black;'>Delivery Date</span>:".$_POST['houseadd2'];

echo "<center><a href='home.html'><button>Back to home</button></a></center>";
?>
</body>
</html>