<?php

namespace common\models;

use Yii;

/**
 * This is the model class for collection "Navbar".
 *
 * @property \MongoDB\BSON\ObjectID|string $_id
 * @property mixed $title
 * @property mixed $url
 */
class Navbar extends \yii\mongodb\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function collectionName()
    {
        return ['mydatabase', 'navbar'];
    }

    /**
     * {@inheritdoc}
     */
    public function attributes()
    {
        return [
            '_id',
            'title',
            'url',
            'slug',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'url', 'slug'], 'safe']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            '_id' => 'ID',
            'title' => 'Title',
            'url' => 'Url',
            'slug' => 'Slug'
        ];
    }

    public function getNews()
    {
        return $this->hasMany(News::class, ['nav_id'=>'_id']);
    }

}
