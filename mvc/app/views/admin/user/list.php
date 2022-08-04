<?php include_once __DIR__. '/../layout/header.php';?>
    <!-- Main content -->
    <table class="table">
  <thead>
    <tr>
      <th scope="col">stt</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">ảnh</th>
      <th scope="col">role</th>
    </tr>
  </thead>

  <tbody>
 <?php foreach($list as $s):?>
    <tr>
     
      <th scope="row"><?=$s->id?></th>
      <td><?=$s->name?></td>
      <td><?=$s->email?></td>
      <td>anh</td>
      <td><?=$s->id_role?></td>
     
    </tr>
    <?php endforeach?>
  </tbody>
</table>
 <?php include_once __DIR__. '/../layout/footer.php';?>
 