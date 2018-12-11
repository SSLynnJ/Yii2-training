<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 10.12.2018
 * Time: 21:42
 */

namespace app\models;

use yii\base\Model;

class Branch extends Model


{
    public $title;
    public $startDay;
    public $endDay;
    public $description;


    function __construct($config = [], $attributes = [])
    {
        parent::__construct($config);

        $this->setAttributes($attributes, false);
    }
}