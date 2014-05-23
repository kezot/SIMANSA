<?php

/**
 * This is the model class for table "t_siswa_absensi".
 *
 * The followings are the available columns in table 't_siswa_absensi':
 * @property string $NIS
 * @property string $KD_TAHUN_AJARAN
 * @property string $KD_TINGKAT_KELAS
 * @property string $KD_PROGRAM_PENGAJARAN
 * @property string $KD_ROMBEL
 * @property string $TANGGAL
 * @property string $KD_PERIODE_BELAJAR
 * @property string $STATUS_ABSEN
 * @property string $KETERANGAN
 * @property string $USERNAME
 * @property string $TANGGAL_AKSES
 *
 * The followings are the available model relations:
 * @property TSiswaTingkat $nIS
 * @property TSiswaTingkat $kDTAHUNAJARAN
 * @property TSiswaTingkat $kDTINGKATKELAS
 * @property TSiswaTingkat $kDPROGRAMPENGAJARAN
 * @property TSiswaTingkat $kDROMBEL
 * @property RPeriodeBelajar $kDPERIODEBELAJAR
 * @property Auth $uSERNAME
 */
class SiswaAbsensi extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 't_siswa_absensi';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('NIS', 'length', 'max'=>12,),
                        array('NIS', 'required'),
			array('KD_TAHUN_AJARAN, KD_TINGKAT_KELAS', 'length', 'max'=>2),
			array('KD_PROGRAM_PENGAJARAN, KD_PERIODE_BELAJAR, STATUS_ABSEN', 'length', 'max'=>1),
			array('KD_ROMBEL', 'length', 'max'=>15),
                        array('NIS', 'required'),
			array('KETERANGAN', 'length', 'max'=>255),
			array('USERNAME', 'length', 'max'=>20),
			array('TANGGAL_AKSES', 'safe'),
                        array('TANGGAL', 'required'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('NIS, KD_TAHUN_AJARAN, KD_TINGKAT_KELAS, KD_PROGRAM_PENGAJARAN, KD_ROMBEL, TANGGAL, KD_PERIODE_BELAJAR, STATUS_ABSEN, KETERANGAN, USERNAME, TANGGAL_AKSES', 'safe', 'on'=>'search'),
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
			'nIS' => array(self::BELONGS_TO, 'TSiswaTingkat', 'NIS'),
			'kDTAHUNAJARAN' => array(self::BELONGS_TO, 'TSiswaTingkat', 'KD_TAHUN_AJARAN'),
			'kDTINGKATKELAS' => array(self::BELONGS_TO, 'TSiswaTingkat', 'KD_TINGKAT_KELAS'),
			'kDPROGRAMPENGAJARAN' => array(self::BELONGS_TO, 'TSiswaTingkat', 'KD_PROGRAM_PENGAJARAN'),
			'kDROMBEL' => array(self::BELONGS_TO, 'TSiswaTingkat', 'KD_ROMBEL'),
			'kDPERIODEBELAJAR' => array(self::BELONGS_TO, 'RPeriodeBelajar', 'KD_PERIODE_BELAJAR'),
			'uSERNAME' => array(self::BELONGS_TO, 'Auth', 'USERNAME'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'NIS' => 'Nis',
			'KD_TAHUN_AJARAN' => 'Kd Tahun Ajaran',
			'KD_TINGKAT_KELAS' => 'Kd Tingkat Kelas',
			'KD_PROGRAM_PENGAJARAN' => 'Kd Program Pengajaran',
			'KD_ROMBEL' => 'Kd Rombel',
			'TANGGAL' => 'Tanggal',
			'KD_PERIODE_BELAJAR' => 'Kd Periode Belajar',
			'STATUS_ABSEN' => 'Status Absen',
			'KETERANGAN' => 'Keterangan',
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

		$criteria->compare('NIS',$this->NIS,true);
		$criteria->compare('KD_TAHUN_AJARAN',$this->KD_TAHUN_AJARAN,true);
		$criteria->compare('KD_TINGKAT_KELAS',$this->KD_TINGKAT_KELAS,true);
		$criteria->compare('KD_PROGRAM_PENGAJARAN',$this->KD_PROGRAM_PENGAJARAN,true);
		$criteria->compare('KD_ROMBEL',$this->KD_ROMBEL,true);
		$criteria->compare('TANGGAL',$this->TANGGAL,true);
		$criteria->compare('KD_PERIODE_BELAJAR',$this->KD_PERIODE_BELAJAR,true);
		$criteria->compare('STATUS_ABSEN',$this->STATUS_ABSEN,true);
		$criteria->compare('KETERANGAN',$this->KETERANGAN,true);
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
	 * @return SiswaAbsensi the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
