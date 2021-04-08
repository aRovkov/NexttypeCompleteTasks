<?php

$filename = __DIR__ . "/data.json";
$result = [];
if (file_exists($filename)) {
    $result = json_decode (file_get_contents ($filename), true);

    $id = $_GET['set_viewed'];  
    
    if (isset($id)) {
        if ($id !== $_COOKIE['current_id']) {
            setcookie('current_id', $id);

            foreach ($result as &$it) {
                if ($it['id'] === $id) {
                    $it['viewed']++;
                }
            }

            file_put_contents($filename, json_encode($result));
        }
    }
}
?>

<? foreach ($result as $item): ?>
<div>
    <b><?=$item['name']?></b><br>
    <small>Viewed: <?=$item['viewed']?></small><br>
    <?=$item['text']?><br><br>
    <a href="?set_viewed=<?=$item['id']?>">I watched</a>
    <hr>
</div>
<? endforeach; ?>

<?php

?>
