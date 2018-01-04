<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

App::uses('AppController', 'Controller');
   
    
    class RecipesController extends AppController {

        public function beforeRender() {
            parent::beforeRender();
           
        }
    	
       public function admin_index()
       {
           $this->set('recipes', $this->Recipe->find('all'));
          
       }
       
       public function admin_add()
       {
           if(!empty($this->request->data))
           {
               $this->Recipe->create();
               if($this->Recipe->save($this->request->data))
               {
                   $this->Session->setFlash("New recipe successfully created.", 'flash_success');
                   
               }
               else {
                   $this->Session->setFlash("An error occurred. Please try again.", 'flash_error');
               }
               $this->redirect('/admin/recipes');
               
           }
       }
       public function admin_edit($id)
       {
           
           if(!empty($this->request->data))
           {
               
               $uploaddir = WWW_ROOT . 'files' . DS . 'uploads' . DS;
            
            // name of file on the server
            $uploadfile = $uploaddir . basename($this->request->data['Recipe']['image_url']['name']);
          //  pr($uploadfile);
            if(move_uploaded_file($this->request->data['Recipe']['image_url']['tmp_name'], $uploadfile))
            {
//                    $this->request->data['Product']['image_url'] = $uploadfile;
            $this->request->data['Recipe']['image_url'] = "/files/uploads/" . basename($this->request->data['Recipe']['image_url']['name']);
            }
            else 
            {
                unset($this->request->data['Recipe']['image_url']);
            }
            
               
               $this->Recipe->id = $id;
               if($this->Recipe->save($this->request->data))
               {
                   $this->Session->setFlash("Recipe edited successfully.", 'flash_success');
                   $this->redirect('/admin/recipes');
               }
               else {
                   $this->Session->setFlash("An error occurred. Please try again.", 'flash_error');
               }
               
               $this->redirect('/admin/recipes');
           }
           $this->data = $this->Recipe->findById($id);
       }
       
       public function admin_delete($id)
       {
           
         if($this->Recipe->delete($id))
             $this->Session->setFlash('Recipe removed successfully.', 'flash_success');
         else {
             $this->Session->setFlash('An error occurred. Please try again.', 'flash_error');
         }
         
         $this->redirect('/admin/recipes');
       }
        
        
        }