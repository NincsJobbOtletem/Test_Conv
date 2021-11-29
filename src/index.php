<?php
$GLOBALS['db'] = mysqli_connect("db","test_feladat","mPPUsybBQnRVRdJQ","test_feladat")
        or die("Error " . mysqli_error($GLOBALS['db']));

$query = "SELECT * FROM tree_source WHERE parent_id = 0";
$result = $GLOBALS['db']->query($query);

echo '<ul>';

while ($row = mysqli_fetch_assoc($result))
{
    echo '<li>';
    echo $row['name'];
    switch ($row['id']) {
        case 1:
            $GLOBALS['db'] = mysqli_connect("db","test_feladat","mPPUsybBQnRVRdJQ","test_feladat")
                    or die("Error " . mysqli_error($GLOBALS['db']));
            $query_1 = "SELECT * FROM tree_source WHERE parent_id = 1";
            $result_1 = $GLOBALS['db']->query($query_1);

            echo '<ul>';

            while ($row_1 = mysqli_fetch_assoc($result_1))
            {
                echo '<li>';
                echo $row_1['name'];
                switch ($row_1['id']) {
                    case 2:
                        $GLOBALS['db'] = mysqli_connect("db","test_feladat","mPPUsybBQnRVRdJQ","test_feladat")
                                or die("Error " . mysqli_error($GLOBALS['db']));

                        $query_2 = "SELECT * FROM tree_source WHERE parent_id = 2";
                        $result_2 = $GLOBALS['db']->query($query_2);

                        print '<ul>';

                        while ($row_2 = mysqli_fetch_assoc($result_2))
                        {
                            print '<li>';
                            print $row_2['name'];
                            print '</li>';
                        }

                        echo '</ul>';
                        break;
                    case 3:
                        $GLOBALS['db'] = mysqli_connect("db","test_feladat","mPPUsybBQnRVRdJQ","test_feladat")
                                or die("Error " . mysqli_error($GLOBALS['db']));

                        $query_3 = "SELECT * FROM tree_source WHERE parent_id = 3";
                        $result_3 = $GLOBALS['db']->query($query_3);

                        echo '<ul>';

                        while ($row_3 = mysqli_fetch_assoc($result_3))
                        {
                            ?>
                                <li><?=$row_3['name'];?></li>
                            <?
                        }

                        echo '</ul>';
                        break;

                }
                echo '</li>';
            }

            echo '</ul>';
            break;
        case 4:
            $GLOBALS['db'] = mysqli_connect("db","test_feladat","mPPUsybBQnRVRdJQ","test_feladat")
                    or die("Error " . mysqli_error($GLOBALS['db']));

            $query_4 = "SELECT * FROM tree_source WHERE parent_id = 4";
            $result_4 = $GLOBALS['db']->query($query_4);

            echo '<ul>';

            while ($row_4 = mysqli_fetch_assoc($result_4))
            {
                 $row  = '<li>' . $row_4['name'] . '</li>';
                 print_r($row);
            }

            echo '</ul>';
            break;
        case 7:
            $GLOBALS['db'] = mysqli_connect("db","test_feladat","mPPUsybBQnRVRdJQ","test_feladat")
                    or die("Error " . mysqli_error($GLOBALS['db']));

            $query_7 = "SELECT * FROM tree_source WHERE parent_id = 7";
            $result_7 = $GLOBALS['db']->query($query_7);

            echo '<ul>';

            while ($row_7 = mysqli_fetch_assoc($result_7))
            {
                echo sprintf('<li>%w</li>',$row_7['name']);
            }

            echo '</ul>';
            break;
        }
   echo '</li>';
}

echo '</ul>';
