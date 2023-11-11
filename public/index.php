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
		<!-- <div class="d-flex flex-row-reverse">
			<div class="mt-2  btn-group-sm btn-group">
				<a class="nav-link btn btn-primary"  href="index.html">Trang chủ</a>
				<a class="nav-link btn btn-primary"  href="service.html">Dịch vụ</a>
				<a class="nav-link btn btn-primary"  href="about.html">Về chúng tôi</a>
				<a class="nav-link btn btn-primary"  href="faq.html">FAQ</a>
				<a class="nav-link btn btn-primary"  href="contact.html">Liên hệ</a> 
			</div>
		</div> -->
		
		<hr />
        
        



	<div class="justify-content-center d-flex w-100">
  		<div id="demo" class="carousel slide data-ride row">

				<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active bg-dark"  ></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1" class=" active bg-dark" ></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2" class=" active bg-dark" ></li>
				</ol>

			<div class="carousel-inner">
				<div class="carousel-item active">
					<img alt="First slide" src="img/img1.jpg" />
				</div>
				<div class="carousel-item">
					<img alt="Second slide" src="img/img2.jpg" />
				</div>
				<div class="carousel-item">
					<img alt="Third slide" src="img/img3.jpg" />
				</div>
    		</div>

    <a href="#demo" class="carousel-control-prev" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon bg-primary" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
	<a href="#demo" class="carousel-control-next" role="button" data-slide="next">
      <span class="carousel-control-next-icon bg-primary" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>

		</div>
	</div>



		


		
		<hr/>

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
			<h6 class="my-1" >Sách 2</h6>
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
			<h6 class="my-1" >Sách 3</h6>
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
			<h6 class="my-1" >Sách 5</h6>
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
			<h6 class="my-1">Sách 6</h6>
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

	
		<hr />
		<!-- <footer>
			<div class="d-flex justify-content-between">
				<p>© Bản quyền thuộc về Công ty Du lịch Bụi.</p>
				<ul class="nav justify-content-end">
					<li class="nav-item"><a class="nav-link" href="index.html">Trang chủ</a></li>
					<li class="nav-item"><a class="nav-link" href="service.html">Dịch vụ</a></li>
					<li class="nav-item"><a class="nav-link" href="about.html">Về chúng tôi</a></li>
					<li class="nav-item"><a class="nav-link" href="faq.html">FAQ</a></li>
					<li class="nav-item"><a class="nav-link" href="contact.html">Liên hệ</a></li>
				</ul>
			</div>
		</footer> -->
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
</body>

</html>