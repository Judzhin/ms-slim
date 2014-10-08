<?php

/**
 * 
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
use App\Resource\UserResource;
use Slim\Slim;
use SlimJson\Middleware;
use Zend\Json\Json;
use Zend\Http\Response;

require __DIR__ . '/bootstrap.php';

$userResource = new UserResource($entityManager);
$app = new Slim;

// Add the middleware globally
$app->add(new Middleware(array(
    'json.status' => true,
    'json.override_error' => true,
    'json.override_notfound' => true
)));

$app->get('/', function() {
    echo Json::encode(['_status' => Response::STATUS_CODE_200]);
});

$app->get('/users(/(:id)(/))', function($id = null) use ($userResource) {
    echo Json::encode($userResource->get($id));
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
