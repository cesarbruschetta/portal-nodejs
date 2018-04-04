<?php 
    $string = file_get_contents("./config/pages_data.json");
    $pages = json_decode($string, true);

    foreach ($pages as $page) {
?>    
    <li>
        <a href="#<?php echo $page["id"]; ?>" class=""><?php echo $page["title"]; ?>
            <span class="ui_icon <?php echo $page["id"]; ?>"></span>
        </a>
    </li>
<?php } ?>
