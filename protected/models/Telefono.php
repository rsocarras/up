<?php

/**
 * This is the model class for table "telefono".
 *
 * The followings are the available columns in table 'telefono':
 * @property integer $id
 * @property string $numero
 * @property integer $estado_telefono_id
 *
 * The followings are the available model relations:
 * @property Llamada[] $llamadas
 * @property EstadoTelefono $estadoTelefono
 * @property TelefonoXCampana[] $telefonoXCampanas
 */
class Telefono extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Telefono the static model class
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
		return 'telefono';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('numero, estado_telefono_id', 'required'),
			array('estado_telefono_id', 'numerical', 'integerOnly'=>true),
			array('numero', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, numero, estado_telefono_id', 'safe', 'on'=>'search'),
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
			'llamadas' => array(self::HAS_MANY, 'Llamada', 'telefono_id'),
			'estadoTelefono' => array(self::BELONGS_TO, 'EstadoTelefono', 'estado_telefono_id'),
			'telefonoXCampanas' => array(self::HAS_MANY, 'TelefonoXCampana', 'telefono_id'),
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
			'estado_telefono_id' => 'Estado Telefono',
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
		$criteria->compare('estado_telefono_id',$this->estado_telefono_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}