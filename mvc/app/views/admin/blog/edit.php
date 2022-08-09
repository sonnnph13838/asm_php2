<?php include_once __DIR__ . '/../layout/header.php'; ?>
<div class="container">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Thêm mới blog</h3>
        </div>
        <form action="" method="post" enctype="multipart/form-data">
            <?php foreach($type as $b):?>
                <input type="hidden" name="id" value="<?= $b->id?>">
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" class="form-control" name="title" id="exampleInputEmail1" value="<?= $b->title?>">
                    <p><?php if (isset($errors['title'])) : ?>
                            <span style="color: red;">
                                <?= $errors['title'] ?>
                            </span>
                        <?php endif ?>
                    </p>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Image</label><br>
                    <img src="/images/<?=$b->image ?>" alt="" width="150px" height="120px">
                    <input type="file" class="form-control" name="image">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Description</label>
                    <input type="text" class="form-control" name="description" id="exampleInputEmail1" value="<?= $b->description?>">
                    <p><?php if (isset($errors['description'])) : ?>
                            <span style="color: red;">
                                <?= $errors['description'] ?>
                            </span>
                        <?php endif ?>
                    </p>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Edit</button>
            </div>
            <?php endforeach?>
        </form>
    </div>
</div>
<?php include_once __DIR__ . '/../layout/footer.php'; ?>