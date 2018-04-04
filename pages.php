<?php 
    $string = file_get_contents("./config/pages_data.json");
    $content = file_get_contents('http://loripsum.net/api/4/medium/link');
    $pages = json_decode($string, true);
    
    foreach ($pages as $page) {
?>  
  <div class="panel" id="<?php echo $page["id"]; ?>">
    <h1><?php echo $page["title"]; ?></h1>
    <div class="image_wrapper image_fl">
        <?php echo $page["description"]; ?>
    </div>
    <div class="text_content">
        <?php echo $content; ?>
    </div>
  </div>
<?php } ?>
