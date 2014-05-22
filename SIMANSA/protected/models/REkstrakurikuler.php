<?php

/**
 * This is the model class for table "r_ekstrakurikuler".
 *
 * The followings are the available columns in table 'r_ekstrakurikuler':
 * @property integer $ID_EKSTRAKURIKULER
 * @property string $NM_EKSTRAKURIKULER
 * @property string $USERNAME
 * @property string $TANGGAL_AKSES
 *
 * The followings are the available model relations:
 * @property Auth $uSERNAME
 * @property TNilaiRaporEkstra[] $tNilaiRaporEkstras
 */
class REkstrakurikuler extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'r_ekstrakurikuler';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('NM_EKSTRAKURIKULER', 'length', 'max'=>50),
			array('USERNAME', 'length', 'max'=>20),
			array('TANGGAL_AKSES', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID_EKSTRAKURIKULER, NM_EKSTRAKURIKULER, USERNAME, TANGGAL_AKSES', 'safe', 'on'=>'search'),
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
			'uSERNAME' => array(self::BELONGS_TO, 'Auth', 'USERNAME'),
			'tNilaiRaporEkstras' => array(self::HAS_MANY, 'TNilaiRaporEkstra', 'ID_EKSTRAKURIKULER'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID_EKSTRAKURIKULER' => 'Id Ekstrakurikuler',
			'NM_EKSTRAKURIKULER' => 'Nm Ekstrakurikuler',
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

		$criteria->compare('ID_EKSTRAKURIKULER',$this->ID_EKSTRAKURIKULER);
		$criteria->compare('NM_EKSTRAKURIKULER',$this->NM_EKSTRAKURIKULER,true);
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
	 * @return REkstrakurikuler the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
