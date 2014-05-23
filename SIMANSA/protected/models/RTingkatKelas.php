<?php

/**
 * This is the model class for table "r_tingkat_kelas".
 *
 * The followings are the available columns in table 'r_tingkat_kelas':
 * @property string $KD_TINGKAT_KELAS
 * @property string $NM_TINGKAT_KELAS
 *
 * The followings are the available model relations:
 * @property TKurKurikulum[] $tKurKurikulums
 * @property TSekolahJurusan[] $tSekolahJurusans
 * @property TSiswa[] $tSiswas
 */
class RTingkatKelas extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'r_tingkat_kelas';
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
			array('NM_TINGKAT_KELAS', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('KD_TINGKAT_KELAS, NM_TINGKAT_KELAS', 'safe', 'on'=>'search'),
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
			'tKurKurikulums' => array(self::HAS_MANY, 'TKurKurikulum', 'KD_TINGKAT_KELAS'),
			'tSekolahJurusans' => array(self::HAS_MANY, 'TSekolahJurusan', 'KD_TINGKAT_KELAS'),
			'tSiswas' => array(self::HAS_MANY, 'TSiswa', 'KD_TINGKAT_KELAS'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'KD_TINGKAT_KELAS' => 'Kd Tingkat Kelas',
			'NM_TINGKAT_KELAS' => 'Nm Tingkat Kelas',
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

		$criteria->compare('KD_TINGKAT_KELAS',$this->KD_TINGKAT_KELAS,true);
		$criteria->compare('NM_TINGKAT_KELAS',$this->NM_TINGKAT_KELAS,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return RTingkatKelas the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
