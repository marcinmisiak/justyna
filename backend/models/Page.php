<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "page".
 *
 * @property integer $idpage
 * @property string $title
 * @property string $body
 * @property integer $author
 * @property string $create_date
 * @property string $keywords
 *
 * @property User $author0
 */
class Page extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'page';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'body', 'author'], 'required'],
            [['body'], 'string'],
            [['author'], 'integer'],
            [['create_date'], 'safe'],
            [['title'], 'string', 'max' => 45],
            [['keywords'], 'string', 'max' => 245]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idpage' => 'Idpage',
            'title' => 'Title',
            'body' => 'Body',
            'author' => 'Author',
            'create_date' => 'Create Date',
            'keywords' => 'Keywords',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuthor0()
    {
        return $this->hasOne(User::className(), ['id' => 'author']);
    }
}
