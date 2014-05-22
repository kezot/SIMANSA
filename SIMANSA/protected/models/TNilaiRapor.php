<?php

/**
 * This is the model class for table "t_nilai_rapor".
 *
 * The followings are the available columns in table 't_nilai_rapor':
 * @property string $NIS
 * @property string $KD_TAHUN_AJARAN
 * @property string $KD_TINGKAT_KELAS
 * @property string $KD_PROGRAM_PENGAJARAN
 * @property string $KD_ROMBEL
 * @property string $KD_PERIODE_BELAJAR
 * @property integer $SAKIT
 * @property integer $IJIN
 * @property integer $ABSEN
 * @property string $TANGGAL_DIBERIKAN
 * @property string $CATATAN
 * @property string $STATUS_ENTRY
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
 * @property TNilaiRaporEkstra[] $tNilaiRaporEkstras
 * @property TNilaiRaporEkstra[] $tNilaiRaporEkstras1
 * @property TNilaiRaporEkstra[] $tNilaiRaporEkstras2
 * @property TNilaiRaporEkstra[] $tNilaiRaporEkstras3
 * @property TNilaiRaporEkstra[] $tNilaiRaporEkstras4
 * @property TNilaiRaporEkstra[] $tNilaiRaporEkstras5
 * @property TNilaiRaporKepribadian[] $tNilaiRaporKepribadians
 * @property TNilaiRaporKepribadian[] $tNilaiRaporKepribadians1
 * @property TNilaiRaporKepribadian[] $tNilaiRaporKepribadians2
 * @property TNilaiRaporKepribadian[] $tNilaiRaporKepribadians3
 * @property TNilaiRaporKepribadian[] $tNilaiRaporKepribadians4
 * @property TNilaiRaporKepribadian[] $tNilaiRaporKepribadians5
 * @property TNilaiRaporNilai[] $tNilaiRaporNilais
 * @property TNilaiRaporNilai[] $tNilaiRaporNilais1
 * @property TNilaiRaporNilai[] $tNilaiRaporNilais2
 * @property TNilaiRaporOrganisasi[] $tNilaiRaporOrganisasis
 * @property TNilaiRaporOrganisasi[] $tNilaiRaporOrganisasis1
 * @property TNilaiRaporOrganisasi[] $tNilaiRaporOrganisasis2
 * @property TNilaiRaporOrganisasi[] $tNilaiRaporOrganisasis3
 * @property TNilaiRaporOrganisasi[] $tNilaiRaporOrganisasis4
 * @property TNilaiRaporOrganisasi[] $tNilaiRaporOrganisasis5
 */
class TNilaiRapor extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 't_nilai_rapor';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('SAKIT, IJIN, ABSEN', 'numerical', 'integerOnly'=>true),
			array('NIS', 'length', 'max'=>12),
			array('KD_TAHUN_AJARAN, KD_TINGKAT_KELAS', 'length', 'max'=>2),
			array('KD_PROGRAM_PENGAJARAN, KD_PERIODE_BELAJAR, STATUS_ENTRY', 'length', 'max'=>1),
			array('KD_ROMBEL', 'length', 'max'=>15),
			array('CATATAN', 'length', 'max'=>255),
			array('USERNAME', 'length', 'max'=>20),
			array('TANGGAL_DIBERIKAN, TANGGAL_AKSES', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('NIS, KD_TAHUN_AJARAN, KD_TINGKAT_KELAS, KD_PROGRAM_PENGAJARAN, KD_ROMBEL, KD_PERIODE_BELAJAR, SAKIT, IJIN, ABSEN, TANGGAL_DIBERIKAN, CATATAN, STATUS_ENTRY, USERNAME, TANGGAL_AKSES', 'safe', 'on'=>'search'),
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
			'tNilaiRaporEkstras' => array(self::HAS_MANY, 'TNilaiRaporEkstra', 'NIS'),
			'tNilaiRaporEkstras1' => array(self::HAS_MANY, 'TNilaiRaporEkstra', 'KD_TAHUN_AJARAN'),
			'tNilaiRaporEkstras2' => array(self::HAS_MANY, 'TNilaiRaporEkstra', 'KD_TINGKAT_KELAS'),
			'tNilaiRaporEkstras3' => array(self::HAS_MANY, 'TNilaiRaporEkstra', 'KD_PROGRAM_PENGAJARAN'),
			'tNilaiRaporEkstras4' => array(self::HAS_MANY, 'TNilaiRaporEkstra', 'KD_ROMBEL'),
			'tNilaiRaporEkstras5' => array(self::HAS_MANY, 'TNilaiRaporEkstra', 'KD_PERIODE_BELAJAR'),
			'tNilaiRaporKepribadians' => array(self::HAS_MANY, 'TNilaiRaporKepribadian', 'NIS'),
			'tNilaiRaporKepribadians1' => array(self::HAS_MANY, 'TNilaiRaporKepribadian', 'KD_TAHUN_AJARAN'),
			'tNilaiRaporKepribadians2' => array(self::HAS_MANY, 'TNilaiRaporKepribadian', 'KD_TINGKAT_KELAS'),
			'tNilaiRaporKepribadians3' => array(self::HAS_MANY, 'TNilaiRaporKepribadian', 'KD_PROGRAM_PENGAJARAN'),
			'tNilaiRaporKepribadians4' => array(self::HAS_MANY, 'TNilaiRaporKepribadian', 'KD_ROMBEL'),
			'tNilaiRaporKepribadians5' => array(self::HAS_MANY, 'TNilaiRaporKepribadian', 'KD_PERIODE_BELAJAR'),
			'tNilaiRaporNilais' => array(self::HAS_MANY, 'TNilaiRaporNilai', 'NIS'),
			'tNilaiRaporNilais1' => array(self::HAS_MANY, 'TNilaiRaporNilai', 'KD_TAHUN_AJARAN'),
			'tNilaiRaporNilais2' => array(self::HAS_MANY, 'TNilaiRaporNilai', 'KD_ROMBEL'),
			'tNilaiRaporOrganisasis' => array(self::HAS_MANY, 'TNilaiRaporOrganisasi', 'NIS'),
			'tNilaiRaporOrganisasis1' => array(self::HAS_MANY, 'TNilaiRaporOrganisasi', 'KD_TAHUN_AJARAN'),
			'tNilaiRaporOrganisasis2' => array(self::HAS_MANY, 'TNilaiRaporOrganisasi', 'KD_TINGKAT_KELAS'),
			'tNilaiRaporOrganisasis3' => array(self::HAS_MANY, 'TNilaiRaporOrganisasi', 'KD_PROGRAM_PENGAJARAN'),
			'tNilaiRaporOrganisasis4' => array(self::HAS_MANY, 'TNilaiRaporOrganisasi', 'KD_ROMBEL'),
			'tNilaiRaporOrganisasis5' => array(self::HAS_MANY, 'TNilaiRaporOrganisasi', 'KD_PERIODE_BELAJAR'),
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
			'KD_PERIODE_BELAJAR' => 'Kd Periode Belajar',
			'SAKIT' => 'Sakit',
			'IJIN' => 'Ijin',
			'ABSEN' => 'Absen',
			'TANGGAL_DIBERIKAN' => 'Tanggal Diberikan',
			'CATATAN' => 'Catatan',
			'STATUS_ENTRY' => 'Status Entry',
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
	public function search($pagination)
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('NIS',$this->NIS,true);
		$criteria->compare('KD_TAHUN_AJARAN',$this->KD_TAHUN_AJARAN,true);
		$criteria->compare('KD_TINGKAT_KELAS',$this->KD_TINGKAT_KELAS,true);
		$criteria->compare('KD_PROGRAM_PENGAJARAN',$this->KD_PROGRAM_PENGAJARAN,true);
		$criteria->compare('KD_ROMBEL',$this->KD_ROMBEL,true);
		$criteria->compare('KD_PERIODE_BELAJAR',$this->KD_PERIODE_BELAJAR,true);
		$criteria->compare('SAKIT',$this->SAKIT);
		$criteria->compare('IJIN',$this->IJIN);
		$criteria->compare('ABSEN',$this->ABSEN);
		$criteria->compare('TANGGAL_DIBERIKAN',$this->TANGGAL_DIBERIKAN,true);
		$criteria->compare('CATATAN',$this->CATATAN,true);
		$criteria->compare('STATUS_ENTRY',$this->STATUS_ENTRY,true);
		$criteria->compare('USERNAME',$this->USERNAME,true);
		$criteria->compare('TANGGAL_AKSES',$this->TANGGAL_AKSES,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
                        'pagination'=> array(
                            'pageSize'=>$pagination,
                        ),
                )
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TNilaiRapor the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
