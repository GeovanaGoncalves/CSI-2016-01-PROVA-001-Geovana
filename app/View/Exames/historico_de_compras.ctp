<div class="panel panel-primary">
    <div class="panel-heading">
        Histórico de Exames
    </div>
        <table class="table table-responsive table-striped">
          <tr>
            <th class="col-md-1">Id</th>
            <th class="col-md-2">Exame</th>
            <th class="col-md-3">Preco</th>
            <th class="col-md-3">Quantidade</th>
            <th class="col-md-3">Data</th>
          </tr>
          <?php foreach($exames as $exame): ?>
            <tr>
            <td>
                <?php echo $exame['Exame']['id']; ?>
              </td>
              <td>
                <?php echo $this->Html->image($imagens[$exame['Exame']['procedimento_id']], array('alt' => 'imagem' . $exame['Exame']['id'],'width' => '150','height' => '150'));?>
              </td>
              <td>
                <?php echo $exame['Exame']['preco'];?>
              </td>
              <td>
                <?php echo $exame['Exame']['quantidade'];?>
              </td>
              <td>
                <?php echo $exame['Exame']['data'];?>
              </td>
            </tr>

          <?php endforeach; ?>
        </table>
        <?php unset($exames); ?>
</div>
