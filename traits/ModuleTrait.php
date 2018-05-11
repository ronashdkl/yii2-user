<?php

namespace ronash\vendor\traits;

use ronash\vendor\Module;

/**
 * Trait ModuleTrait
 *
 * @property-read Module $module
 * @package dektrium\user\traits
 */
trait ModuleTrait
{
    /**
     * @return Module
     */
    public function getModule()
    {
        return \Yii::$app->getModule('vendor');
    }

    /**
     * @return string
     */
    public static function getDb()
    {
        return \Yii::$app->getModule('vendor')->getDb();
    }
}
