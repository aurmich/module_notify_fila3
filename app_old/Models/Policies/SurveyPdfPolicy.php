<?php

declare(strict_types=1);

namespace Modules\Quaeris\Models\Policies;

use Modules\Quaeris\Models\Customer;
use Modules\Quaeris\Models\SurveyPdf as Record;
use Modules\User\Models\Policies\UserBasePolicy;
use Modules\Xot\Contracts\UserContract;
use Webmozart\Assert\Assert;

class SurveyPdfPolicy extends UserBasePolicy
{
    /**
     * Determine whether the user can view any models.
     *
     * @return false
     */
    public function viewAny(UserContract $user): bool
    {
        return false;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(UserContract $user, Record $record): bool
    {
        //return $user->belongsToTeam($record);
        return true;
    }

    /**
     * Determine whether the user can create models.
     *
     * @return true
     */
    public function create(UserContract $user): bool
    {
        return true;
    }

    /**
     * Determine whether the user can update the model.
     */
    // public function update(UserContract $user, Record $record): bool
    public function update(UserContract $user): bool
    {
        // return $user->ownsTeam($record);
        return false;
    }

    /**
     * Determine whether the user can add team members.
     */
    public function addTeamMember(UserContract $user, Record $record): bool
    {
        //return $user->ownsTeam($record);
        return false;
    }

    /**
     * Determine whether the user can update team member permissions.
     */
    public function updateTeamMember(UserContract $user, Record $record): bool
    {
        //return $user->ownsTeam($record);
        return false;
    }

    /**
     * Determine whether the user can remove team members.
     */
    public function removeTeamMember(UserContract $user, Record $record): bool
    {
        //return $user->ownsTeam($record);
        return false;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(UserContract $user, Record $record): bool
    {
        //return $user->ownsTeam($record);
        return false;
    }

    public function dashboard(UserContract $user, Record $record): bool
    {
        $customer = $user->currentTeam()->first();
        if ($customer === null) {
            return false;
        }
        Assert::isInstanceOf($customer, Customer::class, '['.__LINE__.']['.__FILE__.']');
        $survey_pdf_opts_user = $customer->surveyPdfs->pluck('id')->toArray();

        return \in_array($record->id, $survey_pdf_opts_user, false);
    }
}
