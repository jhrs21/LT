<?php

/**
 * SurveyItemOptionTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class SurveyItemOptionTable extends Doctrine_Table {
    
    public function addByItemQuery($item, Doctrine_Query $q = null) {
        if (is_null($q)) {
            $q = Doctrine_Query::create()->from('SurveyItemOption sio');
        }

        $alias = $q->getRootAlias();

        $q->andWhere($alias . '.survey_item_id = ?', $item);

        return $q;
    }
    
    public function addOrderByPositionQuery(Doctrine_Query $q = null) {
        if (is_null($q)) {
            $q = Doctrine_Query::create()->from('SurveyItemOption sio');
        }

        $alias = $q->getRootAlias();

        $q->orderBy($alias.'.position ASC');

        return $q;
    }
    
    public function getByItemQuery($item) {
        return $this->addByItemQuery($item, $this->addOrderByPositionQuery());
    }
    
    /**
     * Returns an instance of this class.
     *
     * @return object SurveyItemOptionTable
     */
    public static function getInstance() {
        return Doctrine_Core::getTable('SurveyItemOption');
    }

}