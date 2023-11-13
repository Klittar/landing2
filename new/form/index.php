<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Form</title>

    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.cdnfonts.com/css/montserrat" rel="stylesheet">


</head>

<body>

<div id="top">
<section id="form" class="form">
    <div class="container">
        <div class="content-title">Заполните форму для получения расчета проекта</div>
        <div class="form-container">
            <form id="Form-pole" class="form-pole flex flex-col" action="sender.php" method="POST" enctype="multipart/form-data">
                    <input type="text" id="user_name" name="name" placeholder="Имя" _req>
                    <input type="text" id="user_email" name="email" placeholder="Электронная почта" _req _email>
                    <input  type="tel" data-tel-input placeholder="Телефон" name="phone" maxlength="18" _req>
                    <input  type="text" data-tel-input placeholder="Особые пожелания" name="text" maxlength="18" _req>

                    <div class="form-button">
                    
                        <div class="form-btn">
                            <button type="button" class="send-form">Отправить форму</button>
            <div class="status"></div>
                        </div>
                    </div>

                </form>
        </div>
        
    </div>
</section>

<div class="container flex flex-row justify-between logo-min">
           <div class="last">

           <a href="../index.html"><img src="mr-jimwood.svg" alt="logo" id="logo"></a>

           </div> 
        </div>
   
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="./js/jquery.maskedinput.js"></script>
    <script src="./js/jquery.validate.min.js"></script>
    <script src="./js/script.js"></script>
    <script src="./js/custom.js"></script>
    
</body>

</html>