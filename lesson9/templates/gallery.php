<div class="container">
  <div class="row">
    <div class="col-sm">
      <h1>Gallery</h1>
        <p>Click the button to display an alert box.</p>
        <button class="alertButton button">Try it</button>
    </div>
  </div>
  <div class="row">
      <div class="col">
          <ul class="gallery"
              <?php foreach ($this->data['gallery']->getData() as $picture): ?>
              <li><img src="img/<?php echo $picture['pictureName'] ?>" alt="<?php echo 'picture id=' . $picture['id']?>"></li>
              <?php endforeach; ?>
          </ul>
      </div>
  </div>
  <div class="row upload-form">
    <div class="col">
      <form
        action="upload.php"
        method="post"
        enctype="multipart/form-data"
      >
        <input type="file" name="galleryImg">
        <button type="submit">Send image</button>
      </form>
    </div>
  </div>
</div>