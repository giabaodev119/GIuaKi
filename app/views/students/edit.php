<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chỉnh sửa Sinh Viên</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2 class="text-center">Chỉnh sửa Sinh Viên</h2>
    <form action="index.php?action=update" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="MaSV" value="<?= $student['MaSV'] ?>">
        <input type="hidden" name="old_Hinh" value="<?= $student['Hinh'] ?>">

        <div class="mb-3">
            <label class="form-label">Họ Tên</label>
            <input type="text" name="HoTen" class="form-control" value="<?= $student['HoTen'] ?>" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Giới Tính</label>
            <select name="GioiTinh" class="form-select">
                <option value="Nam" <?= ($student['GioiTinh'] == 'Nam') ? 'selected' : '' ?>>Nam</option>
                <option value="Nữ" <?= ($student['GioiTinh'] == 'Nữ') ? 'selected' : '' ?>>Nữ</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Ngày Sinh</label>
            <input type="date" name="NgaySinh" class="form-control" value="<?= $student['NgaySinh'] ?>" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Hình Ảnh</label><br>
            <img src="<?= $student['Hinh'] ?>" width="100"><br>
            <input type="file" name="Hinh" class="form-control mt-2">
        </div>

        <div class="mb-3">
            <label class="form-label">Ngành Học</label>
            <select name="MaNganh" class="form-select">
                <option value="CNTT" <?= ($student['MaNganh'] == 'CNTT') ? 'selected' : '' ?>>Công nghệ thông tin</option>
                <option value="QTKD" <?= ($student['MaNganh'] == 'QTKD') ? 'selected' : '' ?>>Quản trị kinh doanh</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success">Cập nhật</button>
        <a href="index.php" class="btn btn-secondary">Hủy</a>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
