<main class="page-catalog">
    <section class="breadcrumbs">
        <div class="container">
            <ul>
                <li>
                    <a href="<?=PATH?>">Главная</a>
                </li>
                <li>
                    <a href="/search?s=p">Поиск по запросу "<?=h($query);?>"</a>
                </li>

            </ul>
        </div>
    </section>
    <section class="catalog">
        <div class="container">
            <div class="catalog-cont">
                <h1>Результат поиска</h1>
                <?if(isset($products)):?>
                <p class="search-result">Найдено <?=count($products)?> товаров</p>
                <?else:?>
                    <p class="search-result">Найдено 0 товаров</p>
                    <?endif;?>
                <div class="product-list">

                    <?if(!empty($products)):?>
                    <?foreach ($products as $product):?>
                    <a href="/product/<?=$product->alias?>" class="box">
                        <img src="/public/img/<?=$product->image?>" >
                        <p><?=$product->title?></p>
                        <p class="price"><?=round($product->price)?> грн</p>
                        <div class="btn">К товару</div>
                    </a>
                    <?endforeach;?>
                    <?endif;?>
                </div>
                <div class="navigation">


                </div>
            </div>
        </div>
    </section>
</main>
