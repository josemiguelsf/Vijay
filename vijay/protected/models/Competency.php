<?php

/**
 * This is the model class for table "tb_competency".
 *
 * The followings are the available columns in table 'tb_competency':
 * @property integer $competency_id
 * @property string $competency_area
 * @property string $competency_technic
 *
 * The followings are the available model relations:
 */
class Competency extends CActiveRecord
{
	
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tb_competency';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('competency_area, competency_technic', 'required', 'message'=>Yii::t('inputValidations','RequireValidation')),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('competency_id', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		return array('competency' => array(self::HAS_MANY, 'Competency_candidates', 'competency_candidates_id'), 
		'competency_parent' => array(self::BELONGS_TO, 'Competency', 'competency_id'),
		'competency_children' => array(self::HAS_MANY, 'Competency', 'competency_area', 'order' => 'competency_id ASC'),
		);
	}
	
	public function attributeLabels()
	{
		return array(
			'competency_id' => "Competency",
			'competency_area' => 'Competency Area',
			'competency_technic' => 'Competency Technic',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('competency_id',$this->competency_id);
		$criteria->compare('competency_area',$this->competency_area,true);
		$criteria->compare('competency_technic',$this->competency_technic,true);
		
		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
	
	
}