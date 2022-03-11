<!DOCTYPE html>
<html>

<head>
  <title>Edit Teacher</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
   <style> .container {
      max-width: 500px;
    }

    .error {
      display: block;
      padding-top: 5px;
      font-size: 14px;
      color: red;
    }
  </style>
</head>

<body>
  <div class="container-sm mt-5">
      <div class="card">
          <div class="card-header bg-dark text-white ">
              <h1>EDIT TEACHER</h1>
          </div>
          <div class="card-body">

    <form method="post" id="update" name="update" 
    action="<?= site_url('/update') ?>">
      <input type="hidden" name="id" id="id" value="<?php echo $user_obj->id; ?>">

      <div class="form-group">
        <label>Nombre</label>
        <input type="text" name="first_name" class="form-control" value="<?php echo $user_obj->first_name; ?>">
      </div>

      <div class="form-group">
        <label>Apellido</label>
        <input type="text" name="last_name" class="form-control" value="<?php echo $user_obj->last_name; ?>">
      </div>

      <div class="form-group">
        <label>Edad</label>
        <input type="text" name="age" class="form-control" value="<?php echo $user_obj->age; ?>">
      </div>

      <div class="form-group">
        <label>Dui</label>
        <input type="text" name="dui" class="form-control" value="<?php echo $user_obj->dui; ?>">
      </div>

      <div class="form-group">
        <label>Curso</label>
        <input type="text" name="course" class="form-control" value="<?php echo $user_obj->course; ?>">
      </div>

      <div class="form-group">
        <label>Email</label>
        <input type="email" name="mail" class="form-control" value="<?php echo $user_obj->mail; ?>">
      </div>

      <div class="form-group ">
        <button type="submit" class="btn btn-success btn-large btn-block">Save changes</button>
      </div>
    </form>
          </div>



      </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
  <script>
    if ($("#update").length > 0) {
      $("#update").validate({
        rules: {
          first_name: {
            required: true,
          },
          last_name: {
              require: true,
          },
          age: {
              require: true,
          },
          dui: {
              require: true,
          },
          course: {
              require: true,
          },
          mail: {
            required: true,
            maxlength: 60,
            email: true,
          },
        },
        messages: {
          first_name: {
            required: "fist name is required.",
          },
          last_name: {
            required: "last name is required.",
          },
          age: {
            required: "age is required.",
          },
          dui: {
            required: "dui is required.",
          },
          course: {
            required: "course is required.",
          },
          mail: {
            required: "Email is required.",
          },
        },
      })
    }
  </script>
</body>

</html>