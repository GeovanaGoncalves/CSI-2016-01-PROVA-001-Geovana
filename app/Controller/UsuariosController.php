<?php

class UsuariosController extends AppController{

    public $helpers = array('Html', 'Form');
    public $components = array('Flash', 'Session');

    public function index(){
        $this->redirect(array('action' => 'area_administrativa'));
    }

    public function area_administrativa(){}

    public function view($id){
        if(!$id){
            $this->Flash->error(__('Usuario was not found!'));
        }
        $usuário = $this->Usuario->findById($id);
        $this->set('usuário', $usuário);
    }

    public function add(){
        if($this->request->is('post')){
            $this->Usuario->create();
            if($this->Usuario->save($this->request->data)){
                $this->Flash->success(__('Usuario cadastrado com sucesso'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Flash->error(__('Cadastro não pôde ser completado'));
        }
    }

    public function edit($id = null){
        if(!$id){
            throw new NotFoundException(__('Usuario inválido'));
        }
        $usuário = $this->Usuario->findById($id);
        if(!$usuário){
            throw new NotFoundException(__('Usuario inválido'));
        }
        if($this->request->is(array('post','put'))){
            $this->Usuario->id = $id;
            if($this->Usuario->save($this->request->data)){
                $this->Flash->success(__('Suas informações foram atualizadas com sucesso.'));
                $pacienteInfo = $this->request->data;
                $this->Session->write('Usuario',array(
                    'id' => $pacienteInfo['Usuario']['id'],
                    'login' => $pacienteInfo['Usuario']['login'],
                    'nome' => $pacienteInfo['Usuario']['nome']
                ));
                return $this->redirect(array(
                    'action' => 'view',
                    $this->Session->read('Usuario.id')
                ));
            }
            $this->Flash->error(__('Suas informações não puderam ser atualizadas.'));
         }
         if(!$this->request->data){
             $this->request->data = $usuário;
         }
    }

    public function delete($id = null){
        if($this->request->is('get')){
            throw new MethodNotAllowedException();
        }
        if($this->Usuario->delete($id)){
            $this->Flash->success(__('Usuario %s foi excluído com sucesso.', h($id)));
            return $this->redirect(array('action' => 'index'));
        }else{
            $this->Flash->error(__('Usuario %s não pôde ser excluído.', h($id)));
        }
        return $this->redirect(array('action' => 'index'));
    }

    public function validar(){
        $usuário = $this->Usuario->findAllByLoginAndSenha($this->data['Usuario']['login'],
        ($this->data['Usuario']['senha']));
        if(!empty($usuário)){
            return $usuário;
        }else{
            return false;
        }
    }

    public function login(){
        if(!empty($this->data['Usuario']['login'])){
            // Validar
            $usuário = $this->validar();
            if($usuário != false){
                $usuarioInfo = $this->Usuario->findByLogin($this->data['Usuario']['login']);
                $this->Session->write('Usuario',array(
                    'id' => $usuarioInfo['Usuario']['id'],
                    'tipo' => $usuarioInfo['Usuario']['tipo'],
                    'login' => $usuarioInfo['Usuario']['login'],
                    'nome' => $usuarioInfo['Usuario']['nome']
                ));
                $this->redirect(array(
                    'controller' => 'usuarios',
                    'action' => 'area_administrativa'
                ));
                exit();
            }else{
                $this->Flash->set('Usuário e/ou senha inválidos');
                $this->redirect(array('action' => 'login'));
                exit();

            }
        }
    }

    public function logout(){
        $this->Session->destroy();
        $this->Flash->set('Atividades encerradas com sucesso');
        $this->redirect(array('action' => 'login'));
        exit();
    }
}
?>
