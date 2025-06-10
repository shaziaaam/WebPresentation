<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <style>
        body {
        background-color: #FFDBDB;
        font-family: 'Poppins', sans-serif;
        }

        .card {
        background-color: #fff;
        border: 1px solid #e0e0e0;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .icon-person {
        font-size: 40px;
        color: #850E35;
        text-align: center;
        margin-bottom: 10px;
        }

        .card h4 {
        font-size: 24px;
        font-weight: 600;
        color: #333;
        text-align: center;
        margin-bottom: 8px;
        }

        .description {
        font-size: 14px;
        text-align: center;
        color: #666;
        margin-bottom: 20px;
        }

        .form-control {
        border-radius: 8px;
        box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.12),
                    inset 0 1px 2px rgba(0, 0, 0, 0.24);
        }

        .input-group-text {
        background-color: #f0f0f0;
        border-radius: 8px 0 0 8px;
        }

        .btn-primary {
        background-color: #850E35;
        border-color: #850E35;
        font-weight: 500;
        border-radius: 8px;
        }

        .btn-primary:hover {
        background-color: #5e0000;
        border-color: #5e0000;
        }

        .alert {
        border-radius: 8px;
        font-size: 14px;
        }
    </style>
    </head>
    <body class="d-flex justify-content-center align-items-center vh-100">

    <div class="card shadow p-4" style="width: 100%; max-width: 400px;">

        <!-- Ikon Person -->
        <div class="icon-person">
        <i class="fas fa-user-circle"></i>
        </div>

        <!-- Judul -->
        <h4>WELCOME BACK!</h4>

        <!-- Deskripsi -->
        <p class="description">
        Please Login to Your Account</p>

        <!-- Pesan sukses -->
        <?php if (session()->getFlashdata('success')): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?= session()->getFlashdata('success') ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php endif; ?>

        <!-- Pesan error -->
        <?php if (session()->getFlashdata('error')): ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <?= session()->getFlashdata('error') ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php endif; ?>

        <!-- Form Login -->
        <form method="post" action="/login">
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <div class="input-group">
            <span class="input-group-text">
                <i class="fas fa-envelope"></i>
            </span>
            <input
                type="email"
                name="email"
                class="form-control"
                placeholder="Masukkan email"
                required>
            </div>
        </div>

        <div class="mb-4">
            <label for="password" class="form-label">Password</label>
            <div class="input-group">
            <span class="input-group-text">
                <i class="fas fa-lock"></i>
            </span>
            <input
                type="password"
                name="password"
                class="form-control"
                placeholder="Masukkan password"
                required>
            </div>
        </div>

        <button type="submit" class="btn btn-primary w-100">
            LOGIN
        </button>
        </form>
    </div>

    </body>
    </html>
