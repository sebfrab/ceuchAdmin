<?php

/**
 * This is the model class for table "albumes".
 *
 * The followings are the available columns in table 'albumes':
 * @property string $idalbumes
 * @property string $titulo
 * @property string $ano
 * @property string $portada
 * @property string $fecha
 */
class Albumes extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
        public $image;
	public function tableName()
	{
		return 'albumes';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('titulo', 'length', 'max'=>50),
			array('ano', 'length', 'max'=>7),
			array('portada', 'length', 'max'=>250),
                        array('image', 'file', 'types'=>'jpg'),
			array('fecha', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idalbumes, titulo, ano, portada, fecha', 'safe', 'on'=>'search'),
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
			'idalbumes' => 'Idalbumes',
			'titulo' => 'Titulo',
			'ano' => 'Ano',
			'portada' => 'Portada',
			'fecha' => 'Fecha',
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

		$criteria->compare('idalbumes',$this->idalbumes,true);
		$criteria->compare('titulo',$this->titulo,true);
		$criteria->compare('ano',$this->ano,true);
		$criteria->compare('portada',$this->portada,true);
		$criteria->compare('fecha',$this->fecha,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Albumes the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
