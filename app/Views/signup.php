<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Signup</title>
  
  <!-- Bootstrap CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
  
  <!-- MDBootstrap CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.css" rel="stylesheet">
  
  <!-- Custom CSS -->
  <style>
    .divider:after,
    .divider:before {
      content: "";
      flex: 1;
      height: 1px;
      background: #eee;
    }
    .h-custom {
      height: calc(100% - 73px);
    }
    @media (max-width: 450px) {
      .h-custom {
        height: 100%;
      }
    }
    .form-outline input {
      border: 2px solid #007bff;
      border-radius: 8px;
    }
    .form-outline input:focus {
      box-shadow: 0 0 5px #007bff;
    }
    .btn-primary {
      background-color: #007bff;
      border: none;
      border-radius: 8px;
    }
    .btn-primary:hover {
      background-color: #0056b3;
    }
    .form-label {
      font-size: 14px;
    }
  </style>
</head>
<body style="background-color: white;">
<section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <!-- Fields to the left -->
      <div class="col-md-8 col-lg-6 col-xl-5 m-3">
        <p class="lead fw-normal fs-1 mb-0 me-3 text-center mb-5">Sign up</p>
        <form method="POST" action="/signup" >
          <!-- First Name and Last Name -->
          <div class="row">
            <div class="col-md-6 mb-4">
              <div class="form-outline">
                <input type="text" name="firstName" id="firstName" class="form-control form-control-lg" placeholder="Enter your first name">
                <label class="form-label" for="firstName">First Name</label>
              </div>
            </div>
            <div class="col-md-6 mb-4">
              <div class="form-outline">
                <input type="text" name="lastName" id="lastName" class="form-control form-control-lg" placeholder="Enter your last name">
                <label class="form-label" for="lastName">Last Name</label>
              </div>
            </div>
          </div>

          <!-- Email Address and Date of Birth-->
          <div class="row">
            <div class="col-md-6 mb-4">
              <div class="form-outline">
                <input type="email" name="email" id="email" class="form-control form-control-lg" placeholder="Enter a valid email address">
                <label class="form-label" for="email">Email address</label>
              </div>
            </div>
            <div class="col-md-6 mb-4">
              <div class="form-outline">
                <input type="date" name="dob" id="dob" class="form-control form-control-lg">
                <label class="form-label" for="dob">Date of Birth</label>
              </div>
            </div>
          </div>

          <!-- Level and Section -->
          <div class="row">
            <div class="col-md-6 mb-4">
              <div class="form-outline">
                <input type="text" name="level" id="level" class="form-control form-control-lg" placeholder="Enter your level">
                <label class="form-label" for="level">Level</label>
              </div>
            </div>
            <div class="col-md-6 mb-4">
              <div class="form-outline">
                <input type="text" name="section" id="section" class="form-control form-control-lg" placeholder="Enter your section">
                <label class="form-label" for="section">Section</label>
              </div>
            </div>
          </div>

          <!-- Username and Password-->
          <div class="row">
            <div class="col-md-6 mb-4">
              <div class="form-outline">
                <input type="text" name="username" id="username" class="form-control form-control-lg" placeholder="Enter your username">
                <label class="form-label" for="username">Username</label>
              </div>
            </div>
            <div class="col-md-6 mb-4">
              <div class="form-outline">
                <input type="password" name="password" id="password" class="form-control form-control-lg" placeholder="Enter password">
                <label class="form-label" for="password">Password</label>
              </div>
            </div>
          </div>

          <!-- Row for Role -->
          <div class="row">
            <div class="col-12 mb-4">
              <div class="form-outline">
                <label class="form-label" for="role">Role</label>
                <div class="d-flex">
                  <div class="form-check me-3">
                    <input class="form-check-input" type="radio" name="role" id="roleStudent" value="student" checked>
                    <label class="form-check-label" for="roleStudent">Student</label>
                  </div>
                  <div class="form-check me-3">
                    <input class="form-check-input" type="radio" name="role" id="roleProfessor" value="professor">
                    <label class="form-check-label" for="roleProfessor">Professor</label>
                  </div>
                  <div class="form-check me-3">
                    <input class="form-check-input" type="radio" name="role" id="roleAdmin" value="admin">
                    <label class="form-check-label" for="roleAdmin">Admin</label>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Submit Button -->
          <div class="text-center text-lg-start pt-2">
            <button type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">Register</button>
            <p class="small fw-bold mt-2 pt-1 mb-0">Already have an account? <a href="/login" class="link-danger">Login</a></p>
          </div>
        </form>
      </div>

      <!-- Image to the right -->
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="https://img.freepik.com/premium-vector/illustration-vector-graphic-cartoon-character-online-registration_516790-2402.jpg?w=996"
          class="img-fluid d-block mx-auto" style="width: 90%;" alt="Sample image">
      </div>
    </div>
  </div>
</section>

<!-- Bootstrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

<!-- MDBootstrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.js"></script>

</body>
</html>
