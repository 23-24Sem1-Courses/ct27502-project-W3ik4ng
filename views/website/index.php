<?php $this->layout("layouts/default", ["title" => APPNAME]) ?>

<?php $this->start("page_specific_css") ?>
<link href="https://cdn.datatables.net/v/bs4/dt-1.13.6/datatables.min.css" rel="stylesheet">
<?php $this->stop() ?>

<?php $this->start("page") ?>

<body >
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

    <div class="container"> 
        <div class=" d-flex justify-content-center">
            <div class="col-md-9 ml-3  ">
                <div class="card-header">
                     <h2 class="text-danger"> <i class="fas fa-fire"></i>  HOT</h2>                       
                 </div>
                <div class="card-body">
                    <div id="books" class="row">
                        <?php foreach ($books as $book) : ?>
                            <div class=" col-md-4  align-items-center p-3 bg-light border border-info rounded my-3 ">
                                <a href="<?= '/detail/' . $this->e($book->id) ?>" class="text-dark">
                                    <img class=" col-sm-10 container d-flex " height="200"  src="<?= $this->e($book->image) ?>" alt="Sach 1">                                      
                                    <h6 class="my-1" ><?= $this->e($book->name) ?></h6>
                                    <p class="m-0"><?= $this->e($book->author) ?></p>
                                    <p class="m-0 my-1" ><?= $this->e($book->price) ?></p>
                                </a>
                                <div>                                  
                                    <button class="btn btn-secondary w-100">
                                        <i class="fas fa-shopping-cart"></i> Giỏ hàng
                                    </button>
                                    <button class="btn btn-danger w-100">
                                        <i class="fas fa-wallet "></i> Mua ngay
                                    </button>                                  
                                </div>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
        </div>
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