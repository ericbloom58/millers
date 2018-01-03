<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

App::uses('AppController', 'Controller');

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class SpecialsController extends AppController {
    public $helpers = array('Html', 'Form', 'Flash');
    public $components = array('Flash');

     public function beforeFilter() {
        parent::beforeFilter();
        // Allow users to register and logout.
    }
    
    
           
    public function admin_index() {
        $this->set('specials', $this->Special->find('all'));
        
//        $specials = $this->Special->find('all');
//        echo pr($specials, true); exit();
    }
    
    
    public function admin_add() {
        if ($this->request->is('post')) {
            $uploaddir = WWW_ROOT . 'files' . DS . 'uploads' . DS;
            
            // name of file on the server
            $uploadfile = $uploaddir . basename($this->request->data['Special']['image_url']['name']);
//            pr($uploadfile);
            if(move_uploaded_file($this->request->data['Special']['image_url']['tmp_name'], $uploadfile))
//                    $this->request->data['Special']['image_url'] = $uploadfile;
            $this->request->data['Special']['image_url'] = "/files/uploads/" . basename($this->request->data['Special']['image_url']['name']);
            else 
                unset($this->request->data['Special']['image_url']);
            
            if ($this->Special->saveAll($this->request->data)) {
                $this->Session->setFlash("New special successfully created.", 'flash_success');
                return $this->redirect('/admin/specials');
            }
            else {
                   $this->Session->setFlash("An error occurred. Please try again.", 'flash_error');
            }
        }
  /*      
        $directories = glob('files/galleries/*' , GLOB_ONLYDIR);
        $galleries = array(null => '{none}');
        foreach($directories as $d)
        {
            $n = explode("/", $d);
            $name = end($n);
            $galleries[$name] = $name;
        }
        $this->set('galleries', $galleries);*/
    }   
        
           
    public function admin_delete($id) {
      
        if ($this->Special->delete($id)) {
            $this->Flash->success(
                __('The special with id: %s has been deleted.', h($id))
            );
        } else {
            $this->Flash->error(
                __('The special with id: %s could not be deleted.', h($id))
            );
        }

        return $this->redirect(array('action' => 'index'));
   }
   
   public function isAuthorized($user) {
        // All registered users can add specials
        if ($this->action === 'add') {
            return true;
        }

        // The owner of a special can edit and delete it
        if (in_array($this->action, array('edit', 'delete'))) {
            $specialId = (int) $this->request->params['pass'][0];
            if ($this->Special->isOwnedBy($specialId, $user['id'])) {
                return true;
            }
        }

        return parent::isAuthorized($user);
    } 
}