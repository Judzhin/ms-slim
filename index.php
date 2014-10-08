<?php

/**
 * 
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
use App\Resource\UserResource;
use Slim\Slim;

require __DIR__ . '/bootstrap.php';

$userResource = new UserResource($entityManager);
$app = new Slim;

$app->get('/users(/(:id)(/))', function($id = null) use ($userResource) {
    echo $userResource->get($id);
});

$app->post('/users', function() use ($userResource) {
    echo $userResource->post();
});

$app->put('/users/:id', function($id = null) use ($userResource) {
    echo $userResource->put($id);
});

$app->delete('/users/:id', function($id = null) use ($userResource) {
    echo $userResource->delete($id);
});

$app->run();
