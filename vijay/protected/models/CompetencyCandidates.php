<?php

/**
 * This is the model class for table "tb_competency_candidates".
 *
 * The followings are the available columns in table 'tb_competency':
 * @property integer $competency_candidates_id
 * @property string $user_id
 * @property string $competency_id
 * @property integer $competency_grade
 * @property string $years_of_experience
 *
 * The followings are the available model relations:
 */
class CompetencyCandidates extends CActiveRecord
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
		return 'tb_competency_candidates';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('competency_grade, years_of_experience', 'required', 'message'=>Yii::t('inputValidations','RequireValidation')),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('competency_candidates_id', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
				'competency_candidates'=>array(self::HAS_ONE, 'Competency', 'competency_id')
				
				
		);
	}
	public function attributeLabels()
	{
		return array(
			'competency_candidates_id' => "ID Competency of Candidate",
			'user_id' => 'User ID',
			'competency_grade' => 'Competency Grade',
			'years_of_experience' => 'Competency Years of Experience',
				
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

		$criteria->compare('competency_candidates_id',$this->competency_candidates_id);
		$criteria->compare('competency_grade',$this->competency_grade,true);
		$criteria->compare('years_of_experience',$this->years_of_experience,true);
		
		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
	public function searchcomp()
	{
		$criteria = new CDbCriteria;
		$criteria->select = 'firstfield';
		$criteria->with = array('secondTable_relation'=>array('select'=>'secondfield'));
		$dataProvider = new CActiveDataProvider('firstTable', 
                    array('criteria' => $criteria,
                    'pagination' => array(
                        'pageSize' => 10,
                    ),
                ));
		$results=$dataProvider->getData();
	}
	public function searchcomp2()
	{	
		$criteria=new CDbCriteria;
		$criteria->compare(array(
				'with'=>array('Competencycandidates'=>array('joinType'=>'INNER JOIN')),
				'order'=>'competency_id DESC',
		));
		 return new CActiveDataProvider('Competency',array(
            'criteria'=>$criteria,
            
        ));
		
	}
}