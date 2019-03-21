<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{

    // *************************************************
    // inicia bloque de ifentificación de usuario
    // *************************************************
    public function isAuthorized($user) {
        // Obteniendo los roles del usuario
        $id_usuario=$user['id'];
        $user_roles = $this->Users->Roles
                            ->find()
                            ->where(['user_id'=>$id_usuario])
                            ->toArray();

        foreach($user_roles as $user_rol) {
            debug($user_rol->name);
        }
        
        // Se crea un if por cada cadena de usuarios que se les permite el acceso a las diferentes vistas
        $roles_permitidos=array('supervisor','gestor');
        /*if(count(array_intersect($roles_permitidos,$user_roles)>0)) {
            if(in_array($this->request->getParam('action'),['index','logout'])) {
                echo 'permiso de acceso a gestor o supervisor';
                return true;
            }
        }*/

        foreach($user_roles as $user_rol) {    
            echo "<br>verificando a ".$user_rol->name;
            if(in_array($user_rol->name,$roles_permitidos) and in_array($this->request->getParam('action'),['index','logout'])
            ) {
                echo '<br>acceso permitido a:'.$user_rol->name;
                return true;
            } else {
                echo '<br>acceso denegado a:'.$user_rol->name;
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

        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);

        $this->set('user', $user);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            // agregar por default el usuario activo
            $user->active=true;
            // Agregar el nombre completo del usuario
            $user->fullname=$user->lastname.' '.$user->motherlastname.' '.$user->firstname;
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            // Agregar el nombre completo del usuario
            $user->fullname=$user->lastname.' '.$user->motherlastname.' '.$user->firstname;
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    /*public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }*/

    public function login()
    {
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error('Nombre de usuario o contraseña incorrectos.');
        }
    }

    public function logout()
    {
        $this->Flash->success(__('¡Gracias, hasta pronto!'));
        return $this->redirect($this->Auth->logout());
    }

}
