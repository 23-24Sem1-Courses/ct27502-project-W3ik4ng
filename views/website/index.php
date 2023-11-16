<?php $this->layout("layouts/default", ["title" => APPNAME]) ?>

<?php $this->start("page_specific_css") ?>
<link href="https://cdn.datatables.net/v/bs4/dt-1.13.6/datatables.min.css" rel="stylesheet">
<?php $this->stop() ?>

<?php $this->start("page") ?>

<body class="container" >
    <hr />

    <div class="justify-content-center d-flex w-100">
        <div id="demo" class="carousel slide data-ride row">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img alt="First slide" src="https://bookbuy.vn/Res/Images/Album/9210ad11-08b5-4fae-a5fe-7556343ca9e9.jpg?w=880&scale=both&h=320&mode=crop" />
                </div>
                <div class="carousel-item">
                    <img alt="Second slide" src="https://bookbuy.vn/Res/Images/Album/33c79415-fe9b-4cbf-81b7-b091b5f2bbfa.jpg?w=880&scale=both&h=320&mode=crop" />
                </div>
                <div class="carousel-item">
                    <img alt="Third slide" src="https://bookbuy.vn/Res/Images/Album/342cb2af-6244-4d62-b2fd-b44a76093b52.jpg?w=880&scale=both&h=320&mode=crop" />
                </div>
            </div>
            <a href="#demo" class="carousel-control-prev" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a href="#demo" class="carousel-control-next" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <hr/>
    <div id="books" class="row">
        <?php foreach ($books as $book) : ?>
            <a href="/detail"  class="col-lg-3 col-md-4 col-sm-6 align-items-center my-2">
                    <div >
                        <img class="d-flex container" height="200" src="<?= $this->e($book->image) ?>" alt="Sach 1">
                    </div>

                    <div >
                    <h6><?= $this->e($book->name) ?></h6>
                    <p><?= $this->e($book->author) ?></p>
                    <p><?= $this->e($book->price) ?></p>
                    <div class="d-flex container">
                    <button class="btn btn-secondary">
                        <i class="fas fa-shopping-cart"></i> Giỏ hàng
                    </button>
                    <button class="btn btn-danger ml-2">Mua ngay</button>
                    </div>
                    </div>
            </a>
        <?php endforeach ?>
    </div>
    <hr />
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