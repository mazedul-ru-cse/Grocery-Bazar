<div class="row">
	<div class="box box-solid">
	  	<div class="box-header with-border">
	    	<h3 style="color:tomato;" class="box-title"><b>Most Viewed Today</b></h3>
	  	</div>
	  	<div class="box-body">
	  		<ul id="trending">
	  		<?php
	  			$now = date('Y-m-d');
	  			$conn = $pdo->open();

	  			$stmt = $conn->prepare("SELECT * FROM products WHERE date_view=:now ORDER BY counter DESC LIMIT 10");
	  			$stmt->execute(['now'=>$now]);
	  			foreach($stmt as $row){
	  				echo "<li><a href='product.php?product=".$row['slug']."'>".$row['name']."</a></li>";
	  			}

	  			$pdo->close();
	  		?>
	    	<ul>
	  	</div>
	</div>
</div>


<div class="row">
	<div class='box box-solid'>
	  	<div class='box-header with-border'>
	    	<h3 style="color:blue;" class='box-title'><b>Follow us on Social Media</b></h3>
	  	</div>
	  	<div class='box-body'>
		  <a href="https://www.facebook.com/Asaduzzamantec"><i class="fa fa-facebook-official" style="font-size:24px;color:blue"></i></a>
            <a href="https://www.instagram.com/ahfahim"><i class="fa fa-instagram" style="font-size:24px;color:#fe4164"></i></a>
            <a href="https://www.twitter.com/fah485434"><i class="fa fa-twitter" style="font-size:24px;color:#00acee"></i></i></a>
	  	</div>
		  <div class="banner">
        <div class="container">
	</div>
</div>