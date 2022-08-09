<?php include_once __DIR__ . '/../layout/header.php'; ?>
<div class="container">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Thêm mới blog</h3>
        </div>
        <form action="" method="post" enctype="multipart/form-data">
            <?php foreach ($room as $b) : ?>
                <input type="hidden" name="id" value="<?= $b->id ?>">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" class="form-control" name="name" id="exampleInputEmail1" value="<?= $b->name ?>">
                        <p><?php if (isset($errors['name'])) : ?>
                                <span style="color: red;">
                                    <?= $errors['name'] ?>
                                </span>
                            <?php endif ?>
                        </p>
                    </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">Types</label>
                    <select name="id_kind_of_room" id="">
                        <option value="0">Types</option>
                        <?php foreach($type as $t):?>
                            <option value="<?=$t->id?>"<?= isset($b->id_kind_of_room) && ($b->id_kind_of_room == $t->id) ? 'selected' : '' ?>><?= $t->name?></option>
                        <?php endforeach?>
                    </select>
                    <p><?php if (isset($errors['id_kind_of_room'])) : ?>
                            <span style="color: red;">
                                <?= $errors['id_kind_of_room'] ?>
                            </span>
                        <?php endif ?>
                    </p>
                </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Price</label>
                        <input type="text" class="form-control" name="price" id="exampleInputEmail1" value="<?= $b->price ?>">
                        <p><?php if (isset($errors['price'])) : ?>
                                <span style="color: red;">
                                    <?= $errors['price'] ?>
                                </span>
                            <?php endif ?>
                        </p>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Image</label><br>
                        <img src="/images/<?= $b->image ?>" alt="" width="150px" height="120px">
                        <input type="file" class="form-control" name="image">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Discription</label>
                        <input type="text" class="form-control" name="discription" id="exampleInputEmail1" value="<?= $b->discription ?>">
                        <p><?php if (isset($errors['discription'])) : ?>
                                <span style="color: red;">
                                    <?= $errors['discription'] ?>
                                </span>
                            <?php endif ?>
                        </p>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Edit</button>
                </div>
            <?php endforeach ?>
        </form>
    </div>
</div>
<?php include_once __DIR__ . '/../layout/footer.php'; ?>