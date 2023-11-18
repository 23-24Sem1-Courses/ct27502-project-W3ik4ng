<?php $this->layout("layouts/default", ["title" => APPNAME]) ?>

<?php $this->start("page") ?>
<div class="container">
    <div class="row">
        <div class="col-12">

            <form action="<?= '/product/' . $this->e($book['id']) ?>" method="POST" class="col-md-6 offset-md-3">

                <!-- Name -->
                <div class="form-group">
                    <label for="name">Book Name</label>
                    <input type="text" name="name" class="form-control<?= isset($errors['name']) ? ' is-invalid' : '' ?>" maxlen="255" id="name" placeholder="Enter Book Name"  value="<?= $this->e($book['name']) ?>" />

                    <?php if (isset($errors['name'])) : ?>
                        <span class="invalid-feedback">
                            <strong><?= $this->e($errors['name']) ?></strong>
                        </span>
                    <?php endif ?>
                </div>

                <!-- Author -->
                <div class="form-group">
                    <label for="author">Author Name</label>
                    <input type="text" name="author" class="form-control<?= isset($errors['author']) ? ' is-invalid' : '' ?>" maxlen="255" id="author" placeholder="Enter Author Name"  value="<?= $this->e($book['author']) ?>" />

                    <?php if (isset($errors['author'])) : ?>
                        <span class="invalid-feedback">
                            <strong><?= $this->e($errors['author']) ?></strong>
                        </span>
                    <?php endif ?>
                </div>

                <!-- Image -->
                <div class="form-group">
                    <label for="image">Cover Image</label>
                    <div >
                        <img class="pb-2" height="200" src="<?= $this->e($book['image']) ?>" alt="#">
                        <input type="text" name="image" class="form-control<?= isset($errors['image']) ? ' is-invalid' : '' ?>" maxlen="255" id="image" placeholder="Enter Image Link"  value="<?= $this->e($book['image']) ?>" />
                    </div>
                    
                    <?php if (isset($errors['image'])) : ?>
                        <span class="invalid-feedback">
                            <strong><?= $this->e($errors['image']) ?></strong>
                        </span>
                    <?php endif ?>
                </div>

                <!-- Price -->
                <div class="form-group">
                    <label for="price">Book Price</label>
                    <input type="number" name="price" class="form-control<?= isset($errors['price']) ? ' is-invalid' : '' ?>" maxlen="255" id="price" placeholder="Enter Book Price"  value="<?= $this->e($book['price']) ?>" />

                    <?php if (isset($errors['price'])) : ?>
                        <span class="invalid-feedback">
                            <strong><?= $this->e($errors['price']) ?></strong>
                        </span>
                    <?php endif ?>
                </div>

                <!-- Notes -->
                <div class="form-group">
                    <label for="notes">Notes </label>
                    <textarea name="notes" id="notes" class="form-control<?= isset($errors['notes']) ? ' is-invalid' : '' ?>" placeholder="Enter notes (maximum character limit: 1000)"><?= $this->e($book['name']) ?></textarea>

                    <?php if (isset($errors['notes'])) : ?>
                        <span class="invalid-feedback">
                            <strong><?= $this->e($errors['notes']) ?></strong>
                        </span>
                    <?php endif ?>
                </div>

                <!-- Categories -->
                <div class="form-group">
                    <label for="category_id">Book Category</label>
                    <select id="category_id" name="category_id" class="form-control<?= isset($errors['category_id']) ? ' is-invalid' : '' ?>">
                        <?php foreach ($categories as $category) : ?>
                            <option value="<?= $this->e($category->id) ?>" <?php if($this->e($book['category_id']) == $this->e($category->id)) echo("selected") ?>><?= $this->e($category->name) ?></option>
                        <?php endforeach ?>
                    </select>

                    <?php if (isset($errors['category_id'])) : ?>
                        <span class="invalid-feedback">
                            <strong><?= $this->e($errors['category_id']) ?></strong>
                        </span>
                    <?php endif ?>
                </div>

                <!-- Hot -->
                <div class="form-group">
                    <input type="hidden" name="hot" id="hidden" value="0">
                    <input type="checkbox" name="hot" id="hot" value="1" <?php if($this->e($book['hot'])) echo("checked") ?>>
                    <label for="hot">Marked as hot</label>
                </div>

                <!-- Submit -->
                <button type="submit" name="submit" id="submit" class="btn btn-primary">Update Book</button>
            </form>

        </div>
    </div>
</div>
<?php $this->stop() ?>