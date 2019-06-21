<main class="page-cart">
    <section class="breadcrumbs">
        <div class="container">
            <ul>
                <li>
                    <a href="/">Главная</a>
                </li>
                <li>
                    Оформление заказа
                </li>
            </ul>
        </div>
    </section>
    <section class="cart">
        <div class="container">
            <h1>Корзина</h1>
            <div class="cart-table">
                <?if(!empty($_SESSION['cart'])):?>
                <table>
                    <tr>
                        <th colspan="2">Товар</th>
                        <th>Количество</th>
                        <th>Цена</th>
                        <th>Сумма</th>
                        <th>Удалить</th>
                    </tr>


                    <? foreach($_SESSION['cart'] as $cart => $c ):?>

                        <? $temp_modifications = explode(',', $cart ); unset($temp_modifications[0]);?>

                    <tr>
                        <td><a href="product/<?=$c['alias'];?>">
                            <img src="/public/img/<?=$c['img'];?>" alt="">
                                </a>
                        </td>
                        <td>
                            <p class="title"><?=$c['title'];?></p>
                            <div class="characteristics">

                                <?foreach ($temp_modifications as $tm):?>
                                <div class="box">
                                    <p><?=$parent_modification[$modifications[$tm]['parent_modification_id']]['name']?></p>
                                    <p><?=$modifications[$tm]['title']?></p>
                                </div>
                                <?endforeach;?>

                            </div>
                        </td>

                        <td>
                            <div class="num-controls">
                                <span class="minus babaminus" data-id="<?=$cart;?>"></span>
                                <input type="number" class="num" value="<?=$c['qty'];?>" data-id="<?=$cart;?>">
                                <span class="plus babaplus" data-id="<?=$cart;?>"></span>
                            </div>
                        </td>
                        <td>
                            <span class="price price-single"><?=round($c['price'],2);?> грн.</span>
                        </td>
                        <td>
                            <span class="price price-all"><?=round($c['price']*$c['qty'],2);?> грн.</span>
                        </td>
                        <td>
                            <span aria-hidden="true"  class="glyphicon  delete item-which-i-want-to-delete" data-id="<?=$cart;?>">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 486.4 486.4" style="enable-background:new 0 0 486.4 486.4;" xml:space="preserve" >
                                    <g>
                                        <g>
                                            <path d="M446,70H344.8V53.5c0-29.5-24-53.5-53.5-53.5h-96.2c-29.5,0-53.5,24-53.5,53.5V70H40.4c-7.5,0-13.5,6-13.5,13.5    S32.9,97,40.4,97h24.4v317.2c0,39.8,32.4,72.2,72.2,72.2h212.4c39.8,0,72.2-32.4,72.2-72.2V97H446c7.5,0,13.5-6,13.5-13.5    S453.5,70,446,70z M168.6,53.5c0-14.6,11.9-26.5,26.5-26.5h96.2c14.6,0,26.5,11.9,26.5,26.5V70H168.6V53.5z M394.6,414.2    c0,24.9-20.3,45.2-45.2,45.2H137c-24.9,0-45.2-20.3-45.2-45.2V97h302.9v317.2H394.6z"/>
                                            <path d="M243.2,411c7.5,0,13.5-6,13.5-13.5V158.9c0-7.5-6-13.5-13.5-13.5s-13.5,6-13.5,13.5v238.5    C229.7,404.9,235.7,411,243.2,411z"/>
                                            <path d="M155.1,396.1c7.5,0,13.5-6,13.5-13.5V173.7c0-7.5-6-13.5-13.5-13.5s-13.5,6-13.5,13.5v208.9    C141.6,390.1,147.7,396.1,155.1,396.1z"/>
                                            <path d="M331.3,396.1c7.5,0,13.5-6,13.5-13.5V173.7c0-7.5-6-13.5-13.5-13.5s-13.5,6-13.5,13.5v208.9    C317.8,390.1,323.8,396.1,331.3,396.1z"/>
                                        </g>
                                    </g>
                                </svg>
                            </span>
                        </td>
                    </tr>

                    <?endforeach;?>

                </table>

                <?endif;?>

                <div class="mob-cart">
                    <?if(!empty($_SESSION['cart'])):?>

                    <? foreach($_SESSION['cart'] as $cart => $c ):?>
                    <div class="box">
                        <div class="img">
                            <img src="/public/img/<?=$c['img'];?>" alt="">
                        </div>
                        <div class="info">
                            <a href="product/<?=$c['alias'];?>" class="title"><?=$c['title'];?></a>
                            <div class="bottom">

                                <div class="summ">
                                    <p>Цена: <span><?=$c['price']*$c['qty'];?> грн</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="exit-btn">
                            <span class=" item-which-i-want-to-delete"  data-id="<?=$cart;?>"></span>
                            <span class=" item-which-i-want-to-delete"  data-id="<?=$cart;?>"></span>
                        </div>
                    </div>
                    <?endforeach;?>
                        <?else:?>
                            <a class="text-center" style="align-self: center"> ПУСТО </a>
                    <?endif;?>
                </div>
            </div>

            <div class="summ-container">
                <a class="to-shop" href="##">
                    <svg   xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 31.494 22.166" style="enable-background:new 0 0 31.494 22.166;" xml:space="preserve">
                        <path d="M10.273,0.333c0.444-0.444,1.143-0.444,1.587,0c0.429,0.429,0.429,1.143,0,1.571L3.813,9.951h26.554  c0.619,0,1.127,0.492,1.127,1.111s-0.508,1.127-1.127,1.127H3.813l8.047,8.032c0.429,0.444,0.429,1.159,0,1.587  c-0.444,0.444-1.143,0.444-1.587,0l-9.952-9.952c-0.429-0.429-0.429-1.143,0-1.571L10.273,0.333z"/>
                    </svg>Продолжить покупки
                </a>
                <p class="summ">
                    <?if(isset($_SESSION['cart.sum'])):?>
                        Сумма:

                    <span><?=$_SESSION['cart.sum']?> грн.</span>
                    <?endif;?>
                </p>
            </div>
            <div class="registration">
                <h2 class="title">Оформление заказа</h2>
                <form method="post" action="/cart/checkout" role="form" name="order">
                    <div class="box">
                        <p class="label">Покупатель</p>
                        <div class="inputs">
                            <input type="text" class="input" placeholder="Фамилия Имя Отчество" name="name" required>
                            <span class="error"></span>
                            <input type="tel" class="input" placeholder="Телефон" name="phone" required>
                            <span class="error"></span>
                            <input type="email" class="input" placeholder="Электронная почта" id="email" name="email" required>
                            <span class="error"></span>
                        </div>
                    </div>
                    <div class="box">
                        <p class="label">Оплата</p>
                        <div class="inputs radio">
                            <input type="radio" id="visa" name="payment" value="card" checked>
                            <label for="visa">Картой Visa/Mastercard</label>
                            <input type="radio" id="nal" name="payment" value="cash">
                            <label for="nal">Наличными</label>
                            <input type="radio" id="kredit" name="payment" value="credit">
                            <label for="kredit">В рассрочку</label>
                            <div class="hover"></div>
                        </div>
                    </div>
                    <div class="box">
                        <p class="label">Доставка</p>
                        <div class="inputs radio">
                            <input type="radio" id="sklad" name="transport" value="0">
                            <label for="sklad">Самовывоз со склада</label>
                            <input type="radio" id="dostavka" name="transport" value="1" checked>
                            <label for="dostavka">Доставка компанией </label>
                            <div class="hover"></div>
                        </div>
                    </div>
                    <div class="box">
                        <p class="label">Комментарий к заказу</p>
                        <div class="inputs">
                            <textarea name="comment" id="" cols="30" rows="10" placeholder="Опишите дополнительное пожелание"></textarea>
                        </div>
                    </div>
                    <div class="summ-container last">
                        <div class="check">
                            <input type="checkbox" id="personal-data" required>
                            <label for="personal-data">
                                <span></span>
                                <p>
                                    Я подтверждаю свое согласие с <a href="##">условиями</a> и даю
                                    разрешение на обработку персональных данных
                                </p>
                            </label>
                        </div>
                        <p class="summ">
                            <?if(isset($_SESSION['cart.sum'])):?>
                                Сумма:

                                <span><?=$_SESSION['cart.sum']?> грн.</span>
                            <?endif;?>
                        </p>
                    </div>
                    <div class="submit-line">
                        <a class="to-shop" href="/">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 31.494 22.166" style="enable-background:new 0 0 31.494 22.166;" xml:space="preserve">
                        <path d="M10.273,0.333c0.444-0.444,1.143-0.444,1.587,0c0.429,0.429,0.429,1.143,0,1.571L3.813,9.951h26.554  c0.619,0,1.127,0.492,1.127,1.111s-0.508,1.127-1.127,1.127H3.813l8.047,8.032c0.429,0.444,0.429,1.159,0,1.587  c-0.444,0.444-1.143,0.444-1.587,0l-9.952-9.952c-0.429-0.429-0.429-1.143,0-1.571L10.273,0.333z"/>
                            </svg>Продолжить покупки
                        </a>
                        <input type="submit" class="btn" value="Отправить заказ">
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>
