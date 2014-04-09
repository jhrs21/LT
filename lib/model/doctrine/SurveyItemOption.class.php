<?php

/**
 * SurveyItemOption
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    elperro
 * @subpackage model
 * @author     Jacobo Martinez <jacobo.amn87@gmail.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class SurveyItemOption extends BaseSurveyItemOption {
    public function asArray($useAlphaId = false) {
        $array = array(
            'id' => $useAlphaId ? $this->getAlphaId() : $this->getId(),
            'label' => $this->getLabel(),
            'image' => $this->getImage(),
            'image_only' => $this->getImageOnly(),
            'position' => $this->getPosition()
        );
        
        return $array;
    }

    public function asWidgetChoice() {
        $choice = '';
        
        if ($this->getImage()) {
            $choice = '<img alt="'.$this->getLabel().'" src="'.Util::auto_version('/uploads/'.$this->getImage()).'" class="survey-item-choice-image">';
        }
        
        if (!$this->getImageOnly()) {
            $choice .= $this->getLabel();
        }
        
        return $choice;
    }
    
    public function save(Doctrine_Connection $conn = null) {
        if (!$this->getAlphaId()) {
            $this->setAlphaId(Util::gen_uuid(hash('sha256', time() . rand(11111, 99999))));
        }

        return parent::save($conn);
    }
}