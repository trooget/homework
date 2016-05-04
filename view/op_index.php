<table border="2">
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Storage</th>
    <th>Price</th>
    <th>Number</th>
    <th>Operations</th>
  </tr>
  <?php foreach ($wares as $ware) : ?>
  <tr>
    <td><?php print htmlspecialchars($ware['id']); ?></td>
    <td><?php print htmlspecialchars($ware['name']); ?></td>
    <td><?php print htmlspecialchars($ware['storage']); ?></td>
    <td><?php print htmlspecialchars($ware['price']); ?></td>
    <td><?php print htmlspecialchars($ware['number']); ?></td>
    <td>
      <a href="index.php?op=update&id=<?php print htmlspecialchars($ware['id']); ?>">Edit</a>
      <a href="index.php?op=delete&id=<?php print htmlspecialchars($ware['id']); ?>">Delete</a>
    </td>
  </tr>
  <?php endforeach; ?>
</table>

<div>
  <a href="index.php?op=create">Create</a>
</div>
