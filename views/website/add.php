<?php $this->layout("layouts/default", ["title" => APPNAME]) ?>

<?php $this->start("page") ?>
<div class="container">

    <div class="row">
        <div class="col-12">

            <form action="/product" method="POST" class="col-md-6 offset-md-3">

                <!-- Name -->
                <div class="form-group">
                    <label for="name">Book Name</label>
                    <input type="text" name="name" class="form-control<?= isset($errors['name']) ? ' is-invalid' : '' ?>" maxlen="255" id="name" placeholder="Enter Book Name" value="<?= isset($old['name']) ? $this->e($old['name']) : '' ?>" />

                    <?php if (isset($errors['name'])) : ?>
                        <span class="invalid-feedback">
                            <strong><?= $this->e($errors['name']) ?></strong>
                        </span>
                    <?php endif ?>
                </div>

                <!-- Author -->
                <div class="form-group">
                    <label for="author">Author Name</label>
                    <input type="text" name="author" class="form-control<?= isset($errors['author']) ? ' is-invalid' : '' ?>" maxlen="255" id="author" placeholder="Enter Author Name" value="<?= isset($old['author']) ? $this->e($old['author']) : '' ?>" />

                    <?php if (isset($errors['author'])) : ?>
                        <span class="invalid-feedback">
                            <strong><?= $this->e($errors['author']) ?></strong>
                        </span>
                    <?php endif ?>
                </div>

                <!-- Image -->
                <div class="form-group">
                    <label for="image">Cover Image</label>
                    <input type="text" name="image" class="form-control<?= isset($errors['image']) ? ' is-invalid' : '' ?>" maxlen="255" id="image" placeholder="Enter Image Link" value="<?= isset($old['image']) ? $this->e($old['image']) : '' ?>" />

                    <?php if (isset($errors['image'])) : ?>
                        <span class="invalid-feedback">
                            <strong><?= $this->e($errors['image']) ?></strong>
                        </span>
                    <?php endif ?>
                </div>

                <!-- Price -->
                <div class="form-group">
                    <label for="price">Book Price</label>
                    <input type="text" name="price" class="form-control<?= isset($errors['price']) ? ' is-invalid' : '' ?>" maxlen="255" id="price" placeholder="Enter Book Price" value="<?= isset($old['price']) ? $this->e($old['price']) : '' ?>" />

                    <?php if (isset($errors['price'])) : ?>
                        <span class="invalid-feedback">
                            <strong><?= $this->e($errors['price']) ?></strong>
                        </span>
                    <?php endif ?>
                </div>

                <!-- Notes -->
                <div class="form-group">
                    <label for="notes">Notes </label>
                    <textarea name="notes" id="notes" class="form-control<?= isset($errors['notes']) ? ' is-invalid' : '' ?>" placeholder="Enter notes (maximum character limit: 1000)"><?= isset($old['notes']) ? $this->e($old['notes']) : '' ?></textarea>

                    <?php if (isset($errors['notes'])) : ?>
                        <span class="invalid-feedback">
                            <strong><?= $this->e($errors['notes']) ?></strong>
                        </span>
                    <?php endif ?>
                </div>

                <!-- Hot -->
                <div class="form-group">
                    <input type="checkbox" name="hot" class="form-control" />
                    <label for="hot">Marked as hot</label>
                </div>

                <!-- Submit -->
                <button type="submit" name="submit" id="submit" class="btn btn-primary">Add Book</button>
            </form>

        </div>
    </div>
</div>
<?php $this->stop() ?>