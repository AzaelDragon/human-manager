<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Application
 *
 * @property int $id
 * @property int $filling_number
 * @property string $filling_date
 * @property int $last_year_beneficiary
 * @property int $application_type
 * @property int $application_target
 * @property int $beneficiary_document
 * @property int $beneficiary_name
 * @property int $employee
 * @property int $requested_money
 * @property string|null $comments
 * @property int $has_interest_letter
 * @property int $has_education_signup
 * @property int|null $has_family_certificate
 * @property int|null $has_past_semester_approbation
 * @property int $has_juramented_declaration
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read mixed $conditional_requirements
 * @property-read mixed $mandatory_requirements
 * @property-read mixed $raw_score
 * @property-read mixed $score
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Application newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Application newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Application query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Application whereApplicationTarget($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Application whereApplicationType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Application whereBeneficiaryDocument($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Application whereBeneficiaryName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Application whereComments($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Application whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Application whereEmployee($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Application whereFillingDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Application whereFillingNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Application whereHasEducationSignup($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Application whereHasFamilyCertificate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Application whereHasInterestLetter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Application whereHasJuramentedDeclaration($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Application whereHasPastSemesterApprobation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Application whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Application whereLastYearBeneficiary($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Application whereRequestedMoney($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Application whereUpdatedAt($value)
 */
	class Application extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ApplicationTarget
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ApplicationTarget newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ApplicationTarget newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ApplicationTarget query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ApplicationTarget whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ApplicationTarget whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ApplicationTarget whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ApplicationTarget whereUpdatedAt($value)
 */
	class ApplicationTarget extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ApplicationBaseReq
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ApplicationBaseReq newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ApplicationBaseReq newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ApplicationBaseReq query()
 */
	class ApplicationBaseReq extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ApplicationCalcReq
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ApplicationCalcReq newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ApplicationCalcReq newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ApplicationCalcReq query()
 */
	class ApplicationCalcReq extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Employee
 *
 * @property int $id
 * @property int $document
 * @property string $name
 * @property int $performance_score
 * @property int $is_administrative
 * @property string $employment_date
 * @property float $wage
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Employee newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Employee newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Employee query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Employee whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Employee whereDocument($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Employee whereEmploymentDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Employee whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Employee whereIsAdministrative($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Employee whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Employee wherePerformanceScore($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Employee whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Employee whereWage($value)
 */
	class Employee extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ApplicationType
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ApplicationType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ApplicationType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ApplicationType query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ApplicationType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ApplicationType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ApplicationType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ApplicationType whereUpdatedAt($value)
 */
	class ApplicationType extends \Eloquent {}
}

