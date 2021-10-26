<!DOCTYPE html>
<html lang="en">
<head>


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script   src="https://code.jquery.com/jquery-3.6.0.min.js"   integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="   crossorigin="anonymous"></script>
	<title>Document</title>

    
</head>
<body>
<form action="registration.php" method="post">
		<div class="container-fluid">
			<div class="row justify-content-center">
				<div class="col-sm-3">
					<h1>Touch n Go</h1>
					<p>Fill up the form with correct values.</p>
					<hr class="mb-3">
					<label for="total_amount"><b>Total Amount (RM)</b></label>
					<input class="form-control" id="total_amount" type="text" name="total_amount" value = "RM50.00" disabled>

					<br>
					<label for="trans_date_time"><b>Transaction Date & Time</b></label><br>
					<input value = "<?php
                        date_default_timezone_set("Singapore");
                        echo "" . date("Y/m/d h:i:sa");
                        ?>"
						class="form-control" id="trans_date_time"  type="text" name="trans_date_time" disabled>

					<br>
					<label for="merchant_name"><b>Merchant/Submerchant Name</b></label>
					<input class="form-control" id="merchant_name"  type="text" name="merchant_name" value = "Lazada" disabled>

					<br>
                    <label for="merchant_ID"><b>Merchant/Submerchant ID</b></label>
					<input class="form-control" id="merchant_ID"  type="text" name="merchant_ID" value = "A5004646" disabled>

					<br>
					<label for="order_title"><b>Order Title/Description</b></label>
					<input class="form-control" id="order_title"  type="text" name="order_title" value = "Uniqlo UT Collection Demon Slayer T-Shirt" disabled>

					<br>
					<label for="trans_ID"><b>Merchant Transaction ID</b></label>
					<input class="form-control" id="trans_id"  type="text" name="trans_ID" value="YRd48Ibvhc8" disabled>

					<br>
                    <label for="agreed"><b>Agreed to Pay</b></label>
                    <input type="checkbox" id="agreed" name="agreed" value="agreed to pay"><br>

					<hr class="mb-3">
					<div class="container-fluid m-0 p-0">
						<div class="row">
							<div class="col col-7"><a href="merchant_order.php"><button class="btn btn-primary btn-sm" type="button" id="register" name="create" >Create merchant order</button></a></div>
						    <div class="col col-5"><button class="btn btn-primary btn-sm" type="button" id="register" name="create" >Cancel payment</button></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
