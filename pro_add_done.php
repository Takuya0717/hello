
<body>

<?php try {
    $staff_name = $_POST['name'];
    $staff_price = $_POST['price'];

    $pro_name = htmlspecialchars($staff_name, ENT_QUOTES, 'UTF-8');
    $staff_price = htmlspecialchars($staff_price, ENT_QUOTES, 'UTF-8');

    $dsn = 'mysql:dbname=shop;host=localhost;charset=utf8';
    $user = 'root';
    $password = '';
    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = 'INSERT INTO mst_product(name,price) VALUES (?,?)';
    $stmt = $dbh->prepare($sql);
    $data[] = $pro_name;
    $data[] = $pro_price;
    $stmt->execute($data);

    $dbh = null;

    print $pro_name;
    print 'を追加しました<br />';
} catch (Exception $e) {
    print 'ただいま障害により大変迷惑をお掛けしております。';
    print $e->getMessage();
    exit();
} ?>

<a href="pro_list.php">戻る</a>

</body>