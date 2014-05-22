<?php

/**
 * This is the model class for table "r_mata_pelajaran_diajarkan".
 *
 * The followings are the available columns in table 'r_mata_pelajaran_diajarkan':
 * @property string $KD_MATA_PELAJARAN_DIAJARKAN
 * @property string $NM_MATA_PELAJARAN_DIAJARKAN
 * @property string $KD_KEL_MATA_PELAJARAN
 * @property integer $ORDER_LIST
 * @property integer $ORDER_RAPOR
 * @property integer $ORDER_STTB
 * @property integer $ORDER_NEM
 * @property integer $ORDER_LNS
 * @property string $SLTP
 * @property string $PMU
 * @property string $PMK
 * @property string $KD_PENDATAAN
 * @property string $USERNAME
 * @property string $TANGGAL_AKSES
 *
 * The followings are the available model relations:
 * @property RKelMataPelajaran $kDKELMATAPELAJARAN
 * @property Auth $uSERNAME
 * @property RProgramPengajaran[] $rProgramPengajarans
 * @property TPegawaiMengajar[] $tPegawaiMengajars
 * @property TPegawaiPenataran[] $tPegawaiPenatarans
 * @property TPegawaiPengabdian[] $tPegawaiPengabdians
 * @property TPegawaiPengabdian[] $tPegawaiPengabdians1
 * @property TPegawaiRwytAjar[] $tPegawaiRwytAjars
 * @property TSekolahAlatPendidikan[] $tSekolahAlatPendidikans
 * @property TSekolahBuku[] $tSekolahBukus
 * @property TSekolahJadwalPelajaran[] $tSekolahJadwalPelajarans
 */
class RMataPelajaranDiajarkan extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'r_mata_pelajaran_diajarkan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ORDER_LIST, ORDER_RAPOR, ORDER_STTB, ORDER_NEM, ORDER_LNS', 'numerical', 'integerOnly'=>true),
			array('KD_MATA_PELAJARAN_DIAJARKAN, SLTP, PMU, PMK', 'length', 'max'=>5),
			array('NM_MATA_PELAJARAN_DIAJARKAN', 'length', 'max'=>50),
			array('KD_KEL_MATA_PELAJARAN', 'length', 'max'=>2),
			array('KD_PENDATAAN', 'length', 'max'=>3),
			array('USERNAME', 'length', 'max'=>20),
			array('TANGGAL_AKSES', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('KD_MATA_PELAJARAN_DIAJARKAN, NM_MATA_PELAJARAN_DIAJARKAN, KD_KEL_MATA_PELAJARAN, ORDER_LIST, ORDER_RAPOR, ORDER_STTB, ORDER_NEM, ORDER_LNS, SLTP, PMU, PMK, KD_PENDATAAN, USERNAME, TANGGAL_AKSES', 'safe', 'on'=>'search'),
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
			'kDKELMATAPELAJARAN' => array(self::BELONGS_TO, 'RKelMataPelajaran', 'KD_KEL_MATA_PELAJARAN'),
			'uSERNAME' => array(self::BELONGS_TO, 'Auth', 'USERNAME'),
			'rProgramPengajarans' => array(self::MANY_MANY, 'RProgramPengajaran', 'r_program_matpel(KD_MATA_PELAJARAN_DIAJARKAN, KD_PROGRAM_PENGAJARAN)'),
			'tPegawaiMengajars' => array(self::HAS_MANY, 'TPegawaiMengajar', 'KD_MATA_PELAJARAN_DIAJARKAN'),
			'tPegawaiPenatarans' => array(self::HAS_MANY, 'TPegawaiPenataran', 'KD_MATA_PELAJARAN_DIAJARKAN'),
			'tPegawaiPengabdians' => array(self::HAS_MANY, 'TPegawaiPengabdian', 'KD_MATA_PELAJARAN_DIAJARKAN_1'),
			'tPegawaiPengabdians1' => array(self::HAS_MANY, 'TPegawaiPengabdian', 'KD_MATA_PELAJARAN_DIAJARKAN_2'),
			'tPegawaiRwytAjars' => array(self::HAS_MANY, 'TPegawaiRwytAjar', 'KD_MATA_PELAJARAN_DIAJARKAN'),
			'tSekolahAlatPendidikans' => array(self::HAS_MANY, 'TSekolahAlatPendidikan', 'KD_MATA_PELAJARAN_DIAJARKAN'),
			'tSekolahBukus' => array(self::HAS_MANY, 'TSekolahBuku', 'KD_MATA_PELAJARAN_DIAJARKAN'),
			'tSekolahJadwalPelajarans' => array(self::HAS_MANY, 'TSekolahJadwalPelajaran', 'KD_MATA_PELAJARAN_DIAJARKAN'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'KD_MATA_PELAJARAN_DIAJARKAN' => 'Kd Mata Pelajaran Diajarkan',
			'NM_MATA_PELAJARAN_DIAJARKAN' => 'Nm Mata Pelajaran Diajarkan',
			'KD_KEL_MATA_PELAJARAN' => 'Kd Kel Mata Pelajaran',
			'ORDER_LIST' => 'Order List',
			'ORDER_RAPOR' => 'Order Rapor',
			'ORDER_STTB' => 'Order Sttb',
			'ORDER_NEM' => 'Order Nem',
			'ORDER_LNS' => 'Order Lns',
			'SLTP' => 'Sltp',
			'PMU' => 'Pmu',
			'PMK' => 'Pmk',
			'KD_PENDATAAN' => 'Kd Pendataan',
			'USERNAME' => 'Username',
			'TANGGAL_AKSES' => 'Tanggal Akses',
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

		$criteria->compare('KD_MATA_PELAJARAN_DIAJARKAN',$this->KD_MATA_PELAJARAN_DIAJARKAN,true);
		$criteria->compare('NM_MATA_PELAJARAN_DIAJARKAN',$this->NM_MATA_PELAJARAN_DIAJARKAN,true);
		$criteria->compare('KD_KEL_MATA_PELAJARAN',$this->KD_KEL_MATA_PELAJARAN,true);
		$criteria->compare('ORDER_LIST',$this->ORDER_LIST);
		$criteria->compare('ORDER_RAPOR',$this->ORDER_RAPOR);
		$criteria->compare('ORDER_STTB',$this->ORDER_STTB);
		$criteria->compare('ORDER_NEM',$this->ORDER_NEM);
		$criteria->compare('ORDER_LNS',$this->ORDER_LNS);
		$criteria->compare('SLTP',$this->SLTP,true);
		$criteria->compare('PMU',$this->PMU,true);
		$criteria->compare('PMK',$this->PMK,true);
		$criteria->compare('KD_PENDATAAN',$this->KD_PENDATAAN,true);
		$criteria->compare('USERNAME',$this->USERNAME,true);
		$criteria->compare('TANGGAL_AKSES',$this->TANGGAL_AKSES,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return RMataPelajaranDiajarkan the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
