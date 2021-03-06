<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php include('user_login.php') ?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Pink Shop</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="stylesheet/styles.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script language="javascript" type="text/javascript">
function clearText(field) {
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>
<script language="javascript" type="text/javascript" src="scripts/mootools-1.2.1-core.js"></script>
<script language="javascript" type="text/javascript" src="scripts/mootools-1.2-more.js"></script>
<script language="javascript" type="text/javascript" src="scripts/slideitmoo-1.1.js"></script>
<script language="javascript" type="text/javascript">
window.addEvents({
    'domready': function () { /* thumbnails example , div containers */
        new SlideItMoo({
            overallContainer: 'SlideItMoo_outer',
            elementScrolled: 'SlideItMoo_inner',
            thumbsContainer: 'SlideItMoo_items',
            itemsVisible: 5,
            elemsSlide: 3,
            duration: 200,
            itemsSelector: '.SlideItMoo_element',
            itemWidth: 140,
            showControls: 1
        });
    },

});
</script>
</head>
<body>
<div id="wrapper">
  <div id="menu">
    <ul>
      <li><a href="#" class="current"><span>.01</span>Home</a></li>
      <li><a href="#"><span>.02</span>Gallery</a></li>
      <li><a href="#"><span>.03</span>Company</a></li>
      <li><a href="#"><span>.04</span>Contact</a></li>
      <li><a href="registeration\login.php"><span>.05</span>Login</a></li>
    

    </ul>
  </div>
  <!-- end of menu -->
  <div id="header_bar">
    <div id="header">
      <div class="right"></div>
      <h1><a href="#"> <img src="images/logo.png" alt="" /> <span>Social Book Catalogue</span> </a></h1>
    </div>
    <div id="search_box">
      <form action="#" method="get">
        <input type="text" value="Enter keyword here..." name="q" size="10" id="searchfield" onfocus="clearText(this)" onblur="clearText(this)" />
        <input type="submit" name="Search" value="" alt="Search" id="searchbutton" />
      </form>
    </div>
  </div>
  <!-- end of header_bar -->
  <div class="cleaner"></div>
  <div id="sidebar">
    <div class="sidebar_top"></div>
    <div class="sidebar_bottom"></div>
    <!--<div class="sidebar_section">
      <h2>Members</h2>
      <form action="user_login.php" method="POST">
        <label>Username</label>
        <input type="text" value="" name="username" size="10" class="input_field" />
        <label>Password</label>
        <input type="password" value="" name="password" class="input_field" />
        <a href="register.php">Register</a>
        <input type="submit" name="login" value="Login" alt="Login" id="submit_btn" />
      </form>
      <div class="cleaner"></div>
    </div>-->
    <div class="sidebar_section">
      <h2>Categories</h2>
      <ul class="categories_list">
        <li><a href="fiction.html">Fiction</a></li>
        <li><a href="#">Non-Fiction</a></li>
        <li><a href="#">Classics</a></li>
        <li><a href="#">Thriller/Mystery</a></li>
        <li><a href="#">Romance</a></li>
        <li><a href="#">Humor</a></li>
        <li><a href="#">Horror</a></li>
        <li><a href="#">Spiritual</a></li>
        <li><a href="#">Adventure</a></li>
        <li><a href="#">Poetry</a></li>
      </ul>
    </div>
    <!--<div class="sidebar_section">
      <h2>Discounts</h2>
      <div class="image_wrapper"><a href="#"><img src="images/image_01.jpg" alt="" /></a></div>
      <div class="discount"><span>25% off</span> | <a href="#">Read more</a></div>
    </div>-->
  </div>
  <!-- end of sidebar -->
  <div id="content">
    <div id="latest_product_gallery">
      <h3>Top-Rated Books</h3>
      <div id="SlideItMoo_outer">
        <div id="SlideItMoo_inner">
          <div id="SlideItMoo_items">
            <div class="SlideItMoo_element"> <a href="#"> <img src="images\Book Covers\adv1.jpg" width="100px" height="120px" v /></a> </div>
            <div class="SlideItMoo_element"> <a href="#"> <img src="images\Book Covers\adv2.jpg" width="100px" height="120px" alt="" /></a> </div>
            <div class="SlideItMoo_element"> <a href="#"> <img src="images\Book Covers\fiction1.jpg" width="100px" height="120px" alt="" /></a> </div>
            <div class="SlideItMoo_element"> <a href="#"> <img src="images\Book Covers\nonfic1.jpg" width="100px" height="120px" alt="" /></a> </div>
            <div class="SlideItMoo_element"> <a href="#"> <img src="images\Book Covers\horror1.jpg" width="100px" height="120px" alt="" /></a> </div>
            <div class="SlideItMoo_element"> <a href="#"> <img src="images\Book Covers\humor1.jpg" width="100px" height="120px" alt="" /></a> </div>
            <div class="SlideItMoo_element"> <a href="#"> <img src="images\Book Covers\humor2.jpg" width="100px" height="120px" alt="" /></a> </div>
            <div class="SlideItMoo_element"> <a href="#"> <img src="images\Book Covers\horror2.jpg" width="100px" height="120px" alt="" /></a> </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end of latest_content_gallery -->
    <!--<div class="content_section">
      <h2></h2>
      <p>Free CSS Templates are provided by TemplateMo.com for everyone. Feel free to use this template for your websites. Credit goes to <a href="#">Free Photos</a> for photos used in this template. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et quam vitae ipsum vulputate varius vitae semper nunc. Quisque eget elit quis augue pharetra feugiat.</p>
    </div>-->
    <div class="content_section">
      <h2>Categories</h2>
      <div class="product_box margin_r35">
        <h3>Fiction</h3>
        <div class="image_wrapper"> <a href="#"><img src="images\Book Covers\fiction3.jpg" width="140px" height="200px" alt="" /></a> </div>
        <p class="price">Author</p>
        <a href="#">Ratings</a> <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span></div>
      <div class="product_box margin_r35">
        <h3>Humor</h3>
        <div class="image_wrapper"> <a href="#"><img src="images\Book Covers\humor2.jpg" width="140px" height="200px" alt="" /></a> </div>
        <p class="price">Author</p>
        <a href="#">Ratings</a><span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span> </div>
      <div class="product_box">
        <h3>Spiritual</h3>
        <div class="image_wrapper"> <a href="#"><img src="images\Book Covers\spirit3.jpg" width="140px" height="200px" alt="" /></a> </div>
        <p class="price">Author</p>
        <a href="#">Ratings</a><span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span></div>
      <div class="cleaner"></div>
      <div class="product_box margin_r35">
        <h3>Non-Fiction</h3>
        <div class="image_wrapper"> <a href="#"><img src="images\Book Covers\nonfic3.jpg" width="140px" height="200px" alt="" /></a> </div>
        <p class="price">Author</p>
        <a href="#">Ratings</a><span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span></div>
      <div class="product_box margin_r35">
        <h3>Horror</h3>
        <div class="image_wrapper"> <a href="#"><img src="images\Book Covers\horror4.jpg" width="140px" height="200px" alt="" /></a> </div>
        <p class="price">Author</p>
        <a href="#">Ratings</a><span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span> </div>
      <div class="product_box">
        <h3>Adventure</h3>
        <div class="image_wrapper"> <a href="#"><img src="images\Book Covers\adv4.jpg" width="140px" height="200px" alt="" /></a> </div>
        <p class="price">Author</p>
        <a href="#">Ratings</a><span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span></div>
      <div class="cleaner"></div>
      <div class="button_01"><a href="#">View All</a></div>
    </div>
  </div>
  <!-- end of content -->
</div>
<!-- end of wrapper -->
<div id="footer_wrapper">
  <div id="footer">
    <ul class="footer_menu">
      <li><a href="#">Home</a></li>
      <li><a href="#">Ratings</a></li>
      <li><a href="#">Categories</a></li>
      <li><a href="#">Gallery</a></li>
      <li><a href="#">Reviews</a></li>
      <li class="last_menu"><a href="#">Requests</a></li>
    </ul>
    Copyright &copy; 2048 <a href="#">BookBird</a> | Designed by <a target="_blank" rel="nofollow" href="http://www.templatemo.com">Aleena A and Devangi B</a></div>
  <!-- end of footer -->
</div>
<!-- end of footer_wrapper -->
</body>
</html>
