 <!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Análises Laboratoriais</title>

    </head>


      <!-- Bootstrap -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>
    <body>
      <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="">Análises Laboratoriais</a>
          </div>

          <div class="collapse navbar-collapse" id="navbar">
          <ul class="nav navbar-nav">

              <li><?php echo $this->Html->link('Área Geral',array('controller'=>'pages','action'=>'home'));?></li>
              <li><?php echo $this->Html->link('Área do Paciente',array('controller'=>'pacientes','action'=>'area_do_paciente'));?></li>
              <li><?php echo $this->Html->link('Área Administrativa',array('controller'=>'usuarios','action'=>'index'));?></li>
              <li><?php echo $this->Html->link(__('Sair'),array('action'=>'logout'));?></li>

          </ul>
        </div>
      </div>
   </div>


    <div class="container">
      <?php echo $this->Session->flash(); ?>

      <?php echo $this->fetch('content'); ?>

      <hr>


    		</div>


    </div> 


</body>
</html>
