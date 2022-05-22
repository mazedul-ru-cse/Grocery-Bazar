<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-purple layout-top-nav">
<div class="wrapper">

	<?php include 'includes/navbar.php'; ?>
	 
	  <div class="content-wrapper">
	    <div class="container">

	      <!-- Main content -->
	      <section class="content">
	        <div class="row">
	        	<div class="col-sm-9">
	        		<?php
	        			if(isset($_SESSION['error'])){
	        				echo "
	        					<div class='alert alert-danger'>
	        						".$_SESSION['error']."
	        					</div>
	        				";
	        				unset($_SESSION['error']);
	        			}
	        		?>
	        		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		                <ol class="carousel-indicators">
		                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		                  <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
		                  <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
		                </ol>
		                <div class="carousel-inner">
		                  <div class="item active">
		                    <img src="images/offer7.jpeg" alt="First slide">
		                  </div>
		                  <div class="item">
		                    <img src="images/oil.jpg" alt="Second slide">
		                  </div>
		                  <div class="item">
		                    <img src="images/frozen-fish.jpg" alt="Third slide">
		                  </div>
		                </div>
                                
		                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
		                  <span class="fa fa-angle-left"></span>
		                </a>
		                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
		                  <span class="fa fa-angle-right"></span>
		                </a>
		            </div>
		            <h2 style="color:red">Our Services</h2>
					<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		                <ol class="carousel-indicators">
		                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		                  <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
		                  <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
		                </ol>
		                <div class="carousel-inner">
		                  <div class="item active">
		                    <img src="images/tutorial-1.jpg" alt="First slide">
		                  </div>
		                  <div class="item">
		                    <img src="images/tutorial-3.jpg" alt="Third slide">
		                  </div>
		                </div>                          
		                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
		                  <span class="fa fa-angle-left"></span>
		                </a>
		                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
		                  <span class="fa fa-angle-right"></span>
		                </a>
		            </div>

<section> 

<h2 style="color:green;">Our Latest Product</h2>
<div class="container">
<div class="row">
<div class="col-md-3">
<img src="images/Rice1.jpg" width="100" height="100">
 <p style="color:red;" "font-size:30px;"><a href="product.php?product=nazirshail-rice-25kg">Nazirshail Rice 25 kg</a></p>
<p style="color:blue;" "font-size:30px;">৳ 1699</p>



</div>
<div class="col-md-3">
<img src="images/Pran.jpg" width="100" height="100">
<p style="color:red;" "font-size:30px;"><a href="product.php?product=pran-chinigura-rice-2-kg">Pran Chinigura Rice 2 kg</a></p>
<p style="color:blue;" "font-size:30px;">৳ 250</p>
	


</div>
<div class="col-md-3">
<img src="images/Miniket.jpg" width="100" height="100">
 <p style="color:red;" "font-size:30px;"><a href="product.php?product=miniket-rice-25-kg">Miniket Rice 25 kg</a></p>
<p style="color:blue;" "font-size:30px;">৳ 1649</p>
	


</div>
<div class="col-md-3">
<img src="images/beng-meat.jpg" width="100" height="100">
<p align="style="color:red;" "font-size:30px;"><a href="product.php?product=bengal-meat-beef-bone-1-kg">Bengal Meat Beef Bone 1 kg</a></p>
 <p style="color:blue;" "font-size:30px;">৳ 730</p>
	


</div>



</div>



<div class="row">
<div class="col-md-3">
<img src="images/boiler.jpg" width="100" height="100">
 <p style="color:red;" "font-size:30px;"><a href="product.php?product=broiler-chicken-drumsticks-1-kg">Broiler Chicken Drumstics 1 kg</a></p>
<p style="color:blue;" "font-size:30px;">৳ 290</p>



</div>
<div class="col-md-3">
<img src="images/rui.jpg" width="100" height="100">
<p style="color:red;" "font-size:30px;"><a href="product.php?product=rui-fish-after-cutting-1-kg">Rui Fish (After Cutting) 1 kg</a></p>
<p style="color:blue;" "font-size:30px;">৳ 320</p>
	


</div>
<div class="col-md-3">
<img src="images/green.jpg" width="100" height="100">
 <p style="color:red;" "font-size:30px;"><a href="product.php?product=green-apple-1-kg">Green Apple 1 kg</a></p>
<p style="color:blue;" "font-size:30px;">৳ 255</p>


</div>
<div class="col-md-3">
<img src="images/sal1.jpg" width="100" height="100">
<p style="color:red;" "font-size:30px;"><a href="product.php?product=aci-pure-salt-500-gm">ACI Pure Salt 500 gm</a></p>
<p style="color:blue;" "font-size:30px;">৳ 17</p>
	


</div>



</div>
<div class="row">
<div class="col-md-3">
<img src="images/rup.jpeg" width="100" height="100">
<p style="color:red;" "font-size:30px;"><a href="product.php?product=rupchada-soyabean-oil-2-ltr">Rupchada Soyabean Oil 2 Ltr</a></p>
<p style="color:blue;" "font-size:30px;">৳ 335</p>



</div>
<div class="col-md-3">
<img src="images/red.jpg" width="100" height="100">
<p style="color:red;" "font-size:30px;"><a href="product.php?product=red-tomato-500-gm">Red Tomato 500 gm</a></p>
<p style="color:blue;" "font-size:30px;">৳ 19</p>
	


</div>
<div class="col-md-3">
<img src="images/onion.jpg" width="100" height="100">
<p style="color:red;" "font-size:30px;"><a href="product.php?product=lal-peyaj-onion-imported-1-kg">Lal Peyaj ( Onion Imported) 1 kg</a></p>
<p style="color:blue;" "font-size:30px;">৳ 59</p>
	


</div>
<div class="col-md-3">
<img src="images/coc2.jpg" width="100" height="100">
<p style="color:red;" "font-size:30px;"><a href="product.php?product=cococola-2-25-ltr">Cococola 2.25 ltr</a></p>
<p style="color:blue;" "font-size:30px;">৳ 125</p>
	


</div>

</div>


</div>

</section>
	        	</div>
	        	<div class="col-sm-3">
	        		<?php include 'includes/sidebar.php'; ?>
	        	</div>
	        </div>
	      </section>
	    </div>
 	<?php include 'includes/footer.php'; ?>
</div>

<?php include 'includes/scripts.php'; ?>
</body>
</html>