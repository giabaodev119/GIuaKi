<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2 class="text-center">ĐĂNG NHẬP</h2>

    <?php if (isset($_SESSION["error"])): ?>
        <div class="alert alert-danger"><?= $_SESSION["error"] ?></div>
        <?php unset($_SESSION["error"]); ?>
    <?php endif; ?>

    <form action="index.php?action=authenticate" method="POST">
        <div class="mb-3">
            <label class="form-label">Mã SV</label>
            <input type="text" name="MaSV" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Đăng Nhập</button>
    </form>
    
    <a href="index.php" class="btn btn-link">Quay lại</a>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
