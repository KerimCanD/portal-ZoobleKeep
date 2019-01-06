<?php

namespace kouosl\ZoobleKeep\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use kouosl\ZoobleKeep\models\Note;

/**
 * NoteSearch represents the model behind the search form of `vendor\kouosl\ZoobleKeep\models\Note`.
 */
class NoteSearch extends Note
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['note_id'], 'integer'],
            [['note_title', 'user_id', 'edit_date', 'content'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Note::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'note_id' => $this->note_id,
            'edit_date' => $this->edit_date,
        ]);

        $query->andFilterWhere(['like', 'note_title', $this->note_title])
            ->andFilterWhere(['like', 'user_id', $this->user_id])
            ->andFilterWhere(['like', 'content', $this->content]);

        return $dataProvider;
    }
}
