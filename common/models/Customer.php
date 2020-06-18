<?php

namespace common\models;

use Yii;
use common\traits\HasTimestamp;

/**
 * Customer Model.
 *
 * @property int $id
 * @property string $name
 * @property string|null $email
 * @property string|null $contact
 * @property string|null $company
 * @property string|null $profile_image
 * @property string|null $device_token
 * @property int|null $device_type
 * @property int $status
 * @property string|null $created_at
 * @property string|null $updated_at
 */
class Customer extends \yii\db\ActiveRecord
{

    use HasTimestamp;

    const FOLDER_NAME = 'customers';

    const STATUS_DELETED = 0;
    const STATUS_INACTIVE = 9;
    const STATUS_ACTIVE = 10;


    /**
     * @var UploadedImageFile
     */
    public $imageFile;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'customer';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['device_type', 'status'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['name', 'email', 'company', 'profile_image'], 'string', 'max' => 255],
            [['contact'], 'string', 'max' => 10],
            [['device_token'], 'string', 'max' => 510],
            [['contact'], 'unique'],
            [['email'], 'unique'],
            ['email', 'email'],
            [['imageFile'], 'image', 'extensions' => 'png, jpg']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'email' => Yii::t('app', 'Email'),
            'contact' => Yii::t('app', 'Contact'),
            'company' => Yii::t('app', 'Company'),
            'profile_image' => Yii::t('app', 'Profile Image'),
            'device_token' => Yii::t('app', 'Device Token'),
            'device_type' => Yii::t('app', 'Device Type'),
            'status' => Yii::t('app', 'Status'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

    /**
     * {@inheritdoc}
     */
	public function attributeHints() {
		return [
            'name' => Yii::t('app', 'Customer Name'),
            'email' => Yii::t('app', 'Customer Email'),
            'contact' => Yii::t('app', 'Customer Contact'),
            'company' => Yii::t('app', 'Customer Company'),
            'profile_image' => Yii::t('app', 'Profile Image'),
            'device_type' => Yii::t('app', 'Device Type'),
            'status' => Yii::t('app', 'Status'),
		];
    }

    /**
     * {@inheritDoc}
     */
    public function beforeSave($insert)
    {
        if (!parent::beforeSave($insert)) {
			return false;
        }

        if ($this->status) {
            switch ($this->status) {
                case '1': $this->status = self::STATUS_ACTIVE; break;
                case '0': $this->status = self::STATUS_INACTIVE; break;
            }
        }
        return true;
    }
    
    /**
     * Handles imageFile Upload
     *
     * @return Boolean
     */
    public function upload() {
        try {

            if ($this->validate('imageFile')) {
                $folder = Yii::getAlias('@root', true) . DIRECTORY_SEPARATOR . 'uploads' . DIRECTORY_SEPARATOR . self::FOLDER_NAME . DIRECTORY_SEPARATOR;
                $fileName = $this->imageFile->baseName . '-' . time() . '.' . $this->imageFile->extension;
                $this->imageFile->saveAs($folder . $fileName);
                $this->profile_image = $fileName;
                return true;
            } else {
                return false;
            }

        }
        catch (\Exception $e) {
            return false;
        }
        
    }
}
