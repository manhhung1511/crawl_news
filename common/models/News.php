<?php

namespace common\models;

use Yii;

/**
 * This is the model class for collection "news".
 *
 * @property \MongoDB\BSON\ObjectID|string $_id
 * @property mixed $title
 * @property mixed $img
 * @property mixed $desc
 * @property mixed $link
 * @property mixed $html
 */
class News extends \yii\mongodb\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function collectionName()
    {
        return ['mydatabase', 'news'];
    }

    /**
     * {@inheritdoc}
     */
    public function attributes()
    {
        return [
            '_id',
            'title',
            'img',
            'desc',
            'link',
            'html',
            'nav_id',
            'created_up',
            'updated_up'
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'img', 'desc', 'link', 'html'], 'safe']
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
            'img' => 'Img',
            'desc' => 'Desc',
            'link' => 'Link',
            'html' => 'Html',
        ];
    }

    public function getNavbar()
    {
       return $this->hasOne(Navbar::class, ['_id'=>'nav_id']);
    }
}
