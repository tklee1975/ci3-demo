<div class=toolBar >
  <div style=""><a href="news/create">Write something new!</a></div>
</div>

<div class="content" style="padding: 30px">

<?php foreach ($news as $news_item): ?>
        <h3><a href="<?php echo site_url('news/'.$news_item['slug'])?>"><?php echo $news_item['title']; ?></a></h3>
        <div class="main">
                <?php echo $news_item['text']; ?>
        </div>
        <hr/>

<?php endforeach; ?>
</div>
