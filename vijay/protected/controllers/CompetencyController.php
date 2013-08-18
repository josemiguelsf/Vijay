<?php
/**
 * CompetencyController class file
 * 
 * 
 * Controller handler for Clients 
 * @property string $layout
 * @property CActiveRecord $_model
 *
 **/
class CompetencyController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','treeview', simpletree),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('*'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Competency;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Competency']))
		{
			$model->attributes=$_POST['Competency'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->competency_id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Competency']))
		{
			$model->attributes=$_POST['Competency'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->competency_id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataTree=array(
				array(
						'text'=>'FamilyRoot', //must using 'text' key to show the text
						'children'=>array(//using 'children' key to indicate there are children
								array(
										'text'=>'Father',
										'children'=>array(
												array('text'=>'me'),
												array('text'=>'big sis'),
												array('text'=>'little brother'),
										)
								),
								array(
										'text'=>'Uncle',
										'children'=>array(
												array('text'=>'Ben'),
												array('text'=>'Sally'),
										)
								),
								array(
										'text'=>'Aunt',
								)
						)
				)
		);
		$dataProvider=new CActiveDataProvider('Competency');
		$this->render('index',array(
				'dataProvider'=>$dataProvider, 'dataTree'=>$dataTree)
		);
		
		
		
		
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Competency('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Competency']))
			$model->attributes=$_GET['Competency'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Competency::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='competency-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
	public function actionTreeView() {
		$dataTree=array(
		      array(
					'text'=>'Grampa', //must using 'text' key to show the text
					'children'=>array(//using 'children' key to indicate there are children
					      array(
							'text'=>'Father',
							'children'=>array(
								array('text'=>'me'),
								array('text'=>'big sis'),
								array('text'=>'little brother'),
							)
						),
						 array(
						      'text'=>'Uncle',
							  'children'=>array(
							        array('text'=>'Ben'),
							        array('text'=>'Sally'),
							   )
						),
						array(
						    'text'=>'Aunt',
						)
					)
				)
		);
		$this->render('index', array('dataTree'=>$dataTree));
	}
}
