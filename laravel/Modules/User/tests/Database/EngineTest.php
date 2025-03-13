<?php

namespace Tests\Database;

use PDO;
use Tests\TestCase;
use Illuminate\Support\Facades\DB;

class EngineTest extends TestCase
{
    public function testInnoDbIsAvailable()
    {
        $engines = DB::select("SHOW ENGINES");
        $hasInnoDB = false;
        
        foreach ($engines as $engine) {
            if (strtolower($engine->Engine) === 'innodb') {
                $hasInnoDB = true;
                $this->assertEquals('YES', $engine->Support);
                break;
            }
        }
        
        $this->assertTrue($hasInnoDB, 'InnoDB engine is not available');
    }

    public function testTeamsTableEngine()
    {
        $tableStatus = DB::select("SHOW TABLE STATUS WHERE Name = 'teams'");
        
        $this->assertNotEmpty($tableStatus, 'Teams table not found');
        $this->assertEquals('InnoDB', $tableStatus[0]->Engine, 'Teams table is not using InnoDB engine');
    }

    public function testDatabaseConnection()
    {
        try {
            $pdo = DB::connection()->getPdo();
            $this->assertInstanceOf(PDO::class, $pdo);
        } catch (\Exception $e) {
            $this->fail('Could not connect to database: ' . $e->getMessage());
        }
    }
}
