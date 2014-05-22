<?php

/**
 * This is the model class for table "t_nilai_rapor_nilai".
 *
 * The followings are the available columns in table 't_nilai_rapor_nilai':
 * @property string $NIS
 * @property string $KD_TAHUN_AJARAN
 * @property string $KD_TINGKAT_KELAS
 * @property string $KD_PROGRAM_PENGAJARAN
 * @property string $KD_ROMBEL
 * @property string $KD_KURIKULUM
 * @property string $KD_PERIODE_BELAJAR
 * @property string $KD_MATA_PELAJARAN_DIAJARKAN
 * @property string $SKBM
 * @property string $NILAI_KOGNITIF
 * @property string $NILAI_PSIKOMOTOR
 * @property integer $ID_NILAI_AFEKTIF
 * @property string $KETERANGAN
 * @property string $USERNAME
 * @property string $TANGGAL_AKSES
 *
 * The followings are the available model relations:
 * @property TNilaiRapor $nIS
 * @property TNilaiRapor $kDTAHUNAJARAN
 * @property TKurKurikulum $kDTINGKATKELAS
 * @property TKurKurikulum $kDPROGRAMPENGAJARAN
 * @property TNilaiRapor $kDROMBEL
 * @property TKurKurikulum $kDPERIODEBELAJAR
 * @property TKurKurikulum $kDKURIKULUM
 * @property TKurKurikulum $kDMATAPELAJARANDIAJARKAN
 * @property RNilaiAfektif $iDNILAIAFEKTIF
 * @property Auth $uSERNAME
 */
class TNilaiRaporNilai extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 't_nilai_rapor_nilai';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ID_NILAI_AFEKTIF', 'numerical', 'integerOnly'=>true),
			array('NIS', 'length', 'max'=>12),
			array('KD_TAHUN_AJARAN, KD_TINGKAT_KELAS, KD_KURIKULUM', 'length', 'max'=>2),
			array('KD_PROGRAM_PENGAJARAN, KD_PERIODE_BELAJAR', 'length', 'max'=>1),
			array('KD_ROMBEL', 'length', 'max'=>15),
			array('KD_MATA_PELAJARAN_DIAJARKAN, SKBM, NILAI_KOGNITIF, NILAI_PSIKOMOTOR', 'length', 'max'=>5),
			array('KETERANGAN', 'length', 'max'=>255),
			array('USERNAME', 'length', 'max'=>20),
			array('TANGGAL_AKSES', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('NIS, KD_TAHUN_AJARAN, KD_TINGKAT_KELAS, KD_PROGRAM_PENGAJARAN, KD_ROMBEL, KD_KURIKULUM, KD_PERIODE_BELAJAR, KD_MATA_PELAJARAN_DIAJARKAN, SKBM, NILAI_KOGNITIF, NILAI_PSIKOMOTOR, ID_NILAI_AFEKTIF, KETERANGAN, USERNAME, TANGGAL_AKSES', 'safe', 'on'=>'search'),
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
			'nIS' => array(self::BELONGS_TO, 'TNilaiRapor', 'NIS'),
			'kDTAHUNAJARAN' => array(self::BELONGS_TO, 'TNilaiRapor', 'KD_TAHUN_AJARAN'),
			'kDTINGKATKELAS' => array(self::BELONGS_TO, 'TKurKurikulum', 'KD_TINGKAT_KELAS'),
			'kDPROGRAMPENGAJARAN' => array(self::BELONGS_TO, 'TKurKurikulum', 'KD_PROGRAM_PENGAJARAN'),
			'kDROMBEL' => array(self::BELONGS_TO, 'TNilaiRapor', 'KD_ROMBEL'),
			'kDPERIODEBELAJAR' => array(self::BELONGS_TO, 'TKurKurikulum', 'KD_PERIODE_BELAJAR'),
			'kDKURIKULUM' => array(self::BELONGS_TO, 'TKurKurikulum', 'KD_KURIKULUM'),
			'kDMATAPELAJARANDIAJARKAN' => array(self::BELONGS_TO, 'RMataPelajaranDiajarkan', 'KD_MATA_PELAJARAN_DIAJARKAN'),
			'iDNILAIAFEKTIF' => array(self::BELONGS_TO, 'RNilaiAfektif', 'ID_NILAI_AFEKTIF'),
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
			'KD_KURIKULUM' => 'Kd Kurikulum',
			'KD_PERIODE_BELAJAR' => 'Kd Periode Belajar',
			'KD_MATA_PELAJARAN_DIAJARKAN' => 'Kd Mata Pelajaran Diajarkan',
			'SKBM' => 'Skbm',
			'NILAI_KOGNITIF' => 'Nilai Kognitif',
			'NILAI_PSIKOMOTOR' => 'Nilai Psikomotor',
			'ID_NILAI_AFEKTIF' => 'Id Nilai Afektif',
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
		$criteria->compare('KD_KURIKULUM',$this->KD_KURIKULUM,true);
		$criteria->compare('KD_PERIODE_BELAJAR',$this->KD_PERIODE_BELAJAR,true);
		$criteria->compare('KD_MATA_PELAJARAN_DIAJARKAN',$this->KD_MATA_PELAJARAN_DIAJARKAN,true);
		$criteria->compare('SKBM',$this->SKBM,true);
		$criteria->compare('NILAI_KOGNITIF',$this->NILAI_KOGNITIF,true);
		$criteria->compare('NILAI_PSIKOMOTOR',$this->NILAI_PSIKOMOTOR,true);
		$criteria->compare('ID_NILAI_AFEKTIF',$this->ID_NILAI_AFEKTIF);
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
	 * @return TNilaiRaporNilai the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
