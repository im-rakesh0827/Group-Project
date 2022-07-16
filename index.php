<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width,initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
   <style>
      .bold {
         position: absolute;
         margin-left: 100px;
         margin-top: 20px;
         font-family: Georgia;
         font-size: 35px
      }

      td {
         text-align: center
      }

      .extra {
         color: black
      }

      input {
         position: absolute;
         margin-left: 450px;
         margin-top: 25px;
         height: 30px;
         width: 350px
      }

      h1 {
         text-shadow: 2px 1px blue;
         font-family: Segoe Print
      }
   </style>
   <script>
      function move() {
         window.location = "signup.php";
      }
   </script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   <script>
      $(document).ready(function() {
         $("#more").click(function() {
            $("#section").toggle("slow");
         });
      });
      $(document).ready(function() {
         $("#elec").mouseover(function() {
            $("#secelec,#secmen,#women,#kids,#mobile,#fashion").fadeIn("slow");
         });
      });
      $(document).ready(function() {
         $("#elec").mouseout(function() {
            $("#secelec,#secmen,#women,#kids,#mobile,#fashion").fadeOut("slow");
         });

      });
   </script>
</head>

<body style="margin:0;padding:0">
   <div style="height:100px;background-color:rgb(10,170,200);color:white;">
      <b class="bold">E Kart</b>
      <input type="text" placeholder="Search for products,brands and more">
      <button class="btn" style="position:absolute;margin-left:1010px;margin-top:20px;background-color:white;color:blue;width:100px" onclick="move()">LOGIN</button>
      <button id="more" class="btn btn-success" style="position:absolute;margin-left:1200px;margin-top:20px">More
         <section id="section" style="display:none">
            <a href="" class="extra">Notifications</a><br>
            <a href="" class="extra">Helpline No</a><br>
            <a href="" class="extra">Account Info</a><br>
            <a href="" class="extra">Your Order</a><br>
         </section>
      </button>
   </div>
   <table id="elec" width=100% style="margin:0px;" class="table table-striped table-bordered table-hover">
      <tr>
         <td>Electronics
            <section id="secelec" style="display:none">
               <a>Mobile</a><br>
               <a>Laptop</a><br>
               <a>Television</a><br>
               <a>Air condition</a><br>
               <a>Refrigerator</a><br>
               <a>Fans</a><br>
            </section>
         </td>
         <td>
            <a href="" id="men">Mens
               <section id="secmen" style="display:none">
                  <a>Shirts</a><br>
                  <a>Jeans</a><br>
                  <a>Casuals</a><br>
                  <a>Jacket</a><br>
                  <a>Shoes</a><br>
                  <a>Tshirts</a><br>
               </section>
            </a>
         </td>
         <td>Womens
            <section id="women" style="display:none">
               <a>Shorts</a><br>
               <a>Jeans</a><br>
               <a>Capri</a><br>
               <a>Jacket</a><br>
               <a>Sandle</a><br>
               <a>Legeins</a><br>
            </section>
         </td>
         <td>
            <a href="">Kids
               <section id="kids" style="display:none">
                  <a>Capri</a><br>
                  <a>Style</a><br>
                  <a>Dabang</a><br>
                  <a>Jacket</a><br>
                  <a>Shoes</a><br>
                  <a>Formals</a><br>
               </section>
            </a>
         </td>
         <td>Mobile
            <section id="mobile" style="display:none">
               <a>Apple</a><br>
               <a>One plus</a><br>
               <a>Samsung</a><br>
               <a>Vivo</a><br>
               <a>Xaomi</a><br>
               <a>Realme</a><br>
            </section>
         </td>
         <td>
            <a href="">Fashion
               <section id="fashion" style="display:none">
                  <a>Prince</a><br>
                  <a>Sherwani</a><br>
                  <a>Casuals</a><br>
                  <a>Formals</a><br>
                  <a>Running</a><br>
                  <a>Weedings</a><br>
               </section>
            </a>
         </td>
      <tr>
   </table>
   <div style="height:200px;background-color:rgb(10,200,200);">
      <marquee scrollamount=10 onmouseover="stop()" onmouseout="start()" behavior="alternate">
         <span><img src="41JugAgWmAL.jpg" height=200px width=200px></span>&nbsp&nbsp
         <span><img src="613PG1nsK7L._SL1370_.jpg" height=200px width=200px></span>&nbsp&nbsp
         <span><img src="IMG-20200718-WA0014.jpg" height=200px width=200px></span>&nbsp&nbsp
         <span><img src="IMG-20200718-WA0012.jpg" height=200px width=200px></span>&nbsp&nbsp
         <span><img src="download (1).jpg" height=200px width=200px></span>&nbsp&nbsp
         <span><img src="download.jpg" height=200px width=200px></span>
      </marquee>
   </div>
   <div style="height:50px;font-size:40px;margin:0px;">Deals Of The Day</div>
   <div style="height:300px;background-color:rgb(10,170,200);">
      <h1 align=center>Products Available</h1>
      <div class="container">
         <div class="row">
            <div class="col-md-3" style="color:BLACK;font-size:30px"><a href="cloth.php"><img src="maxresdefault.jpg" height=200px width=280px style="border-radius:15px;vertical-align:text-bottom;text-align:center"></a>CLOTHES</div>
            <div class="col-md-3" style="color:BLACK;font-size:30px"><a href="pantry.php"><img src="pantry.jpg" height=200px width=280px style="border-radius:15px;vertical-align:text-bottom;"></a>E-PANTRY</div>
            <div class="col-md-3" style="color:BLACK;font-size:30px"><a href="footwear.php"><img src="footwear.jpg" height=200px width=280px style="border-radius:15px;vertical-align:text-bottom;"></a>FOOTWEAR</div>
            <div class="col-md-3" style="color:BLACK;font-size:30px"><a href="electronics.php"><img src="electronics.jpg" height=200px width=280px style="border-radius:15px;vertical-align:text-bottom;"></a>ELECTRONICS</div>
         </div>
      </div>
   </div><br>
   <div style="height:200px;background-color:rgb(10,170,200);">
      <span style="margin:40px"><a href=""><img src="IMG_20200718_220228.JPG" height=200px width=400px style="border-radius:15px"></a></span>
      <span><a href=""><img src="IMG_20200718_220312.JPG" height=200px width=400px style="border-radius:15px"></a></span>&nbsp&nbsp
      <span><a href=""><img src="IMG_20200718_220413.JPG" height=200px width=400px style="border-radius:15px"></a></span>&nbsp&nbsp
   </div>
   <div style="height:200px;background-color:rgb(200,220,250);">
      <h1 style="text-align:center">Contact Us <br><br>saketindiamart@gmail.com<br>0634449971</h1>
   </div <div style="height:20px;background-color:blue">
   <h3 align=center>copyright@saketraj products</h3>
   </div>
</body>

</html>