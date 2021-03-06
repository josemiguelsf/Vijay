<?php
/**
 * SiteController class file
 * 
 * @author		Jose Sanchez
 * @description
 * Controller handler for site request
 * @property string $layout
 *
 **/
class SiteController extends Controller
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
	 * Control de acceso y cura los campos de texto
	 * @see CController::filters()
	 */
	public function filters()
	{
    	return array(
    		'accessControl',
        	array(
            	'application.filters.YXssFilter',
                'clean'   => '*',
                'tags'    => 'strict',
				'actions' => 'all'
            )
		);
	}

	/**
	 * Especifica los controles de acceso
	 * Este metodo es utilizado por el filtro'accessControl'.
	 * @return array reglas de control de acceso
	 */
	public function accessRules()
	{
		return array(
			array('allow',
					'actions'=>array('login'),
					'actions'=>array('recover'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user
				'actions'=>array(
					'dashboard'
				),
				'users'=>array('@'),
			),
		);
	}
	
	/**
	 * Consumed via cronjob search all pending task and send an email to owner
	 */
	/**
	 * 
	 * @return String generated time
	 */
	public function actionBackgroundProcess()
	{
		$gentime = microtime(); 
		$gentime = explode(' ',$gentime); 
		$gentime = $gentime[1] + $gentime[0]; 
		$pg_start = $gentime;
		
		// verify if are emails pending to send
		$emails = Emails::model()->findAll(array(
			'condition'=>'t.email_status = 0',
			'limit'=>Yii::app()->params['mailSendMultiples'],
		));
		
		if(count($emails)>0)
		{
			foreach($emails as $email)
			{
				Yii::import('application.extensions.phpMailer.yiiPhpMailer');
				$mailer = new yiiPhpMailer;
				if ($mailer->Ready($email->email_subject, $email->email_body, array('email'=>$email->email_toMail,'name'=>$email->email_toName), $email->email_priority))
				{
					$email->email_status = 1;
					$email->email_sentDate = date("Y-m-d G:i:s");
					$email->save(false);
				}
			}
		}
		
		$gentime = microtime(); 
		$gentime = explode(' ',$gentime); 
		$gentime = $gentime[1] + $gentime[0]; 
		$pg_end = $gentime; 
		$totaltime = ($pg_end - $pg_start); 
		$showtime = number_format($totaltime, 4, '.', ''); 
		echo("Generacion en " . $showtime . " segundos");
	}
	
	/**
	 * Used for render global result widget
	 */
	public function actionResults()
	{
		// go out if user is guest
		if (Yii::app()->user->isGuest)
			$this->render('index');
		
		// GlobalSearchForm was sent via POST
		if(isset($_POST['GlobalSearchForm']))
		{
			// create GlobalSearchForm object
			$searchForm = new GlobalSearchForm();
			// set all modules as selected
			if(isset($_POST['GlobalSearchForm']['all']))
			{
				$_POST['GlobalSearchForm']['budgets'] = 1;
				$_POST['GlobalSearchForm']['invoices'] = 1;
				$_POST['GlobalSearchForm']['expenses'] = 1;
				$_POST['GlobalSearchForm']['documents'] = 1;
				$_POST['GlobalSearchForm']['milestones'] = 1;
				$_POST['GlobalSearchForm']['cases'] = 1;
				$_POST['GlobalSearchForm']['tasks'] = 1;
				$_POST['GlobalSearchForm']['projects'] = 1;
			}
			// perform search
			$dataProvider = $searchForm->search($_POST['GlobalSearchForm'], $_POST['searchField']);
			// return to results view
			$this->layout='column2';
			$this->render('results',array(
				'dataProvider' => $dataProvider,
				'term' => isset($_POST['searchField']) ? $_POST['searchField'] : '',
			));
		}
		else
			throw new CHttpException(400, Yii::t('site', '400_Error'));
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		// create LoginForm object
		$model=new LoginForm;
			
		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
		
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
		
		// collect user input data
		if(isset($_POST['LoginForm']))
		{
		
			$model->attributes=$_POST['LoginForm'];
			if($model->validate() && $model->login())
			{
				//echo "it is validated";
				$this->redirect((Yii::app()->user->getState('refer')==null) ? Yii::app()->controller->createUrl('site/logged') : Yii::app()->user->getState('refer'));
			}
		}
		//$this->layout = "login";
		// display the login form
		//$this->renderPartial('login',array('model'=>$model));
		//var_dump($model);
		//die();
		$this->layout = "index";
		$modelrecov=$this->actionRecover();
		
		$this->render('mainpage',array('model'=>$model, 'modelrecov'=>$modelrecov));
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
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$headers="From: {$model->email}\r\nReply-To: {$model->email}";
				mail(Yii::app()->params['adminEmail'],$model->subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->layout = "simple";
		
		$this->render('pages/contact',array(
			'model'=>$model
		));
	}

	/**
	 * Displays the login page
	 */
	public function actionlogin()
	{
		
		// redirec to dashboard page is user is registered
		if (!Yii::app()->user->isGuest)
		{
			
			$this->render('dashboard');
		}
		else
		{
			// create LoginForm object
			$model=new LoginForm;
			
			// if it is ajax validation request
			if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
			{
				
				echo CActiveForm::validate($model);
				Yii::app()->end();
			}

			// collect user input data
			if(isset($_POST['LoginForm']))
			{
				
				$model->attributes=$_POST['LoginForm'];
				if($model->validate() && $model->login())
				{
					//echo "it is validated";
					$this->redirect((Yii::app()->user->getState('refer')==null) ? Yii::app()->controller->createUrl('site/logged') : Yii::app()->user->getState('refer'));
				}
			}
			//$this->layout = "login";
			// display the login form
			$this->renderPartial('login',array('model'=>$model));
		}
	}
	public function actionLogged()
	{
		// redirec to login page is user is guest
		//JMS the following is the condition for a non-registered user
		if (Yii::app()->user->isGuest)
		{
			// check if database is installled
			if (!AppTools::DBallreadyInstalled())
				$this->redirect(Yii::app()->createUrl('install'));
				
			// check if user master is create
			if (!AppTools::masterAdmin())
			{
				$this->redirect(Yii::app()->createUrl('site/register'));
			}
			$this->redirect(Yii::app()->createUrl('site/login'));
		}
		else
		{
			
			// verify infoproject exist
			if ((isset($_GET['infoproject'])) && (is_numeric($_GET['infoproject'])))
			{
				// verify is user has project send via GET params
				$Project = Projects::model()->hasProject(Yii::app()->user->id, $_GET['infoproject']);
				// project_id has relation with user_id then, save project information inside session
				if (isset($Project->project_id))
				{
					Yii::app()->user->setState('project_selected', $Project->project_id);
					Yii::app()->user->setState('project_selectedName', $Project->project_name);
				}
			}
			//echo Yii::app()->user->id;
			//die();
			$modeluser=new users;
			$userid=$modeluser->find('user_id=:user_id', array('user_id'=>Yii::app()->user->id));
			$acc= $userid->account_id;
			//echo $acc;
			//die();
			if($userid->account_id<>77){
			// output view dashboard
				$this->render('dashboard');
			}
			else
					{
					//echo Yii::t('site','LoggedAs')." ".CHtml::link(CHtml::encode(Yii::app()->user->CompleteName),Yii::app()->createUrl('users/view', array('id'=>Yii::app()->user->id)));
					// output user view
						$this->redirect(Yii::app()->createUrl('users/view', array('id'=>Yii::app()->user->id)));
					//echo "after render user view";
				
					}	
			}
		}
	
	
	/**
	 * Handle Dashboard page
	 */
	public function actionDashboard()
	{
		$this->render('dashboardgral');
	}
	
	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
	
	/**
	 * Creates a new user account.
	 */
	public function actionRegister()
	{
				
		$register = new RegisterForm();
		// RegisterForm was sent via POST
		if(isset($_POST['RegisterForm']))
		{echo "mail is valid jjjjjj";
				die();
			// Get attributes from POST to RegisterForm object model
			$register->attributes = $_POST['RegisterForm'];
			// validate if register has all fields required
			if($register->validate())
			{
				echo "mail is valid jjjjjj";
				die();
				// create new user and account, then redirect to signsucess
				if ($register->create())
				{
					if (Yii::app()->params['multiplesAccounts'])
						$this->redirect(Yii::app()->controller->createUrl("site/signsucess"));
					else
						$this->redirect(Yii::app()->controller->createUrl("site/index"));
				}
			}
		}
		
		// output register view
		$this->layout = "login";
		$this->render('register',array(
			'model'=>$register,
		));
	}
	
	/**
	 * Used when registration method result ok
	 * @throws CHttpException
	 */
	public function actionSignSucess()
	{
		
		if((isset($_GET['uauth'])) && (isset($_GET['tauth'])) && (isset($_GET['uid'])))
		{
			$user = Users::model()->findByPk($_GET['uid']);
			if ((md5($user->user_email) == $_GET['uauth']) && (sha1(substr($user->user_password, -1)) == $_GET['tauth']))
			{			
				$user->user_active = 1;
				if($user->save(false))
					$this->redirect(Yii::app()->controller->createUrl("site/login"));
				else
					throw new CHttpException(403, Yii::t('site', '403_Error'));
			}
			else
				throw new CHttpException(400, Yii::t('site', '400_Error'));
		}
		else
			$render = "signsucess";
		
		$this->layout = "login";
		return $this->render($render);
	}
	
	// Recover password view
	public function actionRecover()
	{
		
		// create ForgottenPasswordForm object
		$model = new ForgottenPasswordForm;

		// verify if ForgottenPasswordForm was used
		if(isset($_POST['ForgottenPasswordForm']))
		{
			//echo "is POSTED";
			//die();
			$model->attributes=$_POST['ForgottenPasswordForm'];
			// validate model
			if($model->validate())
			{				
				
				// criteria object used to find all user data information
				$userCriteria = new CDbCriteria;
				$userCriteria->condition = "user_email = :user_email";
				$userCriteria->params = array(
					':user_email' => $model->user_email,
				);
				
				$CountUser = Users::model()->count($userCriteria);
				//var_dump($CountUser);
				//die();
				$transaction = Yii::app()->db->beginTransaction();
				if ($CountUser > 0)
				{
					$user = Users::model()->find($userCriteria);
					
					// -- Password Generator
					$vowels = 'aeiou';
					$consonants = 'bcdfghjklmnpqrstvwxyz';
					$password = '';
					$alt = time() % 2;
					for ($i=0; $i<10; $i++) {
						if ($alt == 1) {
							$password .= $consonants[(rand() % strlen($consonants))];
							$alt = 0;
						} else {
							$password .= $vowels[(rand() % strlen($vowels))];
							$alt = 1;
						}
					}
					$user->user_password = md5($password);
					
					if($user->save(false))
					{							
						$str = $this->renderPartial('//templates/users/PasswordChanged',array(
							'userRequest' => $user->CompleteName,
							'user_email' => $user->user_email,
							'user_password' => $password,
							'applicationName' => Yii::app()->name,
							'applicationUrl' => "http://".$_SERVER['SERVER_NAME'].Yii::app()->request->baseUrl,
						),true);
						
						$subject = Yii::t('email','PasswordReset');
						
						Yii::import('application.extensions.phpMailer.yiiPhpMailer');
						$mailer = new yiiPhpMailer;
						$mailer->Ready($subject, $str, array('name'=>$user->CompleteName,'email'=>$user->user_email), Emails::PRIORITY_NORMAL);
						
						Yii::app()->user->setFlash('PasswordSuccessChanged', Yii::t('site','PasswordSuccessChanged'));
						$this->refresh();
					}
					//else
						//echo "user does not exist";
					//die();
						Yii::app()->user->setFlash('EmailDoesNotExist', Yii::t('site','Email Does Not Exist'));
						$this->refresh();
				}
				
				
					Yii::app()->user->setFlash('EmailDoesNotExist', Yii::t('site','Email Does Not Exist'));
						$this->refresh();
			}
			
		}
		
		//$this->layout = 'login';
		return $model;
		// $this->renderpartial('recover',array('model'=>$model));
	}
	public function actionNewapplicant()
	{
		// create ForgottenPasswordForm object
		$modelform = new ForgottenPasswordForm;
	
		// verify if ForgottenPasswordForm was used
		if(isset($_POST['ForgottenPasswordForm']))
		{
			$modelform->attributes=$_POST['ForgottenPasswordForm'];
			$model=new Users;
			$modelauth=new Authassignments;
			$uniqueemail=$model->find('user_email=:user_email', array('user_email'=>$_POST['ForgottenPasswordForm']['user_email']));
						
			// validate model
			if($uniqueemail->user_email==null)
			{
				
				$model->user_email = $_POST['ForgottenPasswordForm']['user_email'];
					
					// -- Password Generator
					$vowels = 'aeiou';
					$consonants = 'bcdfghjklmnpqrstvwxyz';
					$password = '';
					$alt = time() % 2;
					for ($i=0; $i<10; $i++) {
						if ($alt == 1) {
							$password .= $consonants[(rand() % strlen($consonants))];
							$alt = 0;
						} else {
							$password .= $vowels[(rand() % strlen($vowels))];
							$alt = 1;
						}
					}
					//$password="adminjms";
					$model->user_password = md5($password);
					$model->user_active = 1;
					$model->user_admin = 0;
					$model->account_id = 77;
					$modelauth->userid=$model->user_id;
					$modelauth->itemname="applicant";
						
					if($model->save(false))
					{
						$modelauth->userid=$model->user_id;
						$modelauth->save(false);
						$str = $this->renderPartial('//templates/users/PasswordChanged',array(
								//'userRequest' => $model->CompleteName,
								'user_email' => $model->user_email,
								'user_password' => $password,
								),true);
						
						$subject = Yii::t('email','NewApplicant');
					
						Yii::import('application.extensions.phpMailer.yiiPhpMailer');
						$mailer = new yiiPhpMailer;
						$mailer->Ready($subject, $str, array('name'=>$model->CompleteName,'email'=>$model->user_email), Emails::PRIORITY_NORMAL);
						//Yii::app()->user->setFlash('PasswordSuccessChanged', Yii::t('site','PasswordSuccessChanged'));
						echo $model->user_email.'<br>';
						echo $model->user_password.'<br>';
						echo $password.'<br>';
												
						Yii::app()->user->setFlash('PasswordSuccessChanged', Yii::t('site','NewApplicantSuccess'));
						$this->refresh();
						
					}
					 else
						throw new CException('Error #000001');
				}
				else
					Yii::app()->user->setFlash('PasswordFailureChanged', Yii::t('site','EmailAlreadyExists'));
			}
		
		$this->layout = 'login';
		$this->renderPartial('newapplicant',array('model'=>$modelform));
	}

	// hel view
	public function actionHelp()
	{
		$this->layout = "login";
		$this->render('pages/help');
	}
	
	// privacy view
	public function actionPrivacy()
	{
		$this->layout = "simple";
		$this->render('pages/privacy');
	}
}