
    <?php include_once __DIR__. '/layout/header.php'?>
            <div class="card bg-dark text-white">
                <?php foreach($room as $r) : ?>
                <img src="/images/<?=$r->image?>" class="card-img" alt="...">
                <div class="card-img-overlay">
                    <h5 class="card-title"><?=$r->name?></h5>
                    <p class="card-text"><?=$r->description?></p>
                    <p class="card-text">Giá chỉ từ: <?=$r->price?> đ</p>
                </div>
                
            </div>
            <div class="sp" style="padding: 20px ;"></div>
            <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-primary" type="button">Book now</button>
            </div>
            <div class="sp" style="padding: 20px ;"></div>
            <div class="card-group">
                <div class="card">
                  <img src="https://statics.vntrip.vn/uploads/deal/20220608_342250_2.jpg" class="card-img-top" alt="...">
                </div>
                <div class="card">
                  <img src="https://statics.vntrip.vn/uploads/deal/20220608_342170_3.jpg" class="card-img-top" alt="...">
                </div>
                <div class="card">
                  <img src="https://statics.vntrip.vn/uploads/deal/20220608_342200_6.jpg" class="card-img-top" alt="...">
                </div>
              </div>
            <div class="sp" style="padding: 20px ;"></div>
            <div class="ct">
                <h4 class="h4">Thông tin chi tiết</h4>
                <p><?= $r->features?></p>
            </div>
            <?php endforeach;?>
            <div class="sp" style="padding: 20px ;"></div>
            <h3 class="h3">Related Rooms</h3>
            <div class="row" style="margin-top: 20px; ">
            <?php foreach($kindRooms as $k):?>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="/images/<?=$k->image?>" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title"><?=$k->name?></h5>
                          <p class="card-text"><?=$k->description?></p>
                          <a href="detail_room?id=<?= $k->id?>&id_kfr=<?= $k->id_kind_of_room ?>" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                </div>
            <?php endforeach;?>
            </div>
            <?php include_once __DIR__. '/layout/footer.php'?>