    <div class="container">
      <div class="row">
        <div class="col-sm">
        <h1>About me</h1>
            <img src="https://picsum.photos/id/1012/500/300" alt="My photo" class="img-fluid"">
            <h3 class="aboutMe"><?php echo $this->data['index']->getIndex()['title']; ?></h3>
            <p><?php echo $this->data['index']->getIndex()['mainText']; ?></p>
            <cite><?php echo $this->data['index']->getIndex()['author']; ?></cite>
        </div>        
      </div>
    </div>