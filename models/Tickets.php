<?php

namespace app\models;

use yii\db\ActiveRecord;

class Tickets extends ActiveRecord
{
    public function getStatus()
    {
        return $this->hasOne(Statuses::class, ['id' => 'status_id']);
    }
}
