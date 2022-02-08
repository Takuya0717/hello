
<?php
//DBの設定項目
$db_dns = 'mysql:host=localhost;dbname=tinydiary;charset=utf8';
$user = 'root';
$pass = '';

try {
    //MySQLへの接続を実施
    $dbh = new PDO($db_dns, $user, $pass); //DBに接続
    print_r($dbh);
    $dbh = null;
} catch (Exception $e) {
    //例外処理
    print 'エラー発生: ' . htmlspecialchars($e->getMessage()) . '<br/>';
    die();
}
?>




<?php
//DBの設定項目
$db_dns = 'mysql:host=localhost;dbname=tinydiary;charset=utf8';
$user = 'root';
$pass = '';

try {
    //MySQLへの接続を実施
    $dbh = new PDO($db_dns, $user, $pass); //DBに接続
    $sql = 'SELECT * FROM post ORDER BY post_date DESC '; //SQL文
    $stmt = $dbh->query($sql); //SQL文にてMySQLにリクエスト
    $result = $stmt->fetchALL(PDO::FETCH_ASSOC); //その内容をすべて配列に格納
    foreach ($result as $row) {

        // 配列から取り出す
        $post_title = $row['post_title'];
        $post_content = $row['post_content'];
        $post_date = $row['post_date'];
        ?>
		<article>
			<p class="post_date"><?php echo htmlspecialchars($post_date); ?></p>
			<h3 class="post_title"><?php echo htmlspecialchars($post_title); ?></h3>
			<p class="post_content"><?php echo htmlspecialchars($post_content); ?></p>
		</article>
	<?php
    }
    $dbh = null;
} catch (PDOException $e) {
    //例外処理
    print 'エラー発生: ' . htmlspecialchars($e->getMessage()) . '<br/>';
    die();
}


?>
