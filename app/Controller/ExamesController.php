<?php

class ExamesController extends AppController {

  public $helpers = array('Html', 'Form');
  public $components = array('Flash');


  var $procedimentos;

  public function lista_procedimentos(){
    $this->set('procedimentos', $this->Exame->Procedimento->find('all', array('order' => array('Procedimento.nome ASC'))));
  }

  public function lista_paciente() {
    $id = $this->Session->read('Paciente');

    $this->set('exames', $this->Exame->find('all',
    array('conditions'=> array('Paciente.id' => $id[0]['Paciente']['id']), 'order' => array('Exame.data DESC','Procedimento.nome ASC' ))));
  }

  public function lista_exame(){
    $this->set('exames', $this->Exame->find('all', array('order' => array('Exame.data DESC'), array('recursive' => 2))));
  }

  public function lista_exame_geral(){
    $this->set('exames', $this->Exame->find('all', array('recursive' => 2), array('order' => array('Paciente.nome ASC', 'Procedimento.nome ASC'))));
  }

  public function lista_procedimento_geral($id){

    $this->set('exames', $this->Exame->find('all',
    array('conditions'=> array('Procedimento.id' => $id), 'order' => array('Exame.data DESC','Procedimento.nome ASC' ))));

  }

  public function lista_paciente_geral($id){

    $this->set('exames', $this->Exame->find('all',
    array('conditions'=> array('Paciente.id' => $id), 'order' => array('Exame.data DESC','Procedimento.nome ASC' ))));

  }

  public function lista_exame_geral(){
      $this->set('exames', $this->Exame->find('all', array('order' => array('Exame.data DESC'))));
  }

}
?>


    // public function edit($id = null){
    //     if(!$id){
    //         throw new NotFoundException(__('Exame inválida'));
    //     }
    //     $exame = $this->Exame->findById($id);
    //     if(!$exame){
    //         throw new NotFoundException(__('Exame inválida'));
    //     }
    //     if($this->request->is(array('post','put'))){
    //         $this->Exame->id = $id;
    //         if($this->Exame->save($this->request->data)){
    //             $this->Flash->success(__('Exame editada com sucesso'));
    //             return $this->redirect(array('action' => 'index'));
    //         }
    //         $this->Flash->error(__('Exame não pôde ser atualizada'));
    //      }
    //      if(!$this->request->data){
    //          $this->request->data = $exame;
    //      }
    // }

    // public function delete($id = null){
    //     if($this->request->is('get')){
    //         throw new MethodNotAllowedException();
    //     }
    //     if($this->Exame->delete($id)){
    //         $this->Flash->success(__('Exame %s foi excluída com sucesso', h($id)));
    //         return $this->redirect(array('action' => 'index'));
    //     }else{
    //         $this->Flash->error(__('Exame %s não pôde ser excluída', h($id)));
    //     }
    //     return $this->redirect(array('action' => 'index'));
    // }
}
?>
