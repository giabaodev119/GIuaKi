<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông Tin Sinh Viên</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2 class="text-center">Thông Tin Chi Tiết Sinh Viên</h2>
    
    <div class="card">
        <div class="card-body">
            <div class="text-center">
                <img src="<?= $student['Hinh'] ?>" class="rounded" width="150">
            </div>
            <table class="table mt-3">
                <tr>
                    <th>Mã Sinh Viên:</th>
                    <td><?= $student['MaSV'] ?></td>
                </tr>
                <tr>
                    <th>Họ Tên:</th>
                    <td><?= $student['HoTen'] ?></td>
                </tr>
                <tr>
                    <th>Giới Tính:</th>
                    <td><?= $student['GioiTinh'] ?></td>
                </tr>
                <tr>
                    <th>Ngày Sinh:</th>
                    <td><?= date('d/m/Y', strtotime($student['NgaySinh'])) ?></td>
                </tr>
                <tr>
                    <th>Ngành Học:</th>
                    <td><?= $student['MaNganh'] ?></td>
                </tr>
            </table>
        </div>
    </div>

    <div class="text-center mt-4">
        <a href="index.php" class="btn btn-primary">Quay Lại</a>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
