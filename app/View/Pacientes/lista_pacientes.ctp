<div class="panel panel-primary">
    <div class="panel-heading clearfix">
        <h4 class="panel-title pull-left" style="padding-top: 7.5px;">Pacientes</h4>
        <?php echo $this->Html->Link('Adicionar',array('action' => 'add'),array('class' => 'btn-default btn btn-md pull-right'));?>
    </div>
    <table class="table table-responsive table-striped">
      <tr>
        <th class="col-md-1">Id</th>
        <th class="col-md-2">Nome</th>
        <th class="col-md-3">Login</th>
        <th class="col-md-3">Ações</th>
      </tr>


  <?php foreach($pacientes as $paciente): ?>
    <tr>
      <td>
        <?php echo $paciente['Paciente']['id']; ?>
      </td>
      <td>
        <?php echo $this->Html->link($paciente['Paciente']['nome'], array('controller' => 'pacientes', 'action' => 'view',$paciente['Paciente']['id']));?>
      </td>
      <td>
        <?php echo $this->Html->link($paciente['Paciente']['login'], array('controller' => 'pacientes', 'action' => 'view',$paciente['Paciente']['id']));?>
      </td>
      <td>
        <?php echo $this->Html->link('Editar',array('action' => 'edit', $paciente['Paciente']['id']),array('class' => 'btn-info btn btn-md'));?>
        <?php echo $this->Html->link('Excluir',array('action' => 'delete', $paciente['Paciente']['id']),array('class' => 'btn-danger btn btn-md','confirm' => 'Deseja realmente excluir o Paciente ' . $paciente['Paciente']['id'] . '?'));?>
      </td>
    </tr>



  <?php endforeach; ?>
</table>
<?php unset($pacientes); ?>
