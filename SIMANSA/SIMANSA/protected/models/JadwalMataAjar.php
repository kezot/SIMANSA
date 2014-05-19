<?php

/**
 * This is the model class for table "x_jadwal_mata_ajar".
 *
 * The followings are the available columns in table 'x_jadwal_mata_ajar':
 * @property string $NAMA_KELAS
 * @property integer $HARI
 * @property integer $JAM
 * @property string $MATA_PELAJARAN
 */
class JadwalMataAjar extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'x_jadwal_mata_ajar';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('HARI, JAM', 'numerical', 'integerOnly'=>true),
			array('NAMA_KELAS', 'length', 'max'=>10),
			array('MATA_PELAJARAN', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('NAMA_KELAS, HARI, JAM, MATA_PELAJARAN', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'NAMA_KELAS' => 'Nama Kelas',
			'HARI' => 'Hari',
			'JAM' => 'Jam',
			'MATA_PELAJARAN' => 'Mata Pelajaran',
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

		$criteria->compare('NAMA_KELAS',$this->NAMA_KELAS,true);
		$criteria->compare('HARI',$this->HARI);
		$criteria->compare('JAM',$this->JAM);
		$criteria->compare('MATA_PELAJARAN',$this->MATA_PELAJARAN,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return JadwalMataAjar the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
