<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Sinh Viên</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/public/css/style.css">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-dark bg-dark navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="#">Test1</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link text-white" href="#">Sinh Viên</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="#">Học Phần</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="#">Đăng Ký</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="#">Đăng Nhập</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Main Content -->
<div class="container mt-4">
    <h1 class="text-center">Danh Sách Sinh Viên</h1>
    <a href="index.php?action=create" class="btn btn-primary mb-3">Thêm Sinh Viên</a>

    
    <table class="table table-bordered text-center">
        <thead class="table-dark">
            <tr>
                <th>Mã SV</th>
                <th>Họ Tên</th>
                <th>Giới Tính</th>
                <th>Ngày Sinh</th>
                <th>Hình</th>
                <th>Ngành</th>
                <th>Hành Động</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($students as $student): ?>
            <tr>
                <td><?= $student["MaSV"] ?></td>
                <td><?= $student["HoTen"] ?></td>
                <td><?= $student["GioiTinh"] ?></td>
                <td><?= date('d/m/Y', strtotime($student["NgaySinh"])) ?></td>
                <td><img src="<?= $student["Hinh"] ?>" class="student-img"></td>
                <td><?= $student["MaNganh"] ?></td>
                <td>
                <a href="index.php?action=edit&id=<?= $student['MaSV'] ?>" class="btn btn-sm btn-warning">Edit</a>
                <a href="index.php?action=delete&id=<?= $student['MaSV'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Xác nhận xóa?')">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
