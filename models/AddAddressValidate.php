<?php

namespace app\models;

use yii\base\Model;
use app\models\Addresses;

/**
 * Class for validation Addresses
 */
class AddAddressValidate extends Model
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
    
    public function save() 
    {
        $adress = new Addresses;
        $adress->user_id = $this->user_id;
        $adress->zip = $this->zip;
        $adress->country = $this->country;
        $adress->city = $this->city;
        $adress->street = $this->street;
        $adress->house = $this->house;
        $adress->office = $this->office;
        return $adress->save();
    }
}

