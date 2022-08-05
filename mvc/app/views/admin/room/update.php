<?php include_once __DIR__ . '/../layout/header.php'; ?>
<div class="container">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Sửa loại</h3>
        </div>
        <form action="" method="post">
            <?php foreach ($types as $r) : ?>
                <input type="hidden" name="id" value="<?= $r->id ?>">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tên Phòng</label>
                        <input type="text" class="form-control" name="name" id="exampleInputEmail1" value="<?= $r->name ?>" placeholder="Enter Type">
                        <p><?php if (isset($errors['name'])) : ?>
                                <span style="color: red;">
                                    <?= $errors['name'] ?>
                                </span>
                            <?php endif ?>
                        </p>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Giá</label>
                        <input type="text" class="form-control" name="price" id="exampleInputEmail1" value="<?= $r->price ?>" placeholder="Enter Type">
                        <p><?php if (isset($errors['price'])) : ?>
                                <span style="color: red;">
                                    <?= $errors['price'] ?>
                                </span>
                            <?php endif ?>
                        </p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Mô tả</label>
                    <input type="text" class="form-control" name="description" id="exampleInputEmail1" value="<?= $r->description ?? '' ?>" placeholder="Enter Type">
                    <p><?php if (isset($errors['description'])) : ?>
                            <span style="color: red;">
                                <?= $errors['description'] ?>
                            </span>
                        <?php endif ?>
                    </p>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Chọn dịch vụ</label>
                    
                        <select name="room_service" id="">
                            <?php foreach($cate as $s):?>
                            <option value="<?=$s->id?>"><?=$s->name?></option>
                            <?php endforeach?>
                        </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Tính năng</label>
                    <input type="text" class="form-control" name="features" id="exampleInputEmail1" value="<?=$r->features ?? '' ?>" placeholder="Enter Type">
                    <p><?php if (isset($errors['features'])) : ?>
                            <span style="color: red;">
                                <?= $errors['features'] ?>
                            </span>
                        <?php endif ?>
                    </p>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Chọn loại phòng</label>
                    
                        <select name="id_kind_of_room" id="">
                            <?php foreach($kind as $s):?>
                            <option value="<?=$s->id?>"><?=$s->name?></option>
                            <?php endforeach?>
                        </select>
                </div>
            <?php endforeach; ?>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Edit</button>
            </div>
        </form>
    </div>
</div>
<?php include_once __DIR__ . '/../layout/footer.php'; ?>