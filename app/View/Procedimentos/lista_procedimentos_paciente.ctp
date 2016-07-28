<div class="panel panel-primary">
    <div class="panel-heading clearfix">
        <h4 class="panel-title pull-left" style="padding-top: 7.5px;">Procedimentos</h4>
        <?php echo $this->Session->flash(); ?>
    </div>
    <div class="panel-body">
      <table id="table" class="table table-striped table-bordered table-responsive">
        <thead>
          <tr>
            <th>Selecione</th>
            <th>Id</th>
            <th>Nome</th>
            <th>Preço</th>
              <th></th>
            </tr>
          </thead>
        <tbody>
        <?php foreach($procedimentos as $procedimento): ?>

              <tr>
                <td>
                    <input type="checkbox" name="procedimentos" id="procedimentos" value="' . $obj->id . '" ></input><br</p>
                 </td>
               <td>
                 <p><?php echo $procedimento['Procedimento']['id']; ?>
                </td>

                <td>
                  <p><?php echo $procedimento['Procedimento']['nome']; ?></p>
                </td>

                <td>
                  <p><?php echo $procedimento['Procedimento']['preco']; ?></p>
                </td>
              </tr>

            <?php endforeach; unset($procedimentos); ?>


                            <p>
                              <?php echo $this->Form->create('Carrinho',array('nome'=>'add-form','url'=>array('controller'=>'carrinhos','action'=>'add')));?>
                              <?php echo $this->Form->hidden('id',array('value'=>$procedimento['Procedimento']['nome']))?>

                                  </p>

            <label for="data"></label>
              <input type="text" class="form-control" name="data" id="data"
                placeholder="Informe a data que deseja realizar os procedimentos"
                required

</div>
<?php echo $this->Form->submit('Solicitar Exame',array('class'=>'btn-primary btn btn-md'));?>
<?php echo $this->Form->end();?>
</div>
