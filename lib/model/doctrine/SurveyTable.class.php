<?php

/**
 * SurveyTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class SurveyTable extends Doctrine_Table
{
    public function addByPromosQuery($promos, $withGlobalSurveys = true, Doctrine_Query $q = null) {
        if (is_null($q)) {
            $q = Doctrine_Query::create()->from('Survey s');
        }

        $alias = $q->getRootAlias();

        $q->leftJoin($alias.'.SurveyPromo sp');
        $q->leftJoin('sp.Promo p');

        $q->andWhereIn('p.id', $promos);
        
        if ($withGlobalSurveys) {
            $q->orWhere($alias.'.all_promos = ?', $withGlobalSurveys);
        }

        return $q;
    }
    
    public function addByPromoQuery($promo, $withGlobalSurveys = true, Doctrine_Query $q = null) {
        if (is_null($q)) {
            $q = Doctrine_Query::create()->from('Survey s');
        }

        $alias = $q->getRootAlias();
        
        $q->leftJoin($alias . '.SurveyPromo sp');
        $q->leftJoin('sp.Promo p');

        if ($withGlobalSurveys) {
            $q->andWhere($alias.'.all_promos = ? OR p.id = ?', array($withGlobalSurveys,$promo));
        } else {
            $q->andWhere('p.id = ?', $promo);
        }

        return $q;
    }
    
    public function addByIsActiveFlagQuery($isActive = true, Doctrine_Query $q = null) {
        if (is_null($q)) {
            $q = Doctrine_Query::create()->from('Survey s');
        }

        $alias = $q->getRootAlias();

        $q->andWhere($alias.'.is_active = ?', $isActive);

        return $q;
    }
    
    public function retrievePromoSurveys($promo, $withGlobalSurveys = true, $activeOnly = true) {
        $q = $this->addByPromoQuery($promo, $withGlobalSurveys);
        
        if ($activeOnly) {
            $q = $this->addByIsActiveFlagQuery($activeOnly, $q);
        }
        
        return $q->execute();
    }
    
    public function getPromosSurveysQuery($promos, $withGlobalSurveys = true, $activeOnly = true) {
        $q = $this->addByPromosQuery($promos, $withGlobalSurveys);
        
        if ($activeOnly) {
            $q = $this->addByIsActiveFlagQuery($activeOnly, $q);
        }
        
        return $q;
    }
    
    public function retrievePromosSurveys($promos, $withGlobalSurveys = true, $activeOnly = true) {
        return $this->getPromosSurveysQuery($promos, $withGlobalSurveys, $activeOnly)->execute();
    }

    /**
     * Returns an instance of this class.
     *
     * @return object SurveyTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Survey');
    }
}