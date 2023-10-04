<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="./bootstrap.min.css">
    <link rel="stylesheet" href="./icons-1.11.0/icons-1.11.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <?php
    require './php/conn.php';

    try{
        $query = 'select * from baiviet';
        $stmt = $strConnection->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll();
    }
    catch(PDOException $e){
        $e->getMessage();
    }
    ?>
    <div class="container">
    <?php
    include 'header.php';
    ?>
        <div class="row g-0 ">
            <div class="col-md-12 ">
            <a href="" class="d-block">
            <img src="./asset/img/main.png" alt="" class="w-100" style="
            height: 400px;">
            </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="title">
                    <h4 class=" my-3 text-uppercase text-primary text-center">Top bài hát yêu thích</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <?php foreach($result as $each) {?> 
            <div class="col-md-3 mb-3">
                <div class="sing_group">
                    <div class="border border-drark rounded text-center">
                        <a href="detail.php?ma_bviet=<?= $each['ma_bviet']?>">
                            <img src="<?= $each['hinhanh']?>" alt="" class="w-100 h-100 object-fit-cover">
                        </a>
                        <span class="m-2 text-primary text-center"><?= $each['ten_bhat']?></span>
                    </div>
                </div>
            </div>
            <?php }?>
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