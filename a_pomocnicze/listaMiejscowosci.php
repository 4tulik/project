<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <link rel="stylesheet" href="./css/styl.css" type="text/css" />
        <link rel="stylesheet" href="./css/podmioty.css" type="text/css" />
        <script src='./star-rating/jquery.js' type="text/javascript"></script>
        <script src='./star-rating/jquery.MetaData.js' type="text/javascript" language="javascript"></script>
        <script src='./star-rating/jquery.rating.js' type="text/javascript" language="javascript"></script>
        <link href='./star-rating/jquery.rating.css' type="text/css" rel="stylesheet"/>


    </head>
    <body>
        <?php
        include '../data/dataBaseConnection.php';
        $query = 'SELECT DISTINCT COUNT(*) as liczba, miejscowosc FROM `przedszkola`  GROUP BY miejscowosc  ORDER by liczba  DESC';
        $result = mysql_query($query);
        while ($row = mysql_fetch_row($result))
            foreach ($row as $key => $value) {
                if (!is_numeric($value))
                    $listaMiejscowosci.= '"' . $value . '", ';
            }
       /* Pokazuje liste miejscowosci, w kolejnosci: najpierw te, ktore posiadaja najwiecej podmiotów */
        echo $listaMiejscowosci;
        ?>
    </body>
</html>