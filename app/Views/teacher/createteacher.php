<!DOCTYPE html>
<html>

<head>
  <title>Create teacher</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<style>

    .container {
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
    
    <div class="card " >
            <h1 class="card-header bg-dark text-white d-flex justify-content-between align-items-center">REGISTER TEACHER

                   <form action="view/">
                          <input type="submit" class="btn btn-danger btn-sm ml-auto" value="Atras" />
                  </form>
             
            </h1>
  
  
      <div class="card-body bg-light">
  
    <form method="post" id="createteacher" name="createteacher" 
    action="<?= site_url('/createteacher') ?>">
      <div class="form-group">
        <label>Nombre</label>
        <input type="text" name="first_name" class="form-control" placeholder="nombres">
      </div>

      <div class="form-group">
        <label>Apellido</label>
        <input type="text" name="last_name" class="form-control" placeholder="apellidos">
      </div>

      <div class="form-group">
        <label>Edad</label>
        <input type="text" name="age" class="form-control" placeholder="edad">
      </div>

      <div class="form-group">
        <label>Dui</label>
        <input type="text" name="dui" class="form-control" placeholder="00000000-0">
      </div>

      <div class="form-group">
        <label>Curso</label>
        <input type="text" name="course" class="form-control" placeholder="curso">
      </div>

      <div class="form-group">
        <label>Correo</label>
        <input type="text" name="mail" class="form-control" placeholder="ejemplo@gmail.com">
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block">Agregar</button>
      </div>
    </form>
      </div>
  </div>
  
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
  <script>
    if ($("#add_create").length > 0) {
      $("#add_create").validate({
        rules: {
          first_name: {
            required: true,
          },
          last_name:{
              required:true,
          },
          age:{
              require: true,
          },
          dui: {
              require:true,
          },
          course: {
              require:true,
          },
          mail: {
            required: true,
            maxlength: 60,
            email: true,
          },
        },
        messages: {
          first_name: {
            required: "firs name is required.",
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
            required: "mail is required.",
          
          },
        },
      })
    }
  </script>
</body>

</html>