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
     * Update User Profile
     */
    public function actionUpdate($id) {
        
        $user = $this->findModel($id);
        $user->scenario = $user::SCENARIO_UPDATE;

        if ($user->load(Yii::$app->request->post()) && $user->update()) {
            Yii::$app->session->setFlash('success', 'User Profile Updated!');
            return $this->redirect(['profile', 'id' => $user->id]);
        }

        Yii::$app->view->title = Yii::t('app', 'Update Profile | {userName}', ['userName'=> $user->username]);
        
        return $this->render('update', [
            'user' => $user,
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