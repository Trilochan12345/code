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

<!-- Main Content -->
<main class="content container">
  <div class="row gy-4">

<table class="table table-bordered">
  <thead>
    <tr>
      <th>#</th>
      <th>Series</th>
      <th>Code</th>
      <th>Description</th>
      <th>Material</th>
      <th>Quantity</th>
      <th>Category</th>
      <th>Item</th>
      <th>Remarks</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($codes as $index => $code): ?>
      <tr>
        <td><?= $index + 1 ?></td>
        <td><?= esc($code['series']) ?></td>
        <td><?= esc($code['code']) ?></td>
        <td><?= esc($code['description']) ?></td>
        <td><?= esc($code['material']) ?></td>
        <td><?= esc($code['quantity']) ?></td>
        <td><?= esc($code['category']) ?></td>
        <td><?= esc($code['item_id']) ?></td> <!-- From item table -->
        <td><?= esc($code['remarks']) ?></td>
        <td>
          <a href="/edit/<?= $code['id'] ?>" class="btn btn-sm btn-outline-primary">
            <i class="bi bi-pencil-square"></i>
          </a>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>



</div>

    

   

  </div>
</main>
<div class="text-end mt-3">
  <a href="/addcodes" class="btn btn-primary">
    <i class="bi bi-plus-circle me-1"></i> Add Code
  </a>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
