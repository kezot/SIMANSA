<?php

/**
 * This is the model class for table "t_siswa_tingkat".
 *
 * The followings are the available columns in table 't_siswa_tingkat':
 * @property string $NIS
 * @property string $KD_TAHUN_AJARAN
 * @property string $KD_TINGKAT_KELAS
 * @property string $KD_PROGRAM_PENGAJARAN
 * @property string $KD_ROMBEL
 * @property string $KD_STATUS_SISWA
 * @property string $KD_USIA_SISWA
 * @property string $KD_AGAMA
 * @property string $KD_JENIS_KELAMIN
 * @property string $KD_EBTA
 * @property string $KD_ASAL_SISWA
 * @property string $NO_UAN
 * @property string $KD_LULUS
 * @property string $NO_IJAZAH
 * @property string $KODE
 * @property string $USERNAME
 * @property string $TANGGAL_AKSES
 *
 * The followings are the available model relations:
 * @property TNilaiLembarPengamatan[] $tNilaiLembarPengamatans
 * @property TNilaiLembarPengamatan[] $tNilaiLembarPengamatans1
 * @property TNilaiLembarPengamatan[] $tNilaiLembarPengamatans2
 * @property TNilaiLembarPengamatan[] $tNilaiLembarPengamatans3
 * @property TNilaiLembarPengamatan[] $tNilaiLembarPengamatans4
 * @property TNilaiNem[] $tNilaiNems
 * @property TNilaiNem[] $tNilaiNems1
 * @property TNilaiNem[] $tNilaiNems2
 * @property TNilaiNilai[] $tNilaiNilais
 * @property TNilaiNilai[] $tNilaiNilais1
 * @property TNilaiNilai[] $tNilaiNilais2
 * @property TNilaiPortofolioIp[] $tNilaiPortofolioIps
 * @property TNilaiPortofolioIp[] $tNilaiPortofolioIps1
 * @property TNilaiPortofolioIp[] $tNilaiPortofolioIps2
 * @property TNilaiPortofolioKd[] $tNilaiPortofolioKds
 * @property TNilaiPortofolioKd[] $tNilaiPortofolioKds1
 * @property TNilaiPortofolioKd[] $tNilaiPortofolioKds2
 * @property TNilaiPortofolioMp[] $tNilaiPortofolioMps
 * @property TNilaiPortofolioMp[] $tNilaiPortofolioMps1
 * @property TNilaiPortofolioMp[] $tNilaiPortofolioMps2
 * @property TNilaiPortofolioSk[] $tNilaiPortofolioSks
 * @property TNilaiPortofolioSk[] $tNilaiPortofolioSks1
 * @property TNilaiPortofolioSk[] $tNilaiPortofolioSks2
 * @property TNilaiRapor[] $tNilaiRapors
 * @property TNilaiRapor[] $tNilaiRapors1
 * @property TNilaiRapor[] $tNilaiRapors2
 * @property TNilaiRapor[] $tNilaiRapors3
 * @property TNilaiRapor[] $tNilaiRapors4
 * @property TNilaiSttb[] $tNilaiSttbs
 * @property TNilaiSttb[] $tNilaiSttbs1
 * @property TNilaiSttb[] $tNilaiSttbs2
 * @property TNilaiUnjukKerjaIp[] $tNilaiUnjukKerjaIps
 * @property TNilaiUnjukKerjaIp[] $tNilaiUnjukKerjaIps1
 * @property TNilaiUnjukKerjaIp[] $tNilaiUnjukKerjaIps2
 * @property TNilaiUnjukKerjaKd[] $tNilaiUnjukKerjaKds
 * @property TNilaiUnjukKerjaKd[] $tNilaiUnjukKerjaKds1
 * @property TNilaiUnjukKerjaKd[] $tNilaiUnjukKerjaKds2
 * @property TNilaiUnjukKerjaMp[] $tNilaiUnjukKerjaMps
 * @property TNilaiUnjukKerjaMp[] $tNilaiUnjukKerjaMps1
 * @property TNilaiUnjukKerjaMp[] $tNilaiUnjukKerjaMps2
 * @property TNilaiUnjukKerjaSk[] $tNilaiUnjukKerjaSks
 * @property TNilaiUnjukKerjaSk[] $tNilaiUnjukKerjaSks1
 * @property TNilaiUnjukKerjaSk[] $tNilaiUnjukKerjaSks2
 * @property TSiswaAbsensi[] $tSiswaAbsensis
 * @property TSiswaAbsensi[] $tSiswaAbsensis1
 * @property TSiswaAbsensi[] $tSiswaAbsensis2
 * @property TSiswaAbsensi[] $tSiswaAbsensis3
 * @property TSiswaAbsensi[] $tSiswaAbsensis4
 * @property TSiswaBayar[] $tSiswaBayars
 * @property TSiswaBayar[] $tSiswaBayars1
 * @property TSiswaBayar[] $tSiswaBayars2
 * @property TSiswaBayar[] $tSiswaBayars3
 * @property TSiswaBayar[] $tSiswaBayars4
 * @property TSiswaKeringanan[] $tSiswaKeringanans
 * @property TSiswaKeringanan[] $tSiswaKeringanans1
 * @property TSiswaKeringanan[] $tSiswaKeringanans2
 * @property TSiswaKeringanan[] $tSiswaKeringanans3
 * @property TSiswaKeringanan[] $tSiswaKeringanans4
 * @property TSiswaPelanggaran[] $tSiswaPelanggarans
 * @property TSiswaPelanggaran[] $tSiswaPelanggarans1
 * @property TSiswaPelanggaran[] $tSiswaPelanggarans2
 * @property TSiswaPelanggaran[] $tSiswaPelanggarans3
 * @property TSiswaPelanggaran[] $tSiswaPelanggarans4
 * @property TSiswaPrestasi[] $tSiswaPrestasis
 * @property TSiswaPrestasi[] $tSiswaPrestasis1
 * @property TSiswaPrestasi[] $tSiswaPrestasis2
 * @property TSiswaPrestasi[] $tSiswaPrestasis3
 * @property TSiswaPrestasi[] $tSiswaPrestasis4
 * @property TSiswa $nIS
 * @property TPegawaiRombel $kDTAHUNAJARAN
 * @property TPegawaiRombel $kDTINGKATKELAS
 * @property TPegawaiRombel $kDPROGRAMPENGAJARAN
 * @property TPegawaiRombel $kDROMBEL
 * @property Auth $uSERNAME
 */
class SiswaTingkat extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 't_siswa_tingkat';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('NIS', 'length', 'max'=>12),
			array('KD_TAHUN_AJARAN, KD_TINGKAT_KELAS, KD_USIA_SISWA, KD_ASAL_SISWA', 'length', 'max'=>2),
			array('KD_PROGRAM_PENGAJARAN, KD_STATUS_SISWA, KD_AGAMA, KD_JENIS_KELAMIN, KD_EBTA, KD_LULUS', 'length', 'max'=>1),
			array('KD_ROMBEL', 'length', 'max'=>15),
			array('NO_UAN, USERNAME', 'length', 'max'=>20),
			array('NO_IJAZAH', 'length', 'max'=>50),
			array('KODE', 'length', 'max'=>4),
			array('TANGGAL_AKSES', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('NIS, KD_TAHUN_AJARAN, KD_TINGKAT_KELAS, KD_PROGRAM_PENGAJARAN, KD_ROMBEL, KD_STATUS_SISWA, KD_USIA_SISWA, KD_AGAMA, KD_JENIS_KELAMIN, KD_EBTA, KD_ASAL_SISWA, NO_UAN, KD_LULUS, NO_IJAZAH, KODE, USERNAME, TANGGAL_AKSES', 'safe', 'on'=>'search'),
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
			'tNilaiLembarPengamatans' => array(self::HAS_MANY, 'TNilaiLembarPengamatan', 'NIS'),
			'tNilaiLembarPengamatans1' => array(self::HAS_MANY, 'TNilaiLembarPengamatan', 'KD_TAHUN_AJARAN'),
			'tNilaiLembarPengamatans2' => array(self::HAS_MANY, 'TNilaiLembarPengamatan', 'KD_TINGKAT_KELAS'),
			'tNilaiLembarPengamatans3' => array(self::HAS_MANY, 'TNilaiLembarPengamatan', 'KD_PROGRAM_PENGAJARAN'),
			'tNilaiLembarPengamatans4' => array(self::HAS_MANY, 'TNilaiLembarPengamatan', 'KD_ROMBEL'),
			'tNilaiNems' => array(self::HAS_MANY, 'TNilaiNem', 'NIS'),
			'tNilaiNems1' => array(self::HAS_MANY, 'TNilaiNem', 'KD_TAHUN_AJARAN'),
			'tNilaiNems2' => array(self::HAS_MANY, 'TNilaiNem', 'KD_ROMBEL'),
			'tNilaiNilais' => array(self::HAS_MANY, 'TNilaiNilai', 'NIS'),
			'tNilaiNilais1' => array(self::HAS_MANY, 'TNilaiNilai', 'KD_TAHUN_AJARAN'),
			'tNilaiNilais2' => array(self::HAS_MANY, 'TNilaiNilai', 'KD_ROMBEL'),
			'tNilaiPortofolioIps' => array(self::HAS_MANY, 'TNilaiPortofolioIp', 'NIS'),
			'tNilaiPortofolioIps1' => array(self::HAS_MANY, 'TNilaiPortofolioIp', 'KD_TAHUN_AJARAN'),
			'tNilaiPortofolioIps2' => array(self::HAS_MANY, 'TNilaiPortofolioIp', 'KD_ROMBEL'),
			'tNilaiPortofolioKds' => array(self::HAS_MANY, 'TNilaiPortofolioKd', 'NIS'),
			'tNilaiPortofolioKds1' => array(self::HAS_MANY, 'TNilaiPortofolioKd', 'KD_TAHUN_AJARAN'),
			'tNilaiPortofolioKds2' => array(self::HAS_MANY, 'TNilaiPortofolioKd', 'KD_ROMBEL'),
			'tNilaiPortofolioMps' => array(self::HAS_MANY, 'TNilaiPortofolioMp', 'NIS'),
			'tNilaiPortofolioMps1' => array(self::HAS_MANY, 'TNilaiPortofolioMp', 'KD_TAHUN_AJARAN'),
			'tNilaiPortofolioMps2' => array(self::HAS_MANY, 'TNilaiPortofolioMp', 'KD_ROMBEL'),
			'tNilaiPortofolioSks' => array(self::HAS_MANY, 'TNilaiPortofolioSk', 'NIS'),
			'tNilaiPortofolioSks1' => array(self::HAS_MANY, 'TNilaiPortofolioSk', 'KD_TAHUN_AJARAN'),
			'tNilaiPortofolioSks2' => array(self::HAS_MANY, 'TNilaiPortofolioSk', 'KD_ROMBEL'),
			'tNilaiRapors' => array(self::HAS_MANY, 'TNilaiRapor', 'NIS'),
			'tNilaiRapors1' => array(self::HAS_MANY, 'TNilaiRapor', 'KD_TAHUN_AJARAN'),
			'tNilaiRapors2' => array(self::HAS_MANY, 'TNilaiRapor', 'KD_TINGKAT_KELAS'),
			'tNilaiRapors3' => array(self::HAS_MANY, 'TNilaiRapor', 'KD_PROGRAM_PENGAJARAN'),
			'tNilaiRapors4' => array(self::HAS_MANY, 'TNilaiRapor', 'KD_ROMBEL'),
			'tNilaiSttbs' => array(self::HAS_MANY, 'TNilaiSttb', 'NIS'),
			'tNilaiSttbs1' => array(self::HAS_MANY, 'TNilaiSttb', 'KD_TAHUN_AJARAN'),
			'tNilaiSttbs2' => array(self::HAS_MANY, 'TNilaiSttb', 'KD_ROMBEL'),
			'tNilaiUnjukKerjaIps' => array(self::HAS_MANY, 'TNilaiUnjukKerjaIp', 'NIS'),
			'tNilaiUnjukKerjaIps1' => array(self::HAS_MANY, 'TNilaiUnjukKerjaIp', 'KD_TAHUN_AJARAN'),
			'tNilaiUnjukKerjaIps2' => array(self::HAS_MANY, 'TNilaiUnjukKerjaIp', 'KD_ROMBEL'),
			'tNilaiUnjukKerjaKds' => array(self::HAS_MANY, 'TNilaiUnjukKerjaKd', 'NIS'),
			'tNilaiUnjukKerjaKds1' => array(self::HAS_MANY, 'TNilaiUnjukKerjaKd', 'KD_TAHUN_AJARAN'),
			'tNilaiUnjukKerjaKds2' => array(self::HAS_MANY, 'TNilaiUnjukKerjaKd', 'KD_ROMBEL'),
			'tNilaiUnjukKerjaMps' => array(self::HAS_MANY, 'TNilaiUnjukKerjaMp', 'NIS'),
			'tNilaiUnjukKerjaMps1' => array(self::HAS_MANY, 'TNilaiUnjukKerjaMp', 'KD_TAHUN_AJARAN'),
			'tNilaiUnjukKerjaMps2' => array(self::HAS_MANY, 'TNilaiUnjukKerjaMp', 'KD_ROMBEL'),
			'tNilaiUnjukKerjaSks' => array(self::HAS_MANY, 'TNilaiUnjukKerjaSk', 'NIS'),
			'tNilaiUnjukKerjaSks1' => array(self::HAS_MANY, 'TNilaiUnjukKerjaSk', 'KD_TAHUN_AJARAN'),
			'tNilaiUnjukKerjaSks2' => array(self::HAS_MANY, 'TNilaiUnjukKerjaSk', 'KD_ROMBEL'),
			'tSiswaAbsensis' => array(self::HAS_MANY, 'TSiswaAbsensi', 'NIS'),
			'tSiswaAbsensis1' => array(self::HAS_MANY, 'TSiswaAbsensi', 'KD_TAHUN_AJARAN'),
			'tSiswaAbsensis2' => array(self::HAS_MANY, 'TSiswaAbsensi', 'KD_TINGKAT_KELAS'),
			'tSiswaAbsensis3' => array(self::HAS_MANY, 'TSiswaAbsensi', 'KD_PROGRAM_PENGAJARAN'),
			'tSiswaAbsensis4' => array(self::HAS_MANY, 'TSiswaAbsensi', 'KD_ROMBEL'),
			'tSiswaBayars' => array(self::HAS_MANY, 'TSiswaBayar', 'NIS'),
			'tSiswaBayars1' => array(self::HAS_MANY, 'TSiswaBayar', 'KD_TAHUN_AJARAN'),
			'tSiswaBayars2' => array(self::HAS_MANY, 'TSiswaBayar', 'KD_TINGKAT_KELAS'),
			'tSiswaBayars3' => array(self::HAS_MANY, 'TSiswaBayar', 'KD_PROGRAM_PENGAJARAN'),
			'tSiswaBayars4' => array(self::HAS_MANY, 'TSiswaBayar', 'KD_ROMBEL'),
			'tSiswaKeringanans' => array(self::HAS_MANY, 'TSiswaKeringanan', 'NIS'),
			'tSiswaKeringanans1' => array(self::HAS_MANY, 'TSiswaKeringanan', 'KD_TAHUN_AJARAN'),
			'tSiswaKeringanans2' => array(self::HAS_MANY, 'TSiswaKeringanan', 'KD_TINGKAT_KELAS'),
			'tSiswaKeringanans3' => array(self::HAS_MANY, 'TSiswaKeringanan', 'KD_PROGRAM_PENGAJARAN'),
			'tSiswaKeringanans4' => array(self::HAS_MANY, 'TSiswaKeringanan', 'KD_ROMBEL'),
			'tSiswaPelanggarans' => array(self::HAS_MANY, 'TSiswaPelanggaran', 'NIS'),
			'tSiswaPelanggarans1' => array(self::HAS_MANY, 'TSiswaPelanggaran', 'KD_TAHUN_AJARAN'),
			'tSiswaPelanggarans2' => array(self::HAS_MANY, 'TSiswaPelanggaran', 'KD_TINGKAT_KELAS'),
			'tSiswaPelanggarans3' => array(self::HAS_MANY, 'TSiswaPelanggaran', 'KD_PROGRAM_PENGAJARAN'),
			'tSiswaPelanggarans4' => array(self::HAS_MANY, 'TSiswaPelanggaran', 'KD_ROMBEL'),
			'tSiswaPrestasis' => array(self::HAS_MANY, 'TSiswaPrestasi', 'NIS'),
			'tSiswaPrestasis1' => array(self::HAS_MANY, 'TSiswaPrestasi', 'KD_TAHUN_AJARAN'),
			'tSiswaPrestasis2' => array(self::HAS_MANY, 'TSiswaPrestasi', 'KD_TINGKAT_KELAS'),
			'tSiswaPrestasis3' => array(self::HAS_MANY, 'TSiswaPrestasi', 'KD_PROGRAM_PENGAJARAN'),
			'tSiswaPrestasis4' => array(self::HAS_MANY, 'TSiswaPrestasi', 'KD_ROMBEL'),
			'nIS' => array(self::BELONGS_TO, 'TSiswa', 'NIS'),
			'kDTAHUNAJARAN' => array(self::BELONGS_TO, 'TPegawaiRombel', 'KD_TAHUN_AJARAN'),
			'kDTINGKATKELAS' => array(self::BELONGS_TO, 'TPegawaiRombel', 'KD_TINGKAT_KELAS'),
			'kDPROGRAMPENGAJARAN' => array(self::BELONGS_TO, 'TPegawaiRombel', 'KD_PROGRAM_PENGAJARAN'),
			'kDROMBEL' => array(self::BELONGS_TO, 'TPegawaiRombel', 'KD_ROMBEL'),
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
			'KD_STATUS_SISWA' => 'Kd Status Siswa',
			'KD_USIA_SISWA' => 'Kd Usia Siswa',
			'KD_AGAMA' => 'Kd Agama',
			'KD_JENIS_KELAMIN' => 'Kd Jenis Kelamin',
			'KD_EBTA' => 'Kd Ebta',
			'KD_ASAL_SISWA' => 'Kd Asal Siswa',
			'NO_UAN' => 'No Uan',
			'KD_LULUS' => 'Kd Lulus',
			'NO_IJAZAH' => 'No Ijazah',
			'KODE' => 'Kode',
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
		$criteria->compare('KD_STATUS_SISWA',$this->KD_STATUS_SISWA,true);
		$criteria->compare('KD_USIA_SISWA',$this->KD_USIA_SISWA,true);
		$criteria->compare('KD_AGAMA',$this->KD_AGAMA,true);
		$criteria->compare('KD_JENIS_KELAMIN',$this->KD_JENIS_KELAMIN,true);
		$criteria->compare('KD_EBTA',$this->KD_EBTA,true);
		$criteria->compare('KD_ASAL_SISWA',$this->KD_ASAL_SISWA,true);
		$criteria->compare('NO_UAN',$this->NO_UAN,true);
		$criteria->compare('KD_LULUS',$this->KD_LULUS,true);
		$criteria->compare('NO_IJAZAH',$this->NO_IJAZAH,true);
		$criteria->compare('KODE',$this->KODE,true);
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
	 * @return SiswaTingkat the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
