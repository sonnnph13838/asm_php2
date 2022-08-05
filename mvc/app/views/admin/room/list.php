<?php include_once __DIR__ . '/../layout/header.php'; ?>
<!-- Main content -->
<table class="table">
    <thead>
        <tr>
            <th scope="col">Stt</th>
            <th scope="col">Name</th>
            <th scope="col">price</th>
            <th scope="col">mo ta</th>
            <th scope="col">room_service</th>
            <th scope="col">features</th>
            <th scope="col">id_kind_of_room</th>
            <th><a href="rooms/add">Add New</a></th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($room as $index => $s) : ?>
            <tr>

                <th scope="row"><?= $index + 1 ?></th>
                <td><?= $s->name ?></td>
                <td><?= $s->price ?></td>
                <td><?= $s->description ?></td>
                <?php foreach($cate as $index =>$c): ?>
                    <?php if($c->id == $s->room_service) :?>
                        <td><?= $c->name ?></td>
                        <?php endif ?>
                <?php endforeach ?>
                
                <td><?= $s->features ?></td>

                <?php foreach($kind as $index =>$k): ?>
                    <?php if($k->id == $s->id_kind_of_room) :?>
                        <td><?= $k->name ?></td>
                        <?php endif ?>
                <?php endforeach ?>

                <td><button><a href="/rooms/update?id=<?= $s->id ?>">Edit</a></button>
                    <button><a href="/type/del?id=<?= $s->id ?>">Del</a></button>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>
<?php include_once __DIR__ . '/../layout/footer.php'; ?>