<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Resources Controller
 *
 * @property \App\Model\Table\ResourcesTable $Resources
 *
 * @method \App\Model\Entity\Resource[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ResourcesController extends AppController
{

    // *************************************************
    // inicia bloque de ifentificación de usuario
    // *************************************************
    public function isAuthorized($user) {
        // Obteniendo los roles del usuario
        $id_usuario=$user['id'];
        $user_roles = $this->Resources->Users->Roles
                            ->find()
                            ->where(['user_id'=>$id_usuario])
                            ->toArray();

        foreach($user_roles as $user_rol) {
            debug($user_rol->name);
        }
        
        // Se crea un if por cada cadena de usuarios que se les permite el acceso a las diferentes vistas
        $validado=false;
     
        $roles_permitidos=array('supervisor');
        foreach($user_roles as $user_rol) {    
            //echo "<br>verificando a ".$user_rol->name;
            if(in_array($user_rol->name,$roles_permitidos) and in_array($this->request->getParam('action'),['index','add','edit','logout'])
            ) {
                //echo '<br>acceso permitido a:'.$user_rol->name;
                $validado=true;
                return true;
            }

        }

        if(!$validado) {
            $roles_permitidos=array('gestor');
            foreach($user_roles as $user_rol) {    
                //echo "<br>verificando a ".$user_rol->name;
                if(in_array($user_rol->name,$roles_permitidos) and in_array($this->request->getParam('action'),['index','logout'])
                ) {
                    //echo '<br>acceso permitido a:'.$user_rol->name;
                    $validado=true;
                    return true;
                }
            }
        }
       

        return parent::isAuthorized($user);
    }
    // *************************************************
    //   Termina bloque de identificación de usuario
    // *************************************************

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $resources = $this->paginate($this->Resources);

        $this->set(compact('resources'));
    }

    /**
     * View method
     *
     * @param string|null $id Resource id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    /*public function view($id = null)
    {
        $resource = $this->Resources->get($id, [
            'contain' => []
        ]);

        $this->set('resource', $resource);
    }*/

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $resource = $this->Resources->newEntity();
        if ($this->request->is('post')) {
            $resource = $this->Resources->patchEntity($resource, $this->request->getData());
            $resource->active=true;
            if ($this->Resources->save($resource)) {
                $this->Flash->success(__('The resource has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The resource could not be saved. Please, try again.'));
        }
        $this->set(compact('resource'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Resource id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $resource = $this->Resources->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $resource = $this->Resources->patchEntity($resource, $this->request->getData());
            if ($this->Resources->save($resource)) {
                $this->Flash->success(__('The resource has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The resource could not be saved. Please, try again.'));
        }
        $this->set(compact('resource'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Resource id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    /*
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $resource = $this->Resources->get($id);
        if ($this->Resources->delete($resource)) {
            $this->Flash->success(__('The resource has been deleted.'));
        } else {
            $this->Flash->error(__('The resource could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }*/
}
