<?php

/**
 * This is the model class for table "opcion".
 *
 * The followings are the available columns in table 'opcion':
 * @property integer $id
 * @property string $nombre
 * @property integer $telefono_x_campana_id
 * @property integer $pregunta_id
 * @property string $fecha_inicio
 * @property string $fecha_fin
 *
 * The followings are the available model relations:
 * @property TelefonoXCampana $telefonoXCampana
 * @property Pregunta $pregunta
 */
class Opcion extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Opcion the static model class
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
		return 'opcion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, telefono_x_campana_id, pregunta_id', 'required'),
			array('telefono_x_campana_id, pregunta_id', 'numerical', 'integerOnly'=>true),
			array('nombre', 'length', 'max'=>10),
			array('fecha_inicio, fecha_fin', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nombre, telefono_x_campana_id, pregunta_id, fecha_inicio, fecha_fin', 'safe', 'on'=>'search'),
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
			'telefonoXCampana' => array(self::BELONGS_TO, 'TelefonoXCampana', 'telefono_x_campana_id'),
			'pregunta' => array(self::BELONGS_TO, 'Pregunta', 'pregunta_id'),
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
			'telefono_x_campana_id' => 'Telefono X Campana',
			'pregunta_id' => 'Pregunta',
			'fecha_inicio' => 'Fecha Inicio',
			'fecha_fin' => 'Fecha Fin',
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
		$criteria->compare('telefono_x_campana_id',$this->telefono_x_campana_id);
		$criteria->compare('pregunta_id',$this->pregunta_id);
		$criteria->compare('fecha_inicio',$this->fecha_inicio,true);
		$criteria->compare('fecha_fin',$this->fecha_fin,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}