<main class="page-catalog">
    <section class="breadcrumbs">
        <div class="container">
            <ul><?if(isset($breadcrumbs)):?>
                <?=$breadcrumbs;?>
                <?endif;?>
            </ul>
        </div>
    </section>


    <section class="catalog">
        <div class="container">
            <aside>
                <div class="flex">
                    <div class="selected">
                        <h2>Ваш выбор:</h2>
                        <div class="list">
                            <p></p>
                        </div>
                        <p onclick="deleteAll()"><span></span> Очистить все</p>
                    </div>
                    <div class="filters-coll">
                        <? new \app\widgets\filter\Filter(); ?>


                    </div>
                </div>
            </aside>
            <div class="catalog-cont">
                <h1 id="hide-h1">Результат поиска</h1>
                <?if(isset($products)):?>
                    <p class="search-result" id="hide-count">Найдено <?=count($products)?> товаров</p>
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
                        <button class="load-more active" id="button-hide">
                            <?=count($products);?> товара(ов) из <?=$total?>
                        </button>

                        <div class="pagination" id="pagination-hide">


                            <?if($pagination->countPages > 1):?>
                            <?=$pagination;?>
                            <?endif;?>

                        </div>
                </div>

    </section>
</main>

