<?php include_once __DIR__ . '/../layout/header.php'; ?>
<div class="container">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Thêm mới loại</h3>
        </div>
        <form action="" method="post">
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Tên Loại</label>
                    <input type="text" class="form-control" name="name" id="exampleInputEmail1" value="<?= $name ?? '' ?>" placeholder="Enter Type">
                    <p><?php if (isset($errors['name'])) : ?>
                            <span style="color: red;">
                                <?= $errors['name'] ?>
                            </span>
                        <?php endif ?>
                    </p>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Add</button>
            </div>
        </form>
    </div>
</div>
<?php include_once __DIR__ . '/../layout/footer.php'; ?>