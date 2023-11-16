<?php $this->layout("layouts/default", ["title" => APPNAME]) ?>

<?php $this->start("page_specific_css") ?>
<link href="https://cdn.datatables.net/v/bs4/dt-1.13.6/datatables.min.css" rel="stylesheet">
<?php $this->stop() ?>

<?php $this->start("page") ?>


<body class="container" >
    <div class="container">
        <li class=" float-left  list-unstyled" >
            <?php if ($this->e(\App\SessionGuard::user()?->role) == 1) : ?>
                <a href="/product/add" class="dropdown-item btn btn-primary">
                    <i class="fa fa-plus"></i>
                    Add book
                </a>
            <?php endif ?>
            <?php foreach ($categories as $category) : ?>
                <a class="dropdown-item" href="#">
                    <?= $this->e($category->name) ?>
                </a>
            <?php endforeach ?>
        </li> 
        <div class="row">
            <?php foreach ($books as $book) : ?>
                <div class="col-lg-3 col-md-4 col-sm-6 align-items-center my-2">
                    <img class="img-fluid" width="300" height="200" src="<?= $this->e($book->image) ?>" alt="Sach <?= $this->e($book->id) ?>">
                    <div class="position-relative">
                        <h6 class="my-1" ><?= $this->e($book->name) ?></h6>
                        <p><?= $this->e($book->author) ?></p>
                        <p><?= $this->e($book->price) ?></p>
                        <div class="d-flex container">
                            <button class="btn btn-secondary">
                                <i class="fas fa-shopping-cart"></i> Giỏ hàng
                            </button>
                            <button class="btn btn-danger ml-2">Mua ngay</button>
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


