<?php

/**
 * This is the model class for table "pregunta".
 *
 * The followings are the available columns in table 'pregunta':
 * @property integer $id
 * @property string $texto
 * @property integer $campana_id
 * @property string $fecha_inicio
 * @property string $fecha_fin
 *
 * The followings are the available model relations:
 * @property Opcion[] $opcions
 * @property Campana $campana
 */
class Pregunta extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Pregunta the static model class
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
		return 'pregunta';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('texto, campana_id, fecha_inicio, fecha_fin', 'required'),
			array('campana_id', 'numerical', 'integerOnly'=>true),
			array('texto', 'length', 'max'=>120),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, texto, campana_id, fecha_inicio, fecha_fin', 'safe', 'on'=>'search'),
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
			'opcions' => array(self::HAS_MANY, 'Opcion', 'pregunta_id'),
			'campana' => array(self::BELONGS_TO, 'Campana', 'campana_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'texto' => 'Texto',
			'campana_id' => 'Campana',
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
		$criteria->compare('texto',$this->texto,true);
		$criteria->compare('campana_id',$this->campana_id);
		$criteria->compare('fecha_inicio',$this->fecha_inicio,true);
		$criteria->compare('fecha_fin',$this->fecha_fin,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}