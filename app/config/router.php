<?php

$this->get('/', function(){
    echo '/';
});

$this->get('/home', function(){
    echo 'Home';
});

$this->get('/about/test', function(){
    echo 'Em Test';
});

$this->get('/categoria', 'MyController@method');