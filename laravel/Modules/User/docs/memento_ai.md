
# Summary of Discussions on SurveyFlipResponse Model

## Overview
This document summarizes the discussions regarding the `SurveyFlipResponse` model, its attributes, relationships, migrations, and the context of its implementation within the Laravel application structure. The goal is to provide a comprehensive reference for future development and improvements.

## Model: SurveyFlipResponse
The `SurveyFlipResponse` model is defined under the namespace `Modules\Limesurvey\Models`. It extends a `BaseModel` that includes shared traits and configurations.

### Key Features:
- **Strict Typing**: All attributes and methods in the model are strictly typed for improved performance and reliability.
- **Casts**: The model employs `casts` to define how attributes should be cast to common data types.

### Attributes:
- `survey_id`: string - Identifier for the survey.
- `token`: string - Token from `lime_tokens_<survey_id>` table, establishing a one-to-one relationship with participants.
- `answer`: string - The actual answer value provided by the participant.
- `value`: string - The value as stored in the responses table.
- `submitdate`: datetime - The date and time when the response was submitted.
- `fieldname`: string - The name of the field related to the response.

### Relationships:
- The model relates to the `lime_tokens_<survey_id>` table, with a one-to-one relationship based on the `token` field.

## Migration: CreateSurveyFlipResponsesTable
The migration for creating the `survey_flip_responses` table extends `XotBaseMigration`, ensuring adherence to best practices and shared migration strategies.

### Migration Structure:
- **Table Creation**: Defines the structure of the `survey_flip_responses` table with appropriate data types and indexes.
- **Columns**:
    - `id`: Auto-incrementing primary key.
    - `survey_id`: String to reference the survey.
    - `token`: String to reference the participant's token.
    - `answer`: String for the answer value.
    - `value`: String for the corresponding value from the responses table.
    - `submitdate`: Datetime to track submission dates.
    - `fieldname`: String for the field name associated with the answer.
    - Timestamps for tracking created and updated times.

### Migration Code:
```php
declare(strict_types=1);

namespace Modules\Limesurvey\Database\Migrations;

use Illuminate\Database\Schema\Blueprint;
use Modules\Xot\Database\Migrations\XotBaseMigration;

return new class extends XotBaseMigration
{
    public function up(): void
    {
        $this->tableCreate(
            static function (Blueprint $table): void {
                $table->id();
                $table->string('survey_id');
                $table->string('token');
                $table->string('answer');
                $table->string('value');
                $table->datetime('submitdate');
                $table->string('fieldname');
                $table->timestamps();
                
                $table->index('survey_id');
                $table->index('token');
            }
        );
        $this->tableUpdate(
            function (Blueprint $table): void {
                $this->updateTimestamps(table: $table, hasSoftDeletes: true);
            }
        );
    }
};
```

## Context of Usage
The `SurveyFlipResponse` model is part of a larger system managing survey responses within a Laravel application, which interacts with external databases (LimeSurvey). The strict typing, robust migration structure, and performance considerations align with the project's focus on maintainability and scalability.

## Additional Notes
- Ensure that the model and migration align with existing code structures for seamless integration.
- Consider performance implications when querying the `survey_flip_responses` table, especially regarding relationships and data retrieval.

## Future Considerations
- Potentially adding validation rules for the attributes in the model.
- Exploring further optimizations for the querying mechanisms, especially with a focus on minimizing subqueries and joins.

This document serves as a reference to avoid starting from scratch in future discussions or modifications regarding the `SurveyFlipResponse` model and its related implementations.


## Limesurvey and Quaeris Integration

### Limesurvey
The Limesurvey integration handles survey responses and management within the system. Key components include:

1. **SurveyFlipResponse Model**:
   - Represents the survey responses stored in the `survey_flip_responses` table.
   - Attributes:
     - `survey_id`: Identifier for the specific survey.
     - `token`: Unique token for the respondent.
     - `answer`: The respondent's answer to the question.
     - `value`: Associated value of the answer.
     - `submitdate`: Date and time when the response was submitted.
     - `fieldname`: Name of the field being answered.

2. **Migration for Survey Responses**:
   - Example migration to create the `survey_flip_responses` table:
     ```php
     class CreateSurveyFlipResponsesTable extends XotBaseMigration
     {
         public function up(): void
         {
             $this->tableCreate(
                 static function (Blueprint $table): void {
                     $table->id();
                     $table->string('survey_id');
                     $table->string('token');
                     $table->string('answer');
                     $table->string('value');
                     $table->datetime('submitdate');
                     $table->string('fieldname');
                     $table->timestamps();

                     $table->index('survey_id');
                     $table->index('token');
                 }
             );
         }
     }
     ```

3. **SurveyFlipResponseResource**:
   - Resource to manage Limesurvey responses in Filament.
   - Methods for form and table definitions.

4. **ListSurveyFlipResponses Class**:
   - Extends `ListRecords` to manage the listing of survey flip responses.
   - Key methods:
     - `populate()`: Populates the `survey_flip_responses` table based on the `survey_id`.
     ```php
     public function populate(array $data): void
     {
         $survey_id = Arr::get($data, 'survey_id');
         // Logic to fetch tokens and populate responses...
     }
     ```

5. **Actions**:
   - Include a form for entering `survey_id` and populating responses based on that ID.

### Quaeris
- Integration details and specific features for **Quaeris** were not provided but may follow a similar structure to Limesurvey.
- Ensure that functionality for querying and managing responses aligns with Limesurvey's methods and practices.

---

This section focuses on the management and integration of Limesurvey and provides a foundation for understanding how to work with survey responses in the project.

# Memento AI - LimeSurvey e QUAERIS

## Introduzione
Questo documento riassume le informazioni e le strutture utilizzate nel progetto che integra LimeSurvey e QUAERIS, focalizzandosi su modelli, migrazioni e risorse Filament.

## Modello SurveyResponse
Il modello `SurveyResponse` gestisce le risposte ai sondaggi e include le seguenti funzionalità:

### Struttura del Modello
```php
namespace Modules\Limesurvey\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class SurveyResponse extends Model
{
    public string $surveyId = '';
    protected $connection = 'limesurvey'; // Connessione al DB di LimeSurvey

    public function setTableForSurvey($surveyId)
    {
        $this->surveyId = $surveyId;
        $this->setTable('lime_survey_' . $surveyId);
    }

    public static function getResponsesForSurvey($surveyId)
    {
        $instance = new static();
        $instance->setTableForSurvey($surveyId);
        return $instance; // Recupera tutte le risposte dal sondaggio specifico
    }

    public function scopeWithAnswersLabel($query, string $qid, string $field_name, string $prefix = '')
    {
        $ask_table = 'lime_answers';
        $ask_table_lang = 'lime_answer_l10ns';

        return $query
            ->addSelect([
                $prefix.'lang' => LimeAnswer::select('answer')
                    ->leftJoin($ask_table_lang, static function ($join): void {
                        $join->on('lime_answers.aid', '=', 'lime_answer_l10ns.aid')
                            ->whereRaw('language="it"');
                    })
                    ->whereColumn('code', $field_name)->take(1),
            ]);
    }

    public function scopeWithParticipants(Builder $builder): Builder
    {
        $survey_id = $this->surveyId;
        $participants_table = 'lime_tokens_'.$survey_id;
        $survey_table = 'lime_survey_'.$survey_id;

        return $builder
            ->join($participants_table.' as u', static function ($join) use ($survey_table): void {
                $join->on('u.token', '=', $survey_table.'.token');
            });
    }
}


Risorsa SurveyFlipResponseResource
La risorsa SurveyFlipResponseResource è utilizzata per gestire le risposte nel contesto di Filament.

Azione Populate
L'azione populate richiede un survey_id e popola la tabella corrispondente con le risposte.

Codice dell'Azione


public function populate(array $data): void
{
    $survey_id = Arr::get($data, 'survey_id');

    // Recupera le risposte dal modello SurveyResponse
    $survey_response = SurveyResponse::getResponsesForSurvey($survey_id);
    $tbl = $survey_response->getTable();

    dddx([
        'table' => $tbl,
        'fields' => $survey_response->getConnection()->getColumnListing($tbl),
    ]);

    // Logica per popolare la tabella con i dati delle risposte
    // ...
}


Traduzioni
Sono state implementate traduzioni in italiano e inglese per i vari campi e azioni nel progetto, utilizzando la funzione __() di Laravel per gestire le stringhe tradotte.

Note Importanti
Utilizzare heroicon-o-arrow-down-tray al posto di heroicon-o-download in Filament.
Le azioni e i componenti sono strutturati secondo le best practice fornite da Laraxot.
Conclusione
Questo documento serve come riferimento per le strutture e le funzioni implementate nel progetto LimeSurvey e QUAERIS. Utilizzando queste informazioni, sarà possibile continuare lo sviluppo senza dover ricominciare da zero.






