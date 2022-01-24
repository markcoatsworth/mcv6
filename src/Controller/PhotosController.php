<?php
// src/Controller/EventsController.php

namespace App\Controller;

use Intervention\Image\ImageManager;
use Cake\ORM\Table;
use Cake\Utility\Text;
use Cake\Event\EventInterface;

class PhotosController extends AppController
{
    public function gallery($name = null)
    {
        $this->set('name', $name);
    }

        /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $photos = $this->Photos->find('all');
        $this->set(compact('photos'));
    }

    /**
     * View method
     *
     * @param string|null $id Photo id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $photo = $this->Photos->get($id);
        $this->set(compact('photo'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $photo = $this->Photos->newEmptyEntity();
        if ($this->request->is('post')) {
            $photo = $this->Photos->patchEntity($photo, $this->request->getData());
            if ($this->Photos->save($photo)) {
                $this->Flash->success(__('The photo '.$photo->title.' has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The photo '.$photo->title.' could not be saved. Please, try again.'));
        }
        $this->set(compact('photo'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Photo id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $photo = $this->Photos->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $Photo = $this->Photos->patchEntity($photo, $this->request->getData());
            if ($this->Photos->save($photo)) {
                $this->Flash->success(__('This photo ('.$photo->title.') has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('This photo ('.$photo->title.') could not be saved. Please, try again.'));
        }
        $this->set(compact('photo'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Photo id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $photo = $this->Photos->get($id);
        if ($this->Photos->delete($photo)) {
            $this->Flash->success(__('The photo '.$photo->title.' has been deleted.'));
        } else {
            $this->Flash->error(__('The photo '.$photo->title.' could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

?>