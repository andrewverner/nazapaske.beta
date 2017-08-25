<?php

/**
 * This is the model class for table "tire".
 *
 * The followings are the available columns in table 'tire':
 * @property integer $id
 * @property double $width
 * @property double $diameter
 * @property double $height
 * @property integer $season
 * @property integer $price
 * @property string $name
 * @property string $speed_index
 * @property integer $load_index
 * @property integer $studding
 * @property integer $img
 * @property integer $producer
 * @property integer $priority
 * @property integer $rest
 * @property integer $published
 */
class Tire extends CActiveRecord
{
    const PARAM_WIDTH = 'width';
    const PARAM_HEIGHT = 'height';
    const PARAM_DIAMETER = 'diameter';
    const PARAM_SEASON = 'season';
    const PARAM_STUDDING = 'studding';

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tire';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('width, diameter, height, price, name, producer', 'required'),
			array('season, price, load_index, studding, img, producer, priority, rest, published', 'numerical', 'integerOnly'=>true),
			array('width, diameter, height', 'numerical'),
			array('name', 'length', 'max'=>255),
			array('speed_index', 'length', 'max'=>2),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, width, diameter, height, season, price, name, speed_index, load_index, studding, img, producer, priority, rest, published', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'width' => 'Width',
			'diameter' => 'Diameter',
			'height' => 'Height',
			'season' => 'Season',
			'price' => 'Price',
			'name' => 'Name',
			'speed_index' => 'Speed Index',
			'load_index' => 'Load Index',
			'studding' => 'Studding',
			'img' => 'Img',
			'producer' => 'Producer',
			'priority' => 'Priority',
			'rest' => 'Rest',
			'published' => 'Published',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('width',$this->width);
		$criteria->compare('diameter',$this->diameter);
		$criteria->compare('height',$this->height);
		$criteria->compare('season',$this->season);
		$criteria->compare('price',$this->price);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('speed_index',$this->speed_index,true);
		$criteria->compare('load_index',$this->load_index);
		$criteria->compare('studding',$this->studding);
		$criteria->compare('img',$this->img);
		$criteria->compare('producer',$this->producer);
		$criteria->compare('priority',$this->priority);
		$criteria->compare('rest',$this->rest);
		$criteria->compare('published',$this->published);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Tire the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

    public static function getParamValues($param, array $conditions = [], $values = true)
    {
        $cr = new CDbCriteria();
        $cr->distinct = true;
        $cr->select = $param;
        $cr->order = "$param ASC";

        if ($conditions) {
            $cr->addColumnCondition($conditions);
        }

        $models = self::model()->findAll($cr);

        if (!$values) {
            return $models;
        }

        $data = [];
        foreach ($models as $model) {
            $data[$model->{$param}] = $model->{$param};
        }

        return $data;
    }

    public static function getFilterParams()
    {
        return [self::PARAM_WIDTH, self::PARAM_HEIGHT, self::PARAM_DIAMETER, self::PARAM_SEASON, self::PARAM_STUDDING];
    }
}
