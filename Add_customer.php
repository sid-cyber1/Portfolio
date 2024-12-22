

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Billing Software</title>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
    <nav class="navbar navbar-expand-xl py-3  navbar-light bg-primary">
        <div class="container-fluid">

          <a class="navbar-brand  text-white" href="bills.html">Billing Software</a>
          
          <div class="collapse navbar-collapse" id="navbarNav">
            <form class="d-flex ms-auto">
              <input class="form-control me-2 w-auto" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-white bg-warning" type="submit">Search</button>
            </form>
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link text-white" href="#"><i class="bi bi-bell"></i> Notifications</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#"><i class="bi bi-person-circle"></i> Profile</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

   
     

      <div class="container mt-4 p-5">
        <h3 class="text-center">Add Customer</h3>
        <div class="m-1 p-5">
        <form action="customer_connect.php" method="post">
          <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="firstname" placeholder="Enter customer name" required>
          </div>
          <div class="mb-3">
            <label for="gender" class="form-label">Gender</label>
            <select class="form-select"  name="gender"  id="gender"required>
              <option selected>Select Gender</option>
              <option value="male">Male</option>
              <option value="female">Female</option>
            </select>
          </div>

          <div class="mb-3">
            <label for="contact" class="form-label">Contact</label>
            <input type="text" class="form-control" id="contact" name="contact" placeholder="Enter contact number" required>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address" required>
          </div>
          <div class="text-center"><button type="submit" name="submit" value="submit" class="btn btn-primary center">Save</button></div>
        </form>
    </div>

      </div>
      

  
    
      
</body>
</html>
