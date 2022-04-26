<style>
<?php include 'style.css';
?>
</style>
<?php 

$username = $_POST["onlineid"];
$shipping = $_POST["choice"];

    $password = $_POST["passcode"];
    $Car1 = $_POST["Car1"];
    $Car2 = $_POST["Car2"];
    $Car3 = $_POST["Car3"];
    
    echo "<p>Welcome To The Post-Purchase Page!</p>";
    echo "<p>The password you entered is: $password </p>";
    echo "<br>";
    
    $shippingcharge=0;

    if($shipping=="7days")
    {
        $shippingcharge=0;
    }


    else if($shipping=="overnight")
    {
        $shippingcharge=50;
    }

    else if($shipping=="3days")
    {
        $shippingcharge=5;
    }
    
    $Car1price=$Car1*1000;
    $Car2price=$Car2*1500;
    $Car3price=$Car3*2000;

$total=$shippingcharge+$Car1price+$Car2price+$Car3price;
echo "<h2>Receipt:</h2>";


echo "
 <table>
	<tr>	
		<th class='green'>            </th>
		<th class='green'>Quantity</th>
		<th class='green'>Cost Per Item</th>
		<th class='green'>Sub Total</th>
	</tr>";

	echo "<tr>
		<th class='blue'>Camry</th>
		<td class='purple'>$Car1</td>
		<td class='purple'>$1000</td>
		<td class='purple'>$$Car1price</td>
	</tr>";
	echo "<tr>
		<th class='blue'>Altima</th>
		<td class='purple'>$Car2</td>
		<td class='purple'>$1500</td>
		<td class='purple'>$$Car2price</td>
	</tr>";
echo "<tr>
		<th class='blue'>Suburban</th>
		<td class='purple'>$Car3</td>
		<td class='purple'>$2000</td>
		<td class='purple'>$$Car3price</td>
	</tr>";
	
echo "<tr>
		
		<th class='blue'>Shipping</th>
		<td class='purple' colspan='2'>$shipping</td>
		<td class='purple'>$$shippingcharge</td>
</tr>";
echo "<tr>
		
		<th class='green' colspan='3'>Total Cost</th>
		<td class='purple'>$$total</td>
</tr>";


echo "</table>";
?>