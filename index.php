<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الزيوت الطبيعية والاعشاب</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Amiri:ital@1&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="icon" href="images/logo.jpg">
    <link rel="stylesheet" href="CSS/style.css">
</head>
<?php
include 'control.php';  // Using database connection file here
$oil=new oil;
$data=$oil->getall();
?>
<body>
    <main>
    <div class="parallax container-fluid">
       <div class="text-center">
        <img src="images/logo.jpg" class="mx-auto logo"   alt="" loading="lazy">
        </div>
    </div>
    

    
    <div class="container Products" >

        <div class="header2">
           
            <img src="https://img.icons8.com/color/100/000000/olive-oil.png"/>
            <h1>زيوت طبيعية</h1>
          
        </div>
        <div class="row container">
          <?php while($productdata = mysqli_fetch_array($data)){
          ?>
          <div class="card mb-3 col-lg-5 col-12" >
            <div class="row">
              <div class="col-sm-5 col-12">
                <img class="proudect rounded " src="images/<?=$productdata['image']?>">
              </div>
              <div class="col-sm-7 col-12">
                <div class="card-body">
                  <strong class="card-title Name center"> فوائد <?=$productdata['name']?></strong>
                  <p class="card-text">
                  <?=$productdata['benefits']?>
                   </p>
                  <div class="center Name">
                    <img src="https://img.icons8.com/doodle/40/000000/sale-price-tag.png"/>
                 السعر:<?=$productdata['prise']?> ريال
                </div>
                <div class=" center Name">
                    <img src="https://img.icons8.com/cute-clipart/40/000000/medium-battery.png"/>
                    السعة : <?=$productdata['capacity']?> مل
                </div>
                </div>
              </div>
            </div>
          </div>

           <div class="col-2"></div>

           <?php }
           ?>
            </div>
          </div>
          </div>
        
      



        <div id="ordernow" class=" order">
            <form name="myForm" autocomplete="off" method="POST" id="Form1"  action="sendmail.php">
            <section id="section1">

              <h2 style="text-align: center;">اطلب الآن</h2>
          
              <div class="form-group row ">
                  <label for="Model" class="  col-12 col-form-label">اسم المادة:</label>
                <div class="col-12">
                  <input type="text"   class="form-control" id="Model" >

                </div>
                
              </div>

              <div class="form-group row ">
                <label for="Model" class="  col-12  col-form-label">السعة المطلوبة</label>
              <div class="col-12">
                <input type="text" name="name" class="form-control" id="Name" >
              </div>
              </div>



            <div class="form-group row"  >
                  
                <label class="col-form-label  col-12 pt-0">طريقة الدفع</label>
                <div class="col-sm-10 row">

                  <div class="form-check form-check-inline col-6">  
                    <input class="form-check-input" type="radio" name="ordertype" id="payment2" value=" التحويل البنكي">
                    <label class="form-check-label" for="payment2">
                        التحويل البنكي
                      </label>
                    
                  </div>
                  <div class="form-check form-check-inline col-6">
                    
                    <input class="form-check-input" type="radio" name="ordertype" id="payment3" value=" الدفع عند الاستلام">
                    <input style="display: none;" class="form-check-input" type="radio" name="ordertype" id="copypayment" value="">
                    <label class="form-check-label" for="payment3">
                        الدفع عند الاستلام
                      </label>   
                  </div>
                </div>
            </div>


            

            <div class="form-group row ">
                <label for="Model" class="  col-12  col-form-label">الاسم:</label>
              <div class="col-12">
                <input type="text" name="name" class="form-control" id="Name" >
              </div>
              </div>

            <div id="ex" class="form-group form-row">
                <div class="col">
                  <input type="tel" id="tel1" name="tel1" class="form-control" placeholder="رقم الجوال">
                </div>
              </div>
  
              <div class="form-group form-row">
                <label for="Model" class=" col-lg-2 col-12 col-form-label">عنوان السكن:</label>
                <div class="row">
                <div class="col-6">
                  <input type="text" id="city" name="city" class="form-control" placeholder="المدينة">
                </div>
                <div class="col-6">
                  <input type="text" id="block" name="block" class="form-control" placeholder="الحي">  
                </div> 
                </div>                
            </div>

            <div id="ex" class="form-group form-row"  >
                <div class="row">
              <div class="col-6">
                <input type="text" id="street" name="street" class="form-control" placeholder="اسم الشارع">
              </div>
              <div class="col-6">
                <input type="text" id="flatnum" name="flatnum" class="form-control" placeholder="رقم البناء">
              </div>
              </div>
            </div>  
              
                
            



            <div >
                
                <button id="send" type="button" class="btn btn-light ">ارسل الطلب</button>
              </div>

            </section>
          </form>
        </div>    



    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>