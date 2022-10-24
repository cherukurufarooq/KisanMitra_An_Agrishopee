<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <link rel="stylesheet" href="css/style.css" type="text/css">
	    <link rel="stylesheet" type="text/css" href="css/mobile.css">
        <title>add to cart</title>
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		 <script src="js/mobile.js" type="text/javascript"></script>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <style>
        body{
            font-family:sans-serif;
        }
        .badge-notify{
            background: red;
            position:relative;
            top:-20px;
            right:40px;
            font-family:sans-serif;

        }

        .nearest {
        display: inline-block;
        padding: 10px 15px;
        font-size: 14px;
        cursor: pointer;
        text-align: center;
        text-decoration: none;
        outline: none;
        color: #fff;
        background-color: #DC143C;
        border: none;
        border-radius: 15px;
        box-shadow: 0 9px #999;
        }

        .nearest:hover {background-color: DodgerBlue}

        .nearest:active {
        background-color: DodgerBlue;
        box-shadow: 0 5px #666;
        transform: translateY(4px);
        }


    </style>

        <script>
            $(document).ready(function(){
                $("#s1").click(function (){
                    $("#fmap1").show();
                });
                $("#h1").click(function (){
                    $("#fmap1").hide();
                });
            });
        
        	function getlocation() {
	navigator.geolocation.getCurrentPosition(showLoc);
	}
	function showLoc(pos) {
	
		var lat=pos.coords.latitude;
		var lon=pos.coords.longitude;
        document.getElementById("aa").value=lat;
        document.getElementById("bb").value=lon;
	}
</script>
   
<body>

<!-- <button class="geeks" onclick="getlocation()">
	Click Me
</button> -->
<p id="demo1"></p>


        </script>
    </head>
    <body onload="getlocation()">
	    <div id="page">
		<div id="header">
			<div>
				<a href="index.html" class="logo"><img src="images/logo.jpg" alt=""></a>
				<ul id="navigation">
					<li>
						<a href="addbuy.html">Home</a>
					</li>
					<li class="menu">
						<a href="about.html">About</a>
						<ul class="primary">
							<li class="">
								<a href="contact.html">contact</a>
							</li>
						</ul>
					</li>
					<li class="menu">
						<a href="login.html">logout</a>
					</li>
					</li>
				</ul>
			</div>
		</div>
		<div id="body">
			<div class="header">
				<div>
					<h1>Buy products</h1>
				</div>
			</div>
        <form method="POST">
            <input type="text" name="aa" id="aa" hidden/>
            <input type="text" name="bb" id="bb" hidden/>
            <button type="submit" class="nearest" name="submit"><span class="glyphicon glyphicon-map-marker"></span></button>



</form>
       

        <?php 
        if(isset($_POST["submit"]))
        {

            $latitudeFrom=$_POST["aa"];
            $longitudeFrom=$_POST["bb"];

            function twopoints_on_earth($latitudeFrom, $longitudeFrom,
                                            $latitudeTo, $longitudeTo)
                                        {
                                        $long1 = deg2rad($longitudeFrom);
                                        $long2 = deg2rad($longitudeTo);
                                        $lat1 = deg2rad($latitudeFrom);
                                        $lat2 = deg2rad($latitudeTo);

                                        //Haversine Formula
                                        $dlong = $long2 - $long1;
                                        $dlati = $lat2 - $lat1;

                                        $val = pow(sin($dlati/2),2)+cos($lat1)*cos($lat2)*pow(sin($dlong/2),2);

                                        $res = 2 * asin(sqrt($val));

                                        $radius = 3958.756;

                                        return ($res*$radius);
                                        }

      

      


      
          
          $conn=mysqli_connect("localhost","root","","epiz_30643402_project");

          $sql="SELECT * FROM `loc`";

          $result=$conn->query($sql);
          $minimum=9999;
          if($result->num_rows>0)
          { $m=10000000000000000;
              while($row=$result->fetch_assoc())
              {
                $latitudeTo=$row["latitude"];
                $longitudeTo=$row["longitude"];	
                    // Distance between Mumbai and New York
                    $res=twopoints_on_earth($latitudeFrom, $longitudeFrom,
                    $latitudeTo, $longitudeTo);

                    if($res<$m)
                    {
                        $m=$res;
                        $name=$row['shopname'];
                      


                    }
                    if($row["price"]<$minimum)
                    {
                        $minimum=$row["price"];
                        $m1=$row['shopname'];
                    }
                  

                  
                
              }

            //   echo "<br>"
          }
        
        	// echo "$minimum";
	
   
         
          
        
        
        
        
        
    }
        
        
        
        ?>

              <div class='form-outline col-xs-3' style="margin-top: 100px;
                                                        margin-bottom: 100px;
                                                        margin-right: 150px;
                                                        margin-left: 80px;">
              <label class='form-label' for='formControlReadonly'>Nearest Shop</label>
              <input
              class='form-control'
              id='formControlReadonly'
              type='text'
              placeholder='Readonly input here...'
              aria-label='readonly input example'
              value='<?php echo @$name;?>'
              readonly
            />
            
            </div>
            <br>
            <div class='form-outline col-xs-3' style="margin-top: 78px;
                                                        margin-bottom: 122px;
                                                        margin-right: 150px;
                                                        margin-left: 80px;">
              <label class='form-label' for='formControlReadonly'>Least Cost</label>
              <input
              class='form-control'
              id='formControlReadonly'
              type='text'
              placeholder='Readonly input here...'
              aria-label='readonly input example'
              value='<?php echo @$minimum;echo "  (ShopName: ";echo @$m1;echo ")";?>'
              readonly
            />
            
            </div>
         
        <div class="container">
            <br><br><br><br>
            <h1>
                    Pomegranates
                <div style="float:right;cursor:pointer;">
                        <span class="glyphicon glyphicon-shopping-cart my-cart-icon"></span>
                    <span class="badge badge-notify my-cart-badge"></span>
                    </span>
                </div>
            </h1><br><br><br>
            <div class="row">...</div>
            <div class= "col-md-3 text-center">
                <img src="pom1.jpg" width="200" height="200" alt="">
                <br><br>
                Product 1 - <strong>₹130</strong>
                <br><br><b>
                Quality level:3/3</b><br><br>
                Quantity:1kg<br><br>
                Farmer location:Tirupathi<br><br>
				Farmer Address:Balaji Nagar<br><br>
                Contact number:9515307437<br><br>

                <button class="btn btn-danger my-cart-btn" data-id="1" data-name="product 1" data-summary="summary 1"
                data-price="10" data-quantity="1" data-image="pom1.jpg">
            Add to cart</button>
            <a href="af.html" class="btn btn-info">Buy now</a>
<br>
<br>
<br>
            <button id="s1" class="btn btn-info">Show</button>
            <button id="h1" class="btn btn-danger my-cart-btn" style="margin-left:35px">Hide</button>
            <br>

            <br>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62041.73671678505!2d79.23517603125!3d13.620703800000006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bb2b5dabfc6b715%3A0xae8fb3149c80cef5!2skisan%20mitra%20pomegranate%20store%201!5e0!3m2!1sen!2sin!4v1652627491397!5m2!1sen!2sin" 
                id="fmap1" width="225" height="225" style="border:0;" allowfullscreen="" 
                loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


            </div>
            <div class= "col-md-3 text-center">
                <img src="pomogranate.jpg" width="200" height="200" alt="">
                <br><br>
                Product 2 - <strong>₹120</strong>
                <br><br>
				<b>Quality level:2/3</b><br><br>
                Quantity:1kg<br><br>
                Farmer location:Tirupathi<br><br>
				Farmer Address:Bhiragipeta<br><br>
                Contact number:9848845144<br><br>

                <button class="btn btn-danger my-cart-btn" data-id="2" data-name="product 2" data-summary="summary 2"
                data-price="120" data-quantity="1" data-image="am2.jpg">
            Add to cart</button>
            <a href="af.html" class="btn btn-info">Buy now</a>
            </div> 
                <div class= "col-md-3 text-center">
                    <img src="pom2.jpg" width="200" height="200" alt="">
                    <br><br>
                    Product 3 - <strong>₹110</strong>
                    <br><br>
					<b>Quality level:1/3</b><br><br>
                    Quantity:1kg<br><br>
                    Farmer location:Tirupathi<br><br>
				    Farmer Address:STV Nagar<br><br>
                    Contact number:9848845144<br><br>
                    <button class="btn btn-danger my-cart-btn" data-id="3" data-name="product 3" data-summary="summary 3"
                    data-price="100" data-quantity="1" data-image="pom2.jpg">
                Add to cart</button>
                <a href="af.html" class="btn btn-info">Buy now</a>
                </div>
                <div class= "col-md-3 text-center">
                    <img src="pom3.jpg" width="200" height="200" alt="">
                    <br><br>
                    Product 4 - <strong>₹130</strong>
                    <br><br><b>
					Quality level:3/3</b><br><br>
                    Quantity:1kg<br><br>
                    Farmer location:Tirupathi<br><br>
				    Farmer Address:Chandragiri<br><br>
                    Contact number:9848845144<br><br>
                    <button class="btn btn-danger my-cart-btn" data-id="4" data-name="product 4" data-summary="summary 4"
                    data-price="130" data-quantity="1" data-image="pom3.jpg">
                Add to cart</button>
                <a href="af.html" class="btn btn-info">Buy now</a>
                </div>
            <div class="col-md-3 text-center">...</div>
            <div class="col-md-3 text-center">...</div>
            <div class="col-md-3 text-center">...</div>
            <div class="col-md-3 text-center">...</div>
        
            </div>
			<div id="footer">
			<div>
				<div class="connect">
					<a href="http://www.facebook.com" class="facebook">facebook</a>
					<a href="http://www.twitter.com" class="twitter">twitter</a>
					<a href="http://www.googleplus.com" class="googleplus">googleplus</a>
					<a href="http://www.pinterest.com" class="pinterest">pinterest</a>
				</div>
				<p></p>
			</div>
		</div>
	</div>
                    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
                </script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
            <script src="jquery.mycart.js"></script>
            <script src="cart.js"></script>

    </body>
</html>