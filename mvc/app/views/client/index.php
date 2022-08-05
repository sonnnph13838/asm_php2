<?php include_once  __DIR__. '/layout/header.php'?>
    <div>
        <p class="h3">Rooms Hot</p>
    </div>
    <div class="row" style="margin-top: 20px;margin-bottom: 20px;">
        <?php foreach ($product as $item) :?>
            <div class="col" style="margin-top: 20px;margin-bottom: 5px;">
                <div class="card" style="width: 18rem;">
                    <img src="/images/<?= $item ->image ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $item ->name ?></h5>
                        <p class="card-text"><?= $item ->price ?></p>
                        <a href="/detail_room?id=<?= $item ->id ?>&id_kfr=<?= $item->id_kind_of_room ?>" class="btn btn-primary">Book now</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <p class="h3">Post Hot</p>
    <div class="row" style="margin-top: 20px;margin-bottom: 20px;">
        <?php foreach($blog as $p):?>
        <div class="col">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="/images/<?= $p->image1 ?>" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $p->title ?></h5>
                            <p class="card-text"><?= $p->description?></p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach?>
    </div>
    <?php include_once __DIR__. '/layout/footer.php'?>