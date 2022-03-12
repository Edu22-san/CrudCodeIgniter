<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>View Teachers</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>    


<body>
    <div class="container-fluid border-warning mt-4">
        <div class="card">
                        <div class="card-header bg-light text-dark">
                            <h1 class="center"> VIEW TEACHER</h1>
                                <div class="d-flex justify-content-end">
                                    <a href="<?php echo site_url('/create') ?>" class="btn btn-outline-primary ">New Register</a>
                                </div>
                        </div>        
                        <?php
                         if(isset($_SESSION['msg'])){
                         echo $_SESSION['msg'];
                            }
                        ?>
     <div class="card-body bg-light">       
        <div class="mt-3">
            <table class="table table-striped" id="users-list">
                    <thead class="thead-dark">
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Edad</th>
                            <th>Dui</th>
                            <th>Curso</th>
                            <th>Correo</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if($teacher): ?>
                            <?php foreach($teacher as $teacher): ?>
                                <tr>
                                 <td><?php echo $teacher->id; ?></td>
                                 <td><?php echo $teacher->first_name?></td>
                                 <td><?php echo $teacher->last_name?></td>
                                 <td><?php echo $teacher->age?></td>
                                 <td><?php echo $teacher->dui?></td>
                                 <td><?php echo $teacher->course?></td>
                                 <td><?php echo $teacher->mail?></td>
                                 <td>
                                    <a href="<?php echo base_url('editteacher/'.$teacher->id);?>" class="btn btn-success btn-small">Edit</a>
                                    <a href="<?php echo base_url('delete/'.$teacher->id);?>" class="btn btn-danger btn-small">Delete</a>
                                 </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>

            <div class="card bg-light text-white d-flex justify-content-between align-items-center">
                <div class="row">
                    <div class="col-md-12">
                         <?php if ($pager) :?>
                         <?php $pagi_path='view'; ?>
                         <?php $pager->setPath($pagi_path); ?>
                         <?= $pager->links() ?>
                         <?php endif ?>
                    </div>
                </div>
            </div>
                </div>
             </div>
        </div>
    </div>
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
</body>

</html>