<?php
namespace backend\controllers;

use common\models\User;
use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

/**
 * User controller
 */
class UserController extends Controller
{

    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['profile'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    // 'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * User Profile
     * 
     */
    public function actionProfile($id) {
        
        $model = $this->findModel($id);
        $title = 'Profile | '. $model->username;

        // echo "<pre>";
        // print_r($model); exit;

        Yii::$app->session->setFlash('info', 'Implementation Pending');
        
        return $this->render('profile', [
            'title' => $title,
            'model' => $model,
        ]);
    }

    /**
	 * @param $id
	 *
	 * @return User|null
	 * @throws NotFoundHttpException
	 */
    protected function findModel($id)
    {
        if (($model = User::findOne($id)) !== null) {
            return $model;
        }
        throw new NotFoundHttpException('The requested page does not exist.');
    }
}