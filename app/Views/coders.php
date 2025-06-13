<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Mobile Responsive Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

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
      <a class="nav-link sidebar-link text-white px-3 py-2" href="#">Profile</a>
      <a class="nav-link sidebar-link text-white px-3 py-2" href="#">Settings</a>
      <a class="nav-link sidebar-link text-white px-3 py-2" href="#">Reports</a>
      <a class="nav-link sidebar-link text-white px-3 py-2" href="#">Support</a>
    </nav>
  </div>
</div>

<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">
    <i class="bi bi-search"></i>
  </span>
  <input type="text" class="form-control" placeholder="Search..." aria-label="Search" aria-describedby="basic-addon1">
</div>
<div class="text-end mt-3">
  <a href="/createaccount" class="btn btn-primary">
    <i class="bi bi-plus-circle me-1"></i> Create Account
  </a>
</div>


<!-- Main Content -->
<main class="content container">
  <div class="row gy-4">

  <?php if (!empty($code) && is_array($code)) : ?>
    <?php foreach ($code as $coder) : ?>
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title"><?= esc($coder['name']) ?></h5>
                <p class="card-text"><?= esc($coder['phone']) ?></p>
                <p class="card-text"><small class="text-body-secondary"><?= esc($coder['series']) ?></small></p>
            </div>
        </div>
    <?php endforeach; ?>
<?php else : ?>
    <div class="alert alert-warning" role="alert">
        No coders found.
    </div>
<?php endif; ?>



</div>

    

   

  </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
