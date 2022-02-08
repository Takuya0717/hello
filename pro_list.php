<body>
    
<?php try {
    $dsn = 'mysql:dbname=shop;host=localhost;charset=utf8';
    $user = 'root';
    $password = '';
    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = 'SELECT code,name FROM mst_product WHERE 1';
    $stmt = $dbh->prepare($sql);
    $stmt->execute();

    $dbh = null;

    print '商品一覧<br /><br />';
    print '<form method="post" action="pro_branch.php">';
    while (true) {
        $rec = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($rec == false) {
            break;
        }
        '
         print<input type="radio" name="procode" value="' .
            $rec['code'] .
            '">';
        print $rec['name'] . '---';
        print $rec['price'] . '円';
        print '<br />';
    }
    print '<input type="submit" value="修正">';
    print '</form>';
} catch (Exception $e) {
    print 'ただいま障害により大変迷惑をお掛けしております。';
    exit();
} ?>

</body>