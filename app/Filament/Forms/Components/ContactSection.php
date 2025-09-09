<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Forms\Components;

use Filament\Forms;
<<<<<<< HEAD
use Filament\Forms\Components\Section;
use Modules\Notify\Enums\ContactTypeEnum;

// use Squire\Models\Country;

class ContactSection extends Section
{
    // protected string $view = 'filament-forms::components.group';
=======
use Webmozart\Assert\Assert;
use Filament\Forms\Components\Section;
use Illuminate\Database\Eloquent\Model;
use Modules\Notify\Enums\ContactTypeEnum;


// use Squire\Models\Country;

class ContactSection extends Forms\Components\Section
{
    
    //protected string $view = 'filament-forms::components.group';
>>>>>>> 0666f472 (.)

    protected bool $disableLiveUpdates = false;

    protected function setUp(): void
    {
        parent::setUp();
        $this->schema($this->getFormSchema());
        $this->columns(2);
    }

<<<<<<< HEAD
    protected function getFormSchema(): array
    {
        $res = ContactTypeEnum::getFormSchema();

        return $res;
    }

    /*
    public function saveRelationships(): void
    {

=======
    

    protected function getFormSchema(): array
    {
        $res=ContactTypeEnum::getFormSchema(); 
        return $res;   
    }

    
    
    /*
    public function saveRelationships(): void
    {
        
>>>>>>> 0666f472 (.)
        $state = $this->getState();
        $record = $this->getRecord();
        $relationship = $record->{$this->getRelationship()}();

        if (null === $relationship) {
            return;
        }
        if ($address = $relationship->first()) {
            $address->update($state);
        } else {
            $relationship->updateOrCreate($state);
        }

        $record->touch();
    }
    */
<<<<<<< HEAD
=======
    
>>>>>>> 0666f472 (.)
}
