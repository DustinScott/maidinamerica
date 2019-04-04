<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Maidinamerica</title>
    
    <link rel="shortcut icon" type="image/png" href="http://www.theoht.com/mina/assets/img/MaidInAmerica_favicon.png"/>
	
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Corben">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Gochi+Hand">
    <link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Features-Boxed.css">
    <link rel="stylesheet" href="assets/css/Footer-Clean.css">
    <link rel="stylesheet" href="assets/css/Highlight-Blue.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Testimonials.css">
</head>

<body style="background-color: rgb(231,231,231);">

<!--    NAVBAR SECTION-->
    <?php include_once 'includes/nav.php'; ?>

<!--    TOP HERO SECTION-->
    <div id="carouselSlides" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="assets/img/maid_a.png" alt="First slide">
                <div class="carousel-caption" style="margin-top: auto; margin-bottom: 25vh;">
                    <h1 class="d-none d-lg-block" style="font-family:'Bree Serif', serif;font-size: 92px;text-shadow: 2px 2px 5px dimgray;">Come home, it's clean!</h1>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="assets/img/main_b.png" alt="Second slide">
                <div class="carousel-caption" style="margin-top: auto; margin-bottom: 25vh;">
                    <h1 class="d-none d-lg-block" style="font-family:'Bree Serif', serif;font-size: 92px;text-shadow: 2px 2px 5px dimgray;">Come home, it's clean!</h1>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="assets/img/main_d.png" alt="Third slide">
                <div class="carousel-caption" style="margin-top: auto; margin-bottom: 25vh;">
                    <h1 class="d-none d-lg-block" style="font-family:'Bree Serif', serif;font-size: 92px;text-shadow: 2px 2px 5px dimgray;">Come home, it's clean!</h1>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselSlides" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselSlides" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


<?php include 'includes/servicesb.php'; ?>
    
    
    <div class="highlight-blue">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Make your appointment now!</h2>
                <p class="text-center">It's easy, fast and safe. Just call us and we will arrange a visit! </p>
            </div>
            <div class="buttons"><a class="btn btn-primary" role="button" href="#contact">Book now</a></div>
        </div>
    </div>

    <!-- TESTIMONIALS SECTION-->
<?php include_once 'includes/testimonials.php'; ?>


<?php include_once 'includes/contactform.php'; ?>
    

    <!--FOOTER SECTION-->
    <?php include_once 'includes/footer.php'; ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/Paralax-Hero-Banner.js"></script>
</body>

</html>

<script>

$(document).on('click','#Send_WebForm',function(){

	var Name_WebForm = $('#Name_WebForm').val();
	var Email_WebForm = $('#Email_WebForm').val();
	var Message_WebForm = $('#Message_WebForm').val();
	var Phone_WebForm = $('#Phone_WebForm').val();
	
	$.post('mailer.php',{Name_WebForm:Name_WebForm,Email_WebForm:Email_WebForm,Phone_WebForm:Phone_WebForm,Message_WebForm:Message_WebForm}, function(data){
		
		$('#contact_msg').html('<div>'+ data +'</div>');
		
	});
		
});	

</script>






