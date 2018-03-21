<?php

namespace common\entities;

use Yii;
use yii\db\ActiveRecord;
use yii\helpers\VarDumper;

/**
 * This is the model class for table "article".
 *
 * @property int $id
 * @property string $title
 * @property string $desc
 * @property string $text
 * @property int $category_id
 * @property int $published_at
 * @property int $created_at
 * @property int $updated_at
 * @property int $status
 *
 * @property Category $category
 */
class Article extends \yii\db\ActiveRecord
{
    const PUBLISHED = 1;
    const UNPUBLISHED = 0;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'article';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['text'], 'string'],
            [['published_at'], 'date', 'format' => 'php:d-m-Y'],
            [['published_at'], 'datepicker'],
            [['category_id','status'], 'integer'],
            [['title', 'desc'], 'string', 'max' => 255],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['category_id' => 'id']],
        ];
    }

    public function datepicker($attribute, $params)
    {
        return $this->$attribute = strtotime($this->$attribute);
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
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Название',
            'desc' => 'Описание',
            'text' => 'Текст',
            'published_at' => 'Дата публикаций',
            'created_at' => 'Дата добавления',
            'updated_at' => 'Дата обновления',
            'status' => 'Статус',
            'category_id' => 'Категория',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }
}
