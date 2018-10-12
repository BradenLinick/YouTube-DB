<div>
    <form action="" method="post" class="form">

    <?= csrf_field() ?>
      <label for="name">Video name:</label>
      <br>
      <input value="<?= $song->name ?>" type="text" name="name" id="name">
      <br>
      <br>
      <label for="url">Video URL:</label>
      <br>
      <input value="<?= $song->url ?>" type="text" name="url" id="url">
      <br>
      <br>
      <label for="genre">Genre</label>
      <br>
      <input value="<?= $song->genre ?>" type="text" name="genre" id="genre">
      <br>
      <br>
      <label for="description">Description</label>
      <br>
      <textarea value="<?= $song->description ?>" name="description" id="description" cols="30" rows="10"></textarea>
      <br>
      <br>
      <label for="date">Date</label>
      <br>
      <input type="text" name="date">
      <br>
      <br>
      <input type="submit" value="save">
    </form>
  </div>