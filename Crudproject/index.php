<?php

include "config.php";
$query = mysqli_query($conn, "SELECT * FROM users");

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Dashboard</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style2.css?v=999" />
  </head>
  <body>
    <div class="container">
      <!-- Sidebar -->
      <div class="sidebar">
        <div class="logo">
          <h1>Admin<span>Panel</span></h1>
        </div>
        <div class="nav-menu">
          <div class="menu-heading">Main</div>
          <div class="nav-item active">
            <i class="fas fa-chart-pie"></i>
            <span>Dashboard</span>
          </div>
          <div class="nav-item">
            <i class="fas fa-users"></i>
            <span>Users</span>
          </div>
          <div class="nav-item">
            <i class="fas fa-box"></i>
            <span>Products</span>
          </div>
          <div class="nav-item">
            <i class="fas fa-shopping-cart"></i>
            <span>Orders</span>
          </div>

          <div class="menu-heading">Reports</div>
          <div class="nav-item">
            <i class="fas fa-chart-line"></i>
            <span>Analytics</span>
          </div>
          <div class="nav-item">
            <i class="fas fa-coins"></i>
            <span>Sales</span>
          </div>

          <div class="menu-heading">Admin</div>
          <div class="nav-item">
            <i class="fas fa-cog"></i>
            <span>Settings</span>
          </div>
          <div class="nav-item">
            <i class="fas fa-bell"></i>
            <span>Notifications</span>
          </div>
          <div class="nav-item">
            <i class="fas fa-shield-alt"></i>
            <span>Security</span>
          </div>
          <div class="nav-item" onclick="location.href='login.html';">
         <i class="fa fa-sign-out"></i>
        <span>Logout</span>
        </div>
        </div>
      </div>

      <!-- Header -->
      <div class="header">
        <div class="search-bar">
          <i class="fas fa-search"></i>
          <input type="text" placeholder="Search..." />
        </div>
        <div class="header-actions">
          <div class="notification">
            <i class="fas fa-bell"></i>
            <div class="badge">6</div>
          </div>
          <div class="notification">
            <i class="fas fa-envelope"></i>
            <div class="badge">7</div>
          </div>
          <div class="user-profile">
            <div class="profile-img">W</div>
            <div class="user-info">
              <div class="user-name">Wriothesley</div>
              <div class="user-role">Administrator</div>
            </div>
          </div>
        </div>
      </div>

      <!-- Main Content -->
      <div class="main-content">
        <div class="page-title">
          <div class="title">Dashboard</div>
          <div class="action-buttons">
            <button class="btn btn-outline">
              <i class="fas fa-download"></i>
              Export
            </button>
            <button class="btn btn-primary">
              <i class="fas fa-plus"></i>
              <a href="add.php">Add New</a>
            </button>
          </div>
        </div>

        
        <!-- Stats Cards -->
        <div class="stats-cards">
          <div class="stat-card">
            <div class="card-header">
              <div>
                <div class="card-value">18,504</div>
                <div class="card-label">Total Users</div>
              </div>
              <div class="card-icon purple">
                <i class="fas fa-users"></i>
              </div>
            </div>
            <div class="card-change positive">
              <i class="fas fa-arrow-up"></i>
              <span>16.7% from last month</span>
            </div>
          </div>

          <div class="stat-card">
            <div class="card-header">
              <div>
                <div class="card-value">Rp. 66.000.000.00</div>
                <div class="card-label">Total Revenue</div>
              </div>
              <div class="card-icon blue">
                <i class="fas fa-dollar-sign"></i>
              </div>
            </div>
            <div class="card-change positive">
              <i class="fas fa-arrow-up"></i>
              <span>8.2% from last month</span>
            </div>
          </div>

          <div class="stat-card">
            <div class="card-header">
              <div>
                <div class="card-value">324</div>
                <div class="card-label">Total Orders</div>
              </div>
              <div class="card-icon green">
                <i class="fas fa-shopping-cart"></i>
              </div>
            </div>
            <div class="card-change negative">
              <i class="fas fa-arrow-down"></i>
              <span>3.1% from last month</span>
            </div>
          </div>

          <div class="stat-card">
            <div class="card-header">
              <div>
                <div class="card-value">85%</div>
                <div class="card-label">Conversion Rate</div>
              </div>
              <div class="card-icon orange">
                <i class="fas fa-chart-line"></i>
              </div>
            </div>
            <div class="card-change positive">
              <i class="fas fa-arrow-up"></i>
              <span>4.6% from last month</span>
            </div>
          </div>
        </div>

        <!-- Recent Orders -->
        <div class="table-card">
          <div class="card-title">
            <h3><i class="fas fa-shopping-bag"></i> Recent Orders</h3>
            <button class="btn btn-outline btn-sm">
              <i class="fas fa-eye"></i> View All
            </button>
          </div>
          <table class="data-table">
            <thead>
              <tr>
                <th>Order ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Amounts</th>
                <th>Products</th>
                <th>Status</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>

                    <?php
                    $no = 1;
                    while ($user = mysqli_fetch_assoc($query)) :?>

                    <tr>
                        <td><?=  $no++ ?></td>
                        <td><?=  $user['name'] ?></td>
                        <td><?=  $user['email'] ?></td>
                        <td><?=  $user['amounts'] ?></td>
                        <td><?=  $user['products'] ?></td>
                        <td>
                        <span class="status active"
                            ><i class="fas fa-check-circle"></i> Completed</span>
                        </td>
                        <td>
                        <a href="edit.php?id=<?= $user['id'] ?>" class="btn-edit">Edit</a>
                        <a href="action.php?id=<?= $user['id'] ?>" class="btn-delete" onclick="return confirm('Are you sure you want to delete this user?')">Delete</a>
                    </td>

                </td>
              </tr>
              <?php endwhile; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </body>
</html>
