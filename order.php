<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assest/css/style.css">
</head>

<body>
    <div class="header">
        <div class="header-logo">
            <img src="assest/img/logo.jpg" width="100%" height="100%" />
        </div>
        <div class="header-nav">
            <ul>
                <li>
                    <a href="./index.php">Home</a>
                </li>
                <li>
                    <a href="./categories.php">Categories</a>
                </li>
                <li>
                    <a href="./food.php">Foods</a>

                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="body" style="width:100%;height:100%">
        <div class="form-background">
            <img src="assest/img/blue.jpg" width="100%" height="100%" alt="">
        </div>
        <div class="form">
            <div class="form-title">
                <h2>Fill this form to confirm your order.</h2>
            </div>
            <div class="form-select">
                <form action="" class="form-box">
                    <fieldset class="fieldset">
                    <legend>Selected Food</legend>
                    <div class="form-select__img">
                        <img src="assest/img/6.jpg" width="100%" height="100%" alt="">
                    </div>
                    <div class="form-select-details">
                        <h3>Food title</h3>
                        <p>$2.3</p>
                        <h4>Quantity</h4>
                        <input type="number" name="number"  id="">
                    </div>
                </fieldset>
                </form>
            </div>
            <div class="delivery">
                
                <form action="">
                    <fieldset style="padding:10px">
                        <legend>Delivery Details</legend>
                        <div class="delivery-input">
                            <label for="fullName">Full Name</label>
                            <br>
                            <input type="text" placeholder="Nhap ten vao di "/>

                        </div>
                        <div class="delivery-input">
                            <label for="number">Nhap so di</label>
                            <br>
                            <input type="text" placeholder="Nhap ten vao di "/>

                        </div>
                        <div class="delivery-input">
                            <label for="email">Nhap email di </label>
                            <br>
                            <input type="text" placeholder="Nhap ten vao di "/>

                        </div>
                        <div class="delivery-input">
                            <label for="address">Nhap dia chi di </label>
                            <br>
                           <textarea placeholder="Nhap dia chi vao di ban oi" name="address" id="" cols="40" rows="10"></textarea>
                        </div>
                        <div>
                            <button class="button">Confirm Order</button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</body>

</html>