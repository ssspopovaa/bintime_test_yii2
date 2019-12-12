<?php

namespace app\models;

use yii\base\Model;
use app\models\Addresses;

/**
 * Validate editing addresses
 */
class EditAddressValidate extends Model
{
    public $id;
    public $user_id;
    public $zip;
    public $country;
    public $city;
    public $street;
    public $house;
    public $office;
    
    public function rules()
    {
        return [
            [['zip', 'country', 'city', 'street', 'house'], 'required'],
            
        ];
    }
}
