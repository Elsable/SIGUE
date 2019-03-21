<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Roles Controller
 *
 * @property \App\Model\Table\RolesTable $Roles
 *
 * @method \App\Model\Entity\Role[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RolesController extends AppController
{

    // *************************************************
    // inicia bloque de ifentificación de usuario
    // *************************************************
    public function isAuthorized($user) {
        // Obteniendo los roles del usuario
        $id_usuario=$user['id'];
        $user_roles = $this->Roles
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
        $this->paginate = [
            'contain' => ['Users']
        ];
        $roles = $this->paginate($this->Roles);

        $this->set(compact('roles'));
    }

    /**
     * View method
     *
     * @param string|null $id Role id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $role = $this->Roles->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('role', $role);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $role = $this->Roles->newEntity();
        if ($this->request->is('post')) {
            $role = $this->Roles->patchEntity($role, $this->request->getData());
            if ($this->Roles->save($role)) {
                $this->Flash->success(__('The role has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The role could not be saved. Please, try again.'));
        }
        $users = $this->Roles->Users->find('list')->order(['fullname']);
        $this->set(compact('role', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Role id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $role = $this->Roles->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $role = $this->Roles->patchEntity($role, $this->request->getData());
            if ($this->Roles->save($role)) {
                $this->Flash->success(__('The role has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The role could not be saved. Please, try again.'));
        }
        $users = $this->Roles->Users->find('list')->order(['fullname']);
        $this->set(compact('role', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Role id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $role = $this->Roles->get($id);
        if ($this->Roles->delete($role)) {
            $this->Flash->success(__('The role has been deleted.'));
        } else {
            $this->Flash->error(__('The role could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
