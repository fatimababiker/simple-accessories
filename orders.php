<!DOCTYPE html>
<html>
    <head>
        <title> ORDERS</title>
        <link rel="stylesheet" href="style_o.css">

    </head>
   
    <body>
        <?php
     include('config.php');    
     ?>
          
    
        <div class="container">
            <header>
                <div class="logo"> 
                    <img src="images/p1.jpg" alt="" class="logo-img">
                    <label>  SIMPLE ACCESSARIES</label>
                </div>   
                <nav>
                    <ul>
                        <li><a href="#" onclick="location.href='home.html';">HOME</a></li>
                        <li><a href="#" onclick="location.href='products.html';">PRODUCTS</a></li>
                        <li class="action"><a href="#" onclick="location.href='orders.php';">ORDERS</a></li>
                        <li><a href="#" onclick="location.href='contact.html';">CONTACT</a></li>
                    </ul>
                </nav>
            </header>
        </div>
        <fieldset>
            <legend> ORDER NOW</legend>
         <form action="config.php" method="post">
             <!--  <p><lable> SELECT YOUR ORDER:</lable>
                    <select multiple size="20">
                        <option> سلسال الالماسة </option>
                        <option> سلسال كوكب زحل  </option>
                        <option> اقراط ذهبية على شكل نجوم وهلال </option>
                        <option> سلسال الفراشة </option>
                        <option>سلسال الكون  </option>
                        <option> اسورة الصداقة </option>
                       <option> اساور توتوو لوف </option>
                       <option>سلسال دموع الحورية  </option>
                       <option>سلسال الفراشة باللون الوردي </option>
                       <option>سلسال الحورية  </option>
                       <option> خاتم الفراشة </option>
                       <option> خاتم القلب الناعم </option>
                       <option>خاتم القلب مرصع بالزركون  </option>
                       <option>  حلق الغيمة</option>
                       <option> اسورة بسيطة </option>
                       <option> اسورة فخمة </option>
                       <option> اسورة ناعمة  </option>
                       <option> سلسال القمر المضئ </option>
                       <option> حلق على شكل ورق شجر </option>
                       <option> سلسال الفراشة باللون الاسود </option>
                   </select>
             </p>-->
             <p><lable>YOURORDER:</lable><input type="text" name="ordername"> </p>
             <p> <lable>  YOURORDERCOUNT:</lable> <input type="number" name="ordercount" > </p>
             <p> <lable> YOURPHONE:</lable> <input type="tell" name="phoneorder"> </p>
             <p> <input type="submit" name="Send" value="Send"> </p>
             <p> <input type="reset" name="" value="Clean"> </p>
         </form>    
      </fieldset>
      
    </body>
</html>