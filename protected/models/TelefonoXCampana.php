<?php

/**
 * This is the model class for table "telefono_x_campana".
 *
 * The followings are the available columns in table 'telefono_x_campana':
 * @property integer $id
 * @property integer $campana_id
 * @property integer $telefono_id
 * @property string $fecha_creacion
 * @property integer $activacion
 *
 * The followings are the available model relations:
 * @property Opcion[] $opcions
 * @property Campana $campana
 * @property Telefono $telefono
 */
class TelefonoXCampana extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return TelefonoXCampana the static model class
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
		return 'telefono_x_campana';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('campana_id, telefono_id', 'required'),
			array('campana_id, telefono_id, activacion', 'numerical', 'integerOnly'=>true),
			array('fecha_creacion', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, campana_id, telefono_id, fecha_creacion, activacion', 'safe', 'on'=>'search'),
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
			'opcions' => array(self::HAS_MANY, 'Opcion', 'telefono_x_campana_id'),
			'campana' => array(self::BELONGS_TO, 'Campana', 'campana_id'),
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
			'campana_id' => 'Campana',
			'telefono_id' => 'Telefono',
			'fecha_creacion' => 'Fecha Creacion',
			'activacion' => 'Activacion',
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
		$criteria->compare('campana_id',$this->campana_id);
		$criteria->compare('telefono_id',$this->telefono_id);
		$criteria->compare('fecha_creacion',$this->fecha_creacion,true);
		$criteria->compare('activacion',$this->activacion);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}