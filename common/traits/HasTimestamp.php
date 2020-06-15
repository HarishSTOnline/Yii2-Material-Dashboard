<?php

namespace common\traits;

use yii\behaviors\TimestampBehavior;

/**
 * Timestamp behavior
 */
trait HasTimestamp
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
                'value' => date('Y-m-d H:i:s')
            ]
        ];
    }
}
