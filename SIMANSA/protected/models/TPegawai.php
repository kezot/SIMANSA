<?php

/**
 * This is the model class for table "t_pegawai".
 *
 * The followings are the available columns in table 't_pegawai':
 * @property integer $NIP
 * @property string $NOMOR_INDUK
 * @property string $NM_PEGAWAI
 * @property string $INISIAL
 * @property string $KOTA_LAHIR
 * @property string $TANGGAL_LAHIR
 * @property string $KD_JENIS_KELAMIN
 * @property string $KD_GOL_DARAH
 * @property string $KD_AGAMA
 * @property string $KD_STATUS_NIKAH
 * @property string $ALAMAT
 * @property string $KD_POS
 * @property string $NO_TELP
 * @property string $KD_JENIS_KETENAGAAN
 * @property string $NO_HP
 * @property string $DIR_FOTO
 * @property string $USERNAME
 * @property string $TANGGAL_AKSES
 * @property string $NOMOR_INDUK_BARU
 * @property string $NUPTK
 * @property string $GELAR_DEPAN
 * @property string $GELAR_BELAKANG
 * @property string $NIY_NIGK
 * @property string $NIK
 * @property string $NM_IBU_KANDUNG
 * @property string $RT
 * @property string $RW
 * @property string $KELURAHAN_DESA
 * @property string $KECAMATAN
 * @property string $KABUPATEN_KOTA
 * @property string $PROPINSI
 * @property string $KD_AREA
 * @property string $EMAIL
 * @property string $STATUS_KEPEGAWAIAN
 * @property string $SERTIFIKASI_JABATAN
 * @property string $TAHUN_SERTIFIKAT_JABATAN
 * @property string $NOMOR_SERTIFIKAT_JABATAN
 * @property string $KD_SERTIFIKASI_BIDANG_STUDI
 * @property string $KD_PROGRAM_KEAHLIAN
 * @property string $LISENSI_KEPALA_SEKOLAH
 * @property string $CATATAN
 *
 * The followings are the available model relations:
 * @property RGolDarah $kDGOLDARAH
 * @property RAgama $kDAGAMA
 * @property RJenisKetenagaan $kDJENISKETENAGAAN
 * @property Auth $uSERNAME
 * @property RTahunAjaran[] $rTahunAjarans
 * @property TPegawaiBeasiswa[] $tPegawaiBeasiswas
 * @property TPegawaiDidikFormal[] $tPegawaiDidikFormals
 * @property TPegawaiDidikNonFormal[] $tPegawaiDidikNonFormals
 * @property TPegawaiKaryaTulis[] $tPegawaiKaryaTulises
 * @property TPegawaiKeluarga[] $tPegawaiKeluargas
 * @property TPegawaiKesejahteraan[] $tPegawaiKesejahteraans
 * @property TPegawaiPenataran[] $tPegawaiPenatarans
 * @property TPegawaiPengabdian[] $tPegawaiPengabdians
 * @property TPegawaiPenghargaan[] $tPegawaiPenghargaans
 * @property TPegawaiProfesi[] $tPegawaiProfesis
 * @property TPegawaiRombel[] $tPegawaiRombels
 * @property TPegawaiRwytAjar[] $tPegawaiRwytAjars
 * @property TPegawaiRwytJabatan[] $tPegawaiRwytJabatans
 * @property TPegawaiRwytPangkat[] $tPegawaiRwytPangkats
 * @property TPegawaiRwytPekerjaan[] $tPegawaiRwytPekerjaans
 * @property TPegawaiStudiBanding[] $tPegawaiStudiBandings
 * @property TPegawaiTesKeahlian[] $tPegawaiTesKeahlians
 * @property TPegawaiTulisBuku[] $tPegawaiTulisBukus
 * @property TPegawaiTunjangan[] $tPegawaiTunjangans
 * @property TPegawaiWorkshop[] $tPegawaiWorkshops
 * @property TSekolahJadwalPelajaran[] $tSekolahJadwalPelajarans
 */
class TPegawai extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 't_pegawai';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('NOMOR_INDUK', 'length', 'max'=>9),
			array('NM_PEGAWAI, KOTA_LAHIR, NOMOR_SERTIFIKAT_JABATAN', 'length', 'max'=>50),
			array('INISIAL, RT, RW, KD_SERTIFIKASI_BIDANG_STUDI', 'length', 'max'=>3),
			array('KD_JENIS_KELAMIN, KD_GOL_DARAH, KD_AGAMA, KD_STATUS_NIKAH, KD_JENIS_KETENAGAAN, STATUS_KEPEGAWAIAN, SERTIFIKASI_JABATAN, LISENSI_KEPALA_SEKOLAH', 'length', 'max'=>1),
			array('ALAMAT', 'length', 'max'=>150),
			array('KD_POS, KD_AREA', 'length', 'max'=>5),
			array('NO_TELP, NO_HP', 'length', 'max'=>30),
			array('DIR_FOTO, EMAIL', 'length', 'max'=>255),
			array('USERNAME, GELAR_DEPAN, GELAR_BELAKANG, NIY_NIGK, NIK', 'length', 'max'=>20),
			array('NOMOR_INDUK_BARU', 'length', 'max'=>18),
			array('NUPTK', 'length', 'max'=>16),
			array('NM_IBU_KANDUNG, KELURAHAN_DESA, KECAMATAN, KABUPATEN_KOTA, PROPINSI', 'length', 'max'=>100),
			array('TAHUN_SERTIFIKAT_JABATAN', 'length', 'max'=>4),
			array('KD_PROGRAM_KEAHLIAN', 'length', 'max'=>2),
			array('CATATAN', 'length', 'max'=>250),
			array('TANGGAL_LAHIR, TANGGAL_AKSES', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('NIP, NOMOR_INDUK, NM_PEGAWAI, INISIAL, KOTA_LAHIR, TANGGAL_LAHIR, KD_JENIS_KELAMIN, KD_GOL_DARAH, KD_AGAMA, KD_STATUS_NIKAH, ALAMAT, KD_POS, NO_TELP, KD_JENIS_KETENAGAAN, NO_HP, DIR_FOTO, USERNAME, TANGGAL_AKSES, NOMOR_INDUK_BARU, NUPTK, GELAR_DEPAN, GELAR_BELAKANG, NIY_NIGK, NIK, NM_IBU_KANDUNG, RT, RW, KELURAHAN_DESA, KECAMATAN, KABUPATEN_KOTA, PROPINSI, KD_AREA, EMAIL, STATUS_KEPEGAWAIAN, SERTIFIKASI_JABATAN, TAHUN_SERTIFIKAT_JABATAN, NOMOR_SERTIFIKAT_JABATAN, KD_SERTIFIKASI_BIDANG_STUDI, KD_PROGRAM_KEAHLIAN, LISENSI_KEPALA_SEKOLAH, CATATAN', 'safe', 'on'=>'search'),
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
			'kDGOLDARAH' => array(self::BELONGS_TO, 'RGolDarah', 'KD_GOL_DARAH'),
			'kDAGAMA' => array(self::BELONGS_TO, 'RAgama', 'KD_AGAMA'),
			'kDJENISKETENAGAAN' => array(self::BELONGS_TO, 'RJenisKetenagaan', 'KD_JENIS_KETENAGAAN'),
			'uSERNAME' => array(self::BELONGS_TO, 'Auth', 'USERNAME'),
			'rTahunAjarans' => array(self::MANY_MANY, 'RTahunAjaran', 't_pegawai_aktif(NIP, KD_TAHUN_AJARAN)'),
			'tPegawaiBeasiswas' => array(self::HAS_MANY, 'TPegawaiBeasiswa', 'NIP'),
			'tPegawaiDidikFormals' => array(self::HAS_MANY, 'TPegawaiDidikFormal', 'NIP'),
			'tPegawaiDidikNonFormals' => array(self::HAS_MANY, 'TPegawaiDidikNonFormal', 'NIP'),
			'tPegawaiKaryaTulises' => array(self::HAS_MANY, 'TPegawaiKaryaTulis', 'NIP'),
			'tPegawaiKeluargas' => array(self::HAS_MANY, 'TPegawaiKeluarga', 'NIP'),
			'tPegawaiKesejahteraans' => array(self::HAS_MANY, 'TPegawaiKesejahteraan', 'NIP'),
			'tPegawaiPenatarans' => array(self::HAS_MANY, 'TPegawaiPenataran', 'NIP'),
			'tPegawaiPengabdians' => array(self::HAS_MANY, 'TPegawaiPengabdian', 'NIP'),
			'tPegawaiPenghargaans' => array(self::HAS_MANY, 'TPegawaiPenghargaan', 'NIP'),
			'tPegawaiProfesis' => array(self::HAS_MANY, 'TPegawaiProfesi', 'NIP'),
			'tPegawaiRombels' => array(self::HAS_MANY, 'TPegawaiRombel', 'NIP'),
			'tPegawaiRwytAjars' => array(self::HAS_MANY, 'TPegawaiRwytAjar', 'NIP'),
			'tPegawaiRwytJabatans' => array(self::HAS_MANY, 'TPegawaiRwytJabatan', 'NIP'),
			'tPegawaiRwytPangkats' => array(self::HAS_MANY, 'TPegawaiRwytPangkat', 'NIP'),
			'tPegawaiRwytPekerjaans' => array(self::HAS_MANY, 'TPegawaiRwytPekerjaan', 'NIP'),
			'tPegawaiStudiBandings' => array(self::HAS_MANY, 'TPegawaiStudiBanding', 'NIP'),
			'tPegawaiTesKeahlians' => array(self::HAS_MANY, 'TPegawaiTesKeahlian', 'NIP'),
			'tPegawaiTulisBukus' => array(self::HAS_MANY, 'TPegawaiTulisBuku', 'NIP'),
			'tPegawaiTunjangans' => array(self::HAS_MANY, 'TPegawaiTunjangan', 'NIP'),
			'tPegawaiWorkshops' => array(self::HAS_MANY, 'TPegawaiWorkshop', 'NIP'),
			'tSekolahJadwalPelajarans' => array(self::HAS_MANY, 'TSekolahJadwalPelajaran', 'NIP'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'NIP' => 'Nip',
			'NOMOR_INDUK' => 'Nomor Induk',
			'NM_PEGAWAI' => 'Nm Pegawai',
			'INISIAL' => 'Inisial',
			'KOTA_LAHIR' => 'Kota Lahir',
			'TANGGAL_LAHIR' => 'Tanggal Lahir',
			'KD_JENIS_KELAMIN' => 'Kd Jenis Kelamin',
			'KD_GOL_DARAH' => 'Kd Gol Darah',
			'KD_AGAMA' => 'Kd Agama',
			'KD_STATUS_NIKAH' => 'Kd Status Nikah',
			'ALAMAT' => 'Alamat',
			'KD_POS' => 'Kd Pos',
			'NO_TELP' => 'No Telp',
			'KD_JENIS_KETENAGAAN' => 'Kd Jenis Ketenagaan',
			'NO_HP' => 'No Hp',
			'DIR_FOTO' => 'Dir Foto',
			'USERNAME' => 'Username',
			'TANGGAL_AKSES' => 'Tanggal Akses',
			'NOMOR_INDUK_BARU' => 'Nomor Induk Baru',
			'NUPTK' => 'Nuptk',
			'GELAR_DEPAN' => 'Gelar Depan',
			'GELAR_BELAKANG' => 'Gelar Belakang',
			'NIY_NIGK' => 'Niy Nigk',
			'NIK' => 'Nik',
			'NM_IBU_KANDUNG' => 'Nm Ibu Kandung',
			'RT' => 'Rt',
			'RW' => 'Rw',
			'KELURAHAN_DESA' => 'Kelurahan Desa',
			'KECAMATAN' => 'Kecamatan',
			'KABUPATEN_KOTA' => 'Kabupaten Kota',
			'PROPINSI' => 'Propinsi',
			'KD_AREA' => 'Kd Area',
			'EMAIL' => 'Email',
			'STATUS_KEPEGAWAIAN' => 'Status Kepegawaian',
			'SERTIFIKASI_JABATAN' => 'Sertifikasi Jabatan',
			'TAHUN_SERTIFIKAT_JABATAN' => 'Tahun Sertifikat Jabatan',
			'NOMOR_SERTIFIKAT_JABATAN' => 'Nomor Sertifikat Jabatan',
			'KD_SERTIFIKASI_BIDANG_STUDI' => 'Kd Sertifikasi Bidang Studi',
			'KD_PROGRAM_KEAHLIAN' => 'Kd Program Keahlian',
			'LISENSI_KEPALA_SEKOLAH' => 'Lisensi Kepala Sekolah',
			'CATATAN' => 'Catatan',
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

		$criteria->compare('NIP',$this->NIP);
		$criteria->compare('NOMOR_INDUK',$this->NOMOR_INDUK,true);
		$criteria->compare('NM_PEGAWAI',$this->NM_PEGAWAI,true);
		$criteria->compare('INISIAL',$this->INISIAL,true);
		$criteria->compare('KOTA_LAHIR',$this->KOTA_LAHIR,true);
		$criteria->compare('TANGGAL_LAHIR',$this->TANGGAL_LAHIR,true);
		$criteria->compare('KD_JENIS_KELAMIN',$this->KD_JENIS_KELAMIN,true);
		$criteria->compare('KD_GOL_DARAH',$this->KD_GOL_DARAH,true);
		$criteria->compare('KD_AGAMA',$this->KD_AGAMA,true);
		$criteria->compare('KD_STATUS_NIKAH',$this->KD_STATUS_NIKAH,true);
		$criteria->compare('ALAMAT',$this->ALAMAT,true);
		$criteria->compare('KD_POS',$this->KD_POS,true);
		$criteria->compare('NO_TELP',$this->NO_TELP,true);
		$criteria->compare('KD_JENIS_KETENAGAAN',$this->KD_JENIS_KETENAGAAN,true);
		$criteria->compare('NO_HP',$this->NO_HP,true);
		$criteria->compare('DIR_FOTO',$this->DIR_FOTO,true);
		$criteria->compare('USERNAME',$this->USERNAME,true);
		$criteria->compare('TANGGAL_AKSES',$this->TANGGAL_AKSES,true);
		$criteria->compare('NOMOR_INDUK_BARU',$this->NOMOR_INDUK_BARU,true);
		$criteria->compare('NUPTK',$this->NUPTK,true);
		$criteria->compare('GELAR_DEPAN',$this->GELAR_DEPAN,true);
		$criteria->compare('GELAR_BELAKANG',$this->GELAR_BELAKANG,true);
		$criteria->compare('NIY_NIGK',$this->NIY_NIGK,true);
		$criteria->compare('NIK',$this->NIK,true);
		$criteria->compare('NM_IBU_KANDUNG',$this->NM_IBU_KANDUNG,true);
		$criteria->compare('RT',$this->RT,true);
		$criteria->compare('RW',$this->RW,true);
		$criteria->compare('KELURAHAN_DESA',$this->KELURAHAN_DESA,true);
		$criteria->compare('KECAMATAN',$this->KECAMATAN,true);
		$criteria->compare('KABUPATEN_KOTA',$this->KABUPATEN_KOTA,true);
		$criteria->compare('PROPINSI',$this->PROPINSI,true);
		$criteria->compare('KD_AREA',$this->KD_AREA,true);
		$criteria->compare('EMAIL',$this->EMAIL,true);
		$criteria->compare('STATUS_KEPEGAWAIAN',$this->STATUS_KEPEGAWAIAN,true);
		$criteria->compare('SERTIFIKASI_JABATAN',$this->SERTIFIKASI_JABATAN,true);
		$criteria->compare('TAHUN_SERTIFIKAT_JABATAN',$this->TAHUN_SERTIFIKAT_JABATAN,true);
		$criteria->compare('NOMOR_SERTIFIKAT_JABATAN',$this->NOMOR_SERTIFIKAT_JABATAN,true);
		$criteria->compare('KD_SERTIFIKASI_BIDANG_STUDI',$this->KD_SERTIFIKASI_BIDANG_STUDI,true);
		$criteria->compare('KD_PROGRAM_KEAHLIAN',$this->KD_PROGRAM_KEAHLIAN,true);
		$criteria->compare('LISENSI_KEPALA_SEKOLAH',$this->LISENSI_KEPALA_SEKOLAH,true);
		$criteria->compare('CATATAN',$this->CATATAN,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TPegawai the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
