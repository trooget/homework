<form method="post">
  <div>
    <label for="name">Name:</label>
    <input name="name" type="text" value="<?php print htmlspecialchars($ware['name']); ?>" id="name">
  </div>

  <div>
    <label for="storage">Storage</label>
    <select id="storage" name="storage">
      <?php foreach ($storages as $storage) : ?>
        <option value="<?php print htmlspecialchars($storage['id']); ?>"><?php print htmlspecialchars($storage['name']); ?></option>
      <?php endforeach; ?>
    </select>
  </div>


  <div>
    <label for="price">Price</label>
    <input type="text" name="price" id="price"<?php print ($ware['price']); ?>>
  </div>
  <div>
    <label for="number">Number</label>
    <input type="text" name="number" id="number"<?php print ($ware['number']); ?>>
  </div>

  <div>
    <input type="submit" name="save" value="Save">
    <input type="submit" name="cancel" value="Cancel">
  </div>
</form>
