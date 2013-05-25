<?php

/**
 * This is the model class for table "llamada".
 *
 * The followings are the available columns in table 'llamada':
 * @property integer $id
 * @property string $numero
 * @property string $fecha
 * @property integer $telefono_id
 *
 * The followings are the available model relations:
 * @property Telefono $telefono
 */
class Llamada extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Llamada the static model class
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
		return 'llamada';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('numero, fecha, telefono_id', 'required'),
			array('telefono_id', 'numerical', 'integerOnly'=>true),
			array('numero', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, numero, fecha, telefono_id', 'safe', 'on'=>'search'),
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
			'telefono' => array(self::BELONGS_TO, 'Telefono', 'telefono_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'numero' => 'Numero',
			'fecha' => 'Fecha',
			'telefono_id' => 'Telefono',
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
		$criteria->compare('numero',$this->numero,true);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('telefono_id',$this->telefono_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}