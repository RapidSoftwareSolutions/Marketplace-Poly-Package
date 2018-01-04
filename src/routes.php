<?php
$routes = [
    'metadata',
    'getAccessToken',
    'refreshToken',
    'revokeAccessToken',
    'getAssetsList',
    'getSingleAsset',
    'getUserAssetsList',
    'getUsersLikedAssetsList'
];
foreach($routes as $file) {
    require __DIR__ . '/../src/routes/'.$file.'.php';
}

