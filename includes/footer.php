<footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45">
			<div class="flex-w p-b-90">
				<div class="w-size6 p-t-30 p-l-15 p-r-15 respon3">
					<h4 class="s-text12 p-b-30">
						GET IN TOUCH
					</h4>
	
					<div>
						<p class="s-text7 w-size27">
						Any questions? Let us know at <font color="blue"><strong>onlinebooksystem@gmail.com</strong> </font>or call us on <font color="blue"><strong>(+880) 1718XXXXXX</strong> </font>
								</p>
	
						<div class="flex-m p-t-30">
							<a href="#" class="fs-18 color1 p-r-20 fa fa-facebook"></a>
							<a href="#" class="fs-18 color1 p-r-20 fa fa-instagram"></a>
							<a href="#" class="fs-18 color1 p-r-20 fa fa-pinterest-p"></a>
							<a href="#" class="fs-18 color1 p-r-20 fa fa-snapchat-ghost"></a>
							<a href="#" class="fs-18 color1 p-r-20 fa fa-youtube-play"></a>
						</div>
					</div>
				</div>
	
				<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
					<h4 class="s-text12 p-b-30">
						Categories
					</h4>
	
					<ul>
					<li class="p-b-9">
						<a href="product-science.php" class="s-text7">
							Science
						</a>
					</li>

					<li class="p-b-9">
						<a href="product-engineering.php" class="s-text7">
							Engineering
						</a>
					</li>

					<li class="p-b-9">
						<a href="product-business.php" class="s-text7">
							Business Studies
						</a>
					</li>

					<li class="p-b-9">
						<a href="product-medical.php" class="s-text7">
							Medical
						</a>
					</li>

					<li class="p-b-9">
						<a href="product-story.php" class="s-text7">
							Story
						</a>
					</li>
				</ul>
				</div>
	
				<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
					<h4 class="s-text12 p-b-30">
						Links
					</h4>
	
					<ul>
						<li class="p-b-9">
							<a href="#" class="s-text7">
								Search
							</a>
						</li>
	
						<li class="p-b-9">
							<a href="#" class="s-text7">
								About Us
							</a>
						</li>
	
						
					</ul>
				</div>
	
				<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
					<h4 class="s-text12 p-b-30">
						Help
					</h4>
	
					<ul>
						
						<li class="p-b-9">
							<a href="#" class="s-text7">
								FAQs
							</a>
						</li>
					</ul>
				</div>
	<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				<h4 class="m-text12 t-center">
					<button type="button" class="btn btn-info" onclick='document.getElementById("chat").style.display = "block";'>Chat with Me!</button>
				</h4>

				<div id="chat" style="display:none;">
				<iframe
        allow="microphone;"
        width="250"
        height="430"
        src="https://console.dialogflow.com/api-client/demo/embedded/c4818507-76c7-4b71-9db3-4f598f52eb1a">
    </iframe>
	</div>
			</div>
				
				</div>
			</div>
	
			
				
				<div class="t-center s-text8 p-t-20">
					Copyright © 2019. All rights reserved. |
				</div>
			
		</footer>
	
	
	
		<!-- Back to top -->
		<div class="btn-back-to-top bg0-hov" id="myBtn">
			<span class="symbol-btn-back-to-top">
				<i class="fa fa-angle-double-up" aria-hidden="true"></i>
			</span>
		</div>
	
		<!-- Container Selection1 -->
		<div id="dropDownSelect1"></div>
	
	
	
		<script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="vendor/animsition/js/animsition.min.js"></script>
		<script type="text/javascript" src="vendor/bootstrap/js/popper.js"></script>
		<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="vendor/select2/select2.min.js"></script>
		<script type="text/javascript">
			$(".selection-1").select2({
				minimumResultsForSearch: 20,
				dropdownParent: $('#dropDownSelect1')
			});
		</script>
		<script type="text/javascript" src="vendor/slick/slick.min.js"></script>
		<script type="text/javascript" src="js/slick-custom.js"></script>
		<script type="text/javascript" src="vendor/countdowntime/countdowntime.js"></script>
		<script type="text/javascript" src="vendor/lightbox2/js/lightbox.min.js"></script>
		<script type="text/javascript" src="vendor/sweetalert/sweetalert.min.js"></script>
		<script type="text/javascript">
			$('.block2-btn-addcart').each(function(){
				var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
				$(this).on('click', function(){
					swal(nameProduct, "is added to cart !", "success");
				});
			});
	
			$('.block2-btn-addwishlist').each(function(){
				var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
				$(this).on('click', function(){
					swal(nameProduct, "is added to wishlist !", "success");
				});
			});
		</script>
	
	<!--===============================================================================================-->
		<script src="js/main.js"></script>
	
	</body>
	</html>
	