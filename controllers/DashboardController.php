<?php

namespace app\controllers;

use app\models\Categories;
use Yii;
use yii\web\Controller;
use app\models\Tickets;


class DashboardController extends Controller
{
    public function actionIndex()
    {
        $dateStart = Yii::$app->request->get('date-satart');
        $dateEnd = Yii::$app->request->get('date-end', date("Y-m-d"));




        $tickets = Tickets::find()
            ->select('name, manager_id, categories.title AS category_title, categories.id AS category_id, COUNT(*) AS count')
            ->groupBy(['category_id', 'manager_id'])
            ->joinWith(['category', 'manager'])
            ->orderBy('name')
            ->where(['not', ['resolved_at' => null]])
            ->andFilterWhere(['between', 'resolved_at', $dateStart, $dateEnd])
            //    ->createCommand()->getRawSql()
            ->asArray()->all();

        // echo $tickets;
        // return $tickets;



        $categoryList = Categories::find()
            ->select('id,title')
            ->asArray()->all();


        $managerStatisticList = [];
        foreach ($tickets as $ticket) {
            $managerStatisticList[$ticket['manager_id']]['name'] = $ticket['name'];
            $managerStatisticList[$ticket['manager_id']]['statistic_category'][$ticket['category_id']] = $ticket['count'];
        }

        return $this->render(
            'index',
            [
                'managerStatisticList' => $managerStatisticList,
                'categoryList' => $categoryList,
                'dateStart' => $dateStart,
                'dateEnd' => $dateEnd

            ]
        );
    }
}
