<?php

/**
 * This is the model class for table "r_gol_darah".
 *
 * The followings are the available columns in table 'r_gol_darah':
 * @property string $KD_GOL_DARAH
 * @property string $NM_GOL_DARAH
 * @property string $SLTP
 * @property string $PMU
 * @property string $PMK
 *
 * The followings are the available model relations:
 * @property TCalonSiswa[] $tCalonSiswas
 * @property TPegawai[] $tPegawais
 * @property TPegawaiKeluarga[] $tPegawaiKeluargas
 * @property TSiswa[] $tSiswas
 */
class RGolDarah extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'r_gol_darah';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('KD_GOL_DARAH, SLTP, PMU, PMK', 'length', 'max'=>1),
			array('NM_GOL_DARAH', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('KD_GOL_DARAH, NM_GOL_DARAH, SLTP, PMU, PMK', 'safe', 'on'=>'search'),
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
			'tCalonSiswas' => array(self::HAS_MANY, 'TCalonSiswa', 'KD_GOL_DARAH'),
			'tPegawais' => array(self::HAS_MANY, 'TPegawai', 'KD_GOL_DARAH'),
			'tPegawaiKeluargas' => array(self::HAS_MANY, 'TPegawaiKeluarga', 'KD_GOL_DARAH'),
			'tSiswas' => array(self::HAS_MANY, 'TSiswa', 'KD_GOL_DARAH'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'KD_GOL_DARAH' => 'Kd Gol Darah',
			'NM_GOL_DARAH' => 'Nm Gol Darah',
			'SLTP' => 'Sltp',
			'PMU' => 'Pmu',
			'PMK' => 'Pmk',
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

		$criteria->compare('KD_GOL_DARAH',$this->KD_GOL_DARAH,true);
		$criteria->compare('NM_GOL_DARAH',$this->NM_GOL_DARAH,true);
		$criteria->compare('SLTP',$this->SLTP,true);
		$criteria->compare('PMU',$this->PMU,true);
		$criteria->compare('PMK',$this->PMK,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return RGolDarah the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
