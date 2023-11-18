<?php $this->layout("layouts/default", ["title" => APPNAME]) ?>

<?php $this->start("page_specific_css") ?>
<link href="https://cdn.datatables.net/v/bs4/dt-1.13.6/datatables.min.css" rel="stylesheet">
<?php $this->stop() ?>

<?php $this->start("page") ?>



<body  >
   
<hr />

<div class="container">	
    <div class="row">
            <div class="col-xl-6 col-sm-6 d-flex justify-content-center " >
                <img class="img-fluid " width="300" height="200" src="<?= $this->e($book['image']) ?>" alt="Sach <?= $this->e($book['id']) ?>">
            </div>
                <div class="col-xl-6 col-sm-6">
                    <div class="position-relative">
                    <h6 class="my-1"><?= $this->e($book['name']) ?></h6>
                    <p> Author: <?= $this->e($book['author']) ?></p>
                    <p>Price: <?= $this->e($book['price']) ?></p>
                    <p>Category: <?php if($this->e($book['id']) == $this->e($category['id'])) echo($this->e($category['name'])) ?></p>
                    <p>Description:</p>
                    <p><?= $this->e($book['notes']) ?></p>
                    <div class="d-flex container">
                    <button class="btn btn-secondary">
                        <i class="fas fa-shopping-cart"></i> Giỏ hàng
                    </button>
                    <button class="btn btn-danger ml-2">Mua ngay</button>
                    </div>
                </div>
            </div>
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





