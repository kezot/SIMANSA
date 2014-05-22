<?php

/**
 * This is the model class for table "r_kepribadian".
 *
 * The followings are the available columns in table 'r_kepribadian':
 * @property string $KD_KEPRIBADIAN
 * @property string $NM_KEPRIBADIAN
 * @property string $STATUS_RAPOR
 *
 * The followings are the available model relations:
 * @property TNilaiLembarPengamatan[] $tNilaiLembarPengamatans
 * @property TNilaiRaporKepribadian[] $tNilaiRaporKepribadians
 */
class RKepribadian extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'r_kepribadian';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('KD_KEPRIBADIAN, STATUS_RAPOR', 'length', 'max'=>1),
			array('NM_KEPRIBADIAN', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('KD_KEPRIBADIAN, NM_KEPRIBADIAN, STATUS_RAPOR', 'safe', 'on'=>'search'),
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
			'tNilaiLembarPengamatans' => array(self::HAS_MANY, 'TNilaiLembarPengamatan', 'KD_KEPRIBADIAN'),
			'tNilaiRaporKepribadians' => array(self::HAS_MANY, 'TNilaiRaporKepribadian', 'KD_KEPRIBADIAN'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'KD_KEPRIBADIAN' => 'Kd Kepribadian',
			'NM_KEPRIBADIAN' => 'Nm Kepribadian',
			'STATUS_RAPOR' => 'Status Rapor',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('KD_KEPRIBADIAN',$this->KD_KEPRIBADIAN,true);
		$criteria->compare('NM_KEPRIBADIAN',$this->NM_KEPRIBADIAN,true);
		$criteria->compare('STATUS_RAPOR',$this->STATUS_RAPOR,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return RKepribadian the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
