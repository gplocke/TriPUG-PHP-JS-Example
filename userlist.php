<?php

$userList = array('users' => array(
                                 array(
                                    'name'   => 'Joey Joe Joe Junior Shabadoo',
                                    'userId' => 'jjjjs',
                                    'job'    => "A random guy at Moe's",
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

header('Content-Type: application/json');
echo json_encode($userList);