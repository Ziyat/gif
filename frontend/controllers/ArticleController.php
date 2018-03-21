<?php
namespace frontend\controllers;

use common\entities\Article;
use common\entities\Category;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\web\NotFoundHttpException;

/**
 * Site controller
 */
class ArticleController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionView($id)
    {
        $model = Article::findOne($id);
        if(!$model){
            throw new NotFoundHttpException('Статья не найдено');
        }
        return $this->render('view',[
            'model' => $model,
        ]);
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionCategory($id)
    {
        $model = Category::find()->with('articles')->where(['type' => Category::ARTICLE,'id' => $id])->one();
        if(!$model){
            throw new NotFoundHttpException('Категория не найдено');
        }
        return $this->render('category',[
            'model' => $model,
        ]);
    }
}
