<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music for Life</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style_login.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary shadow p-3 bg-white rounded">
            <div class="container-fluid">
                <div class="h3">
                    <a class="navbar-brand" href="#">Administration</a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="trangchu.php"class="nav-link" aria-current="page" href="./">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php">Trang ngoài</a>
                    </li>
                    <li class="nav-item">
                        <a href =" themtheloai.php" class="nav-link active " href="category.php">Thể Loại</a>
                    </li>
                    <li class="nav-item">
                        <a href =" themtacgia.php" class="nav-link" href="author.php">Tác giả</a>
                    </li>
                    <li class="nav-item">
                        <a href =" thembaiviet.php" class="nav-link active fw-bold" href="article.php">Bài viết</a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>

    </header>
    
     <?php require_once 'connect.php' ?>

    <?php
    if(isset($_POST['add'])){
        $ma_bviet =$_POST['ma_bviet'];
        $tieude =$_POST['tieude'];
        $ten_bhat =$_POST['ten_bhat'];
        $ma_tloai =$_POST['ma_tloai'];
        $tomtat =$_POST['tomtat'];
        $ma_tgia =$_POST['ma_tgia'];
        $ngayviet=$_POST['ngayviet'];
        // $f =$_POST['ngayviet'];
        if($conn -> query("INSERT INTO baiviet (ma_bviet,tieude,ten_bhat,ma_tloai,tomtat,ma_tgia,ngayviet) VALUES ('$ma_bviet','$tieude','$ten_bhat','$ma_tloai','$tomtat','$ma_tgia','$ngayviet') ")){
            echo "<script>alert('them thanh cong!');</script>";
        }
        else{
            echo "<script>alert('them that bai ');</script>";
        }
    }
    $conn->close();
    ?>
    <div class="container">
    <h3 class="text-center text-uppercase fw-bold">Thêm bài viết</h3>
        <form method="POST" action="">
            <div class="form-group">
                <label for="ma_bviet"> Mã bài viết </label>
                <input type="text"name = "ma_bviet" class="form-control" >
            </div>

            <div class="form-group">
                <label for="tieude">Tiêu đề</label>
                <input name = "tieude" class="form-control"  >
            </div>
            <div class="form-group">
                <label for="ten_bhat">Tên bài hát</label>
                <input name = "ten_bhat" class="form-control"  >
            </div>
            <div class="form-group">
                <label for="ma_tloai">Mã thể loại</label>
                <input type="text" name = "ma_tloai" class="form-control"  >
            </div>
            <div class="form-group">
                <label for="tomtat">Tóm tắt</label>
                <input name = "tomtat" class="form-control" >
            </div>
            <div class="form-group">
                <label for="ma_tgia">Mã tác giả</label>
                <input type="text"name = "ma_tgia" class="form-control"  >
            </div>
            <div class="form-group">
                <label for="ngayviet">Ngày Viết</label>
                <input name ="ngayviet" type="datetime" class="form-control"  >
            </div>
            <button type="submit" class="btn btn-success" name = "add">Thêm</button>
        </form>
</div>






    <footer class="bg-white d-flex justify-content-center align-items-center border-top border-secondary  border-2" style="height:80px">
        <h4 class="text-center text-uppercase fw-bold">TLU's music garden</h4>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
</html>