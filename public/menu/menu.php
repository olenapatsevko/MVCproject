<? $parent = isset($category['childs']);?>
<li>
    <? if ($parent):?>
        <p> <a href="/category/<?=$category['alias'];?>">     <?=$category['name']?></a> </p>
    <?else:?>
<li><a href="/category/<?=$category['alias'];?>"><?=$category['name']?></a></li>
        <?endif;?>
    <? if (isset($category['childs'])):?>
        <ul>
            <?= $this->getMenuHtml($category['childs']);?>
        </ul>
    <? endif;?>
</li>
