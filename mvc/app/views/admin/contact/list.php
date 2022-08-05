<?php include_once __DIR__ . '/../layout/header.php'; ?>
<!-- Main content -->
<table class="table">
    <thead>
        <tr>
            <th scope="col">Stt</th>
            <th scope="col">Name</th>
            <th scope="col">email</th>
            <th scope="col">mesage</th>
            <th><a href="/type/add">Add New</a></th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($listcontact as $index => $s) : ?>
            <tr>

                <th scope="row"><?= $index + 1 ?></th>
                <td><?= $s->name ?></td>
                <td><?= $s->email ?></td>
                <td><?= $s->messages ?></td>
                <td><button><a href="/type/edit?id=<?= $s->id ?>">Edit</a></button>
                    <button><a href="/type/del?id=<?= $s->id ?>">Del</a></button>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>
<?php include_once __DIR__ . '/../layout/footer.php'; ?>