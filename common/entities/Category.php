<?php

namespace common\entities;

use Yii;
use yii\db\ActiveRecord;
use yii\helpers\ArrayHelper;
use yii\helpers\VarDumper;

/**
 * This is the model class for table "category".
 *
 * @property int $id
 * @property string $title
 * @property string $desc
 * @property int $type
 * @property int $parent_id
 * @property int $created_at
 * @property int $updated_at
 *
 * @property Article[] $articles
 * @property AttrProduct[] $attrProducts
 * @property Product[] $products
 */
class Category extends \yii\db\ActiveRecord
{
    const ARTICLE = 10;
    const PRODUCT = 20;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['type', 'parent_id'], 'integer'],
            [['title', 'desc'], 'string', 'max' => 255],
        ];
    }
    public function behaviors()
    {
        return [
            'timestamp' => [
                'class' => 'yii\behaviors\TimestampBehavior',
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['created_at', 'updated_at'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['updated_at'],
                ],
            ]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Наименование',
            'desc' => 'Описание',
            'type' => 'Тип',
            'parent_id' => 'Родительская категория',
            'created_at' => 'Дата добавления',
            'updated_at' => 'Дата обновления',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getArticles()
    {
        return $this->hasMany(Article::className(), ['category_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getParent()
    {
        return $this->hasOne($this::className(), ['id' => 'parent_id']);
    }

    public function getParents($type)
    {

        $categories = $this->getCategories($type);
        return $this->recarray($categories,$this->parent_id);
    }

    protected function recarray($categories, $id){
        global $array;

        foreach($categories as $k => $v) {
            if ($k == $id){
                $array[] = $v;
            }
        }
        return $array;
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategories($type)
    {
        return ArrayHelper::map($this::find()->where(['type' => $type])->all(),'id','title');
    }
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTypeName($type)
    {
        return $type == self::ARTICLE ? 'Статья' : 'Товар';
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Product::className(), ['category_id' => 'id']);
    }
}
