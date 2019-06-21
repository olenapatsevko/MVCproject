
<?foreach ($this->groups as $group_id => $group_item):?>
<h3 class="acc-title"><?=$group_item['title'];?></h3>
<div class="acc-wrap with-num">
    <?foreach ($this->attrs[$group_id] as $attr_id => $value):?>
    <input class="checkbox" type="<?=$group_item['type'];?>" name="place" id="<?=$attr_id?>" value="<?=$attr_id;?>" data-title="<?=$attr_id;?>">
    <label for="<?=$attr_id?>"><p><span></span><?=$value;?></p></label>
    <?endforeach;?>
</div>
<?endforeach;?>