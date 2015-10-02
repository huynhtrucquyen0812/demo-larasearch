<?php

return array(
    '/' => array(
        '/' => 'EntryController:index:home::get',
        '/hello/{name}' => 'HomeController:hello:nam:name=world',
        '/users' => 'UserController:index',
        '/entrys' => 'EntryController:index',
        '/entrys/{page}' => 'EntryController:turnPage:page=0',
        '/login' => 'UserController:login',
        '/logout' => 'UserController:logout'
    )
);