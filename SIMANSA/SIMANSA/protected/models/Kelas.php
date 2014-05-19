<?php

/**
 * This is the model class for table "x_kelas".
 *
 * The followings are the available columns in table 'x_kelas':
 * @property integer $KD_KELAS
 * @property string $KD_TINGKAT_KELAS
 * @property string $KD_PROGRAM_PENGAJARAN
 * @property string $KD_ROMBEL
 * @property string $NAMA_KELAS
 * @property string $NIP
 */
class Kelas extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'x_kelas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('KD_TINGKAT_KELAS', 'length', 'max'=>2),
			array('KD_PROGRAM_PENGAJARAN', 'length', 'max'=>1),
			array('KD_ROMBEL', 'length', 'max'=>15),
			array('NAMA_KELAS', 'length', 'max'=>50),
			array('NIP', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('KD_KELAS, KD_TINGKAT_KELAS, KD_PROGRAM_PENGAJARAN, KD_ROMBEL, NAMA_KELAS, NIP', 'safe', 'on'=>'search'),
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
			'KD_KELAS' => 'Kd Kelas',
			'KD_TINGKAT_KELAS' => 'Kd Tingkat Kelas',
			'KD_PROGRAM_PENGAJARAN' => 'Kd Program Pengajaran',
			'KD_ROMBEL' => 'Kd Rombel',
			'NAMA_KELAS' => 'Nama Kelas',
			'NIP' => 'Nip',
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

		$criteria->compare('KD_KELAS',$this->KD_KELAS);
		$criteria->compare('KD_TINGKAT_KELAS',$this->KD_TINGKAT_KELAS,true);
		$criteria->compare('KD_PROGRAM_PENGAJARAN',$this->KD_PROGRAM_PENGAJARAN,true);
		$criteria->compare('KD_ROMBEL',$this->KD_ROMBEL,true);
		$criteria->compare('NAMA_KELAS',$this->NAMA_KELAS,true);
		$criteria->compare('NIP',$this->NIP,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Kelas the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
