<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Sinh Viên</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2 class="text-center">Thêm Sinh Viên</h2>
    <form action="index.php?action=store" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label class="form-label">Mã Sinh Viên</label>
            <input type="text" name="MaSV" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Họ Tên</label>
            <input type="text" name="HoTen" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Giới Tính</label>
            <select name="GioiTinh" class="form-select">
                <option value="Nam">Nam</option>
                <option value="Nữ">Nữ</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Ngày Sinh</label>
            <input type="date" name="NgaySinh" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Hình Ảnh</label>
            <input type="file" name="Hinh" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Ngành Học</label>
            <select name="MaNganh" class="form-select">
                <option value="CNTT">Công nghệ thông tin</option>
                <option value="QTKD">Quản trị kinh doanh</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success">Lưu</button>
        <a href="index.php" class="btn btn-secondary">Hủy</a>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
