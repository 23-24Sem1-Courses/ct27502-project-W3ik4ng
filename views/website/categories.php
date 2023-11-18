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
                        <th scope="col">Name</th>
                        <th scope="col" colspan="2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($categories as $category) : ?>
                        <tr>
                            <form action="<?= '/categories/edit/' . $this->e($category['id']) ?>" method="POST">
                                <td>
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control<?= isset($errors['name']) ? ' is-invalid' : '' ?>" maxlen="255" id="name" placeholder="Enter Category Name"  value="<?= $this->e($category['name']) ?>" />

                                        <?php if (isset($errors['name'])) : ?>
                                            <span class="invalid-feedback">
                                                <strong><?= $this->e($errors['name']) ?></strong>
                                            </span>
                                        <?php endif ?>
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <button class="btn btn-xs btn-warning" type="submit" name="edit" id="edit">
                                            <i alt="Edit" class="fa fa-pencil"></i> Edit</button> 
                                    </div>
                                </form>
                            </td>
                            <td>
                                <div>
                                    <form class="form-inline" action="<?= '/categories/delete/' . $this->e($category->id) ?>" method="POST">
                                        <button type="submit" class="btn btn-xs btn-danger" name="delete-category">
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
                <tfoot>
                        <th colspan="3" >
                            <form action="/categories" method="POST">
                                <div class="form-group">
                                    <label for="name">New category:</label>
                                    <div class="d-flex">
                                        <input type="text" name="name" class="col-9 mr-1 form-control<?= isset($errors['name']) ? ' is-invalid' : '' ?>" maxlen="255" id="name" placeholder="Enter Category Name" value="<?= isset($old['name']) ? $this->e($old['name']) : '' ?>" />
                                        <button type="submit" name="submit" id="submit" class="btn btn-primary col-3">
                                        <i class="fa fa-plus"></i> Add Category</button>
                                    </div>
                                    
                                    <?php if (isset($errors['name'])) : ?>
                                        <span class="invalid-feedback">
                                            <strong><?= $this->e($errors['name']) ?></strong>
                                        </span>
                                    <?php endif ?>
                                </div>
                            </form>
                        </th>
                </tfoot>
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
        $('button[name="delete-category"]').on('click', function(e){
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