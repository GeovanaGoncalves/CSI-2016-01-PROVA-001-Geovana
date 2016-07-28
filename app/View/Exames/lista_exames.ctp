<div class="panel panel-primary">
    <div class="panel-heading clearfix">
        <h4 class="panel-title pull-left" style="padding-top: 7.5px;">Exames</h4>
          <?php echo $this->Html->Link('Adicionar',array('action' => 'adicionar'),array('class' => 'btn-default btn btn-md pull-right'));?>
    </div>
    <div class="panel-body">
      <div class="panel panel-info" align="center">
          <table id="table" class="table table-striped table-bordered table-responsive">
            <thead>
              <tr>
                <th>Id</th>
                <th>Procedimento</th>
                <th>Paciente</th>
                <th>Data</th>
                <th>Valor</th>
                <th>Ações</th>
                </tr>
              </thead>

            <tbody>


              <?php
                   foreach($exames as $e): ?>
                <tr>
                 <td>
                   <p><?php echo $e['Exame']['id']; ?></p>
                  </td>

                  <td>
                    <p><?php echo $e['Procedimento']['nome']; ?></p>
                  </td>

                  <td>
                    <p><?php echo $e['Paciente']['nome']; ?></p>
                  </td>

                  <td>
                    <p><?php echo $e['Exame']['data']; ?></p>
                  </td>

                  <td>
                    <p><?php echo $e['Procedimento']['preco']; ?></p>
                  </td>

                  <td>
                    <?php echo $this->Html->link('Editar',array('action' => 'edit', $e['Exame']['id']),array('class' => 'btn-info btn btn-md'));?>
                    <?php echo $this->Html->link('Excluir',array('action' => 'delete', $e['Exame']['id']),array('class' => 'btn-danger btn btn-md','confirm' => 'Deseja realmente excluir o Exame ' . $e['Exame']['id'] . '?'));?>
                  </td>

                </tr>

          <?php endforeach; unset($exames); ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
