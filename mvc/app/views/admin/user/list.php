<?php include_once __DIR__. '/../layout/header.php';?>
    <!-- Main content -->
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Stt</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Image</th>
      <th scope="col">Role</th>
      <th></th>
    </tr>
  </thead>

  <tbody>
 <?php foreach($list as $s):?>
    <tr>
     
      <th scope="row"><?=$s->id?></th>
      <td><?=$s->name?></td>
      <td><?=$s->email?></td>
      <td><img src="/images/<?=$s->image ?>" alt="" width="150px" height="120px"></td>
      <td><?= $s->id_role == 1 ? "Nhân viên" : "Khách hàng" ?></td>
      <td>
      
          <button><a href="user/edit?id=<?=$s->id?>">Sửa</a></button>
          <button><a href="user/del?id=<?=$s->id?>">Xóa</a></button>
          
      </td>
    </tr>
    <?php endforeach?>
  </tbody>
</table>
 <?php include_once __DIR__. '/../layout/footer.php';?>
 