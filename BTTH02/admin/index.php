<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ - vùng quản trị</title>
    <link rel="stylesheet" href="./bootstrap.min.css">
    <link rel="stylesheet" href="./icons-1.11.0/icons-1.11.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <?php
    require '../php/conn.php';
    // users
    $query = "select count(*) as total from users";
    $stmt = $strConnection->prepare($query);
    $stmt->execute();
    $countUsers = $stmt->fetch();

    // the loai
    $query = "select count(ma_tloai) as total from theloai";
    $stmt = $strConnection->prepare($query);
    $stmt->execute();
    $countTheLoai = $stmt->fetch();

    // tacgia
    $query = "select count(ma_tgia) as total from tacgia";
    $stmt = $strConnection->prepare($query);
    $stmt->execute();
    $countTacGia = $stmt->fetch();

    // bai viet
    $query = "select count(ma_bviet) as total from baiviet";
    $stmt = $strConnection->prepare($query);
    $stmt->execute();
    $countBaiViet = $stmt->fetch();

    ?>
    <?php
    include 'header_admin.php';
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title text-primary text-center">Người dùng</h5>
                        <h6 class="text-center"><?= $countUsers['total']?></h6>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title text-primary text-center">Thể loại</h5>
                        <h6 class="text-center"><?= $countTheLoai['total']?></h6>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title text-primary text-center">Tác giả</h5>
                        <h6 class="text-center"><?= $countTacGia['total']?></h6>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title text-primary text-center">Bài viết</h5>
                        <h6 class="text-center"><?= $countBaiViet['total']?></h6>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <div class="row">
        <div class="col-md-12">
                <hr>
                <h4 class="text-center">TLU'S MUSIC GARDEN</h4>
            </div>
        </div>
    </div>
</body>
</html>