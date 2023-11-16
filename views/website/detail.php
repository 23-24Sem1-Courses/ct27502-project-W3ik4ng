<?php $this->layout("layouts/default", ["title" => APPNAME]) ?>

<?php $this->start("page_specific_css") ?>
<link href="https://cdn.datatables.net/v/bs4/dt-1.13.6/datatables.min.css" rel="stylesheet">
<?php $this->stop() ?>

<?php $this->start("page") ?>



<body class="container" >
   
<hr />

		
<div class="row">
        <div class="col-xl-6 col-sm-6 d-flex justify-content-center " >
            <img class="d-flex container" height="200" src="img/sach1.jpg" alt="Sach 1">
        </div>
            <div class="col-xl-6 col-sm-6">
                <div class="position-relative">
                <h6 class="my-1">Sách 1</h6>
                <p>tac gia</p>
                <p>gia</p>
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





