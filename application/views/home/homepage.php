<video autoplay muted loop id="background-video">
  <source src="https://video.wixstatic.com/video/a4e551_3a19e8cc4307471287126f009a30b29e/360p/mp4/file.mp4" type="video/mp4">
</video>

<div class="home-content flex">
	<div class="buy-bitcoin-form">
		<div class="buy-form-div">
			
			<div class="buy-form-content">
				<div class="title">
					Bitcoin to Altcoin trading exchanging
				</div>
				
				<div class="subtitle">No verification required!</div>

					<div class="row">
					  <div class="col-lg-12">
					    <div class="input-group">
					      <input type="text" class="form-control" aria-label="Text input with dropdown button">
					      <div class="input-group-btn">
					        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					          ETH
					        </button>
					        <div class="dropdown-menu dropdown-menu-right">
					          <a class="dropdown-item" href="#">ETH</a>
					          <a class="dropdown-item" href="#">Altcoin</a>
					        </div>
					      </div>
					    </div>
					  </div>
					</div>

					<div class="row" style="margin-top: 20px;justify-content: center;">
						<button class="buy-now-btn col-md-6" id="buy-now-btn">Buy Now</button>
					</div>

					<div class="row" style="margin-top: 20px;justify-content: center;">
						<button class="see-actions-btn col-md-6">See Actions</button>
					</div>

					<div class="row" style="margin-top: 10px;">
						<div class="col-md-12">
							<a href="#" style="text-decoration: underline;">You will be able to change this order before placing</a>
						</div>
					</div>

					<div class="row" style="margin-top: 10px;">
						<div class="col-md-12">
							<p style="color:rgba(61, 155, 233, 1); opacity: 0.8;">With just $1 worth of BTC. become a member and exchange cryptocurrency for lifetime. <a href="#">Sign up</a> now</p>
						</div>
					</div>

			</div>



			<div class="buy-form-bg"></div>

		</div>

	</div>



	<div style="width: 400px;"">
		 <div class="modal-content" id="wallet-detail" style="display: none;">
	      <div class="modal-header">
	        <h5 class="modal-title">Wallet Details</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="wallet-close-x">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <form action="/action_page.php">
			  <div class="form-group">
			    <input type="text" class="form-control" placeholder="You are buying 123.00 ETH">
			  </div>
			  <div class="form-group">
			    <label>Target Wallet address</label>
			    <input type="text" class="form-control" placeholder="Enter your wallet address where you">
			  </div>
			  <div class="row" style="justify-content: center;">
			    <button class="btn btn-success" type="button">Confirm</button>
			  </div>
			  <div class="form-group">
			    <label>Send .000 BTC to this address</label>
			    <input type="text" class="form-control" placeholder="adasdjf1231asdkjf12324jsld">
			  </div>
			  <div class="form-group">
			    <span>Dont have BTC?</span> <a href="#">See how to buy.</a>
			  </div>
			</form>
	      </div>
	    </div>
	</div>
</div>
	<!-- end home content -->
	<script src="<?=base_url()?>assets/js/home/home.js"></script>