<?php include_once __DIR__.'/layout/header.php'?>
    <div>
        <p class="h3">Rooms</p>
    </div>
    <div class="row" style="margin-top: 20px; ">

        <?php foreach ($product as $item):?>
        <div class="col" style="margin-bottom:10px;">
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= $item->name ?></h5>
                    <p class="card-text"><?= $item->description ?></p>
                    <a href="detail_room?id=<?= $item->id ?>&id_kfr=<?= $item->id_kind_of_room ?>" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <?php endforeach;?>
    </div>
    <div class="f" style="text-align:center ;">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
    <?php include_once __DIR__. '/layout/footer.php'?>