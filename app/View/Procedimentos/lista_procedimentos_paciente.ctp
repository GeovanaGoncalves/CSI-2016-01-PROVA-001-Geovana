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
                  <a href="<?php echo Router::url(array('controller' => 'exames', 'action' => 'add',$procedimento['Procedimento']['id'])); ?>">Solicitar</a>
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



</div>
