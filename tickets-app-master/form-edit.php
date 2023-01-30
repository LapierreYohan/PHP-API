<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Task list</title>
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet">
</head>

<body>
  <section id="container">
    <?php
    include_once __DIR__ . '/modules/header.php';
    include_once __DIR__ . '/modules/nav_menu.php';
    ?>
    
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Tickets list</h3>
        <div class="row mt">
          <div class="col-md-12">
            <section class="task-panel tasks-widget">
              <div class="panel-heading">
                <div class="pull-left">
                  <h5><i class="fa fa-tasks"></i> Ajouter un ticket</h5>
                </div>
                <br>
              </div>
              <div class="panel-body">
                <div class="task-content">

                <form class="form-horizontal style-form" method="post">
                    <div class="form-group">
                      <label class="col-sm-2 col-sm-2 control-label" for="inputTitle">Titre du ticket</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputTitle" name="title">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 col-sm-2 control-label" for="inputContent">Description complète du ticket</label>
                      <div class="col-sm-10">
                        <textarea class="form-control" id="inputContent" name="description"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 col-sm-2 control-label" for="inputSelect">Niveau d'urgence</label>
                      <div class="col-sm-10">
                        <select id="inputSelect" class="form-control" name="level">
                          <option value="0">0</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                          <option value="6">6</option>
                          <option value="7">7</option>
                          <option value="8">8</option>
                          <option value="9">9</option>
                          <option value="10">10</option>
                        </select>
                      </div>
                    </div>
                    <div class="pull-right">
                      <button type="submit" class="btn btn-primary">Enregistrer</button>
                    </div>
                  </form>
                </div>
              </div>
            </section>
          </div>
        </div>
        
      </section>
    </section>
    <!--main content end-->

    <?php
    include_once __DIR__ . '/modules/footer.php';
    ?>

  </section>
  <script src="lib/jquery/jquery.min.js"></script>

  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  
  <script src="lib/common-scripts.js"></script>  
  
</body>

</html>
