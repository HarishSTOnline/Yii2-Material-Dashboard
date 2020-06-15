<?php
namespace backend\controllers;

use common\models\User;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

/**
 * User Management Controller
 */
class UserController extends Controller {

    /**
     * {@inheritdoc}
     */
    public function behaviors() {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['profile', 'update'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }

    /**
     * User Profile
     * 
     */
    public function actionProfile($id) {
        
        $user = User::find(['id' => $id])
                        ->asArray()
                        ->one();
        $title = 'Profile | '. $user['username'];
        
        return $this->render('profile', [
            'title' => $title,
            'user' => $user,
        ]);
    }

    /**
     * User Profile Update
     */
    public function actionUpdate($id) {
        
        $user = $this->findModel($id);
        $title = 'Edit Profile | ' . $user->username;

        Yii::$app->session->setFlash('info', '501 - Not yet implemented!');
        
        return $this->render('update', [
            'title' => $title,
            'user' => $user
        ]);
    }

    /**
	 * @param $id
	 *
	 * @return User|null
	 * @throws NotFoundHttpException
	 */
    protected function findModel($id) {

        if (($model = User::findOne($id)) !== null) {
            return $model;
        }
        throw new NotFoundHttpException('The requested page does not exist.');
    }
}