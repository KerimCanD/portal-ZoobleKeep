<?php

namespace kouosl\ZoobleKeep\models;

use Yii;

/**
 * This is the model class for table "note".
 *
 * @property int $note_id
 * @property string $note_title
 * @property string $user_id
 * @property string $edit_date
 * @property string $content
 */
class Note extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'note';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['edit_date'], 'safe'],
            [['note_title', 'user_id', 'content'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'note_id' => 'Note ID',
            'note_title' => 'Note Title',
            'user_id' => 'User ID',
            'edit_date' => 'Edit Date',
            'content' => 'Content',
        ];
    }
}
