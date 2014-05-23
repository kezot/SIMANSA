<?php

/**
 * This is the model class for table "r_asal_sekolah".
 *
 * The followings are the available columns in table 'r_asal_sekolah':
 * @property integer $ASAL_SMP
 * @property string $KD_JENIS_SEKOLAH
 * @property string $KD_STATUS_SEKOLAH
 * @property string $NM_SEKOLAH
 * @property string $ALAMAT_SEKOLAH
 * @property integer $ID_PROPINSI
 * @property integer $ID_KABUPATEN
 * @property integer $id_kecamatan
 * @property string $NO_TELP
 * @property string $USERNAME
 * @property string $TANGGAL_AKSES
 *
 * The followings are the available model relations:
 * @property RJenisSekolah $kDJENISSEKOLAH
 * @property Auth $uSERNAME
 * @property TCalonSiswa[] $tCalonSiswas
 * @property TSiswa[] $tSiswas
 */
class RAsalSekolah extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'r_asal_sekolah';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ID_PROPINSI, ID_KABUPATEN, id_kecamatan', 'numerical', 'integerOnly'=>true),
			array('KD_JENIS_SEKOLAH', 'length', 'max'=>2),
			array('KD_STATUS_SEKOLAH', 'length', 'max'=>1),
			array('NM_SEKOLAH', 'length', 'max'=>50),
			array('ALAMAT_SEKOLAH', 'length', 'max'=>255),
			array('NO_TELP', 'length', 'max'=>30),
			array('USERNAME', 'length', 'max'=>20),
			array('TANGGAL_AKSES', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ASAL_SMP, KD_JENIS_SEKOLAH, KD_STATUS_SEKOLAH, NM_SEKOLAH, ALAMAT_SEKOLAH, ID_PROPINSI, ID_KABUPATEN, id_kecamatan, NO_TELP, USERNAME, TANGGAL_AKSES', 'safe', 'on'=>'search'),
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
			'kDJENISSEKOLAH' => array(self::BELONGS_TO, 'RJenisSekolah', 'KD_JENIS_SEKOLAH'),
			'uSERNAME' => array(self::BELONGS_TO, 'Auth', 'USERNAME'),
			'tCalonSiswas' => array(self::HAS_MANY, 'TCalonSiswa', 'ASAL_SMP'),
			'tSiswas' => array(self::HAS_MANY, 'TSiswa', 'ASAL_SMP'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ASAL_SMP' => 'Asal Smp',
			'KD_JENIS_SEKOLAH' => 'Kd Jenis Sekolah',
			'KD_STATUS_SEKOLAH' => 'Kd Status Sekolah',
			'NM_SEKOLAH' => 'Nm Sekolah',
			'ALAMAT_SEKOLAH' => 'Alamat Sekolah',
			'ID_PROPINSI' => 'Id Propinsi',
			'ID_KABUPATEN' => 'Id Kabupaten',
			'id_kecamatan' => 'Id Kecamatan',
			'NO_TELP' => 'No Telp',
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

		$criteria->compare('ASAL_SMP',$this->ASAL_SMP);
		$criteria->compare('KD_JENIS_SEKOLAH',$this->KD_JENIS_SEKOLAH,true);
		$criteria->compare('KD_STATUS_SEKOLAH',$this->KD_STATUS_SEKOLAH,true);
		$criteria->compare('NM_SEKOLAH',$this->NM_SEKOLAH,true);
		$criteria->compare('ALAMAT_SEKOLAH',$this->ALAMAT_SEKOLAH,true);
		$criteria->compare('ID_PROPINSI',$this->ID_PROPINSI);
		$criteria->compare('ID_KABUPATEN',$this->ID_KABUPATEN);
		$criteria->compare('id_kecamatan',$this->id_kecamatan);
		$criteria->compare('NO_TELP',$this->NO_TELP,true);
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
	 * @return RAsalSekolah the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
