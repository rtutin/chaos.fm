<?php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once "../vendor/autoload.php";
require_once "doctrine/Post.php";

// Create a simple "default" Doctrine ORM configuration for Annotations
$isDevMode = false;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/doctrine"), $isDevMode);
// database configuration parameters
$conn = array(
    'driver' => 'pdo_sqlite',
    'path' => __DIR__ . '/wakaba.sqlite',
);
// obtaining the entity manager
$entityManager = EntityManager::create($conn, $config);
$postsRepository = $entityManager->getRepository('Post');
// get posts from database
$posts = $postsRepository->findBy([], ['num'=>'desc'], 20);

/*****FEED*****/
$feed = new \Zelenin\Feed;

// $feed->addChannel();
$feed->addChannel('http://chaos.fm/b/rss.xml');

// required channel elements
$feed
    ->addChannelTitle('chaos.fm/b')
    ->addChannelLink('http://chaos.fm/b')
    ->addChannelDescription('chaos.fm /b/ feed');

foreach ($posts as $post) {
    $feed->addItem();

    $feed
        ->addItemTitle($post->getId())
        ->addItemDescription($post->getPost());
}
  
echo $feed;
$feed->save(realpath(__DIR__ . '/rss.xml'));
