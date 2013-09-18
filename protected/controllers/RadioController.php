<?php

class RadioController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->renderPartial('about');
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
	    if($error=Yii::app()->errorHandler->error)
	    {
	    	if(Yii::app()->request->isAjaxRequest)
	    		echo $error['message'];
	    	else
	        	$this->render('error', $error);
	    }
	}

        /**
	 * Displays the contact page
	 */
	public function actionRadio()
	{
		$this->renderPartial('about');
	}
        
        public function actionSearch()
        {
            $gsapi = new gsapi('key', 'secret');

            $gsapi->startSession();
            $gsapi->getCountry($_SERVER['REMOTE_ADDR']);
            
            $gsSearch = new gsSearch();
            $gsSearch->setTitle('A');
            $results = $gsSearch->songSearchResults();
            echo'<pre>';print_R($results);exit;
        }
}