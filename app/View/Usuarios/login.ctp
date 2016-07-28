
<form>
    <div id="center2">
      <div class="panel panel-danger">
        <div class="panel-heading">
          <h3 class="panel-title">Bem vindo à Área Administrativa</h3>
            <?php echo $this->Html->link("Listar Exames Solicitados", array('controller' => 'exames', 'action' => 'lista_exames'));?> </br>
      			<?php echo $this->Html->link("Listar Pacientes", array('controller' => 'pacientes', 'action' => 'lista_pacientes'));?> </br>
            <?php echo $this->Html->link("Listar Total de Exames Solicitados", array('controller' => 'exames', 'action' => 'lista_exames'));?>
</form>
