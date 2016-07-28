<div class="panel panel-primary">
    <div class="panel-heading clearfix">
        <h4 class="panel-title pull-left" style="padding-top: 7.5px;">Procedimentos</h4>
        <?php echo $this->Html->Link('Adicionar',array('action' => 'add'),array('class' => 'btn-default btn btn-md pull-right'));?>
    </div>
        <table class="table table-responsive table-striped">
          <tr>
            <th class="col-md-1">Id</th>
            <th class="col-md-3">Nome</th>
            <th class="col-md-3">Preço</th>
            <th class="col-md-3">Ações</th>
          </tr>

          <?php foreach($procedimentos as $procedimento): ?>
            <tr>
            <td>
                <?php echo $procedimento['Procedimento']['id']; ?>
              </td>
              
              <td>
                <?php echo $procedimento['Procedimento']['nome'];?>
              </td>
              <td>
                <?php echo $procedimento['Procedimento']['preco'];?>
              </td>
              <td>
                  <?php echo $this->Html->link('Editar',array('action' => 'edit', $procedimento['Procedimento']['id']),array('class' => 'btn-info btn btn-md'));?>
                  <?php echo $this->Html->link('Excluir',array('action' => 'delete', $procedimento['Procedimento']['id']),array('class' => 'btn-danger btn btn-md','confirm' => 'Deseja realmente excluir o procedimento ' . $procedimento['Procedimento']['id'] . '?'));?>
              </td>
            </tr>

          <?php endforeach; ?>
        </table>
        <?php unset($procedimentos); ?>
</div>
