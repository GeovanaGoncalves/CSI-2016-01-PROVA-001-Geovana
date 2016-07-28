<form>
    <div id="center2">
      <div class="panel panel-danger">
        <div class="panel-heading">
          <h3 class="panel-title">Bem vindo à Área do Paciente</h3>
      	<?php echo $this->Session->read('Paciente.nome'); ?>
        <p><?php echo $this->Html->link("Solicitar Procedimentos", array('controller' => 'procedimentos', 'action' => 'lista_procedimentos_paciente'));?></p>
        <p><?php echo $this->Html->link("Listar Exames Solicitados", array('controller' => 'exames', 'action' => 'lista_exames'));?></p>    
</form>
