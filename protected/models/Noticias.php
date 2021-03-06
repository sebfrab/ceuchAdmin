<?php

/**
 * This is the model class for table "noticias".
 *
 * The followings are the available columns in table 'noticias':
 * @property string $idnoticias
 * @property string $titulo
 * @property string $cuerpo
 * @property string $fecha
 * @property string $img
 */
class Noticias extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'noticias';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('titulo, cuerpo, img', 'required'),
			array('titulo', 'length', 'max'=>100),
			array('img', 'length', 'max'=>150),
                        array('img', 'file', 'types'=>'jpg, png'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idnoticias, titulo, cuerpo, fecha, img', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idnoticias' => 'Idnoticias',
			'titulo' => 'Titulo',
			'cuerpo' => 'Cuerpo',
			'fecha' => 'Fecha',
			'img' => 'Imagen',
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

		$criteria->compare('idnoticias',$this->idnoticias,true);
		$criteria->compare('titulo',$this->titulo,true);
		$criteria->compare('cuerpo',$this->cuerpo,true);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('img',$this->img,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Noticias the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
