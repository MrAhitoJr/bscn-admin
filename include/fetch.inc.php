<?php

$table = 'subs_info_tbl';

$primaryKey = 'uid_';
$columns = array(
    array('db' => 'uid_', 'dt' => 0),
    array(
        'db'        => 'status',
        'dt'        => 1,
        'formatter' => function ($d, $row) {
            $stat = [];
            if ($d == 0) {
                $stat = ["Inactive", '<i class="fas fa-times-circle inac"></i>'];
            } else {
                $stat = ["Active", '<i class="fas fa-check-circle ac"></i>'];
            }
            return "<div class='stats_div'>" . $stat[1] . $stat[0] . "</div>";
        }
    ),
    array('db' => 'lname',  'dt' => 2),
    array('db' => 'fname', 'dt' => 3),
    array('db' => 'mname',   'dt' => 4),
    array('db' => 'contact_',     'dt' => 5),
    array('db' => 'address',     'dt' => 6),
    array('db' => 'ip_address',     'dt' => 7),
    array('db' => 'mac_address',     'dt' => 8),
    array(
        'db'        => 'date_installed',
        'dt'        => 9,
        'formatter' => function ($d, $row) {
            return date('Y-F-d', strtotime($d));
        }
    ),
    array('db' => 'type',     'dt' => 10),
    array(
        'db'        => 'uid_',
        'dt'        => 11,
        'formatter' => function ($d, $row) {
            return "<a href='options.php'>Options</a>";
        }
    )
);
$sql_details = array(
    'user' => 'root',
    'pass' => '',
    'db'   => 'bscn-db',
    'host' => 'localhost'
);

require('ssp.class.php');

echo json_encode(
    SSP::simple($_GET, $sql_details, $table, $primaryKey, $columns)
);