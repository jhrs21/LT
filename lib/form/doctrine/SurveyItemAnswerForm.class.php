<?php

/**
 * SurveyItemAnswer form.
 *
 * @package    elperro
 * @subpackage form
 * @author     Jacobo Martinez <jacobo.amn87@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class SurveyItemAnswerForm extends BaseSurveyItemAnswerForm {
    public function configure() {
        unset($this['created_at'],$this['updated_at']);
    }

}