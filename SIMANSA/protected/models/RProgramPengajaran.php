<?php

/**
 * This is the model class for table "r_program_pengajaran".
 *
 * The followings are the available columns in table 'r_program_pengajaran':
 * @property string $KD_PROGRAM_PENGAJARAN
 * @property string $NM_PROGRAM_PENGAJARAN
 * @property string $SLTP
 * @property string $PMU
 * @property string $PMK
 *
 * The followings are the available model relations:
 * @property RMataPelajaranDiajarkan[] $rMataPelajaranDiajarkans
 * @property TSekolahJurusan[] $tSekolahJurusans
 * @property TSiswa[] $tSiswas
 */
class RProgramPengajaran extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'r_program_pengajaran';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('KD_PROGRAM_PENGAJARAN, SLTP, PMU, PMK', 'length', 'max'=>1),
			array('NM_PROGRAM_PENGAJARAN', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('KD_PROGRAM_PENGAJARAN, NM_PROGRAM_PENGAJARAN, SLTP, PMU, PMK', 'safe', 'on'=>'search'),
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
			'rMataPelajaranDiajarkans' => array(self::MANY_MANY, 'RMataPelajaranDiajarkan', 'r_program_matpel(KD_PROGRAM_PENGAJARAN, KD_MATA_PELAJARAN_DIAJARKAN)'),
			'tSekolahJurusans' => array(self::HAS_MANY, 'TSekolahJurusan', 'KD_PROGRAM_PENGAJARAN'),
			'tSiswas' => array(self::HAS_MANY, 'TSiswa', 'KD_PROGRAM_PENGAJARAN'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'KD_PROGRAM_PENGAJARAN' => 'Kd Program Pengajaran',
			'NM_PROGRAM_PENGAJARAN' => 'Nm Program Pengajaran',
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

		$criteria->compare('KD_PROGRAM_PENGAJARAN',$this->KD_PROGRAM_PENGAJARAN,true);
		$criteria->compare('NM_PROGRAM_PENGAJARAN',$this->NM_PROGRAM_PENGAJARAN,true);
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
	 * @return RProgramPengajaran the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
