<?php
$app = new App();
$app->get('/', function(){
    echo "Home";
});
$app->get('/contact', function(){
    echo "Conatct";
});
$app->get('/signup', function(){
    echo "Signup";
});