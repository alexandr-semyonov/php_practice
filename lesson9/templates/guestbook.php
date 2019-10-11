    <div class="container">
      <div class="row">
        <div class="col-sm guestbook">
          <h1>Guestbook =)</h1>
          <ul>
          <?php 
            $i = 1;
            foreach($this->data['guestbook']->getGuestBook() as $record):?>
          <li class="guestbook__list__item"><?php echo $i. '. ' .$record['records'] ?></li>
          <?php 
            $i++;
            endforeach ?>  
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="col-sm">
          <form action="./append.php" method="post">
            <textarea name="message"></textarea>
            <br>
            <button type="submit">Send</button>
          </form>
        </div>
      </div>
    </div>