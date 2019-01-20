<footer>
    <ul class="socials-links">
        <li><a href="#"><i class="fa fa-vk"></i></a></li>
        <li><a href="mailto:soul.evans.15@gmail.com"><i class="fa fa-google"></i></a></li>
        <li><a href="https://freelance.ru/doctorsylar" target="_blank"><i style="font-style: normal">FL</i></a></li>
        <li><a href="https://github.com/doctorsylar" target="_blank"><i class="fa fa-github"></i></a></li>
        <li><a href="skype:andrei.94.spb?userinfo"><i class="fa fa-skype"></i></a></li>
        <li><a href="tg://resolve?domain=DoctorSdoctor"><i class="fa fa-telegram"></i></a></li>
    </ul>
    <div class="copyright">
        © 2018 Andrey Izotov
    </div>
</footer>


<i class="fa fa-times close-modal"></i>
<div class="overlay"></div>
<!--  DEVELOPMENT  -->
<!--<link rel="stylesheet" href="--><?//=DS_ROOT . '/css/bootstrap-grid.min.css'?><!--">-->
<!--<link rel="stylesheet" href="--><?//=DS_ROOT . '/font-awesome/css/font-awesome.min.css'?><!--">-->
<!--<link rel="stylesheet" href="--><?//=DS_ROOT . '/style.css'?><!--">-->
<!--<script src="--><?//=DS_ROOT . '/js/jquery-3.3.1.min.js'?><!--"></script>-->
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/easy-pie-chart/2.1.6/jquery.easypiechart.min.js"></script>-->
<!--<script src="--><?//=DS_ROOT . '/js/script.js'?><!--"></script>-->
<!--    MINIFIED     -->
<?php
$templateName = get_page_template_slug();
$templateName = explode('-', substr($templateName,0, strlen($templateName) - 4));
$templateName = $templateName[count($templateName) - 1];
?>
<link rel="stylesheet" href='<?=DS_ROOT . "/minified/$templateName.css"?>'>
<script src='<?=DS_ROOT . "/minified/$templateName.js"?>'></script>
<link href="https://fonts.googleapis.com/css?family=Oswald|Raleway" rel="stylesheet">
<!-- Yandex.Metrika counter --> <script type="text/javascript" > (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)}; m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)}) (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym"); ym(51822956, "init", { id:51822956, clickmap:true, trackLinks:true, accurateTrackBounce:true }); </script> <noscript><div><img src="https://mc.yandex.ru/watch/51822956" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->