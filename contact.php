<link rel="stylesheet" href="CSS/style.contact.css">
<?php
include('header.php')
?>
    <div class="main-contact">
    <div id="aside-contact">
        <form action="contactForm">
            <legend>
                <img src="Files/contact/فرم تماس.png">
               <div id="call"> <b>فرم تماس با ما</b></div>
            </legend>
               <hr>
               <div id="label">
                <label for="title">
                     <img src="Files/contact/عنوان.png">
                     <div id="call">عنوان</div>
                    </label>
                </div>
               <div id="label" class="label2">
                <label for="name">
                     <img src="Files/contact/نام و نام خانوادگی.png">
                     <div id="call">نام و نام خانوادگی</div>
                    </label>
                </div><br>
               <input type="text" id="title" placeholder="عنوان" >
               <input type="text" id="name" placeholder="نام و نام خانوادگی">
               <div id="label">
                <label for="email"> 
                    <img src="Files/contact/ایمیل.png">
                    <div id="call">ایمیل شما</div>
                </label>
            </div>
               <div id="label" class="label3">
                <label for="tel">
                     <img src="Files/contact/تلفن.png">
                     <div id="call">موبایل</div>
                    </label>
                </div><br>
               <input type="email" id="email" placeholder="ایمیل شما">
               <input type="tel" id="tel" placeholder="موبایل">
               <div id="label">
                <label for="message"> 
                    <img src="Files/contact/متن پیام.png">
                    <div id="call">متن پیام</div>
                </label>
            </div><br>
               <input type="text" id="message" placeholder="متن پیام">
               <button type="button" onclick="submitForm()">ارسال پیام</button>
            </form>
    </div>
    <div class="section-contact">
    <div id="section-top">
        <form action="" id="form2">
        <div id="call1"><b>اطلاعات شعبه اصلی</b></div>
        <hr>
        <ul>
            <li><div id="label-form">شعبه</div>
            <div id="info-form">اصلی</div></li>
            <li><div id="label-form">تلفن تماس</div>
            <div id="info-form">__</div></li>
            <li><div id="label-form">آدرس</div>
            <div id="info-form">مشهد، روستا خین‌عرب، خیابان شهید طرحچی 25، قطعه دوم سمت چپ،<br>
                 طبقه همکف</div></li>
        </ul>
        <hr id="hr">
        <button><b><a href="https://www.google.com/maps/place/%D8%B4%D8%B1%DA%A9%D8%AA+%D8%A2%D8%B1%D9%85%D8%A7%D9%86+%D9%81%D9%88%D9%84%D8%A7%D8%AF+%D8%A8%D8%B1%D9%87%D8%A7%D9%86+%D8%AA%D9%88%D8%B3%E2%80%AD/@36.366792,59.5983752,15z/data=!4m6!3m5!1s0x3f6c8f0035f22c85:0x76428a5611803ed4!8m2!3d36.366792!4d59.5983752!16s%2Fg%2F11y6t9lftf?entry=ttu&g_ep=EgoyMDI0MDgyMy4wIKXMDSoASAFQAw%3D%3D">نمایش روی نقشه</a></b></button>
    </form>
    </div>
    <div id="section-bottom">
        <form action="" id="form3">
            <div id="call1"><b>مدیر موسسه</b></div>
            <hr>
            <ul>
                <li><div id="label-form">نام</div>
                <div id="info-form">__</div></li>
                <li><div id="label-form">تلفن همراه</div>
                <div id="info-form">__</div></li>
                <li><div id="label-form">ایمیل</div>
                <div id="info-form">__</div></li>
            </ul>
        </form>
    </div>
</div>
</div>
<?php
    include('footer.php')
    ?>
    <script src="JS/script.contact.js"></script>
