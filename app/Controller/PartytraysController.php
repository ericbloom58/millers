<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

App::uses('AppController', 'Controller');
   
    
    class PartytraysController extends AppController {

        public function beforeRender() {
            parent::beforeRender();
           
        }
    	
       public function admin_index()
       {
           $this->set('partytrays', $this->Partytray->find('all'));
          
       }
       
       public function admin_add()
       {
           if(!empty($this->request->data))
           {
               $this->Partytray->create();
               if($this->Partytray->save($this->request->data))
               {
                   $this->Session->setFlash("New partytray successfully created.", 'flash_success');
                   
               }
               else {
                   $this->Session->setFlash("An error occurred. Please try again.", 'flash_error');
               }
               $this->redirect('/admin/partytrays');
               
           }
       }
       public function admin_edit($id)
       {
           
           if(!empty($this->request->data))
           {
               $this->Partytray->id = $id;
               if($this->Partytray->save($this->request->data))
               {
                   $this->Session->setFlash("Partytray edited successfully.", 'flash_success');
                   $this->redirect('/admin/partytrays');
               }
               else {
                   $this->Session->setFlash("An error occurred. Please try again.", 'flash_error');
               }
               
               $this->redirect('/admin/partytrays');
           }
           $this->data = $this->Partytray->findById($id);
       }
       
       public function admin_delete($id)
       {
           
         if($this->Partytray->delete($id))
             $this->Session->setFlash('Partytray removed successfully.', 'flash_success');
         else {
             $this->Session->setFlash('An error occurred. Please try again.', 'flash_error');
         }
         
         $this->redirect('/admin/partytrays');
       }
        
        
        }