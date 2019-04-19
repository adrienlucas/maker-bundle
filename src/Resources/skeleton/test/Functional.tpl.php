<?= "<?php\n" ?>

namespace <?= $namespace; ?>;

use Symfony\Component\Panther\PantherTestCase;

class <?= $class_name ?> extends PantherTestCase
{
    public function testSomething()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/');

        static::assertResponseIsSuccessful();
        static::assertSelectorTextContains('Hello World', $crawler->filter('h1')->text());
    }
}
