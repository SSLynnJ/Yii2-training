<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 10.12.2018
 * Time: 21:30
 */

namespace app\controllers;
use app\models\Branch;
use yii\web\Controller;



class BranchController extends Controller
{
    public function actionBranch()
    {

 $newone = new Branch();

        return $this->render('branch', compact('newone'));

    }

}