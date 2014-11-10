<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;

class AdminController extends Controller
{
    public $layout = 'admin';

    // TRAINER:
    public function actionCalendarTrainer()
    {
        $this->layout = 'admin-trainer';
        return $this->render('calendar-trainer');
    }
    public function actionProfileTrainer()
    {
        $this->layout = 'admin-trainer';
        return $this->render('profile-trainer');
    }
    public function actionLocationTrainer()
    {
        $this->layout = 'admin-trainer';
        return $this->render('location-trainer');
    }
    public function actionGalleryTrainer()
    {
        $this->layout = 'admin-trainer';
        return $this->render('gallery-trainer');
    }
    public function actionPasswordTrainer()
    {
        $this->layout = 'admin-trainer';
        return $this->render('password-trainer');
    }
    public function actionInboxTrainer()
    {
        $this->layout = 'admin-trainer';
        return $this->render('inbox-trainer');
    }
    public function actionComposeTrainer()
    {
        $this->layout = 'admin-trainer';
        return $this->render('compose-trainer');
    }
    public function actionMessageTrainer()
    {
        $this->layout = 'admin-trainer';
        return $this->render('message-trainer');
    }
    public function actionCertificatesTrainer()
    {
        $this->layout = 'admin-trainer';
        return $this->render('certificates-trainer');
    }
    public function actionRequestTrainer()
    {
        $this->layout = 'admin-trainer';
        return $this->render('request-trainer');
    }
    public function actionCertificatesTrainerOnsale()
    {
        $this->layout = 'admin-trainer';
        return $this->render('certificates-trainer-onsale');
    }
    public function actionClientsTrainer()
    {
        $this->layout = 'admin-trainer';
        return $this->render('clients-trainer');
    }

    // CLIENT:
    public function actionCalendarClient()
    {
        $this->layout = 'admin-client';
        return $this->render('calendar-client');
    }
    public function actionProfileClient()
    {
        $this->layout = 'admin-client';
        return $this->render('profile-client');
    }
    public function actionLocationClient()
    {
        $this->layout = 'admin-client';
        return $this->render('location-client');
    }
    public function actionPasswordClient()
    {
        $this->layout = 'admin-client';
        return $this->render('password-client');
    }
    public function actionInboxClient()
    {
        $this->layout = 'admin-client';
        return $this->render('inbox-client');
    }
    public function actionComposeClient()
    {
        $this->layout = 'admin-client';
        return $this->render('compose-client');
    }
    public function actionMessageClient()
    {
        $this->layout = 'admin-client';
        return $this->render('message-client');
    }
    public function actionCertificatesClient()
    {
        $this->layout = 'admin-client';
        return $this->render('certificates-client');
    }
    public function actionRequestClient()
    {
        $this->layout = 'admin-client';
        return $this->render('request-client');
    }

    // MANAGER:
    public function actionCalendarManager()
    {
        $this->layout = 'admin-manager';
        return $this->render('calendar-manager');
    }
    public function actionProfileManager()
    {
        $this->layout = 'admin-manager';
        return $this->render('profile-manager');
    }
    public function actionPasswordManager()
    {
        $this->layout = 'admin-manager';
        return $this->render('password-manager');
    }
    public function actionInboxManager()
    {
        $this->layout = 'admin-manager';
        return $this->render('inbox-manager');
    }
    public function actionComposeManager()
    {
        $this->layout = 'admin-manager';
        return $this->render('compose-manager');
    }
    public function actionMessageManager()
    {
        $this->layout = 'admin-manager';
        return $this->render('message-manager');
    }
    public function actionCertificatesManager()
    {
        $this->layout = 'admin-manager';
        return $this->render('certificates-manager');
    }
    public function actionCertificateManager()
    {
        $this->layout = 'admin-manager';
        return $this->render('certificate-manager');
    }
    public function actionPlacesManager()
    {
        $this->layout = 'admin-manager';
        return $this->render('places-manager');
    }
    public function actionCertificateEditManager()
    {
        $this->layout = 'admin-manager';
        return $this->render('certificate-edit-manager');
    }
    public function actionCertificateViewManager()
    {
        $this->layout = 'admin-manager';
        return $this->render('certificate-view-manager');
    }


    // COMPANY:
    public function actionCalendarCompany()
    {
        $this->layout = 'admin-company';
        return $this->render('calendar-company');
    }
    public function actionProfileCompany()
    {
        $this->layout = 'admin-company';
        return $this->render('profile-company');
    }
    public function actionPasswordCompany()
    {
        $this->layout = 'admin-company';
        return $this->render('password-company');
    }
    public function actionInboxCompany()
    {
        $this->layout = 'admin-company';
        return $this->render('inbox-company');
    }
    public function actionComposeCompany()
    {
        $this->layout = 'admin-company';
        return $this->render('compose-company');
    }
    public function actionMessageCompany()
    {
        $this->layout = 'admin-company';
        return $this->render('message-company');
    }
    public function actionCertificatesCompany()
    {
        $this->layout = 'admin-company';
        return $this->render('certificates-company');
    }
    public function actionPlacesCompany()
    {
        $this->layout = 'admin-company';
        return $this->render('places-company');
    }
    public function actionPlaceEdit()
    {
        $this->layout = 'admin-company';
        return $this->render('place-edit');
    }
    public function actionManagersCompany()
    {
        $this->layout = 'admin-company';
        return $this->render('managers-company');
    }
    public function actionManagerEdit()
    {
        $this->layout = 'admin-company';
        return $this->render('manager-edit');
    }
    public function actionZoneEdit()
    {
        $this->layout = 'admin-company';
        return $this->render('zone-edit');
    }

    // SUPERUSER:
    public function actionCalendarSuperuser()
    {
        $this->layout = 'admin-superuser';
        return $this->render('calendar-superuser');
    }
    public function actionProfileSuperuser()
    {
        $this->layout = 'admin-superuser';
        return $this->render('profile-superuser');
    }
    public function actionPasswordSuperuser()
    {
        $this->layout = 'admin-superuser';
        return $this->render('password-superuser');
    }
    public function actionInboxSuperuser()
    {
        $this->layout = 'admin-superuser';
        return $this->render('inbox-superuser');
    }
    public function actionComposeSuperuser()
    {
        $this->layout = 'admin-superuser';
        return $this->render('compose-superuser');
    }
    public function actionMessageSuperuser()
    {
        $this->layout = 'admin-superuser';
        return $this->render('message-superuser');
    }
}
