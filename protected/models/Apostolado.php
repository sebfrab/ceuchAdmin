<?php

/**
 * This is the model class for table "apostolado".
 *
 * The followings are the available columns in table 'apostolado':
 * @property string $idapostolado
 * @property string $ano
 * @property string $mes
 * @property string $titulo
 * @property string $texto
 * @property integer $tipo
 */
class Apostolado extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
        public static $tipos=array('0'=>'General','1'=>'Misionero');
        public static $meses=array(
            '1'=>'Enero',
            '2'=>'Febrero',
            '3'=>'Marzo',
            '4'=>'Abril',
            '5'=>'Mayo',
            '6'=>'Junio',
            '7'=>'Julio',
            '8'=>'Agosto',
            '9'=>'Septiembre',
            '10'=>'Octubre',
            '11'=>'Noviembre',
            '12'=>'Diciembre',
            );
    
	public function tableName()
	{
		return 'apostolado';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ano, mes, titulo, texto, tipo', 'required'),
			array('tipo', 'numerical', 'integerOnly'=>true),
			array('mes', 'length', 'max'=>10),
                        array('ano', 'length', 'max'=>4),
			array('titulo', 'length', 'max'=>50),
                        array('ano','numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idapostolado, ano, mes, titulo, texto, tipo', 'safe', 'on'=>'search'),
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
			'idapostolado' => 'Idapostolado',
			'ano' => 'Año',
			'mes' => 'Mes',
			'titulo' => 'Titulo',
			'texto' => 'Texto',
			'tipo' => 'Tipo',
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

		$criteria->compare('idapostolado',$this->idapostolado,true);
		$criteria->compare('ano',$this->ano,true);
		$criteria->compare('mes',$this->mes,true);
		$criteria->compare('titulo',$this->titulo,true);
		$criteria->compare('texto',$this->texto,true);
		$criteria->compare('tipo',$this->tipo);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Apostolado the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
        public static function getTipos($key=null){
            if($key!==null)
                return self::$tipos[$key];
            return self::$tipos;
        }
        
        public static function getMeses($key=null){
            if($key!==null)
                return self::$meses[$key];
            return self::$meses;
        }
}
