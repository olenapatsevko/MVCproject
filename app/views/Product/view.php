<main class="page-product-card">

    <section class="breadcrumbs">
    <div class="container">
        <ul>
            <?=$breadcrumbs;?>
        </ul>
    </div>
</section>

<section class="product-card">
    <div class="container">
        <div class="img">
            <div class="img-gallery">
                <div class="gal-slide" data-src="img/<?=$product->image;?>">
<!--                    <a href="">-->
                        <img src="/public/img/<?=$product->image;?>" alt="">
<!--                    </a>-->
                </div>
                <? if ($gallery):?>
                <?foreach ($gallery as $im):?>
                <div class="gal-slide" data-src="img/<?=$im->img;?>">
                    <a href="">
                        <img src="/public/img/<?=$im->img;?>" alt="">
                    </a>
                </div>
                <?endforeach;?>
                <?else:?>
                <div class="gal-slide" data-src="img/<?=$product->image;?>">
                    <!--                    <a href="">-->
                    <img src="/public/img/<?=$product->image;?>" alt="">
                    <!--                    </a>-->
                </div>
                <?endif;?>

            </div>

        </div>
        <div class="txt-content">
            <h1><?=$product->title?></h1>
            <div class="content">
                <div class="choice-list">
                    <div class="first">
                        <div class="coll">

                            <div class="box" id="boxid">
                                <?if($modifications):?>
                                <?foreach ($modification_parent as $parent):?>
                                <p class="title"><?=$parent->name;?></p>
                                <?foreach ($modifications as $modification):?>
                                <?if($modification->parent_modification_id == $parent->id):?>
                                <input  type="radio" class="radio" name="<?=$parent->class_name;?>" data-title="<?=$modification->title;?>" data-price="<?=$modification->price;?>" id="<?=$modification->id;?>" value="<?=$modification->price;?>" >
                                <label for="<?=$modification->id;?>"><span></span><?=$modification->title;?></label>
                                <?endif;?>
                                <?endforeach; endforeach;?>
                                <?endif;?>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="end-price">
                    <div class="price">
                        <div class="price-box">
                            <span>Цена за полотно: </span>
                            <span ><a ><?=round($product->price,2)?> </a></span>
                        </div>
                        <div class="price-box">
                            <span>Комплект: </span>
                            <span id="com"></span>
                        </div>
                        <div class="price-box" >
                            <span>Общая сумма: </span>
                            <span id="price"><?=round($product->price,2)?> </span>
                        </div>
                    </div>

                    <div class="quantity">
                        <input type="number" id="qty_input" class="btn" size="4" value="1" name="quantity" min="1" step="1" style="margin-left: -2px">

                    </div>
                    <a  id="productAdd" data-id="<?=$product->id;?>"  href="cart/add?id=<?=$product->id;?>" class="btn cart-plus add-cart">Добавить в коризну<span class="cart-plus"></span></a>
                    <div class="hr"></div>
                    <div class="info">
                        <h4>Доставка:</h4>
                        <p>
                            - Киев (от 350 грн) <br>
                            - Самовывоз
                        </p>
                        <h4>Оплата:</h4>
                        <p>
                            - Наличными<br>
                            - Картой Visa/ MasterСard/ Приват24<br>
                            - Безналичными<br>
                            - В рассрочку<br>
                            - Оплата частями
                        </p>
                        <h4>Установка:</h4>
                        <p>- от 400 грн</p>
                    </div>
                </div>
            </div>
            <div class="description">
                <h3>Описание:</h3>
                <p>
                    <?=$product->description?>
                </p>


            </div>
            <a class="to-shop" href="##">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 31.494 22.166" style="enable-background:new 0 0 31.494 22.166;" xml:space="preserve">
                        <path d="M10.273,0.333c0.444-0.444,1.143-0.444,1.587,0c0.429,0.429,0.429,1.143,0,1.571L3.813,9.951h26.554  c0.619,0,1.127,0.492,1.127,1.111s-0.508,1.127-1.127,1.127H3.813l8.047,8.032c0.429,0.444,0.429,1.159,0,1.587  c-0.444,0.444-1.143,0.444-1.587,0l-9.952-9.952c-0.429-0.429-0.429-1.143,0-1.571L10.273,0.333z"/>
                    </svg>Вернуться назад
            </a>
        </div>
    </div>
</section>
</main>

<script>
    const price =  parseFloat(document.getElementById('price').innerText);
    const prices = {};
    const blockEl = document.getElementById('boxid');
    const compact = document.getElementById('com');
    let inputs = blockEl.getElementsByTagName('input');
    const priceEl = document.getElementById('price');

    const recalculate = () => {
        let newPrice = 0;
        Object.values(prices).forEach(value => {
            newPrice += value
        });
        priceEl.innerHTML = price + newPrice;
        compact.innerHTML = newPrice
    };

    recalculate();

    const changeValue = data => {
        prices[data.name] = +data.value;
        recalculate()
    };

    inputs = [...inputs].filter(input => input.type.toLowerCase() === 'radio');

    inputs.forEach(input => {
        input.onclick = e => {
            const { name, value, id } = e.target;
            const data = { name, value, id };
            changeValue(data)
        }
    })
</script>
