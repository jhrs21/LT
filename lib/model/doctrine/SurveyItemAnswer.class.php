<?php

/**
 * SurveyItemAnswer
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    elperro
 * @subpackage model
 * @author     Jacobo Martinez <jacobo.amn87@gmail.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class SurveyItemAnswer extends BaseSurveyItemAnswer {
    public function getFormatedAnswer() {
        if (!strlen(parent::getAnswer())) {
            return '';
        }
        
        if (strcasecmp($this->getItem()->getItemType(), 'text') == 0) {
            return parent::getAnswer();
        }
        
        $answers = explode(';', parent::getAnswer());
        $count = count($answers);
        $answer = '';
        $i = 0;
        
        foreach ($answers as $ans) {
            $option = Doctrine::getTable('SurveyItemOption')->findOneBy('id', $ans);
            $answer = $answer . $option->getLabel();
            $i++;
            
            if ($i < $count) {
                $answer = $answer . ';';
            }
        }
        
        return $answer;
    }

    public function save(Doctrine_Connection $conn = null) {
        if (!$this->getAnswer()) {
            $this->setAnswer('na-nc');
        }

        parent::save($conn);
    }

}