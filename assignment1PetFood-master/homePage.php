<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Loc's Assignment</title>
    <script src="js/script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/style.css">



</head>
<body  onload="invoice()">

<?php
include_once "header.php";
?>
    <!--navigationbar-->
    <div id="topnav">
        <a class="active" href="homePage.php">Home Page</a>
        <a id="dog" href="foodForDog.html">Dog</a>
        <a id="cat" href="foodforCat.html">Cat</a>
        <a id="other" href="otherPet.html">Other</a>
        <a href="aboutUs.html">About Us</a>
    </div>
    <!--Content-->
</div>
<h1>Featured Products</h1>
<div id="content" >
    <!--Show product list-->
    <div id="productTable">
        <table border="1">
            <tr style="height: 339px">

                <td class="product">
                    <img src="image/dogfood.png" height="128" width="128"  onmouseleave="normalImage(this)" onmousemove="enlangeImage(this)"/>
                    <p>$12 ea</p>
                    <p>
                        Quantity:<input class="qty" id="dogFoodQty" type="number">
                        <button class = "addBut" id="addDogFood" onclick="addToCart(this); thongbao()" >Add to Cart</button>
                    </p>
                </td>
                <td class="product">
                    <img src="image/dogfood2.jpeg" height="128" width="128"  onmouseleave="normalImage(this)" onmousemove="enlangeImage(this)"/>
                    <p>$20 ea</p>
                    <p>
                        Quantity:<input class="qty" id="dogFood2Qty" type="number">
                        <button class = "addBut" id="addDogFood2" onclick="addToCart(this)">Add to Cart</button>
                    </p>
                </td>
                <td class="product">
                    <img src="image/catfood.jpeg" height="128" width="128"  onmouseleave="normalImage(this)" onmousemove="enlangeImage(this)"/>
                    <p>$32 ea</p>
                    <p>
                        Quantity:<input class="qty" id="catFoodQty" type="number">
                        <button class = "addBut" id="addCatFood" onclick="addToCart(this)">Add to Cart</button>
                    </p>
                </td>
                <td class="product">
                    <img src="image/bird.png" height="128" width="128"  onmouseleave="normalImage(this)" onmousemove="enlangeImage(this)"/>
                    <p>$27 ea</p>
                    <p>
                        Quantity:<input class="qty" id="birdFoodQty" type="number">
                        <button class = "addBut" id="addBirdFood" onclick="addToCart(this)">Add to Cart</button>
                    </p>
                </td>

            </tr>
        </table>
    </div>
    <!--    invoice-->
    <div id="voicePage" class="voice">
        <!-- Modal content -->
        <div id="voice-content">
            <p>Cart:</p>
            <div id="cartDiv"></div>
            <button id="showInvoiceBut">Invoice</button>
        </div>

    </div>
</div>
<!--js animation-->
<div id="divAnimation">
   <div id="jsanimation">
       <button onclick="moveImage()">Move Picture</button>
       <p>
           speed: <input id="speedInput" type="number">
       </p>
       <div>
           <img id="movingImg" src="image/bird.png" height="225" width="225"/>
       </div>
   </div>

    <!--css animation-->
    <div id="imageAnimation">
        <img src="image/dogfood.png" />
        <img src="image/bird.png" />
        <img src="image/catfood.jpeg" />
        <img src="image/dogfood2.jpeg" />
    </div>
</div>

</body>
<footer>
    <div id="footer">&copy; School of Computing and Information, Unitec, NZ</div>
</footer>
</html>