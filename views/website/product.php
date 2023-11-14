<?php $this->layout("layouts/default", ["title" => APPNAME]) ?>

<?php $this->start("page_specific_css") ?>
<link href="https://cdn.datatables.net/v/bs4/dt-1.13.6/datatables.min.css" rel="stylesheet">
<?php $this->stop() ?>

<?php $this->start("page") ?>


<body class="container" >
    
   
		
        



    <div class="container">
       

        

        <li class=" float-left  list-unstyled" >
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

        <div class="row">
  		    <div class="col-lg-3 col-md-4 col-sm-6 align-items-center my-2">
    			    <img class="img-fluid" width="300" height="200" src="img/sach1.jpg" alt="Sach 1">
			    <div class="position-relative">
                <h6 class="my-1" >Sách 1</h6>
                <p> tac gia </p>
                <p> gia </p>
                <div class="d-flex container">
                <button class="btn btn-secondary">
                    <i class="fas fa-shopping-cart"></i> Giỏ hàng
                </button>
                <button class="btn btn-danger ml-2">Mua ngay</button>
                </div>
                </div>
 		    </div>

            <div class="col-lg-3 col-md-4 col-sm-6 align-items-center my-2">
    			    <img class="img-fluid" width="300" height="200" src="img/sach1.jpg" alt="Sach 1">
			    <div class="position-relative">
                <h6 class="my-1">Sách 2</h6>
                <p> tac gia </p>
                <p> gia </p>
                <div class="d-flex container">
                <button class="btn btn-secondary">
                    <i class="fas fa-shopping-cart"></i> Giỏ hàng
                </button>
                <button class="btn btn-danger ml-2">Mua ngay</button>
                </div>
                </div>
 		    </div>

            <div class="col-lg-3 col-md-4 col-sm-6 align-items-center my-2">
    			    <img class="img-fluid" width="300" height="200" src="img/sach1.jpg" alt="Sach 1">
			    <div class="position-relative">
                <h6 class="my-1">Sách 3</h6>
                <p> tac gia </p>
                <p> gia </p>
                <div class="d-flex container">
                <button class="btn btn-secondary">
                    <i class="fas fa-shopping-cart"></i> Giỏ hàng
                </button>
                <button class="btn btn-danger ml-2">Mua ngay</button>
                </div>
                </div>
 		    </div>

            <div class="col-lg-3 col-md-4 col-sm-6 align-items-center my-2">
    			    <img class="img-fluid" width="300" height="200" src="img/sach1.jpg" alt="Sach 1">
			    <div class="position-relative">
                <h6 class="my-1" >Sách 4</h6>
                <p> tac gia </p>
                <p> gia </p>
                <div class="d-flex container">
                <button class="btn btn-secondary">
                    <i class="fas fa-shopping-cart"></i> Giỏ hàng
                </button>
                <button class="btn btn-danger ml-2">Mua ngay</button>
                </div>
                </div>
 		    </div>

            <div class="col-lg-3 col-md-4 col-sm-6 align-items-center my-2">
    			    <img class="img-fluid" width="300" height="200" src="img/sach1.jpg" alt="Sach 1">
			    <div class="position-relative">
                <h6 class="my-1" >Sách 5  </h6>
                <p> tac gia </p>
                <p> gia </p>
                <div class="d-flex container">
                <button class="btn btn-secondary">
                    <i class="fas fa-shopping-cart"></i> Giỏ hàng
                </button>
                <button class="btn btn-danger ml-2">Mua ngay</button>
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


