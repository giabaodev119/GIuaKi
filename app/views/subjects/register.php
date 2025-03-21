<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Ký Học Phần</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2 class="text-center">Danh Sách Học Phần</h2>

    <table class="table table-bordered text-center">
        <thead class="table-dark">
            <tr>
                <th>Mã HP</th>
                <th>Tên Học Phần</th>
                <th>Số Tín Chỉ</th>
                <th>Hành Động</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($subjects as $subject): ?>
            <tr>
                <td><?= $subject["MaHP"] ?></td>
                <td><?= $subject["TenHP"] ?></td>
                <td><?= $subject["SoTinChi"] ?></td>
                <td><a href="index.php?action=add_subject&MaHP=<?= $subject["MaHP"] ?>" class="btn btn-sm btn-success">Thêm Học Phần</a></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <h2 class="text-center">Giỏ Hàng Đăng Ký</h2>
    <table class="table table-bordered text-center">
        <thead class="table-dark">
            <tr>
                <th>Mã HP</th>
                <th>Tên Học Phần</th>
                <th>Số Tín Chỉ</th>
                <th>Hành Động</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cart as $item): ?>
            <tr>
                <td><?= $item["MaHP"] ?></td>
                <td><?= $item["TenHP"] ?></td>
                <td><?= $item["SoTinChi"] ?></td>
                <td><a href="index.php?action=remove_subject&MaHP=<?= $item["MaHP"] ?>" class="btn btn-sm btn-danger">Xóa</a></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <div class="text-center">
        <a href="index.php?action=clear_cart" class="btn btn-warning">Xóa Đăng Ký</a>
        <a href="index.php?action=save_registration" class="btn btn-primary">Lưu Đăng Ký</a>
    </div>
</div>

</body>
</html>
