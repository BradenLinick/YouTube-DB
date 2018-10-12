   <div>
    <form action="" method="post" class="form">
    <?= csrf_field() ?>
      <label for="name">Video name:</label>
      <br>
      <input type="text" name="name" id="name">
      <br>
      <br>
      <label for="url">Video URL:</label>
      <br>
      <input type="text" name="url" id="url">
      <br>
      <br>
      <label for="genre">Genre</label>
      <br>
      <input type="text" name="genre" id="genre">
      <br>
      <br>
      <label for="description">Description</label>
      <br>
      <textarea name="description" id="description" cols="30" rows="10"></textarea>
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

   <div class="game">
  <?php foreach ($all as $game) : ?>
      <div class="info">
      <?= csrf_field() ?>
        <h2 class="name"><?= $game->name ?></h2>
        <p><iframe width="250" height="140" src="<?= $game->url ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></p>
        <p><?= $game->description ?></p>
        <p><?= $game->date ?></p>
        <div class="la">
          <form action="/YT/update?id=<?= $game->id ?>">
            <?= csrf_field() ?>
            <a href="/YT/update?id=<?= $game->id ?>">update</a>
          </form>

          <form action="/YT/delete" method="post">
          <?= csrf_field() ?>
            <input type="hidden" name="id" value="<?= $game->id ?>">
            <input type="submit" value="delete" name="delete">
          </form>
        </div>
      </div>
    
  <?php endforeach; ?>
  </div>