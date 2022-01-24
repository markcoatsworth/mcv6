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
            $photoData = $this->request->getData();
            // Create slug if needed
            if (!isset($photoData['slug']) || empty($photoData['slug'])) {
                $photoData['slug'] = strtolower(substr(Text::slug($photoData['title']), 0, 255));    
            }
            // Image management
            $image = $this->request->getData('filename');
            if ($image != null && $image->getError() != UPLOAD_ERR_NO_FILE) {
                $imageFile = $image->getClientFilename();
                $photoData['filename'] = $imageFile;

                // Image upload
                $fileobject = $this->request->getData('filename');
                $uploadPath = 'photos/originals/';
                $destination = $uploadPath.$imageFile;
                $fileobject->moveTo($destination);

                // Image resizes
                $manager = new ImageManager(array('driver' => 'imagick'));
                $displayImage = $manager->make($destination)->widen(1080, function ($constraint) {
                    $constraint->upsize();
                });
                $displayImage->save('photos/'.$imageFile);
                $tnailImage = $manager->make($destination)->widen(120);
                $tnailImage->save('photos/tnails/'.$imageFile);
            }
            else {
                $eventData['image'] = "";
            }
            $photo = $this->Photos->patchEntity($photo, $photoData);
            if ($result = $this->Photos->save($photo)) {
                $this->Flash->success(__('This photo ('.$result->title.') has been saved.'));
                return $this->redirect(['controller' => 'Photos', 'action' => 'edit', $result->id]);
            }
            else {
                $this->Flash->error(__('This photo could not be saved. Please try again.'));
            }
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
            $photoData = $this->request->getData();
            // Create slug if needed
            if (!isset($photoData['slug']) || empty($photoData['slug'])) {
                $photoData['slug'] = strtolower(substr(Text::slug($photoData['title']), 0, 255));    
            }
            // Image management
            $image = $this->request->getData('filename');
            if ($image != null && $image->getError() != UPLOAD_ERR_NO_FILE) {
                $imageFile = $image->getClientFilename();
                $photoData['filename'] = $imageFile;

                // Image upload
                $fileobject = $this->request->getData('filename');
                $uploadPath = 'photos/originals/';
                $destination = $uploadPath.$imageFile;
                $fileobject->moveTo($destination);

                // Image resizes
                $manager = new ImageManager(array('driver' => 'imagick'));
                $displayImage = $manager->make($destination)->widen(1080, function ($constraint) {
                    $constraint->upsize();
                });
                $displayImage->save('photos/'.$imageFile);
                $tnailImage = $manager->make($destination)->widen(120);
                $tnailImage->save('photos/tnails/'.$imageFile);
            }
            else {
                $eventData['image'] = "";
            }
            $photo = $this->Photos->patchEntity($photo, $photoData);
            if ($result = $this->Photos->save($photo)) {
                $this->Flash->success(__('This photo ('.$photo->title.') has been saved.'));
                return $this->redirect(['controller' => 'Photos', 'action' => 'edit', $result->id]);
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