<?php include_once __DIR__ . '/../layout/header.php'; ?>
<div class="container">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Thêm mới blog</h3>
        </div>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" class="form-control" name="title" id="exampleInputEmail1" value="<?= $title ?? '' ?>" placeholder="Enter Type">
                    <p><?php if (isset($errors['title'])) : ?>
                            <span style="color: red;">
                                <?= $errors['title'] ?>
                            </span>
                        <?php endif ?>
                    </p>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Image</label>
                    <input type="file" class="form-control" name="image">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Discription</label>
                    <input type="text" class="form-control" name="discription" id="exampleInputEmail1" value="<?= $discription ?? '' ?>" placeholder="Enter Type">
                    <p><?php if (isset($errors['discription'])) : ?>
                            <span style="color: red;">
                                <?= $errors['discription'] ?>
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