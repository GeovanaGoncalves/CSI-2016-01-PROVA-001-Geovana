<div class="panel panel-primary">
    <div class="panel-heading clearfix">
        <h4 class="panel-title pull-left" style="padding-top: 7.5px;">Procedimentos</h4>
          <?php echo $this->Html->Link('Adicionar',array('action' => 'add'),array('class' => 'btn-default btn btn-md pull-right'));?>
    </div>
    <div class="panel-body">
      <div class="panel panel-info" align="center">
          <table id="table" class="table table-striped table-bordered table-responsive">
            <thead>
              <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Preço</th>
                <th>Ações</th>
                </tr>
              </thead>
            <tbody>
              <?php foreach($procedimentos as $procedimento): ?>
                <tr>
                 <td>
                   <p><?php echo $procedimento['Procedimento']['id']; ?></p>
                  </td>

                  <td>
                    <p><?php echo $procedimento['Procedimento']['nome']; ?></p>
                  </td>

                  <td>
                    <p><?php echo $procedimento['Procedimento']['preco']; ?></p>
                  </td>

                  <td>
                    <?php echo $this->Html->link('Editar',array('action' => 'edit', $procedimento['Procedimento']['id']),array('class' => 'btn-info btn btn-md'));?>
                    <?php echo $this->Html->link('Excluir',array('action' => 'delete', $procedimento['Procedimento']['id']),array('class' => 'btn-danger btn btn-md','confirm' => 'Deseja realmente excluir o Procedimento ' . $procedimento['Procedimento']['id'] . '?'));?>
                  </td>

                </tr>

          <?php endforeach; unset($procedimentos); ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
