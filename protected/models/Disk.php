<?php

/**
 * This is the model class for table "disk".
 *
 * The followings are the available columns in table 'disk':
 * @property integer $id
 * @property double $width
 * @property integer $diameter
 * @property integer $bolts_count
 * @property double $pcd
 * @property double $et
 * @property double $dia
 * @property integer $price
 * @property string $name
 * @property string $color
 * @property integer $producer
 * @property integer $img
 * @property integer $priority
 * @property integer $percent
 * @property integer $rest
 * @property integer $published
 */
class Disk extends CActiveRecord
{
    const PARAM_WIDTH = 'width';
    const PARAM_DIAMETER = 'diameter';
    const PARAM_PCD2 = 'bolts_count';
    const PARAM_PCD = 'pcd';
    const PARAM_ET = 'et';

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'disk';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('width, diameter, bolts_count, pcd, et, dia, price, name, color, producer', 'required'),
			array('diameter, bolts_count, price, producer, img, priority, percent, rest, published', 'numerical', 'integerOnly'=>true),
			array('width, pcd, et, dia', 'numerical'),
			array('name', 'length', 'max'=>255),
			array('color', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, width, diameter, bolts_count, pcd, et, dia, price, name, color, producer, img, priority, percent, rest, published', 'safe', 'on'=>'search'),
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
			'bolts_count' => 'Bolts Count',
			'pcd' => 'Pcd',
			'et' => 'Et',
			'dia' => 'Dia',
			'price' => 'Price',
			'name' => 'Name',
			'color' => 'Color',
			'producer' => 'Producer',
			'img' => 'Img',
			'priority' => 'Priority',
			'percent' => 'Percent',
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
		$criteria->compare('bolts_count',$this->bolts_count);
		$criteria->compare('pcd',$this->pcd);
		$criteria->compare('et',$this->et);
		$criteria->compare('dia',$this->dia);
		$criteria->compare('price',$this->price);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('color',$this->color,true);
		$criteria->compare('producer',$this->producer);
		$criteria->compare('img',$this->img);
		$criteria->compare('priority',$this->priority);
		$criteria->compare('percent',$this->percent);
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
	 * @return Disk the static model class
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
        return [self::PARAM_WIDTH, self::PARAM_DIAMETER, self::PARAM_PCD, self::PARAM_PCD2, self::PARAM_ET];
    }
}
