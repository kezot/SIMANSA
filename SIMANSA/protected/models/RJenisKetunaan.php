<?php

/**
 * This is the model class for table "r_jenis_ketunaan".
 *
 * The followings are the available columns in table 'r_jenis_ketunaan':
 * @property string $KD_JENIS_KETUNAAN
 * @property string $NM_JENIS_KETUNAAN
 * @property string $KD_PENDATAAN
 *
 * The followings are the available model relations:
 * @property TSekolahIdentitas[] $tSekolahIdentitases
 * @property TSiswa[] $tSiswas
 */
class RJenisKetunaan extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'r_jenis_ketunaan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('KD_JENIS_KETUNAAN, KD_PENDATAAN', 'length', 'max'=>2),
			array('NM_JENIS_KETUNAAN', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('KD_JENIS_KETUNAAN, NM_JENIS_KETUNAAN, KD_PENDATAAN', 'safe', 'on'=>'search'),
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
			'tSekolahIdentitases' => array(self::MANY_MANY, 'TSekolahIdentitas', 't_sekolah_tuna(KD_JENIS_KETUNAAN, KD_TAHUN_AJARAN)'),
			'tSiswas' => array(self::HAS_MANY, 'TSiswa', 'KD_JENIS_KETUNAAN'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'KD_JENIS_KETUNAAN' => 'Kd Jenis Ketunaan',
			'NM_JENIS_KETUNAAN' => 'Nm Jenis Ketunaan',
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

		$criteria->compare('KD_JENIS_KETUNAAN',$this->KD_JENIS_KETUNAAN,true);
		$criteria->compare('NM_JENIS_KETUNAAN',$this->NM_JENIS_KETUNAAN,true);
		$criteria->compare('KD_PENDATAAN',$this->KD_PENDATAAN,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return RJenisKetunaan the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
