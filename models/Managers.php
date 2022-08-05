<?php

namespace app\models;

use yii\db\ActiveRecord;

class Managers extends ActiveRecord
{
    public $count;
    public function getTickets()
    {
        return $this->hasMany(Tickets::class, ['manager_id' => 'id']);
    }
}
