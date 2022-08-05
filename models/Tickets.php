<?php

namespace app\models;

use yii\db\ActiveRecord;

class Tickets extends ActiveRecord
{


    public function getStatus()
    {
        return $this->hasOne(Statuses::class, ['id' => 'status_id']);
    }
    public function getCategory()
    {
        return $this->hasOne(Categories::class, ['id' => 'category_id']);
    }
    public function getManager()
    {
        return $this->hasOne(Managers::class, ['id' => 'manager_id']);
    }
}
