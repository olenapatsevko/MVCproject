
<main class="page-home">
    <section class="main-slider">
        <div class="slider-container">
            <div class="slide" style="background-image: url('https://dveribelorussii.com.ua/upload/rk/e6d/e6d88256c06fa20bd40efad6c2664063.jpg')">
                <div class="container">
                    <div class="info">
                        <p class="title">
                            Двери на заказ<br>
                            2018
                        </p>
                        <a href="cart/view" class="btn" data-id="1">В корзину</a>
                    </div>
                </div>
            </div>
            <div class="slide" style="background-image: url('/public/img/discount2.jpg')">
                <div class="container">
                    <div class="info">
                        <p class="title">
                            Супер акция -20% на всю колекцию дверей Fresca
                        </p>
                        <a href="cart/add/?id=1" class="btn" data-id="1" >В корзину</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="offer-tabs">
        <div class="container">
            <div class="tabs">
                <div class="tabs-header">
                    <div class="title">Хиты продаж</div>
                    <div class="title">Новые модели</div>
                    <div class="title">Распродажа</div>
                </div>
                <div class="tabs-container">
                    <div class="wrapper">
                        <div class="offer-slider">
                            <? if(!empty($sale)):?>
                                <?  $a=0;  foreach ($sale as $sal):?>
                                    <div   class="slide">

                                            <img src="public/img/<?= $sal->image; ?>" alt="">
                                            <a href="product/<?=$sal->alias?>">
                                                <p class="description">

                                                <?= $sal->title; ?><br>
                                                Горизонталь венге
                                            </p>
                                        </a>
                                            <p class="price"><?= round($sal->price,2)?> грн</p>

                                        <div class="btn" ><a href="product/<?=$sal->alias?>" data-id="<?=$sal->id?>">К товару</a></div>
                                    </div>
                                    <?  $a+=1; unset($sale[$sal->id]); if ($a>4){ break; }?>
                                <?endforeach;?>
                            <? endif;?>

                        </div>
                    </div>
                    <div class="wrapper">
                        <div class="offer-slider">
                            <? if(!empty($sale)):?>
                                <?  $a=0;  foreach ($sale as $sal):?>
                                    <div class="slide">

                                            <img src="public/img/<?= $sal->image; ?>" alt="">
                                            <a href="product/<?=$sal->alias?>">
                                                <p class="description">

                                                <?= $sal->title; ?><br>
                                                Горизонталь венге
                                            </p>
                                        </a>
                                        <p class="price"><?= round($sal->price,2)?> грн</p>

                                        <div class="btn" ><a href="product/<?=$sal->alias?>" data-id="<?=$sal->id?>">К товару</a></div>
                                    </div>
                                <?  $a+=1; unset($sale[$sal->id]); if ($a>4){ break; }?>
                                <?endforeach;?>
                            <? endif;?>

                        </div>
                    </div>
                    <div class="wrapper">
                        <div class="offer-slider" >
                            <? if(!empty($sale)):?>
                                <?  $a=0;  foreach ($sale as $sal):?>
                                    <div class="slide">
                                        <img src="public/img/<?= $sal->image; ?>" alt="">
                                        <a href="product/<?=$sal->alias?>">

                                            <p class="description">

                                                <?= $sal->title; ?><br>
                                                Горизонталь венге
                                            </p>
                                        </a>
                                            <p class="price"><?= round($sal->price,2)?> грн</p>

                                        <div class="btn" ><a href="product/<?=$sal->alias?>" data-id="<?=$sal->id?>">К товару</a></div>
                                    </div>
                                    <?  $a+=1; unset($sale[$sal->id]); if ($a>4){ break; }?>
                                <?endforeach;?>
                            <? endif;?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="advantages">
        <div class="container">
            <h2 class="section-title">Почему следует выбрать именно нас?</h2>
            <div class="flex-container">
                <div class="box">
                    <div class="img">
                        <img src="public/img/ellipse.png" alt="">
                    </div>
                    <div class="info">
                        <p class="title">Преимущество<br>№1</p>
                        <p class="description">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.
                        </p>
                    </div>
                </div>
                <div class="box">
                    <div class="img">
                        <img src="public/img/ellipse.png" alt="">
                    </div>
                    <div class="info">
                        <p class="title">Преимущество<br>№2</p>
                        <p class="description">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.
                        </p>
                    </div>
                </div>
                <div class="box">
                    <div class="img">
                        <img src="public/img/ellipse.png" alt="">
                    </div>
                    <div class="info">
                        <p class="title">Преимущество<br>№3</p>
                        <p class="description">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="about">
        <div class="container">
            <h2 class="section-title">Краткий текст о компании</h2>
            <div class="flex-container">
                <div class="img">
                    <img src="public/img/rectangle.png" alt="">
                </div>
                <div class="info">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Aenean euismod bibendum laoreet. Proin gravida dolor sit
                        amet lacus accumsan et viverra justo commodo. Proin sodales
                        pulvinar tempor. Cum sociis natoque penatibus et magnis
                        dis parturient montes, nascetur ridiculus mus. Nam fermentum,
                        nulla luctus pharetra vulputate, felis tellus mollis orci,
                        sed rhoncus sapien nunc eget.
                    </p>
                    <p>
                        Cum sociis natoque penatibus et magnis dis parturient montes,
                        nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra
                        vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget.
                    </p>
                </div>
            </div>
        </div>
    </section>
</main>
