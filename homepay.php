<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">

</head>
<body>

<div class="container">

    <form action="">

        <div class="row">

            <div class="col">

                <h3 class="title">billing address</h3>

                <div class="inputBox">
                    <span>full name :</span>
                    <input type="text" placeholder="eg. Ruth Katongo">
                </div>
                <div class="inputBox">
                    <span>email :</span>
                    <input type="email" placeholder="example@example.com">
                </div>
                <div class="inputBox">
                    <span>address :</span>
                    <input type="text" placeholder="room or street or location">
                </div>
                <div class="inputBox">
                    <span>city :</span>
                    <input type="text" placeholder="eg. Chinsali, Muchinga">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>Location :</span>
                        <input type="text" placeholder="eg. Kapasa makasa university">
                    </div>
                </div>

            </div>

            <div class="col">

                <h3 class="title">payment</h3>

                <div class="inputBox">
                    <span>cards accepted :</span>
                    <img src="images/card_img.png" alt="">
                </div>
                <div class="inputBox">
                    <span>name on card /MoMo name:</span>
                    <input type="text" placeholder="eg. Ruth Bwalya">
                </div>
                <div class="inputBox">
                    <span>credit card number/ MoMo number :</span>
                    <input type="number" placeholder="1111-2222-3333/ +26077202339">
                </div>
                <div class="inputBox">
                    <span>Date Paid :</span>
                    <input type="date" placeholder="january">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>Proof:</span>
                        <input type="file">
                    </div>
                </div>

            </div>
    
        </div>

        <input type="submit" value="proceed to checkout" class="submit-btn"> <br><br> or <a href="contact.html">Add More</a> 

    </form>

</div>    
    
</body>
</html>