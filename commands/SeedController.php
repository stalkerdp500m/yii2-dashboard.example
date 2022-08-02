<?php

namespace app\commands;

use app\models\Categories;
use app\models\Managers;
use app\models\Statuses;
use app\models\Tickets;
use yii\console\Controller;
use yii\console\ExitCode;
use Faker\Factory;





class SeedController extends Controller
{
    public function actionIndex()
    {
        $faker = Factory::create();


        for ($i = 0; $i < 20; $i++) {
            $manager = new Managers();
            $manager->name = $faker->name();
            $manager->save();
        }

        foreach (["Новая", "В работе", "Решена"] as  $stausTitle) {
            if (!Statuses::findOne(['title' => $stausTitle])) {
                $status = new Statuses();
                $status->title = $stausTitle;
                $status->save();
            }
        }
        foreach (["Отключение", "Проверка/удешевление", "Тех. вопрос", "Прочее"] as $categoryTitle) {
            if (!Categories::findOne(['title' => $categoryTitle])) {
                $category = new Categories();
                $category->title = $categoryTitle;
                $category->save();
            }
        }


        for ($i = 0; $i < 50; $i++) {
            echo random_int(1, 4);
            $ticket = new Tickets();
            $ticket->manager_id = random_int(1, 20);
            $ticket->status_id = random_int(1, 3);
            $ticket->category_id = random_int(1, 4);
            $ticket->body = $faker->text(30);
            $ticket->resolved_at = $faker->dateTimeBetween("-2 years", "now")->format('Y-m-d');
            $ticket->save();
        }
        // echo $posts . "\n";
        return ExitCode::OK;
    }
}
