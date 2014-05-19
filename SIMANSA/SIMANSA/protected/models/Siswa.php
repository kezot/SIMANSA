<?php

/**
 * This is the model class for table "t_siswa".
 *
 * The followings are the available columns in table 't_siswa':
 * @property string $NIS
 * @property string $NO_CALSIS
 * @property string $NM_SISWA
 * @property string $NM_PANGGILAN
 * @property string $KD_JENIS_KELAMIN
 * @property string $KOTA_LAHIR
 * @property string $TANGGAL_LAHIR
 * @property string $ALAMAT
 * @property string $RT
 * @property string $RW
 * @property string $KD_POS
 * @property string $KD_GOL_DARAH
 * @property string $KD_AGAMA
 * @property string $NO_TELP
 * @property string $NO_HP
 * @property string $STATUS_SISWA
 * @property string $KEWARGANEGARAAN
 * @property integer $ANAK_KE
 * @property integer $JUMLAH_KANDUNG
 * @property integer $JUMLAH_TIRI
 * @property integer $JUMLAH_ANGKAT
 * @property string $STATUS_YATIM_PIATU
 * @property string $BAHASA
 * @property string $TINGGAL_DI
 * @property string $JARAK_SEK
 * @property string $KELAINAN_JASMANI
 * @property integer $BERAT_BADAN
 * @property integer $TINGGI_BADAN
 * @property integer $ASAL_SMP
 * @property string $NO_STL_SMP
 * @property string $TANGGAL_STL_SMP
 * @property integer $LAMA_BELAJAR_SMP
 * @property integer $ASAL_SMA
 * @property string $KD_TINGKAT_KELAS
 * @property string $KD_PROGRAM_PENGAJARAN
 * @property string $DITERIMA_TANGGAL
 * @property string $PINDAH_ALASAN
 * @property string $HUBUNGI
 * @property integer $TANGGUNG_BIAYA
 * @property string $TEMP_AKSES_NET
 * @property string $FREK_AKSES_NET
 * @property string $FREK_REKRE_KEL
 * @property string $NILAI
 * @property string $NO_INDUK
 * @property string $DIR_FOTO
 * @property string $STATUS_ENTRI
 * @property string $KD_JENIS_KETUNAAN
 * @property string $KD_STATUS_DALAM_KELUARGA
 * @property string $TANGGAL_SKHUN_SMP
 * @property string $NO_SKHUN_SMP
 * @property string $NISN
 * @property string $NIK
 * @property string $JENIS_TINGGAL
 * @property string $KELURAHAN_DESA
 * @property string $KECAMATAN
 * @property string $KABUPATEN_KOTA
 * @property string $PROPINSI
 * @property string $KD_AREA
 * @property string $KD_JARAK_SEK
 * @property string $ALAT_TRANSPORTASI
 * @property string $EMAIL_PRIBADI
 * @property string $USERNAME
 * @property string $TANGGAL_AKSES
 *
 * The followings are the available model relations:
 * @property TCalonSiswa $nOCALSIS
 * @property RStatusDalamKeluarga $kDSTATUSDALAMKELUARGA
 * @property RGolDarah $kDGOLDARAH
 * @property RAgama $kDAGAMA
 * @property RAsalSekolah $aSALSMP
 * @property RSekolahSetingkat $aSALSMA
 * @property RTingkatKelas $kDTINGKATKELAS
 * @property RProgramPengajaran $kDPROGRAMPENGAJARAN
 * @property Auth $uSERNAME
 * @property RJenisKetunaan $kDJENISKETUNAAN
 * @property TSiswaAlumni $tSiswaAlumni
 * @property TSiswaBeasiswa[] $tSiswaBeasiswas
 * @property TSiswaCuti[] $tSiswaCutis
 * @property RHobi[] $rHobis
 * @property RJenisOrtu[] $rJenisOrtus
 * @property TSiswaPindah $tSiswaPindah
 * @property TSiswaPutus $tSiswaPutus
 * @property TSiswaRwytPendidikan[] $tSiswaRwytPendidikans
 * @property TSiswaRwytSakit[] $tSiswaRwytSakits
 * @property RMatpelBefore[] $rMatpelBefores
 * @property TSiswaTingkat[] $tSiswaTingkats
 * @property TSiswaTingkatThn $tSiswaTingkatThn
 * @property TSiswaTingkatThnBaru $tSiswaTingkatThnBaru
 */
class Siswa extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 't_siswa';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ANAK_KE, JUMLAH_KANDUNG, JUMLAH_TIRI, JUMLAH_ANGKAT, BERAT_BADAN, TINGGI_BADAN, ASAL_SMP, LAMA_BELAJAR_SMP, ASAL_SMA, TANGGUNG_BIAYA', 'numerical', 'integerOnly'=>true),
			array('NIS, NO_INDUK', 'length', 'max'=>12),
			array('NO_CALSIS', 'length', 'max'=>9),
			array('NM_SISWA, KOTA_LAHIR, KEWARGANEGARAAN, BAHASA, TINGGAL_DI, KELAINAN_JASMANI', 'length', 'max'=>50),
			array('NM_PANGGILAN, NIK, USERNAME', 'length', 'max'=>20),
			array('KD_JENIS_KELAMIN, KD_GOL_DARAH, KD_AGAMA, STATUS_SISWA, STATUS_YATIM_PIATU, KD_PROGRAM_PENGAJARAN, HUBUNGI, TEMP_AKSES_NET, FREK_AKSES_NET, FREK_REKRE_KEL, STATUS_ENTRI, KD_JENIS_KETUNAAN, KD_STATUS_DALAM_KELUARGA, JENIS_TINGGAL, KD_JARAK_SEK', 'length', 'max'=>1),
			array('ALAMAT', 'length', 'max'=>150),
			array('RT', 'length', 'max'=>3),
			array('RW, KD_TINGKAT_KELAS, ALAT_TRANSPORTASI', 'length', 'max'=>2),
			array('KD_POS, JARAK_SEK, NILAI, KD_AREA', 'length', 'max'=>5),
			array('NO_TELP, NO_HP, NO_STL_SMP, NO_SKHUN_SMP', 'length', 'max'=>30),
			array('PINDAH_ALASAN, DIR_FOTO, EMAIL_PRIBADI', 'length', 'max'=>255),
			array('NISN', 'length', 'max'=>18),
			array('KELURAHAN_DESA, KECAMATAN, KABUPATEN_KOTA, PROPINSI', 'length', 'max'=>100),
			array('TANGGAL_LAHIR, TANGGAL_STL_SMP, DITERIMA_TANGGAL, TANGGAL_SKHUN_SMP, TANGGAL_AKSES', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('NIS, NO_CALSIS, NM_SISWA, NM_PANGGILAN, KD_JENIS_KELAMIN, KOTA_LAHIR, TANGGAL_LAHIR, ALAMAT, RT, RW, KD_POS, KD_GOL_DARAH, KD_AGAMA, NO_TELP, NO_HP, STATUS_SISWA, KEWARGANEGARAAN, ANAK_KE, JUMLAH_KANDUNG, JUMLAH_TIRI, JUMLAH_ANGKAT, STATUS_YATIM_PIATU, BAHASA, TINGGAL_DI, JARAK_SEK, KELAINAN_JASMANI, BERAT_BADAN, TINGGI_BADAN, ASAL_SMP, NO_STL_SMP, TANGGAL_STL_SMP, LAMA_BELAJAR_SMP, ASAL_SMA, KD_TINGKAT_KELAS, KD_PROGRAM_PENGAJARAN, DITERIMA_TANGGAL, PINDAH_ALASAN, HUBUNGI, TANGGUNG_BIAYA, TEMP_AKSES_NET, FREK_AKSES_NET, FREK_REKRE_KEL, NILAI, NO_INDUK, DIR_FOTO, STATUS_ENTRI, KD_JENIS_KETUNAAN, KD_STATUS_DALAM_KELUARGA, TANGGAL_SKHUN_SMP, NO_SKHUN_SMP, NISN, NIK, JENIS_TINGGAL, KELURAHAN_DESA, KECAMATAN, KABUPATEN_KOTA, PROPINSI, KD_AREA, KD_JARAK_SEK, ALAT_TRANSPORTASI, EMAIL_PRIBADI, USERNAME, TANGGAL_AKSES', 'safe', 'on'=>'search'),
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
			'nOCALSIS' => array(self::BELONGS_TO, 'TCalonSiswa', 'NO_CALSIS'),
			'kDSTATUSDALAMKELUARGA' => array(self::BELONGS_TO, 'RStatusDalamKeluarga', 'KD_STATUS_DALAM_KELUARGA'),
			'kDGOLDARAH' => array(self::BELONGS_TO, 'RGolDarah', 'KD_GOL_DARAH'),
			'kDAGAMA' => array(self::BELONGS_TO, 'RAgama', 'KD_AGAMA'),
			'aSALSMP' => array(self::BELONGS_TO, 'RAsalSekolah', 'ASAL_SMP'),
			'aSALSMA' => array(self::BELONGS_TO, 'RSekolahSetingkat', 'ASAL_SMA'),
			'kDTINGKATKELAS' => array(self::BELONGS_TO, 'RTingkatKelas', 'KD_TINGKAT_KELAS'),
			'kDPROGRAMPENGAJARAN' => array(self::BELONGS_TO, 'RProgramPengajaran', 'KD_PROGRAM_PENGAJARAN'),
			'uSERNAME' => array(self::BELONGS_TO, 'Auth', 'USERNAME'),
			'kDJENISKETUNAAN' => array(self::BELONGS_TO, 'RJenisKetunaan', 'KD_JENIS_KETUNAAN'),
			'tSiswaAlumni' => array(self::HAS_ONE, 'TSiswaAlumni', 'NIS'),
			'tSiswaBeasiswas' => array(self::HAS_MANY, 'TSiswaBeasiswa', 'NIS'),
			'tSiswaCutis' => array(self::HAS_MANY, 'TSiswaCuti', 'NIS'),
			'rHobis' => array(self::MANY_MANY, 'RHobi', 't_siswa_hobi(NIS, ID_HOBI)'),
			'rJenisOrtus' => array(self::MANY_MANY, 'RJenisOrtu', 't_siswa_ortu(NIS, KD_JENIS_ORTU)'),
			'tSiswaPindah' => array(self::HAS_ONE, 'TSiswaPindah', 'NIS'),
			'tSiswaPutus' => array(self::HAS_ONE, 'TSiswaPutus', 'NIS'),
			'tSiswaRwytPendidikans' => array(self::HAS_MANY, 'TSiswaRwytPendidikan', 'NIS'),
			'tSiswaRwytSakits' => array(self::HAS_MANY, 'TSiswaRwytSakit', 'NIS'),
			'rMatpelBefores' => array(self::MANY_MANY, 'RMatpelBefore', 't_siswa_sttb_before(NIS, KD_MATPEL_BEFORE)'),
			'tSiswaTingkats' => array(self::HAS_MANY, 'TSiswaTingkat', 'NIS'),
			'tSiswaTingkatThn' => array(self::HAS_ONE, 'TSiswaTingkatThn', 'NIS'),
			'tSiswaTingkatThnBaru' => array(self::HAS_ONE, 'TSiswaTingkatThnBaru', 'NIS'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'NIS' => 'Nis',
			'NO_CALSIS' => 'No Calsis',
			'NM_SISWA' => 'Nm Siswa',
			'NM_PANGGILAN' => 'Nm Panggilan',
			'KD_JENIS_KELAMIN' => 'Kd Jenis Kelamin',
			'KOTA_LAHIR' => 'Kota Lahir',
			'TANGGAL_LAHIR' => 'Tanggal Lahir',
			'ALAMAT' => 'Alamat',
			'RT' => 'Rt',
			'RW' => 'Rw',
			'KD_POS' => 'Kd Pos',
			'KD_GOL_DARAH' => 'Kd Gol Darah',
			'KD_AGAMA' => 'Kd Agama',
			'NO_TELP' => 'No Telp',
			'NO_HP' => 'No Hp',
			'STATUS_SISWA' => 'Status Siswa',
			'KEWARGANEGARAAN' => 'Kewarganegaraan',
			'ANAK_KE' => 'Anak Ke',
			'JUMLAH_KANDUNG' => 'Jumlah Kandung',
			'JUMLAH_TIRI' => 'Jumlah Tiri',
			'JUMLAH_ANGKAT' => 'Jumlah Angkat',
			'STATUS_YATIM_PIATU' => 'Status Yatim Piatu',
			'BAHASA' => 'Bahasa',
			'TINGGAL_DI' => 'Tinggal Di',
			'JARAK_SEK' => 'Jarak Sek',
			'KELAINAN_JASMANI' => 'Kelainan Jasmani',
			'BERAT_BADAN' => 'Berat Badan',
			'TINGGI_BADAN' => 'Tinggi Badan',
			'ASAL_SMP' => 'Asal Smp',
			'NO_STL_SMP' => 'No Stl Smp',
			'TANGGAL_STL_SMP' => 'Tanggal Stl Smp',
			'LAMA_BELAJAR_SMP' => 'Lama Belajar Smp',
			'ASAL_SMA' => 'Asal Sma',
			'KD_TINGKAT_KELAS' => 'Kd Tingkat Kelas',
			'KD_PROGRAM_PENGAJARAN' => 'Kd Program Pengajaran',
			'DITERIMA_TANGGAL' => 'Diterima Tanggal',
			'PINDAH_ALASAN' => 'Pindah Alasan',
			'HUBUNGI' => 'Hubungi',
			'TANGGUNG_BIAYA' => 'Tanggung Biaya',
			'TEMP_AKSES_NET' => 'Temp Akses Net',
			'FREK_AKSES_NET' => 'Frek Akses Net',
			'FREK_REKRE_KEL' => 'Frek Rekre Kel',
			'NILAI' => 'Nilai',
			'NO_INDUK' => 'No Induk',
			'DIR_FOTO' => 'Dir Foto',
			'STATUS_ENTRI' => 'Status Entri',
			'KD_JENIS_KETUNAAN' => 'Kd Jenis Ketunaan',
			'KD_STATUS_DALAM_KELUARGA' => 'Kd Status Dalam Keluarga',
			'TANGGAL_SKHUN_SMP' => 'Tanggal Skhun Smp',
			'NO_SKHUN_SMP' => 'No Skhun Smp',
			'NISN' => 'Nisn',
			'NIK' => 'Nik',
			'JENIS_TINGGAL' => 'Jenis Tinggal',
			'KELURAHAN_DESA' => 'Kelurahan Desa',
			'KECAMATAN' => 'Kecamatan',
			'KABUPATEN_KOTA' => 'Kabupaten Kota',
			'PROPINSI' => 'Propinsi',
			'KD_AREA' => 'Kd Area',
			'KD_JARAK_SEK' => 'Kd Jarak Sek',
			'ALAT_TRANSPORTASI' => 'Alat Transportasi',
			'EMAIL_PRIBADI' => 'Email Pribadi',
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
		$criteria->compare('NO_CALSIS',$this->NO_CALSIS,true);
		$criteria->compare('NM_SISWA',$this->NM_SISWA,true);
		$criteria->compare('NM_PANGGILAN',$this->NM_PANGGILAN,true);
		$criteria->compare('KD_JENIS_KELAMIN',$this->KD_JENIS_KELAMIN,true);
		$criteria->compare('KOTA_LAHIR',$this->KOTA_LAHIR,true);
		$criteria->compare('TANGGAL_LAHIR',$this->TANGGAL_LAHIR,true);
		$criteria->compare('ALAMAT',$this->ALAMAT,true);
		$criteria->compare('RT',$this->RT,true);
		$criteria->compare('RW',$this->RW,true);
		$criteria->compare('KD_POS',$this->KD_POS,true);
		$criteria->compare('KD_GOL_DARAH',$this->KD_GOL_DARAH,true);
		$criteria->compare('KD_AGAMA',$this->KD_AGAMA,true);
		$criteria->compare('NO_TELP',$this->NO_TELP,true);
		$criteria->compare('NO_HP',$this->NO_HP,true);
		$criteria->compare('STATUS_SISWA',$this->STATUS_SISWA,true);
		$criteria->compare('KEWARGANEGARAAN',$this->KEWARGANEGARAAN,true);
		$criteria->compare('ANAK_KE',$this->ANAK_KE);
		$criteria->compare('JUMLAH_KANDUNG',$this->JUMLAH_KANDUNG);
		$criteria->compare('JUMLAH_TIRI',$this->JUMLAH_TIRI);
		$criteria->compare('JUMLAH_ANGKAT',$this->JUMLAH_ANGKAT);
		$criteria->compare('STATUS_YATIM_PIATU',$this->STATUS_YATIM_PIATU,true);
		$criteria->compare('BAHASA',$this->BAHASA,true);
		$criteria->compare('TINGGAL_DI',$this->TINGGAL_DI,true);
		$criteria->compare('JARAK_SEK',$this->JARAK_SEK,true);
		$criteria->compare('KELAINAN_JASMANI',$this->KELAINAN_JASMANI,true);
		$criteria->compare('BERAT_BADAN',$this->BERAT_BADAN);
		$criteria->compare('TINGGI_BADAN',$this->TINGGI_BADAN);
		$criteria->compare('ASAL_SMP',$this->ASAL_SMP);
		$criteria->compare('NO_STL_SMP',$this->NO_STL_SMP,true);
		$criteria->compare('TANGGAL_STL_SMP',$this->TANGGAL_STL_SMP,true);
		$criteria->compare('LAMA_BELAJAR_SMP',$this->LAMA_BELAJAR_SMP);
		$criteria->compare('ASAL_SMA',$this->ASAL_SMA);
		$criteria->compare('KD_TINGKAT_KELAS',$this->KD_TINGKAT_KELAS,true);
		$criteria->compare('KD_PROGRAM_PENGAJARAN',$this->KD_PROGRAM_PENGAJARAN,true);
		$criteria->compare('DITERIMA_TANGGAL',$this->DITERIMA_TANGGAL,true);
		$criteria->compare('PINDAH_ALASAN',$this->PINDAH_ALASAN,true);
		$criteria->compare('HUBUNGI',$this->HUBUNGI,true);
		$criteria->compare('TANGGUNG_BIAYA',$this->TANGGUNG_BIAYA);
		$criteria->compare('TEMP_AKSES_NET',$this->TEMP_AKSES_NET,true);
		$criteria->compare('FREK_AKSES_NET',$this->FREK_AKSES_NET,true);
		$criteria->compare('FREK_REKRE_KEL',$this->FREK_REKRE_KEL,true);
		$criteria->compare('NILAI',$this->NILAI,true);
		$criteria->compare('NO_INDUK',$this->NO_INDUK,true);
		$criteria->compare('DIR_FOTO',$this->DIR_FOTO,true);
		$criteria->compare('STATUS_ENTRI',$this->STATUS_ENTRI,true);
		$criteria->compare('KD_JENIS_KETUNAAN',$this->KD_JENIS_KETUNAAN,true);
		$criteria->compare('KD_STATUS_DALAM_KELUARGA',$this->KD_STATUS_DALAM_KELUARGA,true);
		$criteria->compare('TANGGAL_SKHUN_SMP',$this->TANGGAL_SKHUN_SMP,true);
		$criteria->compare('NO_SKHUN_SMP',$this->NO_SKHUN_SMP,true);
		$criteria->compare('NISN',$this->NISN,true);
		$criteria->compare('NIK',$this->NIK,true);
		$criteria->compare('JENIS_TINGGAL',$this->JENIS_TINGGAL,true);
		$criteria->compare('KELURAHAN_DESA',$this->KELURAHAN_DESA,true);
		$criteria->compare('KECAMATAN',$this->KECAMATAN,true);
		$criteria->compare('KABUPATEN_KOTA',$this->KABUPATEN_KOTA,true);
		$criteria->compare('PROPINSI',$this->PROPINSI,true);
		$criteria->compare('KD_AREA',$this->KD_AREA,true);
		$criteria->compare('KD_JARAK_SEK',$this->KD_JARAK_SEK,true);
		$criteria->compare('ALAT_TRANSPORTASI',$this->ALAT_TRANSPORTASI,true);
		$criteria->compare('EMAIL_PRIBADI',$this->EMAIL_PRIBADI,true);
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
	 * @return Siswa the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
