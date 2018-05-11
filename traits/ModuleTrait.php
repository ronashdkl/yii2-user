<?php

namespace ronash\user\traits;

use ronash\user\Module;

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
