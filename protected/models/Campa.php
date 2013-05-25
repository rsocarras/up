<?php

/**
 * This is the model class for table "campana".
 *
 * The followings are the available columns in table 'campana':
 * @property integer $id
 * @property string $nombre
 * @property string $fecha_inicio
 * @property string $fecha_finalizacion
 * @property integer $estado_campana_id
 * @property integer $empresa_id
 * @property string $descripcion
 * @property string $fecha_creacion
 *
 * The followings are the available model relations:
 * @property EstadoCampana $estadoCampana
 * @property Empresa $empresa
 * @property Pregunta[] $preguntas
 * @property TelefonoXCampana[] $telefonoXCampanas
 */
class Campa extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Campa the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'campana';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, fecha_inicio, fecha_finalizacion, estado_campana_id, empresa_id', 'required'),
			array('estado_campana_id, empresa_id', 'numerical', 'integerOnly'=>true),
			array('nombre', 'length', 'max'=>200),
			array('descripcion, fecha_creacion', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nombre, fecha_inicio, fecha_finalizacion, estado_campana_id, empresa_id, descripcion, fecha_creacion', 'safe', 'on'=>'search'),
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
			'estadoCampana' => array(self::BELONGS_TO, 'EstadoCampana', 'estado_campana_id'),
			'empresa' => array(self::BELONGS_TO, 'Empresa', 'empresa_id'),
			'preguntas' => array(self::HAS_MANY, 'Pregunta', 'campana_id'),
			'telefonoXCampanas' => array(self::HAS_MANY, 'TelefonoXCampana', 'campana_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nombre' => 'Nombre',
			'fecha_inicio' => 'Fecha Inicio',
			'fecha_finalizacion' => 'Fecha Finalizacion',
			'estado_campana_id' => 'Estado Campana',
			'empresa_id' => 'Empresa',
			'descripcion' => 'Descripcion',
			'fecha_creacion' => 'Fecha Creacion',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('fecha_inicio',$this->fecha_inicio,true);
		$criteria->compare('fecha_finalizacion',$this->fecha_finalizacion,true);
		$criteria->compare('estado_campana_id',$this->estado_campana_id);
		$criteria->compare('empresa_id',$this->empresa_id);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('fecha_creacion',$this->fecha_creacion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}