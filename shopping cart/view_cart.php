<?php
session_start();
include_once("config.php");
?>

<?php include_once("../navbar.php"); ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>View shopping cart</title>
<link href="style/style.css" rel="stylesheet" type="text/css">
<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">
</head>
<body>
<br>
<h1 align="center">Shopping Cart</h1>
<div class="cart-view-table-back">
<form method="post" action="cart_update.php">
<table width="100%"  cellpadding="6" cellspacing="0"><thead><tr><th>Quantity</th><th>Name</th><th>Price</th><th>Total</th><th>Remove</th></tr></thead>
  <tbody>
 	<?php
	if(isset($_SESSION["cart_products"])) //check session var
    {
		$total = 0; //set initial total value
		$b = 0; //var for zebra stripe table 
		foreach ($_SESSION["cart_products"] as $cart_itm)
        {
			//set variables to use in content below
			$product_name = $cart_itm["product_name"];
			$product_qty = $cart_itm["product_qty"];
			$product_price = $cart_itm["product_price"];
			$product_code = $cart_itm["product_code"];
			$subtotal = ($product_price * $product_qty); //calculate Price x Qty
			
		   	$bg_color = ($b++%2==1) ? 'odd' : 'even'; //class for zebra stripe 
		    echo '<tr class="'.$bg_color.'">';
			echo '<td><center><input type="text" size="2" maxlength="2" name="product_qty['.$product_code.']" value="'.$product_qty.'" /></center></td>';
			echo '<td>'.$product_name.'</td>';
			echo '<td>'.$currency.$product_price.'</td>';
			echo '<td>'.$currency.$subtotal.'</td>';
			echo '<td><input type="checkbox" name="remove_code[]" value="'.$product_code.'" style="position:relative;left:50px"/></td>';
            echo '</tr>';
			$total = ($total + $subtotal); //add subtotal to total var
        }
		
		$grand_total = $total + $shipping_cost; //grand total including shipping cost
		foreach($taxes as $key => $value){ //list and calculate all taxes in array
				$tax_amount     = round($total * ($value / 100));
				$tax_item[$key] = $tax_amount;
				$grand_total    = $grand_total + $tax_amount;  //add tax val to grand total
		}
		
		$list_tax       = '';
		foreach($tax_item as $key => $value){ //List all taxes
			$list_tax .= $key. ' : '. $currency. sprintf("%01.2f", $value).'<br />';
		}
		$shipping_cost = ($shipping_cost)?'Shipping Cost : '.$currency. sprintf("%01.2f", $shipping_cost).'<br />':'';
	}
    ?>
    <tr><td colspan="5"><span style="float:right;text-align: right;">
    
    <!--Checks if the tax is null-->
	<?php if(!empty($list_tax)){
		echo "<br>"; 
		echo $shipping_cost. $list_tax;} ?>Amount Payable : 
    <!--Checks if the total is null-->
	<?php if(!empty($grand_total)){
		echo sprintf("%01.2f", $grand_total);
		
		}?></span></td></tr>
    
    <tr><td colspan="5"><center><br><br>
    Please enter your credit card number<br><br>
    <input type="text" placeholder="Please enter your credit card number" class="form-control" style="width:37%" required ></center></td></tr>
    
    <tr><td colspan="5"><center><br><br>
    We Accept<br><br>
    <span>
    <img src="images/americanexpress.png" alt="american">
    <img src="images/visaelectron.png" alt="visaelectron">
    <img src="images/visa.png" alt="visa">
    <img src="images/master.png" alt="master">
    <img src="images/paypal.png" alt="paypal">
    </span>
    </center></td></tr>
    
    <tr><td colspan="5">
    <span>
    <br><div style="display:inline-block;position:relative;left:250px;float:left">
    <!--Checking if the cart is not empty-->
    <a href="<?php if(!empty($_SESSION["cart_products"])){
		 	echo "checkoutcheck.php";
		 }else{
			 echo "empty.php";				
		 }?>" class="btn btn-success" style="position:relative;top:10px">Checkout</a>
    <button type="submit" class="btn btn-danger" style="position:relative; left:25px;">Update</button>
    </span>
    </td></tr></div>
  </tbody>
</table>
<input type="hidden" name="return_url" value="<?php 
$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
echo $current_url; ?>" />
</form>
</div>

</body>
</html>
<?php include_once("../footer.php"); ?>