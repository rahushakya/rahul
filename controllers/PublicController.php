<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;

class PublicController extends Controller
{

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionRegistration()
    {
        return $this->render('registration');
    }

    public function actionLogin()
    {
        return $this->render('login');
    }

    public function actionResults()
    {
        return $this->render('results');
    }
    public function actionTrainer()
    {
        return $this->render('trainer');
    }
    public function actionTrainersNew()
    {
        return $this->render('trainers-new');
    }
    public function actionTrainersPopular()
    {
        return $this->render('trainers-popular');
    }
    public function actionTrainersAll()
    {
        return $this->render('trainers-all');
    }
    public function actionLocationsNew()
    {
        return $this->render('locations-new');
    }
    public function actionLocationsIndoor()
    {
        return $this->render('locations-indoor');
    }
    public function actionLocationsOutdoor()
    {
        return $this->render('locations-outdoor');
    }
    public function actionAnnouncesNew()
    {
        return $this->render('announces-new');
    }
    public function actionAnnouncesPopular()
    {
        return $this->render('announces-popular');
    }
    public function actionAnnouncesAll()
    {
        return $this->render('announces-all');
    }
    public function actionLocation()
    {
        return $this->render('location');
    }
    public function actionAnnounce()
    {
        return $this->render('announce');
    }
    public function actionAboutUs()
    {
        return $this->render('about-us');
    }
    public function actionFaq()
    {
        return $this->render('faq');
    }
    public function actionBlog()
    {
        return $this->render('blog');
    }
    public function actionBlogPost()
    {
        return $this->render('blog-post');
    }
    public function actionContactUs()
    {
        return $this->render('contact-us');
    }
    public function actionThermsOfUse()
    {
        return $this->render('therms-of-use');
    }
}
