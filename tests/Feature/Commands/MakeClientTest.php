<?php
declare(strict_types=1);

namespace Tests\Feature\Commands;

use App\Models\Client;
use Illuminate\Foundation\Testing\PendingCommand;
use Symfony\Component\Console\Exception\RuntimeException;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

/**
 * Class MakeClientTest
 * @package Tests\Feature\Commands
 */
class MakeClientTest extends TestCase
{
    use RefreshDatabase;

    public function testCreateClientMissingArgumentsFails(): void
    {
        $this->expectException(RuntimeException::class);
        $this->expectExceptionMessage('Not enough arguments (missing: "name, domain")');
        $this->artisan('client:create');
    }

    public function testCreateClientSuccessful(): void
    {
        $attributes = ['name' => 'Acme Corp', 'domain' => 'acme.com'];

        /** @var PendingCommand $res this is necessary to get the phpstan to run */
        $res = $this->artisan('client:create', $attributes);
        $res->assertExitCode(0);

        $this->assertNotEmpty(Client::where($attributes)->first());
    }
}
