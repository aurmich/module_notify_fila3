<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
// ----- bases ----
use Modules\Xot\Database\Migrations\XotBaseMigration;

/*
 * Class CreateThemesTable.
 */
return new class () extends XotBaseMigration {
    // use XotBaseMigrationTrait;
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // -- CREATE --
        $this->tableCreate(
            function (Blueprint $table): void {
                $table->increments('id');
                $table->string('mailable');
                $table->json('subject')->nullable();
                $table->json('html_template')->nullable();
                $table->json('text_template')->nullable();
                
            }
        );

         // -- UPDATE --
         $this->tableUpdate(
            function (Blueprint $table): void {
                if(in_array($this->getColumnType('subject'),['text'])){
                    $table->json('subject')->nullable()->change();
                }
                if(in_array($this->getColumnType('html_template'),['text'])){
                    $table->json('html_template')->nullable()->change();
                }
                if(in_array($this->getColumnType('text_template'),['text'])){
                    $table->json('text_template')->nullable()->change();
                }
                $this->updateTimestamps(table: $table, hasSoftDeletes: true);
            }
        );
    }
};
