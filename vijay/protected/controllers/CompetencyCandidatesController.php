<?php
Yii::import('ext.cascadedropdown.ECascadeDropDown');
/**
 * CompetencyCandidateController class file
 * 
 * 
 * Controller handler for Clients 
 * @property string $layout
 * @property CActiveRecord $_model
 *
 **/
class CompetencyCandidatesController extends Controller
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
				'actions'=>array('index','view','dynamictechnics','loadcities','compdata'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update', 'edit','list','loadcities', 'dynamictechnics','compdata'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete','loadcities','dynamictechnics','compdata'),
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
	public function actionList()
	{
	
		$modelcan=new CompetencyCandidates;
		$modelcomp=new Competency;
		$this->render('list',array(
				'modelcan'=>$modelcan,'modelcomp'=>$modelcomp,
		));
	}
	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$modelcan=new CompetencyCandidates;
		$modelcomp=new Competency;
		// Uncomment the following line if AJAX validation is needed
			 $this->performAjaxValidation($model);

		if(isset($_POST['CompetencyCandidates'])& isset($_POST['Competency']))
		//if(isset($_POST['CompetencyCandidates']))
		{
			$modelcan->attributes=$_POST['CompetencyCandidates'];
			//$modelcomp->attributes=$_POST['Competency'];
			//if($modelcan->save() & $modelcomp->save())
				if($modelcan->save())
				$this->redirect(array('list','id'=>$modelcan->competency_candidates_id));
		}
		//echo "before modelcantotal";
//$modelcantotal=CompetencyCandidates::model()->findAll();
//$modelcomptotal=$modelcomp->findAll();
//echo "after modelcantotal";
//print_r($modelcantotal);
//die();
		$this->render('create',array(
			'modelcan'=>$modelcan,'modelcomp'=>$modelcomp,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id,$compgrade)
	{
		var_dump( $id);
		var_dump($compgrade);
		if ($compgrade=="") { $this->redirect(array('create'));}
		else {
		
		//echo "first".$id."second".$id2;
		//die();
		//if ($id<>NULL){	
		$model=$this->loadModel($id);
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['CompetencyCandidates']))
		{
			$model->attributes=$_POST['CompetencyCandidates'];
			if($model->save())
				$this->redirect(array('create','id'=>$model->competency_candidates_id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
		}
		}
		//else{ create();}	
	//}
		public function actionEdit($id,$compgrade)
		{
			var_dump( $id);
			var_dump($compgrade);
			if ($compgrade=="") echo "redirect(create)";
		
			die();
			//echo "first".$id."second".$id2;
			//die();
			//if ($id<>NULL){
			$model=$this->loadModel($id);
			var_dump($model->competency_grade);
			die();
		
			// Uncomment the following line if AJAX validation is needed
			// $this->performAjaxValidation($model);
		
			if(isset($_POST['CompetencyCandidates']))
			{
				$model->attributes=$_POST['CompetencyCandidates'];
				if($model->save())
					$this->redirect(array('create','id'=>$model->competency_candidates_id));
			}
		
			$this->render('update',array(
					'model'=>$model,
			));
		
		}
		//else{ create();}
		//}
		
		

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
		$dataProvider=new CActiveDataProvider('CompetencyCandidates');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new CompetencyCandidates('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['CompetencyCandidates']))
			$model->attributes=$_GET['CompetencyCandidates'];

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
		$model=CompetencyCandidates::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='competencycandidates-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
	/*public function actionDynamictechnics()
	{
		if(Yii::app()->request->isAjaxRequest)
		{
			//echo $_POST['competency']['competency_area'];
			//.$_POST[":parent_id"].$_POST["competency_area"].$areas.$list.$_POST['CompetencyArea'];
			//echo $_POST['competency_id'].'data'.$_POST["area"].$_POST["competency_area"].$areas.$list.$_POST['CompetencyArea'];
				
		//echo $modelcomp->attributes->competency_area;
		//echo $_POST['Competency']['competency_area'];
		
		$data=Competency::model()->findAll('competency_id=:competency_id', 
                  array(':competency_id'=>(int) $_POST['competency_id']));
// "condition"=>'competency_area'==$_POST['Competency']['competency_area']));
		//'competency_id=:competency_id',
				//array(':competency_id'=>(int) $_POST['competency_area']));
		
		//var_dump($POST['competency_area']);
		//die();
	
		$data=CHtml::listData($data,'competency_id','competency_technic');
		foreach($data as $value=>$competency_technic)
		{
			echo CHtml::tag('option',
					array('value'=>$value),CHtml::encode($competency_technic),true);
		} 
	}
	}
	
		*/	
	
	public function actionDisCoor() {
		$model = School::model()->findByPk($_POST['Students']['student_id']);
		$data=CHtml::listData($data,'id','name');
		foreach($data as $value=>$name)
		{
			echo CHtml::tag('option',array('value'=>$value),CHtml::encode($name),true);
		}
	}
	
	
	
	public function actionLoadcities()
	{
		
		//echo "this is load cities";
		
		$data=Competency::model()->findAll('competency_id=:competency_id',
				array(':competency_id'=>(int) $_POST['region_id']));
	
		$data=CHtml::listData($data,'competency_id','competency_area');
	
		echo "<option value=''>Select City</option>";
		foreach($data as $value=>$competency_area)
		{
			echo CHtml::tag('option', array('value'=>$value),CHtml::encode($competency_area),true);
		}
	}
	public function actionDynamictechnics()
	{
		//if(Yii::app()->request->isAjaxRequest)
	//	{
			$data=Competency::model()->findAll('competency_area=:competency_area',
					array(':competency_area'=>(int) $_POST['region_id']));
			
			$data=CHtml::listData($data,'competency_id','competency_area');
			foreach($data as $value=>$competency_area)
			{
				echo CHtml::tag('option',array('value'=>$value),CHtml::encode($competency_area),true);
			}
		//}
	}
	public function actionDynamiccities()
	{
		$data=Location::model()->findAll('parent_id=:parent_id',
				array(':parent_id'=>(int) $_POST['country_id']));
	
		$data=CHtml::listData($data,'id','name');
		foreach($data as $value=>$name)
		{
			echo CHtml::tag('option',
					array('value'=>$value),CHtml::encode($name),true);
		}
	}
	public function actionCompdata()
	{
	
		
		//check if isAjaxRequest and the needed GET params are set
		ECascadeDropDown::checkValidRequest();
	
		//load the cities for the current province id (=ECascadeDropDown::submittedKeyValue())
		$data = Competency::model()->findAll('competency_area=:competency_area', array(':competency_area'=>ECascadeDropDown::submittedKeyValue()));
	
		//Convert the data by using
		//CHtml::listData, prepare the JSON-Response and Yii::app()->end
		ECascadeDropDown::renderListData($data,'competency_id', 'competency_technic');
	}
}
