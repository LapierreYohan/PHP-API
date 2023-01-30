<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Tickets list</title>
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
    
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> To-Do List</h3>
        <div class="row mt">
          <div class="col-md-12">
            <section class="task-panel tasks-widget">
              <div class="panel-heading">
                <div class="pull-left">
                  <h5><i class="fa fa-tasks"></i> Liste des tâches a faire / faites</h5>
                </div>
                <br>
              </div>
              <div class="panel-body">
                <div class="task-content">
                  <ul class="task-list">
                      <?php
                      $pdo = new PDO('sqlite:' . __DIR__ . '/database.db');
                      $stmt = $pdo->prepare('SELECT * FROM tickets WHERE user_id = :user_id ORDER BY id DESC');
                      $stmt->execute([
                        'user_id' => $_SESSION['user']['id']
                      ]);
                      $tickets = $stmt->fetchAll();

                      foreach ($tickets as $ticket) :
                        ?>
                          <li class="tooltips" title="<?= $ticket['description'] ?>">
                            <div class="task-title">
                                <span class="task-title-sp <?= ($ticket['done']?'done':'') ?>"><?= $ticket['title'] ?></span>
                                <span class="badge <?= ($ticket['level'] <= 4 ? 'bg-theme' : 'bg-warning') ?>"><?= $ticket['level'] ?></span>
                                <div class="pull-right hidden-phone">
                                    <?php
                                    if ($ticket['done']):
                                    ?>
                                        <a href="#" class="btn btn-warning btn-xs"><i class=" fa fa-close"></i></a>
                                    <?php
                                    else:
                                    ?>
                                        <a href="#" class="btn btn-success btn-xs"><i class=" fa fa-check"></i></a>
                                    <?php
                                    endif;
                                    ?>
                                    <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></a>
                                </div>
                            </div>
                          </li>
                      <?php
                      endforeach;
                      ?>
                  </ul>
                </div>
                <div class=" add-task-row">
                  <a class="btn btn-success btn-sm pull-left" href="form-edit">Ajouter un nouveau ticket</a>
                </div>
              </div>
            </section>
          </div>
          <!-- /col-md-12-->
        </div>
        
      </section>
      <!-- /wrapper -->
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
