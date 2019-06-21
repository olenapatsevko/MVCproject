<? $parent_id = \shop\App::$app->getProperty('parent_id');?>





    <option value="<?=$id;?>"<?if($id == $parent_id)echo 'selected';?><? if(isset($_GET['id']) && $id == $_GET['id']) echo 'disabled' ?>>
    <?=$tab . $category['name'];?></option>
<?php if(isset($category['childs'])): ?>
    <?= $this->getMenuHtml($category['childs'], '&nbsp;' . $tab. '-') ?>
<?php endif; ?>