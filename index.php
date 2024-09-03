<?php 
include('header.php');
?>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script type="text/javascript" src="payment.js"></script>
<?php include('container.php');?>
<div class="container">	
	<div class="row">	
		<h2>Stripe Payment Gateway Integration in PHP</h2>	
		<span class="paymentErrors"></span>	
		<br>
		<div class="col-xs-12 col-md-4">
			<div class="panel panel-default">
			<div class="panel-body">
			<form action="process.php" method="POST" id="paymentForm">				
				<div class="form-group">
					<label for="name">Name</label>
					<input type="text" name="custName" class="form-control">
				</div>
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" name="custEmail" class="form-control">
				</div>
				<div class="form-group">
					<label>Card Number</label>
					<input type="text" name="cardNumber" size="20" autocomplete="off" id="cardNumber" class="form-control" />
				</div>	
				<div class="row">
				<div class="col-xs-4">
				<div class="form-group">
					<label>CVC</label>
					<input type="text" name="cardCVC" size="4" autocomplete="off" id="cardCVC" class="form-control" />
				</div>	
				</div>	
				</div>
				<div class="row">
				<div class="col-xs-10">
				<div class="form-group">
					<label>Expiration (MM/YYYY)</label>
					<div class="col-xs-6">
						<input type="text" name="cardExpMonth" placeholder="MM" size="2" id="cardExpMonth" class="form-control" /> 
					</div>
					<div class="col-xs-6">
						<input type="text" name="cardExpYear" placeholder="YYYY" size="4" id="cardExpYear" class="form-control" />
					</div>
				</div>	
				</div>
				</div>
				<br>	
				<div class="form-group">
					<input type="submit" id="makePayment" class="btn btn-success" value="Make Payment">
				</div>			
			</form>	
			</div>
			</div>
		</div>		
	</div>			
</div>
<?php include('footer.php');?>

