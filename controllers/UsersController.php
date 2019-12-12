<?php

namespace app\controllers;

use yii\web\Controller;
use Yii;
use app\models\Users;
use app\models\Addresses;
use yii\data\Pagination;
use app\models\AddUserValidate;
use app\models\AddAddressValidate;
use app\models\EditUserValidate;
use app\models\EditAddressValidate;
use yii\helpers\Url;

/**
 * Class for work with users and them addresses
 */
class UsersController extends Controller 
{
    /**
     * @return Viev User List
     */
    public function actionIndex()
    {   
        $users = Users::find(); 
        $pages = new Pagination(['totalCount' => $users->count(), 'pageSize' => 5]);
        $userList = $users->offset($pages->offset)
        ->limit($pages->limit)
        ->all();
        
        return $this->render('usersList',compact('userList', 'pages'));
                
    }
    
    /**
     * Adding new users
     * @param void
     * @return view and display validation errors
     */
    public function actionAdd() 
    {
        $forms_data = Yii::$app->request->post();
        $model = new AddUserValidate;
        
        if(Yii::$app->request->isPost) {
          $model->login = $forms_data['login'];
          $model->password = $forms_data['password'];
          $model->name = $forms_data['name'];
          $model->surname = $forms_data['surname'];
          $model->sex = $forms_data['sex'];
          $model->email = $forms_data['email'];
          $model->zip = $forms_data['zip'];
          $model->country = $forms_data['country'];
          $model->city = $forms_data['city'];
          $model->street = $forms_data['street'];
          $model->house = $forms_data['house'];
          $model->office = $forms_data['office'];
                    
          $valid = $model->validate();
            
          if($model->validate() && $model->save()) {
                      
            Yii::$app->session->setFlash('success', 'User was created!!!');
            
          }
            
        }
                
        return $this->render('usersAdd', [
            'model' => $model
        ]);
    }
    
    /**
     * Editing User data
     * @param int $id
     */
    public function actionEdit($id)
    {
        $user = intval($id);
        
        $user = Users::findOne($id);
        
        $forms_data = Yii::$app->request->post();
        $model = new EditUserValidate;
        
        if(Yii::$app->request->isPost) {
          
          $model->login = $forms_data['login'];
          $model->password = $forms_data['password'];
          $model->name = $forms_data['name'];
          $model->surname = $forms_data['surname'];
          $model->sex = $forms_data['sex'];
          $model->email = $forms_data['email'];
          $model->zip = $forms_data['zip'];
          $model->country = $forms_data['country'];
          $model->city = $forms_data['city'];
          $model->street = $forms_data['street'];
          $model->house = $forms_data['house'];
          $model->office = $forms_data['office'];
                    
          $valid = $model->validate();
          if($valid) {
          
            $user->login = $model->login;
            $user->password = $model->password;
            $user->name = $model->name;
            $user->surname = $model->surname;
            $user->sex = $model->sex;
            $user->email = $model->email;
            $user->zip = $model->zip;
            $user->country = $model->country;
            $user->city = $model->city;
            $user->street = $model->street;
            $user->house = $model->house;
            $user->office = $model->office;
            if($user->save()) {
                Yii::$app->session->setFlash('success', 'User Changed');
            }
          }
          
          $errors = $model->getErrors();
            
        }
                
        return $this->render('usersEdit', compact('user', 'errors'));
    }
    
    /**
     * User Card page
     * @param int
     * @return view 
     */
    public function actionCard($id)
    {
        $user = Users::findOne(['id' => intval($id)]);
        
        $addresses = Addresses::find()->where(['user_id'=> $id]); 
        $pages = new Pagination(['totalCount' => $addresses->count(), 'pageSize' => 5]);
        $addressList = $addresses->offset($pages->offset)
        ->limit($pages->limit)
        ->all();
        
        return $this->render('usersCard',compact('addressList', 'pages', 'user'));
    }
    
    /**
     * Added new addition address
     * @param int
     */
    public function actionAddress($id)
    {
        $id = intval($id);
        
        $forms_data = Yii::$app->request->post();
        $model = new AddAddressValidate;
        
        if(Yii::$app->request->isPost) {
         
          $model->user_id = $id;
          $model->zip = $forms_data['zip'];
          $model->country = $forms_data['country'];
          $model->city = $forms_data['city'];
          $model->street = $forms_data['street'];
          $model->house = $forms_data['house'];
          $model->office = $forms_data['office'];
            
          if($model->validate() && $model->save()) {
                      
            Yii::$app->session->setFlash('success', 'Addition Address Added!!!');
            
          }
            
        }
                
        return $this->render('usersAddress', [
            'model' => $model
        ]);
    }
    
    /**
     * Delete user
     * @param int
     * @return to previous page
     */
    public function actionDelete($id)
    {
       $user = Users::findOne($id);
       if($user->delete()) {
          Yii::$app->session->setFlash('success', 'User id: ' . $id . ' was deleted');
          Yii::$app->response->redirect(Url::toRoute('users/index'));
       }    
    }

    /**
     * Delete Addition address
     * @param int
     * @redirect on previous page
     */
    public function actionDeladr($id)
    {
       $id = intval($id);
       $adr = Addresses::findOne($id);
       $redirect_id = $adr->user_id;
       
       if($adr->delete()) {
          Yii::$app->session->setFlash('success', 'Address id: ' . $id . ' was deleted');
          Yii::$app->response->redirect(Url::toRoute('users/card/' . $redirect_id));
       }    
    }
    
    
    /**
     * Editing addition address
     * @param int
     * @return view
     */
    
    public function actionEditadr($id)
    {
        $id = intval($id);
        
        $adr = Addresses::findOne($id);
        
        $forms_data = Yii::$app->request->post();
        $model = new EditAddressValidate;
        
        if(Yii::$app->request->isPost) {
          
          $model->zip = $forms_data['zip'];
          $model->country = $forms_data['country'];
          $model->city = $forms_data['city'];
          $model->street = $forms_data['street'];
          $model->house = $forms_data['house'];
          $model->office = $forms_data['office'];
                    
          $valid = $model->validate();
          if($valid) {
          
            $adr->zip = $model->zip;
            $adr->country = $model->country;
            $adr->city = $model->city;
            $adr->street = $model->street;
            $adr->house = $model->house;
            $adr->office = $model->office;
            if($adr->save()) {
                Yii::$app->session->setFlash('success', 'Address Changed');
            }
          }
          
          $errors = $model->getErrors();
            
        }
                
        return $this->render('adrEdit', compact('adr', 'errors'));
    }
    
}

