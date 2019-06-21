<!DOCTYPE html>
<html lang="en">
<head>

    <?echo $this->getMeta();?>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="/public/img/mainlogo.png" type="image/png" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <link href="/public/style/bootstrap.css" rel="stylesheet" type="text/css" media="all" />

    <link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/public/style/style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,300,400,500,600,700,800" rel="stylesheet">
</head>
<link>

<header class="header">
    <div class="container">
        <a href="<?=PATH?>" class="logo">
            <img src="/public/img/logo.png" alt="">
            <svg class='logo-mob' xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 57.242 65.3" style="enable-background:new 0 0 57.242 65.3;" xml:space="preserve">
<linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="8.3215" y1="35.4632" x2="57.1858" y2="35.4632">
    <stop offset="0" style="stop-color:#305590"/>
    <stop offset="1" style="stop-color:#6A9CD4"/>
</linearGradient>
                <path style="fill:url(#SVGID_1_);" d="M57.186,17.755c0.008-1.238-0.419-1.892-1.438-2.468c-4.873-2.756-9.713-5.57-14.569-8.358  c-0.643-0.369-1.306-0.705-2.215-1.193c0,1.783,0.073,3.254-0.024,4.713c-0.073,1.098,0.344,1.697,1.285,2.219  c3.453,1.914,6.845,3.939,10.298,5.854c0.93,0.516,1.316,1.085,1.309,2.192c-0.053,7.969-0.05,15.939-0.003,23.908  c0.006,1.033-0.36,1.561-1.221,2.052c-6.861,3.909-13.695,7.866-20.54,11.802c-2.151,1.237-2.701,0.921-2.701-1.541  c-0.003-14.876-0.002-29.753-0.002-44.629c0-0.623,0-1.247,0-2.171c-1.837,1.031-3.459,1.839-4.955,2.837  c-0.513,0.342-0.989,1.151-1.004,1.759c-0.091,3.776-0.046,7.555-0.046,11.333c0,1.214,0,2.429,0,3.617c-2.463,0-4.674,0-7.085,0  c0-4.028,0-7.939,0-12.145c-1.752,0.979-3.293,1.706-4.669,2.669c-0.6,0.42-1.218,1.317-1.226,2.004  C8.293,29.173,8.321,36.14,8.348,43.106c0.002,0.488,0.107,1.231,0.423,1.419c1.733,1.032,3.548,1.927,5.608,3.014  c0-4.262,0-8.139,0-12.131c2.369,0,4.584,0,6.982,0c0,6.558-0.007,12.93,0.004,19.301c0.004,2.181-0.147,5.406,0.815,7.033  c0.999,1.69,3.63,2.38,4.972,2.988c1.098,0.498,1.774,0.692,2.844,0.068c8.604-5.017,17.237-9.986,25.895-14.909  c1.036-0.589,1.287-1.272,1.282-2.382C57.135,37.59,57.125,27.672,57.186,17.755z"/>
                <linearGradient id="SVGID_2_" gradientUnits="userSpaceOnUse" x1="0.0512" y1="29.7432" x2="48.2461" y2="29.7432">
                    <stop offset="0" style="stop-color:#305590"/>
                    <stop offset="1" style="stop-color:#6A9CD4"/>
                </linearGradient>
                <path style="fill:url(#SVGID_2_);" d="M1.258,49.816c-0.878-0.497-1.205-1.048-1.202-2.064L0.051,17.465  c-0.005-1.042,0.384-1.554,1.237-2.042C10.082,10.391,18.847,5.31,27.652,0.299c0.499-0.284,1.321-0.293,1.836-0.038  c1.748,0.869,3.381,1.966,5.119,2.857c0.989,0.507,1.273,1.163,1.267,2.241c-0.016,2.787-0.018,5.574-0.02,8.361l11.268,6.507  c0.695,0.401,1.122,1.143,1.121,1.946l-0.01,6.669L35.85,21.8c0.002,1.958,0.003,3.916,0.004,5.875c0,0.638,0,1.275,0,2.039v5.748  c0,2.645,0,5.341-0.001,8.008c0.005,0.003,0.004,0.002,0.008,0.005l12.376-6.643l0.009,6.048c0.001,0.892-0.472,1.717-1.242,2.166  l-12.165,7.101c-0.014,0.01-0.026,0.027-0.04,0.036c-1.488,1.018-3.099,1.856-4.948,2.931c0-0.904,0-1.521,0-2.137  c0-14.878,0.001-29.756,0-44.634c0-2.455-0.566-2.786-2.681-1.57C20.322,10.71,13.483,14.66,6.621,18.57  c-0.862,0.491-1.227,1.036-1.221,2.07L5.398,44.55c-0.008,1.118,0.397,1.674,1.312,2.185c3.498,1.953,6.98,3.94,10.41,6.01  c0.521,0.315,0.983,1.115,1.041,1.732c0.147,1.559,0.049,3.14,0.049,4.932c-0.651-0.311-1.075-0.481-1.467-0.706L1.258,49.816z"></path>
</svg>
        </a>
        <a href="/information/display" class="payment">Оплата и доставка</a>
        <a class="phone" href="tel:+380441111111">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 482.6 482.6" style="enable-background:new 0 0 482.6 482.6;" xml:space="preserve">
                <g>
                    <path d="M98.339,320.8c47.6,56.9,104.9,101.7,170.3,133.4c24.9,11.8,58.2,25.8,95.3,28.2   c2.3,0.1,4.5,0.2,6.8,0.2c24.9,0,44.9-8.6,61.2-26.3c0.1-0.1,0.3-0.3,0.4-0.5c5.8-7,12.4-13.3,19.3-20c4.7-4.5,9.5-9.2,14.1-14   c21.3-22.2,21.3-50.4-0.2-71.9l-60.1-60.1c-10.2-10.6-22.4-16.2-35.2-16.2c-12.8,0-25.1,5.6-35.6,16.1l-35.8,35.8   c-3.3-1.9-6.7-3.6-9.9-5.2c-4-2-7.7-3.9-11-6c-32.6-20.7-62.2-47.7-90.5-82.4c-14.3-18.1-23.9-33.3-30.6-48.8   c9.4-8.5,18.2-17.4,26.7-26.1c3-3.1,6.1-6.2,9.2-9.3c10.8-10.8,16.6-23.3,16.6-36s-5.7-25.2-16.6-36l-29.8-29.8   c-3.5-3.5-6.8-6.9-10.2-10.4c-6.6-6.8-13.5-13.8-20.3-20.1c-10.3-10.1-22.4-15.4-35.2-15.4c-12.7,0-24.9,5.3-35.6,15.5l-37.4,37.4   c-13.6,13.6-21.3,30.1-22.9,49.2c-1.9,23.9,2.5,49.3,13.9,80C32.739,229.6,59.139,273.7,98.339,320.8z M25.739,104.2   c1.2-13.3,6.3-24.4,15.9-34l37.2-37.2c5.8-5.6,12.2-8.5,18.4-8.5c6.1,0,12.3,2.9,18,8.7c6.7,6.2,13,12.7,19.8,19.6   c3.4,3.5,6.9,7,10.4,10.6l29.8,29.8c6.2,6.2,9.4,12.5,9.4,18.7s-3.2,12.5-9.4,18.7c-3.1,3.1-6.2,6.3-9.3,9.4   c-9.3,9.4-18,18.3-27.6,26.8c-0.2,0.2-0.3,0.3-0.5,0.5c-8.3,8.3-7,16.2-5,22.2c0.1,0.3,0.2,0.5,0.3,0.8   c7.7,18.5,18.4,36.1,35.1,57.1c30,37,61.6,65.7,96.4,87.8c4.3,2.8,8.9,5,13.2,7.2c4,2,7.7,3.9,11,6c0.4,0.2,0.7,0.4,1.1,0.6   c3.3,1.7,6.5,2.5,9.7,2.5c8,0,13.2-5.1,14.9-6.8l37.4-37.4c5.8-5.8,12.1-8.9,18.3-8.9c7.6,0,13.8,4.7,17.7,8.9l60.3,60.2   c12,12,11.9,25-0.3,37.7c-4.2,4.5-8.6,8.8-13.3,13.3c-7,6.8-14.3,13.8-20.9,21.7c-11.5,12.4-25.2,18.2-42.9,18.2   c-1.7,0-3.5-0.1-5.2-0.2c-32.8-2.1-63.3-14.9-86.2-25.8c-62.2-30.1-116.8-72.8-162.1-127c-37.3-44.9-62.4-86.7-79-131.5   C28.039,146.4,24.139,124.3,25.739,104.2z"></path>
                </g>
            </svg>
            +38 (044) 111-11-11
        </a>
        <p class="time">С 9:00 - до 20:00</p>



        <div class="search-container">
            <div class="search">
                <form action="search" method="get" autocomplete="off">
                    <input type="text" class="typeahead" id="typeahead" name="s">

                    <svg class="typeahead"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve">
                    <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23  s-23,10.318-23,23s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z"/>
                </svg>
                    <input type="submit"  value="">
                </form>
            </div>
        </div>

<!--        <div class="col-md-3 header-right">-->
<!--            <div class="search-bar">-->
<!--                <form action="search" method="get" autocomplete="off">-->
<!--                    <input type="text" class="typeahead" id="typeahead" name="s">-->
<!--                    <input type="submit" value="">-->
<!--                </form>-->
<!--                <input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">-->
<!--                <input type="submit" value="">-->
<!--            </div>-->
<!--        </div>-->

        <a href="/cart/view/"  class="cart">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 459.529 459.529" style="enable-background:new 0 0 459.529 459.529;" xml:space="preserve">
                    <g>
                        <g>
                            <path style="fill:#252530;" d="M17,55.231h48.733l69.417,251.033c1.983,7.367,8.783,12.467,16.433,12.467h213.35    c6.8,0,12.75-3.967,15.583-10.2l77.633-178.5c2.267-5.383,1.7-11.333-1.417-16.15s-8.5-7.65-14.167-7.65H206.833    c-9.35,0-17,7.65-17,17s7.65,17,17,17H416.5l-62.9,144.5H164.333L94.917,33.698c-1.983-7.367-8.783-12.467-16.433-12.467H17    c-9.35,0-17,7.65-17,17S7.65,55.231,17,55.231z"/>
                            <path style="fill:#252530;" d="M135.433,438.298c21.25,0,38.533-17.283,38.533-38.533s-17.283-38.533-38.533-38.533    S96.9,378.514,96.9,399.764S114.183,438.298,135.433,438.298z"/>
                            <path style="fill:#252530;" d="M376.267,438.298c0.85,0,1.983,0,2.833,0c10.2-0.85,19.55-5.383,26.35-13.317    c6.8-7.65,9.917-17.567,9.35-28.05c-1.417-20.967-19.833-37.117-41.083-35.7s-37.117,20.117-35.7,41.083    C339.433,422.431,356.15,438.298,376.267,438.298z"/>
                        </g>
                    </g>
                </svg>
            <?if(!empty($_SESSION['cart'])):?>
            <span class="cart-num" id="cart-num"><?=$_SESSION['cart.qty']?></span>
            <?else:?>
            <span class="cart-num" id="cart-num">0</span>
            <?endif;?>
            Корзина
        </a>
        <div class="mob-btn">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</header>
<nav class="nav">
    <div class="container">
        <div class="menu">

            <? new \app\widgets\menu\Menu(['tpl'=> WWW.'/menu/menu.php', 'container'=>'ul', 'table'=>'category', 'attrs' =>[]]);  ?>
        </div>
        <div class="discounts">
            <a href="/sale/discounts">Акции</a>
        </div>
    </div>
</nav>
<section class="mob-nav">
    <div class="container">
        <a  class="btn chois">Выбрать рубрику</a>
        <a class="filtr-btn">Фильтры</a>
        <div id="cart1">
            <a href="/cart/view"  class="cart">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 459.529 459.529" style="enable-background:new 0 0 459.529 459.529;" xml:space="preserve">
                    <g>
                        <g>
                            <path style="fill:#252530;" d="M17,55.231h48.733l69.417,251.033c1.983,7.367,8.783,12.467,16.433,12.467h213.35    c6.8,0,12.75-3.967,15.583-10.2l77.633-178.5c2.267-5.383,1.7-11.333-1.417-16.15s-8.5-7.65-14.167-7.65H206.833    c-9.35,0-17,7.65-17,17s7.65,17,17,17H416.5l-62.9,144.5H164.333L94.917,33.698c-1.983-7.367-8.783-12.467-16.433-12.467H17    c-9.35,0-17,7.65-17,17S7.65,55.231,17,55.231z"/>
                            <path style="fill:#252530;" d="M135.433,438.298c21.25,0,38.533-17.283,38.533-38.533s-17.283-38.533-38.533-38.533    S96.9,378.514,96.9,399.764S114.183,438.298,135.433,438.298z"/>
                            <path style="fill:#252530;" d="M376.267,438.298c0.85,0,1.983,0,2.833,0c10.2-0.85,19.55-5.383,26.35-13.317    c6.8-7.65,9.917-17.567,9.35-28.05c-1.417-20.967-19.833-37.117-41.083-35.7s-37.117,20.117-35.7,41.083    C339.433,422.431,356.15,438.298,376.267,438.298z"/>
                        </g>
                    </g>
                </svg>
                <?if(!empty($_SESSION['cart'])):?>
                    <span class="cart-num" id="cart-num-desktop"><?=$_SESSION['cart.qty']?></span>
                <?else:?>
                    <span class="cart-num" id="cart-num-desktop">0</span>
                <?endif;?>
            </a>
        </div>
    </div>
    <div class="mob-menu">
        <ul>
            <li><a href="/">Главная</a></li>
            <li><a href="/sale/discounts">Акции</a></li>
            <li><a href="/information/display">Оплата и доставка</a></li>
            <li><a href="/information/display">Контакты</a></li>
        </ul>
        <div class="phone">
            <p>Телефон:</p>
            <a href="tel:+380441111111">+38 (044) 111-11-11</a>
        </div>
        <div class="soc">

            <a class="icon" target="_blank" href="##">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 157.595 310" style="enable-background:new 0 0 157.595 310;" xml:space="preserve">
                        <g id="XMLID_834_">
                            <path id="XMLID_835_" d="M6,165.106h33.981V305c0,2.762,2.238,5,5,5h57.616c2.762,0,5-2.238,5-5V165.765   h39.064c2.54,0,4.677-1.906,4.967-4.429l5.933-51.502c0.163-1.417-0.286-2.836-1.234-3.899c-0.949-1.064-2.307-1.673-3.732-1.673   h-44.996V71.978c0-9.732,5.24-14.667,15.576-14.667c1.473,0,29.42,0,29.42,0c2.762,0,5-2.239,5-5V5.037c0-2.762-2.238-5-5-5H112.05   C111.764,0.023,111.129,0,110.193,0c-7.035,0-31.488,1.381-50.804,19.151c-21.402,19.692-18.427,43.27-17.716,47.358v37.752H6   c-2.762,0-5,2.238-5,5v50.844C1,162.867,3.238,165.106,6,165.106z"></path>
                        </g>
                    </svg>
            </a>
            <a class="icon" target="_blank" href="##">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                        <g>
                            <g>
                                <path d="M352,0H160C71.648,0,0,71.648,0,160v192c0,88.352,71.648,160,160,160h192    c88.352,0,160-71.648,160-160V160C512,71.648,440.352,0,352,0z M464,352c0,61.76-50.24,112-112,112H160    c-61.76,0-112-50.24-112-112V160C48,98.24,98.24,48,160,48h192c61.76,0,112,50.24,112,112V352z"></path>
                            </g>
                        </g>
                    <g>
                        <g>
                            <path d="M256,128c-70.688,0-128,57.312-128,128s57.312,128,128,128s128-57.312,128-128S326.688,128,256,128    z M256,336c-44.096,0-80-35.904-80-80c0-44.128,35.904-80,80-80s80,35.872,80,80C336,300.096,300.096,336,256,336z"></path>
                        </g>
                    </g>
                    <g>
                        <g>
                            <circle cx="393.6" cy="118.4" r="17.056"></circle>
                        </g>
                    </g>
                    </svg>
            </a>
        </div>
    </div>
    </div>
    <div class="categories-menu">
        <? new \app\widgets\menu\Menu(['tpl'=> WWW.'/menu/menu.php', 'container'=>'ul', 'table'=>'category', 'attrs' =>['style'=>"color:red;"]]); ?>

    </div>
</section>
<!---
where header meets footer
--->
<div class="content">
    <?echo $content; ?>
</div>
<!---
--->
<footer class="footer">
    <div class="top">
        <div class="container">
            <div class="left">
                <p class="footer-title">
                    Получайте свежую информацию об
                    Акциях, спецпредложениях, скидках
                </p>
                <form action="">
                    <input class="input" type="email" placeholder="Введите Ваш e-mail">
                    <input class="btn" type="submit" value="Отправить">
                </form>
            </div>
            <div class="right">
                <p class="footer-title">
                    Следите за нами <br>в социальных сетях
                </p>
                <div class="socials">
                    <a class="icon" target="_blank" href="##">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 157.595 310" style="enable-background:new 0 0 157.595 310;" xml:space="preserve">
                            <g id="XMLID_834_">
                                <path id="XMLID_835_" d="M6,165.106h33.981V305c0,2.762,2.238,5,5,5h57.616c2.762,0,5-2.238,5-5V165.765   h39.064c2.54,0,4.677-1.906,4.967-4.429l5.933-51.502c0.163-1.417-0.286-2.836-1.234-3.899c-0.949-1.064-2.307-1.673-3.732-1.673   h-44.996V71.978c0-9.732,5.24-14.667,15.576-14.667c1.473,0,29.42,0,29.42,0c2.762,0,5-2.239,5-5V5.037c0-2.762-2.238-5-5-5H112.05   C111.764,0.023,111.129,0,110.193,0c-7.035,0-31.488,1.381-50.804,19.151c-21.402,19.692-18.427,43.27-17.716,47.358v37.752H6   c-2.762,0-5,2.238-5,5v50.844C1,162.867,3.238,165.106,6,165.106z"/>
                            </g>
                        </svg>
                    </a>
                    <a class="icon" target="_blank" href="##">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                            <g>
                                <g>
                                    <path d="M352,0H160C71.648,0,0,71.648,0,160v192c0,88.352,71.648,160,160,160h192    c88.352,0,160-71.648,160-160V160C512,71.648,440.352,0,352,0z M464,352c0,61.76-50.24,112-112,112H160    c-61.76,0-112-50.24-112-112V160C48,98.24,98.24,48,160,48h192c61.76,0,112,50.24,112,112V352z"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path d="M256,128c-70.688,0-128,57.312-128,128s57.312,128,128,128s128-57.312,128-128S326.688,128,256,128    z M256,336c-44.096,0-80-35.904-80-80c0-44.128,35.904-80,80-80s80,35.872,80,80C336,300.096,300.096,336,256,336z"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <circle cx="393.6" cy="118.4" r="17.056"/>
                                </g>
                            </g>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="center">
        <div class="container">
            <div class="footer-menu">

                <? new \app\widgets\menu\Menu(['tpl'=> WWW.'/menu/menu.php', 'container'=>'ul', 'table'=>'category', 'attrs' =>[]]);  ?>

            </div>
            <div class="right">
                <div class="links">
                    <div class="box">
                        <a href="/information/display">О КОМПАНИИ</a>
                        <a href="/information/display">Оплата и доставка</a>
                    </div>
                    <div class="box">
                        <a >КОНТАКТЫ</a>
                        <a href="mailto:info.dveri@gmail.com">info.dveri@gmail.com</a>
                    </div>
                </div>
                <p style="color: white; font-weight: bold">Телефон:</p>
                <a class="phone" href="tel:+380441111111">+38 (044) 111-11-11</a>

            </div>
        </div>
    </div>
    <div class="bottom-adapt">
        <div class="container">
            <div class="box socials">
                <p>
                    Следите за нами<br>
                    в социальных сетях
                </p>
                <div class="icons">
                    <a class="icon" target="_blank" href="##">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 157.595 310" style="enable-background:new 0 0 157.595 310;" xml:space="preserve">
                        <g id="XMLID_834_">
                            <path id="XMLID_835_" d="M6,165.106h33.981V305c0,2.762,2.238,5,5,5h57.616c2.762,0,5-2.238,5-5V165.765   h39.064c2.54,0,4.677-1.906,4.967-4.429l5.933-51.502c0.163-1.417-0.286-2.836-1.234-3.899c-0.949-1.064-2.307-1.673-3.732-1.673   h-44.996V71.978c0-9.732,5.24-14.667,15.576-14.667c1.473,0,29.42,0,29.42,0c2.762,0,5-2.239,5-5V5.037c0-2.762-2.238-5-5-5H112.05   C111.764,0.023,111.129,0,110.193,0c-7.035,0-31.488,1.381-50.804,19.151c-21.402,19.692-18.427,43.27-17.716,47.358v37.752H6   c-2.762,0-5,2.238-5,5v50.844C1,162.867,3.238,165.106,6,165.106z"></path>
                        </g>
                    </svg>
                    </a>
                    <a class="icon" target="_blank" href="##">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                        <g>
                            <g>
                                <path d="M352,0H160C71.648,0,0,71.648,0,160v192c0,88.352,71.648,160,160,160h192    c88.352,0,160-71.648,160-160V160C512,71.648,440.352,0,352,0z M464,352c0,61.76-50.24,112-112,112H160    c-61.76,0-112-50.24-112-112V160C48,98.24,98.24,48,160,48h192c61.76,0,112,50.24,112,112V352z"></path>
                            </g>
                        </g>
                            <g>
                                <g>
                                    <path d="M256,128c-70.688,0-128,57.312-128,128s57.312,128,128,128s128-57.312,128-128S326.688,128,256,128    z M256,336c-44.096,0-80-35.904-80-80c0-44.128,35.904-80,80-80s80,35.872,80,80C336,300.096,300.096,336,256,336z"></path>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <circle cx="393.6" cy="118.4" r="17.056"></circle>
                                </g>
                            </g>
                    </svg>
                    </a>
                </div>
            </div>
            <div class="box links">
                <div class="boxin">
                    <a href="/information/display">О КОМПАНИИ</a>
                    <a href="/information/display">Оплата и доставка</a>
                </div>
                <div class="boxin">
                    <a>КОНТАКТЫ</a>
                    <a href="mailto:info.dveri@gmail.com">info.dveri@gmail.com</a>
                </div>
            </div>
            <div class="box phones">
                <div>
                    <p style="color: white; font-weight: bold">Телефон:</p>
                    <a class="phone" href="tel:+380441111111">+38 (044) 111-11-11</a>
                </div>

            </div>
        </div>
    </div>
    <div class="bottom-line">
        <div class="container">
            <p>Copyright © 2019. <a href="##">Все&nbsp;права&nbsp;защищены</a></p>
            <p>Сайт разработан <a href="##" target="_blank">Created by AOM</a></p>
        </div>
    </div>
</footer>

<section class="popup call-back" id="call-back">
    <div class="form">
        <h2 class="title">Заказать<br>обратный звонок</h2>
        <form action="">
            <input class="input" type="text" placeholder="Фамилия Имя Отчество">
            <input class="input" type="tel" placeholder="Телефон">
            <div class="cont">
                <input type="checkbox" id="personal-data">
                <label for="personal-data">
                    <span></span>
                    <p>
                        Я подтверждаю свое согласие с <a href="##">условиями</a> и даю
                        разрешение на обработку персональных данных
                    </p>
                </label>
            </div>
            <input type="submit" class="btn " value="Отправить">
        </form>
        <div class="exit-btn">
            <span></span>
            <span></span>
        </div>
    </div>
</section>
<section class="popup call-back" id="zamer">
    <div class="form">
        <h2 class="title">Вызвать замерщика</h2>
        <form action="">
            <input class="input" type="text" placeholder="Фамилия Имя Отчество"  required>
            <input class="input" type="tel" placeholder="Телефон" required>
            <div class="cont">
                <input type="checkbox" id="personal-data2" required>
                <label for="personal-data2">
                    <span></span>
                    <p>
                        Я подтверждаю свое согласие с <a href="##">условиями</a> и даю
                        разрешение на обработку персональных данных
                    </p>
                </label>
            </div>
            <input type="submit" class="btn" value="Отправить">
        </form>
        <div class="exit-btn">
            <span></span>
            <span></span>
        </div>
    </div>
</section>
<section class="popup thx-page">
    <div class="form">
        <h2 class="title">Ваш заказ успешно<br>оформлен!</h2>
        <p>
            Наш мененджер скоро свяжется<br>
            с Вами для утчнения деталей заказа
        </p>
        <a class="to-shop" href="##">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 31.494 22.166" style="enable-background:new 0 0 31.494 22.166;" xml:space="preserve">
                        <path d="M10.273,0.333c0.444-0.444,1.143-0.444,1.587,0c0.429,0.429,0.429,1.143,0,1.571L3.813,9.951h26.554  c0.619,0,1.127,0.492,1.127,1.111s-0.508,1.127-1.127,1.127H3.813l8.047,8.032c0.429,0.444,0.429,1.159,0,1.587  c-0.444,0.444-1.143,0.444-1.587,0l-9.952-9.952c-0.429-0.429-0.429-1.143,0-1.571L10.273,0.333z"></path>
            </svg>
            Продолжить покупки
        </a>
        <div class="exit-btn">
            <span></span>
            <span></span>
        </div>
    </div>
</section>

<section class="popup thx-page">
    <div class="form">
        <h2 class="title">Спасибо!</h2>
        <p>
            Подписка успешно оформлена!<br>
            Все новости будут отправяться<br>
            вам на почту
        </p>
        <a class="to-shop" href="##">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 31.494 22.166" style="enable-background:new 0 0 31.494 22.166;" xml:space="preserve">
                        <path d="M10.273,0.333c0.444-0.444,1.143-0.444,1.587,0c0.429,0.429,0.429,1.143,0,1.571L3.813,9.951h26.554  c0.619,0,1.127,0.492,1.127,1.111s-0.508,1.127-1.127,1.127H3.813l8.047,8.032c0.429,0.444,0.429,1.159,0,1.587  c-0.444,0.444-1.143,0.444-1.587,0l-9.952-9.952c-0.429-0.429-0.429-1.143,0-1.571L10.273,0.333z"></path>
            </svg>
            Продолжить покупки
        </a>
        <div class="exit-btn">
            <span></span>
            <span></span>
        </div>
    </div>
</section>



<div class="preloader"><img src="/public/img/ring.svg" alt=""></div>

<script>
    var path = '<?=PATH;?>';
</script>

<script
    src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>

<script src="/public/js/script.js"></script>
<script src="/public/js/bootstrap.min.js"></script>
<script src="/public/js/typeahead.bundle.js"></script>
<script src="/public/js/main.js"></script>


<script>
    $( "#slider-range" ).slider({
        range: true,
        min: 0,
        max: 2000,
        values: [ 1, 300 ],
        slide: function( event, ui ) {
            $( "#min" ).val( ui.values[ 0 ] );
            $( "#max" ).val( ui.values[ 1 ] );
        }
    });
    var maxmum = 2000;
    var step = 100 / maxmum;
    $( "#min" ).val( $( "#slider-range" ).slider( "values", 0 ) );
    $( "#max" ).val( $( "#slider-range" ).slider( "values", 1 ) );
    $('.range').change(function () {
        var min = $('#min').val();
        var max = $('#max').val();
        var leftMin  = min * step + '%';
        var leftMax  = max * step + '%';
        $('#slider-range span:nth-child(2)').css('left', leftMin);
        $('#slider-range span:nth-child(3)').css('left', leftMax);
        $( "#slider-range" ).slider({
            values: [min, max],
        });
    });


</script>

</body>
</html>
