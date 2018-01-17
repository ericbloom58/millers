<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

App::uses('AppController', 'Controller');

// File: /app/Controller/CategoriesController.php
class CategoriesController extends AppController {
    public $helpers = array('Html', 'Form', 'Flash');
    public $components = array('Flash');

     public function beforeFilter() {
        parent::beforeFilter();
        // Allow users to register and logout.
    }
    
    //For Categories page of the site.
    function index($id = null) {
            $this->loadModel('Category'); //loads Category's Model then using the if below sets the PR to sort via Category THEN Category
           if(!isset($id))
                $categories = $this->Category->find('all', array('recursive' => 3, 'order' => 'Category.name ASC'));
            else
                $categories = $this->Category->findById($id, array('recursive' => 2));
       
            $this->set('categories', $categories);
        
//          echo pr($categories, true); exit();
    }
    // ^ should not currently be in use ^
        
    public function admin_index() {
        $this->set('categories', $this->Category->find('all'));
        
//        $categories = $this->Category->find('all');
//        echo pr($categories, true); exit();
    }

    public function view($id) {
        if (!$id) {
            throw new NotFoundException(__('Invalid category'));
        }

        $category = $this->Category->findById($id);
        if (!$category) {
            throw new NotFoundException(__('Invalid category'));
        }
        $this->set('category', $category);
    }

    public function admin_add() {
        if ($this->request->is('post')) {
            if ($this->Category->saveAll($this->request->data)) {
                $this->Session->setFlash("New category successfully created.", 'flash_success');
                return $this->redirect('/admin/categories');
            }
            else {
                   $this->Session->setFlash("An error occurred. Please try again.", 'flash_error');
            }
        }
        
         //$this->loadModel('Meat');
         //$this->set('meats', $this->Flavor->find('all', array('fields' => array('id', 'name'))));
    }   
    
    public function admin_edit($id = null) {

        if ($this->request->is('post')) {
            if ($this->Category->saveAll($this->request->data)) {
                $this->Session->setFlash("Your category has been successfully updated.", 'flash_success');
                return $this->redirect('/admin/categories');
            }
            $this->Flash->error(__('Unable to update your category.'));
        }
       else {
             if (!$id) {
            throw new NotFoundException(__('Invalid category'));
        }

        $category = $this->Category->findById($id);
        if (!$category) {
        throw new NotFoundException(__('Invalid category'));
        }
            $this->request->data = $category;
        }
        
        
         //$this->loadModel('Meat');
        //$this->set('meats', $this->Flavor->find('all', array('fields' => array('id', 'name'))));
    }
   
   public function admin_delete($id) {
      
        if ($this->Category->delete($id)) {
            $this->Flash->success(
                __('The category with id: %s has been deleted.', h($id))
            );
        } else {
            $this->Flash->error(
                __('The category with id: %s could not be deleted.', h($id))
            );
        }

        return $this->redirect(array('action' => 'index'));
   }
   
   
   public function isAuthorized($user) {
        // All registered users can add categories
        if ($this->action === 'add') {
            return true;
        }

        // The owner of a category can edit and delete it
        if (in_array($this->action, array('edit', 'delete'))) {
            $categoryId = (int) $this->request->params['pass'][0];
            if ($this->Category->isOwnedBy($categoryId, $user['id'])) {
                return true;
            }
        }

        return parent::isAuthorized($user);
    }
}
