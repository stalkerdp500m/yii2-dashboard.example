<?php

namespace app\models;

use yii\db\ActiveRecord;

class Categories extends ActiveRecord
{
    public $cnt;
    public function getTickets()
    {
        return $this->hasMany(Tickets::class, ['category_id' => 'id']);
    }
}
