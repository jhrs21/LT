<?php

/**
 * ApiUserTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class ApiUserTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object ApiUserTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('ApiUser');
    }
}