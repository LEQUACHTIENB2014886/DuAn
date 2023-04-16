<?php
session_start();
include("../config.php");

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en-US" xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<head>
	<title> WEB </title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<link rel="shortcut icon" href="../images/favicon.png" />
	     <link rel="stylesheet" href="../css/style.css" type="text/css" media="all" />
		<link rel="stylesheet" href="../css/proStyle.css" type="text/css" media="all" />
	   
	 	<link rel="stylesheet" href="../css/cart.css" type="text/css" media="all" />
		 <link rel="stylesheet" href="../css/chatStyle.css" type="text/css" media="screen" />
	<script src="../js/jquery-1.6.2.min.js" type="text/javascript" charset="utf-8"></script>
 
	<script src="../js/cufon-yui.js" type="text/javascript"></script>
	<script src="../js/Myriad_Pro_700.font.js" type="text/javascript"></script>
	<script src="../js/jquery.jcarousel.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="../js/functions.js" type="text/javascript" charset="utf-8"></script>
	
		<script src="../js/main.js" type="text/javascript" charset="utf-8"></script>
	
	
	<!-- WAA DHAMAADKA JQueryga CHaTTIng Ka-->

<script type="text/javascript">
$(document).ready(function() {


	
	//method to trigger when user hits enter key
	$("#shout_message").keypress(function(evt) {
		if(evt.which == 13) {
				var iusername = $('#shout_username').val();
				var imessage = $('#shout_message').val();
				post_data = {'username':iusername, 'message':imessage};
			 	
				//send data to "shout.php" using jQuery $.post()
				$.post('shout.php', post_data, function(data) {
					
					//append data into messagebox with jQuery fade effect!
					$(data).hide().appendTo('.message_box').fadeIn();
	
					//keep scrolled to bottom of chat!
					var scrolltoh = $('.message_box')[0].scrollHeight;
					$('.message_box').scrollTop(scrolltoh);
					
					//reset value of message box
					$('#shout_message').val('');
					
				}).fail(function(err) { 
				
				//alert HTTP server error
				alert(err.statusText); 
				});
			}
	});
	
	//toggle hide/show shout box
	$(".close_btn").click(function (e) {
		//get CSS display state of .toggle_chat element
		var toggleState = $('.toggle_chat').css('display');
		
		//toggle show/hide chat box
		$('.toggle_chat').slideToggle();
		
		//use toggleState var to change close/open icon image
		if(toggleState == 'block')
		{
			$(".header div").attr('class', 'open_btn');
		}else{
			$(".header div").attr('class', 'close_btn');
		}
		 
		 
	});
});

</script>

<!-- WAA DHAMAADKA JQueryga CHaTTIng Ka-->
	
</head>
<body>
	<!-- Begin Wrapper -->
	<div id="wrapper">
		<!-- Begin Header -->
		<div id="header">
			<!-- Begin Shell -->
			<div class="shell">
				<h1 id="logo"><a class="notext" href="#" title="Suncart">Suncart</a></h1>
				
				<div class="cl">&nbsp;</div>
	<div class="shopping-cart"  id="cart" id="right" >
<dl id="acc">	
<dt class="active">								
<p class="shopping" >Shopping Cart &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
</dt>
<dd class="active" style="display: block;">
<?php
   //current URL of the Page. cart_update.php redirects back to this URL
	$current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);

if(isset($_SESSION["cart_session"]))
{
    $total = 0;
    echo '<ul>';
    foreach ($_SESSION["cart_session"] as $cart_itm)
    {
        echo '<li class="cart-itm">';
        echo '<span class="remove-itm"><a href="../cart_update.php?removep='.$cart_itm["code"].'&return_url='.$current_url.'">&times;</a></span>'."</br>";
        echo '<h3  style="color: green" ><big> '.$cart_itm["name"].' </big></h3>';
        echo '<div class="p-code"><b><i>ID:</i></b><strong style="color: #d7565b" ><big> '.$cart_itm["code"].' </big></strong></div>';
		echo '<span><b><i>Shopping Cart</i></b>( <strong style="color: #d7565b" ><big> '.$cart_itm["TiradaProductTiga"].'</big></strong>) </span>';
        echo '<div class="p-price"><b><i>Price:</b></i> <strong style="color: #d7565b" ><big>'.$currency.$cart_itm["Qiimaha"].'</big></strong></div>';
        echo '</li>';
        $subtotal = ($cart_itm["Qiimaha"]*$cart_itm["TiradaProductTiga"]);
        $total = ($total + $subtotal); 
    }
    echo '</ul>';
    echo '<span class="check-out-txt"><strong style="color:green" ><i>Total:</i> <big style="color:green" >'.$currency.$total.'</big></strong> <a   class="a-btnjanan"  href="../view_cart.php"> <span class="a-btn-text">Thanh Toán</span></a></span>';
	echo '&nbsp;&nbsp;<a   class="a-btnjanan"  href="../cart_update.php?emptycart=1&return_url='.$current_url.'"><span class="a-btn-text">Làm Trống</span></a>';
}else{
    echo ' <h4>(Giỏ Hàng Của Bạn Đang Trống!!!)</h4>';
}
?>

</dd>
</dl>
</div>
 <div class="clear"></div>
			</div>
			<!-- End Shell -->
		</div>
		<!-- End Header -->
		<!-- Begin Navigation -->
		<div id="navigation">
			<!-- Begin Shell -->
			<div class="shell">
				<ul>
					<li class="active"><a href="index.php" title="index.php">Home</a></li>
					<li><a href="../customer.php">Đăng Ký</a> </li>
					<li><a href="../Sign In.php" title="Sign In"><span>Đăng Nhập</span></a></li>
				</ul>
				<div class="cl">&nbsp;</div>
			</div>
			<!-- End Shell -->
		</div>
		<!-- End Navigation -->
		<!-- Begin Slider -->
		<div id="slider">
		
			<!-- End Shell -->
		</div>
		<!-- End Slider -->
		<!-- Begin Main -->
		<div id="main" class="shell">
			<!-- Begin Content -->
			<div id="content">
				<div class="post">
					<h2>Welcome!</h2>
					Web bán Laptop </p>
					<div class="cl">&nbsp;</div>
				</div>
			</div>
			<!-- End Content -->
			<div class="cl">&nbsp;</div>
			<!-- Begin Products -->
			<div id="products">
				<h2>Các Loại Laptop</h2>
				
				
				
          <form name="form1">
	     <input type="hidden" name="productid" />
         <input type="hidden" name="command" />
         </form>
		
	
	      <div class="section group">
		  
		  <?php
    //current URL of the Page. cart_update.php redirects back to this URL
	$current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    
	$results = $mysqli->query("SELECT * FROM product ORDER BY Product_ID ASC");
    if ($results) { 
	
        //fetch results set as object and output HTML
        while($obj = $results->fetch_object())
        {
			echo '<div class="grid_1_of_4 images_1_of_4">'; 
            echo '<form method="post" action="../cart_update.php">';
			echo '<div class="product-thumb"><img src="../images/'.$obj->Picture.'"></div>';
            echo '<div class="product-content"><h2><b>'.$obj->productName.'</b> </h2>';
            echo '<div class="product-desc">'.$obj->Description.'</div>';
            echo '<div class="product-info">';
			echo '<p><span class="price"> Giá:<big style="color:green">'.$obj->Price.'</big></span></p>';
            echo 'Qty <input type="text" name="product_qty" value="1" size="3" />';
			echo '<div class="button"><span><img src="../images/cart.jpg" alt="" /><button class="cart-button"  class="add_to_cart">Add to Cart</button></span> </div>';
			echo '</div></div>';
            echo '<input type="hidden" name="Product_ID" value="'.$obj->Product_ID.'" />';
            echo '<input type="hidden" name="type" value="add" />';
			echo '<input type="hidden" name="return_url" value="'.$current_url.'" />';
            echo '</form>';
            echo '</div>';
        }
    
    }
    ?>
    </div>
			</div>
				<div class="cl">&nbsp;</div>
			</div>
			
			<!-- End Products -->
			
		</div>
		<!-- End Main -->
		<!-- Begin Footer -->
		<div id="footer">
			
			<div class="copy">
				<!-- Begin Shell -->
				<div class="shell">
					<div class="carts">
						<ul>
							<li><span>Web E-Commerce</span></li>
							
						</ul>
					</div>	<p>  <a href="index.php"><i></i></a></p>
					<div class="cl">&nbsp;</div>
				</div>
				<!-- End Shell -->
			</div>
		</div>
		<!-- End Footer -->
		
		
	</div>
	
	</div>
	<!-- End Wrapper -->
</body>
</html>