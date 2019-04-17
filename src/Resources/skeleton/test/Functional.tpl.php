<?= "<?php\n" ?>

namespace <?= $namespace; ?>;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class <?= $class_name ?> extends WebTestCase
{
    public function testSomething()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/');

        static::assertSame(200, $client->getResponse()->getStatusCode());
        static::assertContains('Hello World', $crawler->filter('h1')->text());
    }
}
