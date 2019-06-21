<li>
    <p href="?id=<?=$id;?>"><?=$category['name']?></p>
    <? if (isset($category['childs'])):?>
    <ul>
        <li><a>  <?= $this->getMenuHtml($category['childs']);?> </a></li>
    </ul>
        <? endif;?>
</li>
