<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>cart</title>

 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>

 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

 <link rel="stylesheet" href="style.css">

</head>
<body>

<!--   start header section   --> 

 <header>
  <a href="#" class="logo"><i class="fas fa-utensils"></i> foody.</a>

  <div class="icons">
   <a class="fas fa-close" id="close-bars" href="./index.php">
   <a href="#" class="fas fa-shopping-cart"></a>
  </div>
 </header>
 <!--  end header section   -->
 


 <!-- start about sec -->
 <section class="about" id="about">
  <h3 class="sub-heading">About Us</h3>
  <h1 class="heading">Reasons to choose us!</h1>
  <div class="row">
   <div class="image">
    <img src="images/thali.jpeg" alt="about-us" width="300px">
   </div>
   <div class="content">
    <h3>Countrie's best food available at the best rate </h3>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam tenetur neque quod nisi, 
     oluptatibus non aliquam a ipsum dicta suscipit natus consequatur ab? Harum,
     qui. Qui dolores dolor cumque dolorum!
    </p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid quasi harum quaerat et sequi exercitationem quam saepe,
     doloremque consequatur dolorum!
    </p>
    <div class="icon-container">
     <div class="icons">
      <i class="fas fa-shipping-fast"></i>
      <span>Free Delivery</span>
     </div>

     <div class="icons">
      <i class="fas fa-receipt"></i>
      <span>Easy  payments</span>
     </div>

     <div class="icons">
      <i class="fas fa-headset"></i>
      <span>24/7 services</span>
     </div>
    </div>
    <a href="#" class="btn">Learn More</a>
   </div>
  </div>

 </section>
 <!-- end about sec -->

 <section class="menu" id="menu">
  <h3 class="sub-heading">our delicious menu</h3>
  <h1 class="heading">Todays Special</h1>
  <div class="box-container">

   <?php      
   

   $conn = new mysqli('localhost:3307','root','','miniproject');

   if(isset($_POST['Delete'])){
    $Product_name = $_POST['product_name'];
    $Product_price = $_POST['product_price'];
    $Product_imag = $_POST['product_image'];
    $Product_description = $_POST['product_desc'];

    $select_cart = mysqli_query($conn,"DELETE from u_cart WHERE name ='$Product_name'");
    $message = "Dishes removed from cart successfully";
  }

   if(!$conn)
   {
    echo "database unable to connect".mysqli_connect_error();
   }
   else{
    $query = "select * from u_cart";
    $query_run = mysqli_query($conn,$query);
    $check = mysqli_num_rows($query_run)>0;
    if($check)
    {
     while($row = mysqli_fetch_array($query_run) )
     {
      ?>
     <form action="" method="POST">
       <div class="box">
         <div class="image">
           <img src="<?php echo $row['image']?>" alt="todays-menu" height="300px" width="300px">
           <a href="#" class="fas fa-heart"></a>
         </div>
         <div class="content">
             <div class="stars">
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
             <i class="fas fa-star-half-alt"></i>
             </div>
             <h3><?php echo $row['name']?></h3>
             <p><?php echo $row['description']?></p>
             <span class="prize">Rs<?php echo $row['price']?>/-	</span>
             <input type="hidden" name="product_name" value="<?php echo $row['name']?>">
             <input type="hidden" name="product_price" value="<?php echo $row['price']?>">
             <input type="hidden" name="product_image" value="<?php echo $row['image']?>">
             <input type="hidden" name="product_desc" value="<?php echo $row['description']?>">

             <input type="submit" class="btn" value="Delete" name="Delete" onclick="alert('<?php echo $message ?>')">
           
         </div>
       </div>
     </form>

      <?php
     }

    }
    else{
     echo "no dishes found";
    }

   }   
   $conn->close();
   ?>
     
     

  </div>


 </section>







 <!-- start review sec -->
 <section class="review" id="review">
  <h3 class="sub-heading">customer's review</h3>
  <h1 class="heading">what they say</h1>

  <div class="swiper review-slider">
   <div class="swiper-wrapper">
    <div class="swiper-slide slide">
     <i class="fas fa-quote-right"></i>
     <div class="user">
      <img src="images/user.jpeg" alt="user">
      <div class="user-info">
       <h3>Milley</h3>
       <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
       </div>

      </div>
     </div>
     <p>
      Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam animi eveniet quod aperiam neque distinctio eum ea vero repudiandae adipisci!
     </p>

    </div>
    <div class="swiper-slide slide">
     <i class="fas fa-quote-right"></i>
     <div class="user">
      <img src="images/user1.jpg" alt="user">
      <div class="user-info">
       <h3>Milley</h3>
       <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
       </div>

      </div>
     </div>
     <p>
      Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam animi eveniet quod aperiam neque distinctio eum ea vero repudiandae adipisci!
     </p>

    </div>

    <div class="swiper-slide slide">
     <i class="fas fa-quote-right"></i>
     <div class="user">
      <img src="images/user2.jpeg" alt="user">
      <div class="user-info">
       <h3>Milley</h3>
       <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
       </div>

      </div>
     </div>
     <p>
      Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam animi eveniet quod aperiam neque distinctio eum ea vero repudiandae adipisci!
     </p>

    </div>

    <div class="swiper-slide slide">
     <i class="fas fa-quote-right"></i>
     <div class="user">
      <img src="images/user3.jpg" alt="user">
      <div class="user-info">
       <h3>Milley</h3>
       <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
       </div>

      </div>
     </div>
     <p>
      Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam animi eveniet quod aperiam neque distinctio eum ea vero repudiandae adipisci!
     </p>

    </div>

    <div class="swiper-slide slide">
     <i class="fas fa-quote-right"></i>
     <div class="user">
      <img src="images/user4.jpg" alt="user">
      <div class="user-info">
       <h3>Milley</h3>
       <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
       </div>

      </div>
     </div>
     <p>
      Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam animi eveniet quod aperiam neque distinctio eum ea vero repudiandae adipisci!
     </p>

    </div>

   </div>
  </div>
 </section>
 <!-- end review sec -->


 <!-- footer sec start -->
 <section class="footer">
  <div class="box-container">
   <div class="box">
    <h3>locations</h3>
    <a href="#">india</a>
    <a href="#">australia</a>
    <a href="#">united states</a>
    <a href="#">dubai</a>
    <a href="#">japan</a>
    <a href="#">china</a>
   </div>

   <div class="box">
    <h3>links</h3>
    <a href="#">home</a>
    <a href="#">dishes</a>
    <a href="#">about</a>
    <a href="#">menu</a>
    <a href="#">review</a>
    <a href="#">order</a>
   </div>

   <div class="box">
    <h3>contact info</h3>
    <a href="#">+123-456-7899</a>
    <a href="#">+123-456-7888</a>
    <a href="#">foody@gmail.com</a>
    <a href="#">foodychoice@gmail.com</a>
    <a href="#">bangalore ,india -560079</a>
    <a href="#">china</a>
   </div>

   <div class="box">
    <h3>Follow us</h3>
    <a href="#">facebook</a>
    <a href="#">twitter</a>
    <a href="#">instagram</a>
    <a href="#">linkedin</a>
   </div>

  </div>

  <div class="credit">
   copyright @ 2023 by <span>Foody</span>
  </div>
 </section>




 <!-- footer sec ends -->


 <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

 <script src="script.js"></script>


</body>
</html>