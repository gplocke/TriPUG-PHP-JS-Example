<?php
set_include_path('./library' . PATH_SEPARATOR . get_include_path());

$userList = array('users' => array(
                                 array(
                                    'name'   => 'Joey Joe Joe Junior Shabadoo',
                                    'userId' => 'jjjjs',
                                    'job'    => "A random guy at Moe's Tavern",
                                    'age'    => 42
                                ),
                                array(
                                    'name'   => 'Mike Rowe',
                                    'userId' => 'mrowe',
                                    'job'    => 'All Of Them',
                                    'age'    => 48
                                ),
                                array(
                                    'name'   => 'Vincent Price',
                                    'userId' => 'vprice',
                                    'job'    => 'Creepy Guy',
                                    'age'    => 82
                                ),
                                array(
                                    'name'   => 'Morgan Freeman',
                                    'userId' => 'mfreeman',
                                    'job'    => 'God, President, Personal Driver, Inmate',
                                    'age'    => 78
                                )
                            )
            );

if (isset($_GET['debug']) && $_GET['debug'] == 1) {
    require_once 'FirePHPCore/fb.php';
    FB::log('There are a total of ' . count($userList['users']) . ' users');
    FB::info('Info message!');
    FB::warn('Warn message');
    FB::error('Error message');
}

header('Content-Type: application/json');
echo json_encode($userList);