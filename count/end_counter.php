<?php
# This is show stats moment
@mysqli_query($db, 'set character_set_results = "utf8"');

$res = mysqli_query($db, 'SELECT veiws, hosts FROM tbl_visits WHERE `date` = '.$date);
$row = mysqli_fetch_assoc($res);

echo 'Уникальных посетителей '.$row['hosts'].'<br/>';
echo 'Колл-во просмотров '.$row['views'];
