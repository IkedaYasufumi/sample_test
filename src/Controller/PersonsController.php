<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controller;

use App\Controller\AppController; 


class PersonsController extends AppController
{
    public $paginate = [
        'limit'=>5,
        'order'=>['id'=>'asc'],
        'fields'=>['id','name','mail','age']
    ];
    
    public $helpers = ['Paginator' => ['templates' => 'paginator-templates'] ];
    
    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Paginator');
        
    }
    
    public function add() 
    { 
        $person = $this->Persons->newEntity(); 
        $this->set('person',$person);
        
        
        if($this->request->is('post')) {
            
            $this->Persons->patchEntity($person, $this->request->data);
            if($this->Persons->save($person)) { 
                return $this->redirect(['action' => 'index']);
            }
            if($person->errors()){
                $this->Flash->error('入力をご確認下さい。'); 
                
            }
 
        } 
     }
     
    public function index() 
    { 
        $this->set('persons',$this->paginate());
        //$this->set('persons', $this->Persons->find('all')); 
    }
    
    public function edit($id = null) 
    { 
        $person = $this->Persons->get($id); 
        
        if($this->request->is(['post', 'put'])) 
        { 
            $person = $this->Persons->patchEntity($person, $this->request->data); 
            
            if($this->Persons->save($person)) {
                return $this->redirect(['action' => 'index']); 
            } 
        }else{ 
            $this->set('person', $person); 
        }
    }

    public function delete($id = null) 
    { 
        $person = $this->Persons->get($id); 
        if($this->request->is(['post', 'put'])){ 
            if($this->Persons->delete($person)){ 
                return $this->redirect(['action' => 'index']); 
            }
        }else{ 
            $this->set('person', $person);
        }
    }
    
    public function find() 
    {
        $persons = [];
        //$find = [];
        
        if($this->request->is('post')) { 
            $find_name = $this->request->data['find_name']; 
            $find_age = $this->request->data['find_age']; 
            $find_mail = $this->request->data['find_mail']; 
            if($find_name != null){
                //$persons = $this->Persons->find()->where(["name like " => '%'.$find_name.'%']);
                $persons = $this->Persons->findByName($find_name);
            }
            
            if($find_mail != null){
                //$persons = $this->Persons->find()->where(["name like " => '%'.$find_name.'%']);
                $persons = $this->Persons->findByMail($find_mail);
            }
             
        } 
        $this->set('msg', null); 
        $this->set('persons', $persons); 
    }

}
