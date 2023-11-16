<?php $this->layout("layouts/default", ["title" => APPNAME]) ?>

<?php $this->start("page_specific_css") ?>
<link href="https://cdn.datatables.net/v/bs4/dt-1.13.6/datatables.min.css" rel="stylesheet">
<?php $this->stop() ?>

<?php $this->start("page") ?>


<body class="container" >
    <div class="container">
        <li class=" float-left  list-unstyled" >
                <a href="/product/add" class="dropdown-item btn btn-primary">
                    <i class="fa fa-plus"></i>
                    Add book
                </a>
                <a class="dropdown-item" href="#">
                    <i class="fas fa-book-open"></i>  
                    Sách mới
                </a>
                <a class="dropdown-item" href="#">
                    <i class="fas fa-chart-line"></i>  
                    Sách bán chạy
                </a>
                <a class="dropdown-item icon" href="#">
                    <i class="fas fa-tag"></i>
                    Sách giảm giá
                 </a>
        </li> 
        <div class="row  ">
            <?php foreach ($books as $book) : ?>
                <div class="col-lg-3 col-md-4 col-sm-6 align-items-center  p-3 bg-light border border-info rounded ">
                    <img class="img-fluid" width="300" height="200" src="<?= $this->e($book->image) ?>" alt="Sach <?= $this->e($book->id) ?>">
                    <div >
                        <h6 class="my-1" ><?= $this->e($book->name) ?></h6>
                        <p class="m-0"><?= $this->e($book->author) ?></p>
                        <p class="m-0 my-1" ><?= $this->e($book->price) ?></p>
                        <div class="  container-fluid bg-primary p-0">
                            <button class="btn btn-secondary w-100">
                                <i class="fas fa-shopping-cart"></i> Giỏ hàng
                            </button>
                            <button class="btn btn-danger w-100">Mua ngay</button>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
	</div>        
</body>
	
<?php $this->stop() ?>

<?php $this->start("page_specific_js") ?>
<script src="https://cdn.datatables.net/v/bs4/dt-1.13.6/datatables.min.js"></script>
<script>
//     $(document).ready(function() {
//         new DataTable('#contacts');
//     });
</script>
<?php $this->stop() ?>


