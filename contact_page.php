<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <style>
.header_section2{
    position: fixed;
    top:0;
    z-index: 100;
}
.contact_section{
  margin-top: 90px;
}
.para_1{
  text-align: center;
  font-size: 40px;
  font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
  font-weight: bold;
}
.para_2{
  text-align: center;
  font-size: 20px;
  font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
}
.container{
  display: flex;
  justify-content: center;
  margin-top: 60px;
  margin-bottom: 40px;
}
.contact_card{
  width: 300px;
  height: 400px;
  margin-right: 50px;
  background-color: #3a4257;
  color: #f0ddbc;
  border-radius: 10px;
  padding-top: 70px;
}
.contact_card img{
    margin-left: 40%;
    width: 60px;
    height: 60px;
}
.contact_card p{
  margin-left: 20px;
  margin-right: 10px;
  margin-top: 30px;
  font-size: 15px;
  font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;

}
.contact_card h5{
  text-align: center;
    
    padding-top: 10px;
    font-weight: bold;
    font-family: Georgia, 'Times New Roman', Times, serif;
}
@media (max-width:767px) {
  .container{
   display: flex;
   flex-direction: column;
   align-items: center;
}
.contact_card{
  margin-top: 30px;
  margin-right: 0;
}
}

    </style>
</head>
<body>
<section class="header_section2"><?php require('header.php') ?></section>

<section class="contact_section">
<p class="para_1">Get in touch</p>
<p class="para_2">Here's how you can reach us...</p>
<div class="container">
      <div class="contact_card">
      <img src="https://img.icons8.com/color/48/000000/whatsapp--v4.png"/>
      <p>Interested in our work ? Fell free to message us</p>
      <h5>+91 9876543210</h5>
      </div>
      <div class="contact_card">
      <img src="https://img.icons8.com/color/48/000000/gmail--v1.png"/>
      <p>Want to communicate officialy ? Mail as at...</p>
      <h5>charity@gmail.com</h5>
      </div>
</div>
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