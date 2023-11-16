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
                <a href="/product/add" class="dropdown-item btn btn-primary">
                    <i class="fa fa-plus"></i>
                    Add catagory
                </a>
            <?php endif ?>
            <?php foreach ($categories as $category) : ?>
                <a class="dropdown-item" href="#<?= $this->e($category->name) ?>">
                    <?= $this->e($category->name) ?>
                </a>
            <?php endforeach ?>
        </li> 
        <div class="row ">
            <?php foreach ($categories as $category) : ?>
                <!-- Categories -->
                <h5 id="<?= $this->e($category->name) ?>"><?= $this->e($category->name) ?></h5>
                <?php foreach ($category->books as $book) : ?>
                    <!-- Books -->
                    <div class="col-lg-3 col-md-4 col-sm-6 align-items-center  p-3 bg-light border border-info rounded ">
                        <img class="img-fluid" width="300" height="200" src="<?= $this->e($book->image) ?>" alt="Sach <?= $this->e($book->id) ?>">
                        <div >

                            <h6 class="my-1" ><?= $this->e($book->name) ?></h6>
                            <p class="m-0"><?= $this->e($book->author) ?></p>
                            <p class="m-0 my-1" ><?= $this->e($book->price) ?></p>
                            <div class="  container-fluid p-0">
                                <button class="btn btn-success w-100">
                                    <i class="fas fa-shopping-cart"></i> Giỏ hàng
                                </button>
                                <button class="btn btn-warning w-100">Mua ngay</button>
                                <?php if ($this->e(\App\SessionGuard::user()?->role) == 1) : ?>
                                    <a href="<?= '/product/edit/' . $this->e($book->id) ?>" class="btn btn-secondary w-50">
                                        Edit
                                    </a>
                                    <form class="form-inline" action="<?= '/product/delete/' . $this->e($book->id) ?>" method="POST">
                                        <button type="submit" class="btn btn-danger w-50" name="delete-contact">
                                            <i alt="Delete" class="fa fa-trash"></i> Delete
                                        </button>
                                    </form>
                                    <div id="delete-confirm" class="modal fade" tabindex="-1">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Confirmation</h4>
                                                    <button type="button" class="close" data-dismiss="modal">
                                                        <span>&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">Do you want to delete this book?</div>
                                                <div class="modal-footer">
                                                    <button type="button"
                                                        data-dismiss="modal"
                                                        class="btn btn-danger" id="delete">Delete</button>
                                                    <button type="button"
                                                        data-dismiss="modal"
                                                        class="btn btn-default">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            <?php endforeach ?>
        </div>
	</div>        
</body>
	
<?php $this->stop() ?>

<?php $this->start("page_specific_js") ?>
<script src="https://cdn.datatables.net/v/bs4/dt-1.13.6/datatables.min.js"></script>
<script>
    $(document).ready(function(){
        new DataTable('#contacts');
        $('button[name="delete-contact"]').on('click', function(e){
            e.preventDefault();
            const form = $(this).closest('form');
            const nameTd = $(this).closest('tr').find('td:first');
            if (nameTd.length > 0) {
                $('.modal-body').html(
                `Do you want to delete "${nameTd.text()}"?`
                );
            }
            $('#delete-confirm')
            .modal({
                backdrop: 'static',
                keyboard: false
            })
            .one('click', '#delete', function() {
                form.trigger('submit');
            });

        });
    });
</script>
<?php $this->stop() ?>


