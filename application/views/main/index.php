<h1>Main</h1>
<?php foreach ($news as $item) { ?>
  <h2><?php echo $item['title']?></h2>
  <p><?php echo $item['body']?></p>
  <hr>
<?php } ?>