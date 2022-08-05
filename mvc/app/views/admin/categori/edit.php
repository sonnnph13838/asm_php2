<?php include_once __DIR__ . '/../layout/header.php'; ?>
<div class="container">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Sửa loại</h3>
        </div>
        <form action="" method="post">
            <?php foreach ($type as $r) : ?>
                <input type="hidden" name="id" value="<?= $r->id ?>">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tên Loại</label>
                        <input type="text" class="form-control" name="name" id="exampleInputEmail1" value="<?= $r->name ?>" placeholder="Enter Type">
                        <p><?php if (isset($errors['name'])) : ?>
                                <span style="color: red;">
                                    <?= $errors['name'] ?>
                                </span>
                            <?php endif ?>
                        </p>
                    </div>
                </div>
            <?php endforeach; ?>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Edit</button>
            </div>
        </form>
    </div>
</div>
<?php include_once __DIR__ . '/../layout/footer.php'; ?>