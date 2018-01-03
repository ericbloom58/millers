<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// File: /app/Controller/BlogsController.php
class BlogController extends AppController {
    public $helpers = array('Html', 'Form', 'Flash');
    public $components = array('Flash');
   
     public function beforeFilter() {
        parent::beforeFilter();
        // Allow users to register and logout.
        //$this->Auth->allow('about_us', 'viewHomes', 'viewHome');
    }
  
    public function admin_index() {
        $this->set('blogs', $this->Blog->find('all'));
    }

    public function view($id) {
        if (!$id) {
            throw new NotFoundException(__('Invalid blog'));
        }

        $blog = $this->Blog->findById($id);
        if (!$blog) {
            throw new NotFoundException(__('Invalid blog'));
        }
        $this->set('blog', $blog);
    }

    public function admin_add() {
        if ($this->request->is('post')) {
            //Added this line
            
            if ($this->Blog->save($this->request->data)) {
                $this->Flash->success(__('Your blog has been saved.'));
                return $this->redirect(array('action' => 'index'));
            }
        }
    }   
    
    public function admin_edit($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Invalid blog'));
        }

        $blog = $this->Blog->findById($id);
        if (!$blog) {
        throw new NotFoundException(__('Invalid blog'));
        }

        if ($this->request->is(array('blog', 'put'))) {
            $this->Blog->id = $id;
            if ($this->Blog->save($this->request->data)) {
                $this->Flash->success(__('Your blog has been updated.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Flash->error(__('Unable to update your blog.'));
        }

        if (!$this->request->data) {
            $this->request->data = $blog;
        }
   }
   
   public function admin_delete($id) {

        if ($this->Blog->delete($id)) {
            $this->Flash->success(
                __('The blog with id: %s has been deleted.', h($id))
            );
        } else {
            $this->Flash->error(
                __('The blog with id: %s could not be deleted.', h($id))
            );
        }

        return $this->redirect(array('action' => 'index'));
   }
   
   
   public function isAuthorized($user) {
        // All registered users can add blogs
        if ($this->action === 'add') {
            return true;
        }

        // The owner of a blog can edit and delete it
        if (in_array($this->action, array('edit', 'delete'))) {
            $blogId = (int) $this->request->params['pass'][0];
            if ($this->Blog->isOwnedBy($blogId, $user['id'])) {
                return true;
            }
        }

        return parent::isAuthorized($user);
    }
}
