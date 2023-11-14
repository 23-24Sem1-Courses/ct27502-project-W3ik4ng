<?php
require_once __DIR__ . '/../bootstrap.php';

use CT275\Labs\Contact;
use CT275\Labs\Paginator;

$contact = new Contact($PDO);

$limit = (isset($__GET['limit']) && is_numeric($__GET['limit'])) ?
    (int)$__GET['limit'] : 5;
$page = (isset($__GET['page']) && is_numeric($__GET['page'])) ?
    (int)$__GET['page'] : 1;
$paginator = new Paginator(
    totalRecords: $contact->count(),
    recordsPerPage: $limit,
    currentPage: $page
);
$contacts = $contact->paginate($paginator->recordOffset, $paginator->recordsPerPage);
$pages = $paginator->getPages(length: 3);

include_once __DIR__ . '/../partials/header.php';
?>



<body class="container" >
    
    <?php include_once __DIR__ . '/../partials/navbar.php' ?>
		
        



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
	






















    

    <?php include_once __DIR__ . '/../partials/footer.php' ?>
    <script>
        $(document).ready(function() {
            $('button[name="delete-contact"]').on('click', function(e) {
                e.preventDefault();

                const form = $(this).closest('form');
                const nameTd = $(this).closest('tr').find('td:first');
                if(nameTd.length > 0) {
                    $('.modal-body').html(
                        `Do you want to delete "${nameTd.text()}"?`
                    );
                }
                $('#delete-confirm').modal({
                    backdrop: 'static', keyboard: false
                })
                .one('click', '#delete', function() {
                    form.trigger('submit');
                });
            });
        });
    </script>


