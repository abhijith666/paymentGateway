<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <title>Document</title>
    
</head>
<body>

<section >
<?php require('header.php') ?>
<div class="slider">
  <h1 class="slider_text-1">Donate</h1>
  <h2 class="slider_text-2">4 a better world</h2>
<div class="payment_button" >
       
<div class="razorpay-embed-btn" data-url="https://pages.razorpay.com/pl_I7WqWYlrD4na5T/view" data-text="Donate" data-color="#528FF0" data-size="large">
  <script>
    (function(){
      var d=document; var x=!d.getElementById('razorpay-embed-btn-js')
      if(x){ var s=d.createElement('script'); s.defer=!0;s.id='razorpay-embed-btn-js';
      s.src='https://cdn.razorpay.com/static/embed_btn/bundle.js';d.body.appendChild(s);} else{var rzp=window['__rzp__'];
      rzp && rzp.init && rzp.init()}})();
  </script>
</div>
    
   
</div>
  
</div>
<section class="second_section">
  <h1 style="text-align:center;">Wellcome to our Charity</h1>
  <div class="first_discription"><p>When a child receives an education, their future is brighter and their dreams become a possibility.
     When a child goes to school, he will no longer need to work in a quarry or beg in the streets for food.
      An educated child will be able to find employment to secure a future for them and their family, a chance to earn a sustainable income, helping them to break the poverty cycle.</p></div>

      <h3 style="text-align:center; margin-top: 40px;margin-bottom:30px;">"Education is the key to fight poverty and disease."</h3>
</section>

</section>



<section class="section_four" style="background-color:white;">
  <h3>Giving back is always a satisfying activity, but it can be more fun if done in groups</h3>
  <h3 style="color:red;margin-top:30px;">BECOME A VOLUNTEER</h3>
  <div class="button_div"><button class="btn_vol"><span>   VOLUNTEER   </span></button></div>
</section>
<section>
<?php require('footer.php') ?>
</section>


<script> $(document).ready(function() {
            $(".menu-icon").on("click", function() {
                  $("nav ul").toggleClass("showing");
            });
      });

      // Scrolling Effect

      $(window).on("scroll", function() {
            if($(window).scrollTop()) {
                  $('nav').addClass('black');
            }

            else {
                  $('nav').removeClass('black');
            }
      })
      </script>
      <script>document.getElementsByClassName('btn_vol')[0].addEventListener("click", () => {
            window.location.href = "volunteer.php"
        })</script>

<script src="https://code.jquery.com/jquery-3.3.1.js"></script> 
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    

</body>
</html>