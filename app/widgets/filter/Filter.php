<?php


namespace app\widgets\filter;


use shop\Cache;

class Filter
{
    public $groups;
    public $attrs;
    public $tpl;


    public function __construct()
    {

        $this->tpl = __DIR__.'/filter_tpl.php';
        $this->run();

    }
    protected function run(){

        $cache = Cache::instance();
        $this->groups = $cache->get('filter_group');
        if (!$this->groups){
            $this->groups = $this->getGroups();
            $cache->set('filter_group' , $this->groups);

        }

        $this->attrs = $cache->get('filter_attrs');

        if (!$this->attrs){
            $this->attrs = $this->getAttrs();
            $cache->set('filter_attrs' , $this->attrs);

        }

       $filters = $this->getHtml();

        echo $filters;

    }
    protected function getGroups(){
        return \R::getAssoc('SELECT * FROM attribute_group');
    }
    protected function getAttrs(){
        $data= \R::getAssoc('SELECT * FROM attribute_value');
        $attrs = [];
        foreach ($data as $k => $v){
            $attrs [$v['attr_group_id']][$k]= $v['value'];
        }
        return $attrs;
    }

    protected function getHtml(){

        ob_start();
        require  $this->tpl;
        return ob_get_clean();

    }

    public static function getFilter ($filters){
        $filter = null;

        if (!empty($filters)){
            $filter = preg_replace("#[^\d,]+#", '', $filters);
           $filter =  trim($filter, ',');

        }
        return $filter;
    }


}