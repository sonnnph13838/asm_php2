<?php include_once __DIR__ . '/../layout/header.php'; ?>
<!-- Main content -->
<table class="table">
    <thead>
        <tr>
            <th scope="col">Stt</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Image</th>
            <th scope="col">Discription</th>
            <th scope="col">Type</th>
            <th scope="col">Status</th>
            <th><a href="/room/add">Add New</a></th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($room as $index => $s) : ?>
            <tr>

                <th scope="row"><?= $index + 1 ?></th>
                <td><?= $s->name ?></td>
                <td><?= $s->price ?></td>
                <td><img src="/images/<?=$s->image ?>" alt="" width="150px" height="120px"></td>
                <td><?= $s->discription ?></td>
                <td>
                    <?php foreach($type as $t):?>
                        <?= $s->id_kind_of_room == $t->id ? $t->name : "" ?>
                    <?php endforeach;?>
                </td>
                <td><?= $s->status == 1 ? "Hoạt động" : "Ngừng hoạt động" ?></td>
                <td><button><a href="/room/edit?id=<?= $s->id ?>">Edit</a></button>
                    <button><a href="/room/del?id=<?= $s->id ?>">Del</a></button>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>
<?php include_once __DIR__ . '/../layout/footer.php'; ?>