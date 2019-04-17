<?= "<?php\n" ?>

namespace <?= $namespace; ?>;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class <?= $class_name ?> extends WebTestCase
{
    public function testSomething()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/');

        static::assertResponseIsSuccessful();
        static::assertSelectorTextContains('Hello World', $crawler->filter('h1')->text());
    }
}
