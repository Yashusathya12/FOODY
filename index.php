
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>foody online food delivery website</title>

 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>

 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

 <link rel="stylesheet" href="style.css">


</head>
<body>
 <!--   start header section   --> 

 <header>
  <a href="#" class="logo"><i class="fas fa-utensils"></i> foody.</a>

  <nav class="navbar">
   <a href="#home">Home</a>
   <a href="#dishes">Dishes</a>
   <a href="#about">About</a>
   <a href="#menu">Menu</a>
   <a href="#review">Review</a>
   <a href="#order">Order</a>
  </nav>

  <div class="icons">
   <i class="fas fa-bars" id="menu-bars"></i>
   <i class="fas fa-search" id="search-icon"></i>
   <a href="#" class="fas fa-heart"></a>
   <a href="./cart.php" class="fas fa-shopping-cart"></a>
  </div>
 </header>
 <!--  end header section   -->

 <!-- seach form -->
 <form action="" id="search-form">
  <input type="search" placeholder="Search here..." name="" id="search-box">
  <lable for="search-box" class="fas fa-search"></lable>
  <i class="fas fa-times" id="close"></i>
 </form>

 <!-- home section -->
 <section class="home" id="home">
  <div class="swiper home-slider">
   <div class="swiper-wrapper wrapper">

    <div class="swiper-slide slide">
     <div class="content">
      <span>our Dishes</span>
      <h3>Special chicken nugget</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit ahgskufhvsdv ashbckh.</p>
      <a href="#" class="btn">Order Now</a>
     </div>
     <div class="image">
      <img src="images/chicken-nugget.jpg" alt="chicken-nugget"  width="600px" height="600px">
     </div>
    </div>

    <div class="swiper-slide slide">
     <div class="content">
      <span>our Dishes</span>
      <h3>Spicy chicken noodles</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit ahgskufhvsdv ashbc .</p>
      <a href="#" class="btn">Order Now</a>
     </div>
     <div class="image">
      <img src="images/chicken-noodles.jpg" alt="chicken-nugget" width="600px" height="600px">
     </div>
    </div>

    <div class="swiper-slide slide">
     <div class="content">
      <span>our Dishes</span>
      <h3>Chicken biryani</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit ahgskufhvsdv ashbck.</p>
      <a href="#" class="btn">Order Now</a>
     </div>
     <div class="image">
      <img src="images/chicken-biryani.jpg" alt="chicken-nugget" width="600px" height="600px">
     </div>
    </div>

    <div class="swiper-slide slide">
     <div class="content">
      <span>our Dishes</span>
      <h3>Veg fried rice</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.ahgskufhvsdv ashbckh .</p>
      <a href="#" class="btn">Order Now</a>
     </div>
     <div class="image">
      <img src="images/veg-friedrice.jpg" alt="chicken-nugget"  width="600px" height="600px">
     </div>
    </div>
   </div>

   <div class="swiper-pagination"></div>
  </div>

 </section>
 <!-- end home section -->

 <!-- dishes section start -->
 
 <section class="dishes" id="dishes">
  <h3 class="sub-heading">Our dishes</h3>
  <h1 class="heading">Popular dishes</h1>
  <form action="" method="GET">
    <div class="row">
      <div id="col">
        <div id="input-group">
          <select name="sort_alpha" id="" class="form-control" style="width : 300px; height:48px">
            <option value="">--select Options--</option>
            <option value="a-z"<?php if(isset($_GET['sort_alpha']) && $_GET['sort_alpha'] == "a-z"){ echo "selected" ;} ?>>A-Z (Ascending order)</option>
            <option value="z-a" <?php if(isset($_GET['sort_alpha']) && $_GET['sort_alpha'] == "z-a"){ echo "selected" ;} ?>>Z-A (Descending order)</option>

          </select>
          <button type="Submit" class="btn" id="basic-addon2">Sort</button>
        </div>
      </div>
    </div>

  </form>
  
  
  <br>
  <div class="box-container">
    <?php 
    $conn = new mysqli('localhost:3307','root','','miniproject');
    $sort_opt="";
    if(isset($_GET['sort_alpha']))
    {
      if($_GET['sort_alpha'] == "a-z")
      {
        $sort_opt="ASC";
      }
      elseif($_GET['sort_alpha'] == "z-a")
      {
        $sort_opt="DESC";
      }
    }
    $query6 ="SELECT * FROM dishes ORDER BY name $sort_opt";
    $query_run4 = mysqli_query($conn,$query6);
    $check = mysqli_num_rows($query_run4)>0;
    if($check)
    {
    while($row1 = mysqli_fetch_array($query_run4) )
    {
      ?>
      <div class="box">
        <a href="#" class="fas fa-heart"></a>
        <img src="<?php echo $row1['image']?>" alt="ckicken-nugget" height="200px" width="200px">
        <h3><?php echo $row1['name']?></h3>
        <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
        </div>
        <span>Rs<?php echo $row1['price']?>/-</span><br>
        <a href="#order" class="btn">Order Now</a>
      </div>
            <?php
      }
    


    }
    else{

      $query1 = "SELECT * from dishes";
        $query_run1 = mysqli_query($conn,$query1);
        $check = mysqli_num_rows($query_run1)>0;
        if($check)
        {
          while($row1 = mysqli_fetch_array($query_run) )
          {
          ?>
            <div class="box">
            <a href="#" class="fas fa-heart"></a>
            <img src="<?php echo $row1['image']?>" alt="ckicken-nugget" height="200px" width="200px">
            <h3><?php echo $row1['name']?></h3>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
            </div>
            <span>Rs<?php echo $row1['price']?>/-</span><br>
            <a href="#order" class="btn">Order Now</a>
            </div>

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
 <!-- end dishes section -->

 
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

 <!-- start menu sec -->

 
  <section class="menu" id="menu">
   <h3 class="sub-heading">our delicious menu</h3>
   <h1 class="heading">Todays Special</h1>
   <div class="box-container">

    <?php      
    

    $conn = new mysqli('localhost:3307','root','','miniproject');
   

    if(isset($_POST['add_to_cart'])){
      $Product_name = $_POST['product_name'];
      $Product_price = $_POST['product_price'];
      $Product_imag = $_POST['product_image'];
      $Product_description = $_POST['product_desc'];

      $select_cart = mysqli_query($conn,"SELECT * FROM u_cart where name = '$Product_name'");
      if(mysqli_num_rows($select_cart)>0){
        $message='product already added to cart';
      }
      else{
        $insert_product = mysqli_query($conn,"INSERT INTO u_cart (name,price,image,description) VALUES ('$Product_name','$Product_price','$Product_imag','$Product_description')") ;
        $message='product added to cart successfully';
      }
    }

    if(!$conn)
    {
     echo "database unable to connect".mysqli_connect_error();
    }
    else{
     $query = "select * from dishes";
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

              <input type="submit" class="btn" value="add_to_cart" name="add_to_cart" onclick="alert('<?php echo $message ?>')">
            
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

 <!-- end menu sec -->

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

 <!-- order sec start -->

 <section class="order" id="order">
  <h3 class="sub-heading">Order now</h3>
  <h1 class="heading">fast and free delivery</h1>
  <form action="" method="post">
   <div class="inputBox">
    <div class="input">
     <span for="validationDefault01">your Name</span>
     <input type="text" id="validationDefault01" class="form-control" placeholder="enter your name" name="name" required>
    </div>
    <div class="input">
     <span for="validationDefault02">Phone</span>
     <input type="number" id="validationDefault02" class="form-control" placeholder="enter your number" name="phone" required>
    </div>
   </div>
  
   <div class="inputBox">
    <div class="input">
     <span for="validationDefault03">your Order</span>
     <input type="text" id="validationDefault03" class="form-control" placeholder="enter your order name" name="order" required>
    </div>
    <div class="input">
     <span>additionals</span>
     <input type="text" placeholder="extra with food" name="additionals">
    </div>
   </div>
   <div class="inputBox">
    <div class="input">
     <span for="validationDefault05">quantity</span>
     <input type="number" id="validationDefault05" class="form-control" placeholder="how many order" name="quantity" required>
    </div>
    <div class="input">
     <span for="validationDefault06">date and time</span>
     <input type="datetime-local" id="validationDefault06" class="form-control" name="datetime" required>
    </div>
   </div>
   <div class="inputBox">
    <div class="input">
     <span for="validationDefault07">your address</span>
     <textarea name="address" id="validationDefault07" class="form-control" placeholder="enter your address"  id="" cols="30" rows="10"></textarea>
    </div>
    <div class="input">
     <span >your message</span>
     <textarea name="message" placeholder="enter your message" class="form-control" id="" cols="30" rows="10"></textarea>
    </div>
   </div>
   <?php
    
    $conn1 = new mysqli('localhost:3307','root','','miniproject');
    
    if(!$conn1)
    {
     echo "database unable to connect".mysqli_connect_error();
    }
    else
    {
     if(isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['order']) && isset($_POST['quantity']) && isset($_POST['datetime']) && isset($_POST['address']))
     {
      $Name = $_POST['name'];
      $Phone = $_POST['phone'];
      $Order = $_POST['order'];
      $Additional = $_POST['additionals'];
      $Quantity = $_POST['quantity'];
      $Datetime = $_POST['datetime'];
      $Address = $_POST['address'];
      $Message = $_POST['message'];
      $st = $conn->prepare("insert into orders(user_name,user_phone,dishes_name,additional,	quantity,datetime,user_address,User_message)
      values(?,?,?,?,?,?,?,?)");
      $st->bind_param("sississs",$Name,$Phone,$Order,$Additional,$Quantity,$Datetime,$Address,$Message);
      $st->execute();
    }
    $conn1->close();
    }
   
    
   ?>

   

   <input type="submit"  value="place order" class="btn" onclick="alert('order placed successfully')">



  </form>
 </section>
 <!-- order sec end -->

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