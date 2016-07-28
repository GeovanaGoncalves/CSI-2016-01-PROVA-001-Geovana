<div class="panel panel-primary">
    <div class="panel-heading">
        Procedimentos
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
              </td>
            </tr>

          <?php endforeach; ?>
        </table>
        <?php unset($procedimentos); ?>
</div>
