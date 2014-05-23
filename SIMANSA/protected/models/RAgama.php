<?php

/**
 * This is the model class for table "r_agama".
 *
 * The followings are the available columns in table 'r_agama':
 * @property string $KD_AGAMA
 * @property string $NM_AGAMA
 * @property string $KD_PENDATAAN
 *
 * The followings are the available model relations:
 * @property TCalonSiswa[] $tCalonSiswas
 * @property TPegawai[] $tPegawais
 * @property TPegawaiKeluarga[] $tPegawaiKeluargas
 * @property TSiswa[] $tSiswas
 */
class RAgama extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'r_agama';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('KD_AGAMA', 'length', 'max'=>1),
			array('NM_AGAMA', 'length', 'max'=>50),
			array('KD_PENDATAAN', 'length', 'max'=>2),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('KD_AGAMA, NM_AGAMA, KD_PENDATAAN', 'safe', 'on'=>'search'),
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
			'tCalonSiswas' => array(self::HAS_MANY, 'TCalonSiswa', 'KD_AGAMA'),
			'tPegawais' => array(self::HAS_MANY, 'TPegawai', 'KD_AGAMA'),
			'tPegawaiKeluargas' => array(self::HAS_MANY, 'TPegawaiKeluarga', 'KD_AGAMA'),
			'tSiswas' => array(self::HAS_MANY, 'TSiswa', 'KD_AGAMA'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'KD_AGAMA' => 'Kd Agama',
			'NM_AGAMA' => 'Nm Agama',
			'KD_PENDATAAN' => 'Kd Pendataan',
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

		$criteria->compare('KD_AGAMA',$this->KD_AGAMA,true);
		$criteria->compare('NM_AGAMA',$this->NM_AGAMA,true);
		$criteria->compare('KD_PENDATAAN',$this->KD_PENDATAAN,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return RAgama the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
