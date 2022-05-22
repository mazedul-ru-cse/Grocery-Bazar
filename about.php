<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-purple layout-top-nav">
<div class="wrapper">

	<?php include 'includes/navbar.php'; ?>
	 
	  <div class="content-wrapper">
	    <div class="container">

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>

  

<div class="about-section">
  <h1>About Us</h1>
  <p>Grocery Bazar  is a service oriented e-commerce business which gives you the authority to unleash</p>
  <p>your shopaholic attitude from home with quality products and world class customer support.</p>
  <p>We strive to utilize the power of the internet in its highest peak to fulfil the needs of your busy life.</p>
  <p>It is best for one click handy shopping & hassale free services. It can saves time & money.</p>
</div>

<h1>Contact US
  <small>how to contact with us</small>
</h1>
<section class="contact-wrap">
  <form action="" class="contact-form">
    <div class="col-sm-6">
      <div class="input-block">
        <label for="">First Name</label>
        <input type="text" name="firstname" class="form-control">
      </div>
    </div>
    <div class="col-sm-6">
      <div class="input-block">
        <label for="">Last Name</label>
        <input type="text" name="lastname" class="form-control">
      </div>
    </div>
    <div class="col-sm-12">
      <div class="input-block">
        <label for="">Email</label>
        <input type="email" name="email" class="form-control">
      </div>
    </div>
    <div class="col-sm-12">
      <div class="input-block">
        <label for="">Message Subject</label>
        <input type="text" name="messagesubject" class="form-control">
      </div>
    </div>
    <div class="col-sm-12">
      <div class="input-block textarea">
        <label for="">Drop your message here</label>
        <textarea rows="3" type="text" name="message" class="form-control"></textarea>
      </div>
    </div>
    <div class="col-sm-12">
    <button type="button" class="btn btn-info btn-flat"><a href="contact_sucess.php">Submit</a></button>
    </div>
  </form>
</section>

<!-- follow me template -->
<div class="made-with-love">
  Made with 
  <i></i> by 
  <a target="_blank">MD. Asaduzzaman</a>
</div>

<section> 

</div>
 	<?php include 'includes/footer.php'; ?>
</div>

<?php include 'includes/scripts.php'; ?>
</body>
</html>