<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết bài viết</title>
    <link rel="stylesheet" href="./bootstrap.min.css">
    <link rel="stylesheet" href="./icons-1.11.0/icons-1.11.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .header {
            box-shadow: 0 4px 8px 0 rgba(102, 101, 101, 0.2), 0 6px 20px 0 rgba(133, 132, 132, 0.19);;
        }
    </style>
</head>
<body>
    <?php
        include 'header.php'
    ?>

    <?php
    require './php/conn.php';
    if(isset($_GET['ma_bviet'])){
        $ma_bviet = $_GET['ma_bviet'];
    }
    try{
        $query = "SELECT  hinhanh, ten_bhat, ten_tloai, tomtat, noidung, ten_tgia
        FROM baiviet INNER JOIN theloai
        ON baiviet.ma_tloai = theloai.ma_tloai
        INNER JOIN tacgia
        ON baiviet.ma_tgia = tacgia.ma_tgia
        WHERE ma_bviet = '$ma_bviet'";
        $stmt = $strConnection->prepare($query);
        $stmt->execute();
        $result = $stmt->fetch();
    }
    catch(PDOException $e){
        $e->getMessage();
    }
    ?>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="<?= $result['hinhanh']?>" alt="" class="w-100 h-100 object-fit-cover">
            </div>
            <div class="col-md-8">
                <h5 class="text-primary"><?= $result['ten_bhat']?></h5>
                <span><strong>Bài hát: </strong><?= $result['ten_bhat']?></span>
                <p><strong>Thể loại: </strong><?= $result['ten_tloai']?></p>
                <p><strong>Tóm tắt: </strong><?= $result['tomtat']?></p>
                <p><strong>Nội dung: </strong><?= $result['noidung']?></p>
                <p><strong>Tác giả: </strong><?= $result['ten_tgia']?></p>
            </div>

        </div>
    </div>
</body>
</html>