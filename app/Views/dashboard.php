<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Mobile Responsive Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
  <style>
    body {
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }
    .content {
      padding: 1rem;
      flex-grow: 1;
      background-color: #f8f9fa;
    }
    .sidebar-link {
      cursor: pointer;
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-dark bg-dark sticky-top">
  <div class="container-fluid">
    <button class="btn btn-outline-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar" aria-controls="sidebar">
      ☰ Menu
    </button>
    <span class="navbar-brand mb-0 h1">Dashboard</span>
  </div>
</nav>

<!-- Sidebar Offcanvas -->
<div class="offcanvas offcanvas-start bg-dark text-white" tabindex="-1" id="sidebar" aria-labelledby="sidebarLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="sidebarLabel">Navigation</h5>
    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body p-0">
    <nav class="nav flex-column">
      <a class="nav-link sidebar-link text-white px-3 py-2" href="#">Home</a>
      <a class="nav-link sidebar-link text-white px-3 py-2" href="#">Dispatch</a>
      <a class="nav-link sidebar-link text-white px-3 py-2" href="#">Add Item</a>
      <a class="nav-link sidebar-link text-white px-3 py-2" href="#">Codes</a>
      <a class="nav-link sidebar-link text-white px-3 py-2" href="#">Coders</a>
      <a class="nav-link sidebar-link text-white px-3 py-2" href="/logout">Logout</a>
    </nav>
  </div>
</div>

<!-- Main Content -->
<main class="content container">
  <div class="row gy-4">

  <div class="col-12 col-md-6 col-lg-4">
  <div class="card shadow-sm text-center p-3">
    <div class="card-body">
      <!-- Icon above the title -->
      <i class="fas fa-truck fa-2x text-primary mb-2"></i>
      <a href="/dispatch"><h5 class="card-title mb-0">Dispatch</h5></a>
    </div>
  </div>
</div>




   <div class="col-12 col-md-6 col-lg-4">
  <div class="card shadow-sm text-center p-3">
    <i class="fas fa-plus-square fa-2x text-primary mb-2"></i> <!-- Add icon -->
    <div class="card-body">
      <a href="/additem"><h5 class="card-title">Add item</h5></a>
    </div>
  </div>
</div>


    <div class="col-12 col-md-6 col-lg-4">
  <div class="card shadow-sm text-center p-3">
    <i class="fas fa-code fa-2x text-primary mb-2"></i> <!-- Code icon -->
    <div class="card-body">
        <a href="/codes"><h5 class="card-title">Codes</h5></a>
    </div>
  </div>
</div>



   <div class="col-12 col-md-6 col-lg-4">
  <div class="card shadow-sm text-center p-3">
    <i class="fas fa-laptop-code fa-2x text-primary mb-2"></i> <!-- Coders icon -->
    <div class="card-body">
        <a href="/coders"><h5 class="card-title">Coders</h5></a>
    </div>
  </div>
</div>


    

   

  </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
