<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// File: /app/Controller/ContentsController.php
class ContentController extends AppController {
    public $helpers = array('Html', 'Form', 'Flash');
    public $components = array('Flash');
   
     public function beforeFilter() {
        parent::beforeFilter();
        // Allow users to register and logout.
        $this->Auth->allow('about_us', 'news', 'news2', 'specials', 'newspost');
    }
    //Code for About Us Page
    public function about_us() {
        $this->set('aboutus', $this->Content->findById(16));
    }
    //End of Code for About Us Page
    
    public function galleries($available=null) {
        if($available === null) {
        $homes = $this->Content->find('list', array(
            'fields' => array('id','linked_gallery'),
            'conditions' => array(
            'Content.page_type' => 'house'
        )));
        }
        else
        {
             $homes = $this->Content->find('list', array(
                 'fields' => array('id','linked_gallery'),
                 'conditions' => array(
            'Content.page_type' => 'house',
                 'Content.available' => 'yes'
        )));
        }

        
        $this->loadModel('Gallery');
       
        
        $galleries = $this->Gallery->find('all', array('conditions' => array('folder' => $homes)));

        foreach($galleries as $i => $gallery): 
            $log_directory = WWW_ROOT . 'files' . DS . 'galleries' . DS . $gallery['Gallery']['folder'];
                $files = array_diff(scandir($log_directory), array('.', '..'));
         //   pr($files);
        $galleries[$i]['Gallery']['first_image'] =  array_shift($files);


        endforeach;

        //pr($galleries); exit();
        $this->set('galleries', $galleries);
    }
    
    public function newspost($id = null)
    {
        $this->loadModel('Blog');
        $news = $this->Blog->findById($id);
        //pr($content);
        $anews = $this->Blog->find('all');
        
        $this->set('news', $news);
        $this->set('anews', $anews);
    }
        
    //Code for News Blog 
    public function news()
    {
        $this->loadModel('Blog');
        $news = $this->Blog->find('all', array(
            'order' => array(
                'created' => 'DESC'
            )
        ));
     //   pr($news); exit();
        $this->set('news', $news);
    }
    //End of Code for News Blog
    public function specials()
    {
        $this->loadModel('Special');
        $specials = $this->Special->find('all', array(
            'order' => array(
                'created' => 'DESC'
            )
        ));
        $this->set('specials', $specials);
    }
    //Code for Home Page
    public function home()
    {
        $this->set('home', $this->Content->findById(7));
        $this->set('notification', $this->Content->findById(17));
    }
    //End of Code for Home PAge
    
    public function meats()
    {
        $this->set('meats', $this->Content->findById(18));
    }
    
    public function hotfoods()
    {
        $this->set('hotfoods', $this->Content->findById(19));
    }
    
    public function admin_index() {
        $this->set('contents', $this->Content->find('all'));
    }

    public function view($id) {
        if (!$id) {
            throw new NotFoundException(__('Invalid content'));
        }

        $content = $this->Content->findById($id);
        if (!$content) {
            throw new NotFoundException(__('Invalid content'));
        }
        $this->set('content', $content);
    }

    public function admin_add() {
        if ($this->request->is('post')) {
            //Added this line
            
            if ($this->Content->save($this->request->data)) {
                $this->Flash->success(__('Your content has been saved.'));
                return $this->redirect(array('action' => 'index'));
            }
        }
        
        $directories = glob('files/galleries/*' , GLOB_ONLYDIR);
        $galleries = array(null => '{none}');
        foreach($directories as $d)
        {
            $n = explode("/", $d);
            $name = end($n);
            $galleries[$name] = $name;
        }
        $this->set('galleries', $galleries);
    }   
    
    public function admin_edit($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Invalid content'));
        }

        $content = $this->Content->findById($id);
        if (!$content) {
        throw new NotFoundException(__('Invalid content'));
        }

        if ($this->request->is(array('content', 'put'))) {
            $this->Content->id = $id;
            if ($this->Content->save($this->request->data)) {
                $this->Flash->success(__('Your content has been updated.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Flash->error(__('Unable to update your content.'));
        }

        if (!$this->request->data) {
            $this->request->data = $content;
        }
        $directories = glob('files/galleries/*' , GLOB_ONLYDIR);
        $galleries = array(null => '{none}');
        foreach($directories as $d)
        {
            $n = explode("/", $d);
            $name = end($n);
            $galleries[$name] = $name;
        }
        $this->set('galleries', $galleries);
   }
   
   public function admin_delete($id) {
       
        if ($this->Content->delete($id)) {
            $this->Flash->success(
                __('The content with id: %s has been deleted.', h($id))
            );
        } else {
            $this->Flash->error(
                __('The content with id: %s could not be deleted.', h($id))
            );
        }

        return $this->redirect(array('action' => 'index'));
   }
   
   
   public function isAuthorized($user) {
        // All registered users can add contents
        if ($this->action === 'add') {
            return true;
        }

        // The owner of a content can edit and delete it
        if (in_array($this->action, array('edit', 'delete'))) {
            $contentId = (int) $this->request->params['pass'][0];
            if ($this->Content->isOwnedBy($contentId, $user['id'])) {
                return true;
            }
        }

        return parent::isAuthorized($user);
    }
}