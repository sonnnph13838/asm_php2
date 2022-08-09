<?php include_once __DIR__ . '/../layout/header.php'; ?>
<div class="container">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Sửa người dùng</h3>
        </div>
        <form action="" method="post" enctype="multipart/form-data">
            <?php foreach($user as $u):?>
                <input type="hidden" name="id" value="<?= $u->id?>" >
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" name="name" id="exampleInputEmail1" value="<?=$u->name ?>" placeholder="Enter Name">
                    <p><?php if (isset($errors['name'])) : ?>
                            <span style="color: red;">
                                <?= $errors['name'] ?>
                            </span>
                        <?php endif ?>
                    </p>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" value="<?= $u->email ?>" placeholder="Enter Email">
                    <p><?php if (isset($errors['name'])) : ?>
                            <span style="color: red;">
                                <?= $errors['name'] ?>
                            </span>
                        <?php endif ?>
                    </p>
                </div>
                
                <div class="form-group">
                    <label for="exampleInputEmail1">Image</label>
                    <img src="/images/<?=$u->image ?>" alt="" width="150px" height="120px">
                    <input type="file" name="image">
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Edit</button>
            </div>
            <?php endforeach;?>
        </form>
    </div>
</div>
<?php include_once __DIR__ . '/../layout/footer.php'; ?>