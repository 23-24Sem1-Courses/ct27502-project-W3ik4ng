<?php $this->layout("layouts/default", ["title" => APPNAME]) ?>

<?php $this->start("page_specific_css") ?>
<link href="https://cdn.datatables.net/v/bs4/dt-1.13.6/datatables.min.css" rel="stylesheet">
<?php $this->stop() ?>

<?php $this->start("page") ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="w-100 col-8">
            <!-- Table Starts Here -->
            <table id="categories" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col" colspan="2">Info</th>
                        <th scope="col" >Amount</th>
                        <th scope="col" >Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($carts as $cart) : ?>

                        <tr>
                            <td>
                                <img  class=" col-sm-10 container d-flex " height="200" src="<?= $books->find($this->e($cart->book_id))->image ?>">
                            </td>
                            <td>
                                <div>
                                    <p><?= $books->find($this->e($cart->book_id))->name ?></p>
                                    <p><?= $books->find($this->e($cart->book_id))->author ?></p>
                                    <p><?= $books->find($this->e($cart->book_id))->price ?></p>
                                </div>
                            </td>
                            <td class="col-2">
                                <form action="<?= '/cart/edit/' . $this->e($cart['id']) ?>" method="POST" name="myForm" id="myForm">
                                <div class="form-group">
                                    <input type="number" name="amount" class="form-control<?= isset($errors['amount']) ? ' is-invalid' : '' ?>" maxlen="3" id="amount" value="<?= $this->e($cart['amount']) ?>" />

                                    <?php if (isset($errors['price'])) : ?>
                                        <span class="invalid-feedback">
                                            <strong><?= $this->e($errors['price']) ?></strong>
                                        </span>
                                    <?php endif ?>
                                </div>
                                </form>   
                            </td>
                            <td class="col-2">
                                <div>
                                    <form class="form-inline" action="<?= '/cart/delete/' . $this->e($cart->id) ?>" method="POST">
                                        <button type="submit" class="btn btn-xs btn-danger" name="delete-cart">
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
                                                <div class="modal-body">Do you want to delete this category?</div>
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
                                </div>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
            <!-- Table Ends Here -->
        </div>
    </div>
</div>
<?php $this->stop() ?>
<?php $this->start("page_specific_js") ?>
<script src="https://cdn.datatables.net/v/bs4/dt-1.13.6/datatables.min.js"></script>
<script>
    $(document).ready(function(){
        $('button[name="delete-cart"]').on('click', function(e){
            e.preventDefault();
            const form = $(this).closest('form');
            const nameTd = $(this).closest('tr').find('td:first');
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