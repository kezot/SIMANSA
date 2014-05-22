<?php

/**
 * This is the model class for table "t_siswa_bayar".
 *
 * The followings are the available columns in table 't_siswa_bayar':
 * @property string $NIS
 * @property string $KD_TAHUN_AJARAN
 * @property string $KD_TINGKAT_KELAS
 * @property string $KD_PROGRAM_PENGAJARAN
 * @property string $KD_ROMBEL
 * @property integer $ID_PEMBAYARAN_SISWA
 * @property string $TANGGAL_BAYAR
 * @property string $JUMLAH_BAYAR
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
 * @property RPembayaranSiswa $iDPEMBAYARANSISWA
 * @property Auth $uSERNAME
 */
class TSiswaBayar extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 't_siswa_bayar';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ID_PEMBAYARAN_SISWA', 'numerical', 'integerOnly'=>true),
			array('NIS', 'length', 'max'=>12),
			array('KD_TAHUN_AJARAN, KD_TINGKAT_KELAS', 'length', 'max'=>2),
			array('KD_PROGRAM_PENGAJARAN', 'length', 'max'=>1),
			array('KD_ROMBEL', 'length', 'max'=>15),
			array('JUMLAH_BAYAR', 'length', 'max'=>18),
			array('KETERANGAN', 'length', 'max'=>255),
			array('USERNAME', 'length', 'max'=>20),
			array('TANGGAL_AKSES', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('NIS, KD_TAHUN_AJARAN, KD_TINGKAT_KELAS, KD_PROGRAM_PENGAJARAN, KD_ROMBEL, ID_PEMBAYARAN_SISWA, TANGGAL_BAYAR, JUMLAH_BAYAR, KETERANGAN, USERNAME, TANGGAL_AKSES', 'safe', 'on'=>'search'),
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
			'iDPEMBAYARANSISWA' => array(self::BELONGS_TO, 'RPembayaranSiswa', 'ID_PEMBAYARAN_SISWA'),
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
			'ID_PEMBAYARAN_SISWA' => 'Id Pembayaran Siswa',
			'TANGGAL_BAYAR' => 'Tanggal Bayar',
			'JUMLAH_BAYAR' => 'Jumlah Bayar',
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
		$criteria->compare('ID_PEMBAYARAN_SISWA',$this->ID_PEMBAYARAN_SISWA);
		$criteria->compare('TANGGAL_BAYAR',$this->TANGGAL_BAYAR,true);
		$criteria->compare('JUMLAH_BAYAR',$this->JUMLAH_BAYAR,true);
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
	 * @return TSiswaBayar the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function getBayar($NIS) {
        $siswaTingkat = SiswaTingkat::model()->findByAttributes(array("NIS" => $NIS, "KD_TAHUN_AJARAN" =>19) );
        $tahunAjaran = $siswaTingkat->KD_TAHUN_AJARAN;
        $kodeTingkatKelas = $siswaTingkat->KD_TINGKAT_KELAS;
        $kodeProgramPengajaran = $siswaTingkat->KD_PROGRAM_PENGAJARAN;
        $kodeRombel = $siswaTingkat->KD_ROMBEL;

        $listBayar = TSiswaBayar::model()->findAllByAttributes(
                array("KD_TINGKAT_KELAS" => $kodeTingkatKelas,
            "KD_PROGRAM_PENGAJARAN" => $kodeProgramPengajaran,
            "KD_ROMBEL" => $kodeRombel,
            "KD_TAHUN_AJARAN" => $tahunAjaran), array('order' => 'TANGGAL_BAYAR DESC'));
        //return $listBayar;
        $criteria = new CDbCriteria;
        $criteria->addColumnCondition(array('KD_TINGKAT_KELAS' => $kodeTingkatKelas,'KD_PROGRAM_PENGAJARAN' => $kodeProgramPengajaran,'KD_ROMBEL' => $kodeRombel, "KD_TAHUN_AJARAN" => $tahunAjaran));
        return new CActiveDataProvider($this, array('criteria'=>$criteria));
    }
}
