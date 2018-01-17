<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

App::uses('AppModel', 'Model');


class Product extends AppModel {
    public $useTable = 'products';
    
    public $hasAndBelongsToMany = array(
        'Category' => array(
                'className' => 'Category',
                'joinTable' => 'product_categories',
                'foreignKey' => 'product_id',
                'associationForeignKey' => 'category_id',
                'unique' => true
            )
//        'User' => array(
//                'className' => 'User',
//                'joinTable' => 'user_products',
//                'foreignKey' => 'product_id',
//                'associationForeignKey' => 'user_id',
//                'unique' => true
//            )
    );
    //public $hasMany = array(
    //);
}
