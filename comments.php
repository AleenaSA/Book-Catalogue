<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Fiction</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="pagestyle.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="jquery.js">
<script type="text/javascript">
function post()
{
  var comment = document.getElementById("comment").value;
  var name = document.getElementById("username").value;
  if(comment && name)
  {
    $.ajax
    ({
      type: 'post',
      url: 'post_comment.php',
      data: 
      {
         user_comm:comment,
       user_name:name
      },
      success: function (response) 
      {
      document.getElementById("all_comments").innerHTML=response+document.getElementById("all_comments").innerHTML;
      document.getElementById("comment").value="";
        document.getElementById("username").value="";
  
      }
    });
  }
  
  return false;
}
</script>
<script language="javascript" type="text/javascript" src="scripts/mootools-1.2.1-core.js"></script>
<script language="javascript" type="text/javascript" src="scripts/mootools-1.2-more.js"></script>
<script language="javascript" type="text/javascript" src="scripts/slideitmoo-1.1.js"></script>
<script language="javascript" type="text/javascript">
  </script>
</head>
<body>
  <div id="wrapper">
  <div id="menu">
    <ul>
      <li><a href="#" class="current"><span>.01</span>Home</a></li>
      <li><a href="#"><span>.02</span>Templates</a></li>
      <li><a href="#"><span>.03</span>Flash</a></li>
      <li><a href="#"><span>.04</span>Gallery</a></li>
      <li><a href="#"><span>.05</span>Company</a></li>
      <li><a href="#"><span>.06</span>Contact</a></li>
    </ul>
  </div>
  <!-- end of menu -->
  <div id="header_bar">
    <div >
      <h1><a href="#"> FICTION </a></h1>
    </div>
    <div id="search_box">
      <form action="#" method="get">
        <input type="text" value="Enter keyword here..." name="q" size="10" id="searchfield" onfocus="clearText(this)" onblur="clearText(this)" />
        <input type="submit" name="Search" value="" alt="Search" id="searchbutton" />
      </form>
    </div>
  </div>
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
        <a href="#">Ratings</a></div>
      <div class="product_box margin_r35">
        <h3>Humor</h3>
        <div class="image_wrapper"> <a href="#"><img src="images\Book Covers\humor2.jpg" width="140px" height="200px" alt="" /></a> </div>
        <p class="price">Author</p>
        <a href="#">Ratings</a> </div>
      <div class="product_box">
        <h3>Spiritual</h3>
        <div class="image_wrapper"> <a href="#"><img src="images\Book Covers\spirit3.jpg" width="140px" height="200px" alt="" /></a> </div>
        <p class="price">Author</p>
        <a href="#">Ratings</a></div>
      <div class="cleaner"></div>
      <div class="product_box margin_r35">
        <h3>Non-Fiction</h3>
        <div class="image_wrapper"> <a href="#"><img src="images\Book Covers\nonfic3.jpg" width="140px" height="200px" alt="" /></a> </div>
        <p class="price">Author</p>
        <a href="#">Ratings</a></div>
      <div class="product_box margin_r35">
        <h3>Horror</h3>
        <div class="image_wrapper"> <a href="#"><img src="images\Book Covers\horror4.jpg" width="140px" height="200px" alt="" /></a> </div>
        <p class="price">Author</p>
        <a href="#">Ratings</a> </div>
      <div class="product_box">
        <h3>Adventure</h3>
        <div class="image_wrapper"> <a href="#"><img src="images\Book Covers\adv4.jpg" width="140px" height="200px" alt="" /></a> </div>
        <p class="price">Author</p>
        <a href="#">Ratings</a> </div>
      <div class="cleaner"></div>
      <div class="button_01"><a href="#">View All</a></div>
    </div>
  </div>
  <!-- end of content -->

<div id="comment_section">
  <form method='post' action="post_comment.php" onsubmit="return post();">
  <textarea id="comment" placeholder="Write Your Comment Here....."></textarea>
  <br>
  <input type="text" id="username" placeholder="Your Name">
  <br>
  <input type="submit" value="Post Comment">
  </form>

  <div id="all_comments">
  <?php
    $host="localhost";
    $username="root";
    $password="";
    $databasename="user_info";

    $connect=mysqli_connect($host,$username,$password);
    $db=mysqli_select_db($databasename);
  
    $comm = mysqli_query("select name,comment,post_time from comments order by post_time desc");
    while($row=mysqli_fetch_array($comm))
    {
    $name=$row['name'];
    $comment=$row['comment'];
      $time=$row['post_time'];
    ?>
  
  <div class="comment_div"> 
    <p class="name">Posted By:<?php echo $name;?></p>
      <p class="comment"><?php echo $comment;?></p> 
    <p class="time"><?php echo $time;?></p>
  </div>
  
    <?php
    }
    ?>
  </div>
</div>
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
