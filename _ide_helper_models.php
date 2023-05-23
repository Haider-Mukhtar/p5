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
 * App\Models\Account
 *
 * @property int $id
 * @property string $name
 * @property int $type
 * @property string $description
 * @property bool $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|Account newModelQuery()
 * @method static Builder|Account newQuery()
 * @method static Builder|Account query()
 * @method static Builder|Account whereCreatedAt($value)
 * @method static Builder|Account whereDescription($value)
 * @method static Builder|Account whereId($value)
 * @method static Builder|Account whereName($value)
 * @method static Builder|Account whereStatus($value)
 * @method static Builder|Account whereType($value)
 * @method static Builder|Account whereUpdatedAt($value)
 * @mixin Model
 * @property-read mixed $type_label
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Payment[] $payments
 * @property-read int|null $payments_count
 * @property int $is_default
 * @method static Builder|Account whereIsDefault($value)
 */
	class Account extends \Eloquent {}
}

namespace App\Models{
/**
 * Class Accountant
 *
 * @version February 17, 2020, 5:34 am UTC
 * @property int $id
 * @property int $user_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Address $address
 * @property-read User $user
 * @method static Builder|Accountant newModelQuery()
 * @method static Builder|Accountant newQuery()
 * @method static Builder|Accountant query()
 * @method static Builder|Accountant whereCreatedAt($value)
 * @method static Builder|Accountant whereId($value)
 * @method static Builder|Accountant whereUpdatedAt($value)
 * @method static Builder|Accountant whereUserId($value)
 * @mixin Model
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\EmployeePayroll[] $payrolls
 * @property-read int|null $payrolls_count
 * @property int $is_default
 * @method static Builder|Accountant whereIsDefault($value)
 */
	class Accountant extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Address
 *
 * @property int $id
 * @property int $owner_id
 * @property string $owner_type
 * @property string $address1
 * @property string|null $address2
 * @property string $city
 * @property string $zip
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Address newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Address newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Address query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Address whereAddress1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Address whereAddress2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Address whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Address whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Address whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Address whereOwnerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Address whereOwnerType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Address whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Address whereZip($value)
 * @mixin Eloquent
 * @property-read Model|\Eloquent $owner
 */
	class Address extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\AdvancedPayment
 *
 * @property int $id
 * @property int $patient_id
 * @property string $receipt_no
 * @property float $amount
 * @property \Illuminate\Support\Carbon $date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AdvancedPayment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AdvancedPayment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AdvancedPayment query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AdvancedPayment whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AdvancedPayment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AdvancedPayment whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AdvancedPayment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AdvancedPayment wherePatientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AdvancedPayment whereReceiptNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AdvancedPayment whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property int $is_default
 * @property-read \App\Models\Patient $patient
 * @method static \Illuminate\Database\Eloquent\Builder|AdvancedPayment whereIsDefault($value)
 */
	class AdvancedPayment extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Ambulance
 *
 * @property int $id
 * @property string $vehicle_number
 * @property string $vehicle_model
 * @property string $year_made
 * @property string $driver_name
 * @property string $driver_license
 * @property string $driver_contact
 * @property string|null $note
 * @property bool $is_available
 * @property int $vehicle_type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Ambulance newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Ambulance newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Ambulance query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Ambulance whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Ambulance whereDriverContact($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Ambulance whereDriverLicense($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Ambulance whereDriverName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Ambulance whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Ambulance whereIsAvailable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Ambulance whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Ambulance whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Ambulance whereVehicleModel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Ambulance whereVehicleNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Ambulance whereVehicleType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Ambulance whereYearMade($value)
 * @mixin \Eloquent
 * @property int $is_default
 * @method static \Illuminate\Database\Eloquent\Builder|Ambulance whereIsDefault($value)
 */
	class Ambulance extends \Eloquent {}
}

namespace App\Models{
/**
 * Class AmbulanceCall
 *
 * @version March 27, 2020, 9:47 am UTC
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static Builder|AmbulanceCall newModelQuery()
 * @method static Builder|AmbulanceCall newQuery()
 * @method static Builder|AmbulanceCall query()
 * @method static Builder|AmbulanceCall whereAmount($value)
 * @method static Builder|AmbulanceCall whereDate($value)
 * @method static Builder|AmbulanceCall whereCreatedAt($value)
 * @method static Builder|AmbulanceCall whereId($value)
 * @method static Builder|AmbulanceCall wherePatientId($value)
 * @method static Builder|AmbulanceCall whereUpdatedAt($value)
 * @mixin Model
 * @property int $patient_id
 * @property \Illuminate\Support\Carbon $bill_date
 * @property float $amount
 * @property-read Collection|BillItems[] $billItems
 * @property-read int|null $bill_items_count
 * @property-read \App\Models\User $patient
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AmbulanceCall wherePatientAdmissionId($value)
 * @property int $ambulance_id
 * @property string $driver_name
 * @property \Illuminate\Support\Carbon $date
 * @property-read \App\Models\Ambulance $ambulance
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AmbulanceCall whereAmbulanceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AmbulanceCall whereDriverName($value)
 * @property int $is_default
 * @method static Builder|AmbulanceCall whereIsDefault($value)
 */
	class AmbulanceCall extends \Eloquent {}
}

namespace App\Models{
/**
 * Class Appointment
 *
 * @version February 13, 2020, 5:52 am UTC
 * @property int $id
 * @property int $patient_id
 * @property int $doctor_id
 * @property int $department_id
 * @property Carbon $opd_date
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|Appointment newModelQuery()
 * @method static Builder|Appointment newQuery()
 * @method static Builder|Appointment query()
 * @method static Builder|Appointment whereCreatedAt($value)
 * @method static Builder|Appointment whereDepartmentId($value)
 * @method static Builder|Appointment whereDoctorId($value)
 * @method static Builder|Appointment whereId($value)
 * @method static Builder|Appointment whereOpdDate($value)
 * @method static Builder|Appointment wherePatientId($value)
 * @method static Builder|Appointment whereUpdatedAt($value)
 * @mixin Model
 * @property-read \App\Models\Department $department
 * @property-read \App\Models\Doctor $doctor
 * @property-read \App\Models\User $patient
 * @property string|null $problem
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Appointment whereProblem($value)
 * @property int $is_completed
 * @method static Builder|Appointment whereIsCompleted($value)
 */
	class Appointment extends \Eloquent {}
}

namespace App\Models{
/**
 * Class Bed
 *
 * @version February 17, 2020, 10:56 am UTC
 * @property int $id
 * @property int $bed_type
 * @property int $bed_id
 * @property string|null $description
 * @property int $charge
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|Bed newModelQuery()
 * @method static Builder|Bed newQuery()
 * @method static Builder|Bed query()
 * @method static Builder|Bed whereBedId($value)
 * @method static Builder|Bed whereBedType($value)
 * @method static Builder|Bed whereCharge($value)
 * @method static Builder|Bed whereCreatedAt($value)
 * @method static Builder|Bed whereDescription($value)
 * @method static Builder|Bed whereId($value)
 * @method static Builder|Bed whereUpdatedAt($value)
 * @mixin Model
 * @property-read BedType $bedType
 * @property int $name
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Bed whereName($value)
 * @property int $is_available
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Bed whereIsAvailable($value)
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\BedAssign[] $bedAssigns
 * @property-read int|null $bed_assigns_count
 * @property int $is_default
 * @method static Builder|Bed whereIsDefault($value)
 */
	class Bed extends \Eloquent {}
}

namespace App\Models{
/**
 * Class BedAssign
 *
 * @version February 18, 2020, 6:49 am UTC
 * @property int $id
 * @property int $patient_id
 * @property string $assign_date
 * @property string|null $discharge_date
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User $patient
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BedAssign newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BedAssign newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BedAssign query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BedAssign whereAssignDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BedAssign whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BedAssign whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BedAssign whereDischargeDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BedAssign whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BedAssign wherePatientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BedAssign whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string $case_id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BedAssign whereCaseId($value)
 * @property int $bed_id
 * @property-read \App\Models\Bed $bed
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BedAssign whereBedId($value)
 * @property int $status
 * @property-read PatientCase $caseFromBedAssign
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BedAssign whereStatus($value)
 * @property int|null $ipd_patient_department_id
 * @property-read IpdPatientDepartment|null $ipdPatient
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BedAssign whereIpdPatientDepartmentId($value)
 * @property int $is_default
 * @method static \Illuminate\Database\Eloquent\Builder|BedAssign whereIsDefault($value)
 */
	class BedAssign extends \Eloquent {}
}

namespace App\Models{
/**
 * Class Bed_Type
 *
 * @version February 17, 2020, 8:08 am UTC
 * @property int $id
 * @property string $title
 * @property string $description
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|BedType newModelQuery()
 * @method static Builder|BedType newQuery()
 * @method static Builder|BedType query()
 * @method static Builder|BedType whereCreatedAt($value)
 * @method static Builder|BedType whereDescription($value)
 * @method static Builder|BedType whereId($value)
 * @method static Builder|BedType whereTitle($value)
 * @method static Builder|BedType whereUpdatedAt($value)
 * @mixin Model
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Bed[] $beds
 * @property-read int|null $beds_count
 * @property int $is_default
 * @method static Builder|BedType whereIsDefault($value)
 */
	class BedType extends \Eloquent {}
}

namespace App\Models{
/**
 * Class Bill
 *
 * @version February 13, 2020, 9:47 am UTC
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static Builder|Bill newModelQuery()
 * @method static Builder|Bill newQuery()
 * @method static Builder|Bill query()
 * @method static Builder|Bill whereAmount($value)
 * @method static Builder|Bill whereBillDate($value)
 * @method static Builder|Bill whereCreatedAt($value)
 * @method static Builder|Bill whereId($value)
 * @method static Builder|Bill wherePatientId($value)
 * @method static Builder|Bill whereUpdatedAt($value)
 * @mixin Model
 * @property int $patient_id
 * @property \Illuminate\Support\Carbon $bill_date
 * @property float $amount
 * @property-read Collection|BillItems[] $billItems
 * @property-read int|null $bill_items_count
 * @property-read User $patient
 * @property string $patient_admission_id
 * @method static Builder|Bill wherePatientAdmissionId($value)
 * @property string $bill_id
 * @property-read \App\Models\PatientAdmission $patientAdmission
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Bill whereBillId($value)
 * @property int $is_default
 * @method static Builder|Bill whereIsDefault($value)
 */
	class Bill extends \Eloquent {}
}

namespace App\Models{
/**
 * Class BillItems
 *
 * @version February 13, 2020, 9:51 am UTC
 * @property int $id
 * @property int $medicine_id
 * @property int $bill_id
 * @property int $qty
 * @property float $price
 * @property float $amount
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BillItems newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BillItems newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BillItems query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BillItems whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BillItems whereBillId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BillItems whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BillItems whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BillItems whereMedicineId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BillItems wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BillItems whereQty($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BillItems whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string $item_name
 * @property-read \App\Models\Medicine $medicine
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BillItems whereItemName($value)
 */
	class BillItems extends \Eloquent {}
}

namespace App\Models{
/**
 * Class BirthReport
 *
 * @version February 18, 2020, 9:47 am UTC
 * @property int $id
 * @property int $patient_id
 * @property int $doctor_id
 * @property string $date
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Doctor $doctor
 * @property-read \App\Models\User $patient
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BirthReport newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BirthReport newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BirthReport query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BirthReport whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BirthReport whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BirthReport whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BirthReport whereDoctorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BirthReport whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BirthReport wherePatientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BirthReport whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string $case_id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BirthReport whereCaseId($value)
 * @property int $is_default
 * @property-read \App\Models\PatientCase $caseFromBirthReport
 * @method static \Illuminate\Database\Eloquent\Builder|BirthReport whereIsDefault($value)
 */
	class BirthReport extends \Eloquent {}
}

namespace App\Models{
/**
 * Class BloodBank
 *
 * @version February 17, 2020, 9:23 am UTC
 * @property string blood_group
 * @property int remained_bags
 * @property int $id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BloodBank newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BloodBank newQuery()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\BloodBank onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BloodBank query()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BloodBank whereBloodGroup($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BloodBank whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BloodBank whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BloodBank whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BloodBank whereRemainedBags($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BloodBank whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\BloodBank withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\BloodBank withoutTrashed()
 * @mixin Model
 * @property string $blood_group
 * @property int $remained_bags
 * @property int $is_default
 * @method static \Illuminate\Database\Eloquent\Builder|BloodBank whereIsDefault($value)
 */
	class BloodBank extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\BloodDonation
 *
 * @property int $id
 * @property int $blood_donor_id
 * @property int $bags
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read BloodDonor $bloodDonor
 * @method static \Illuminate\Database\Eloquent\Builder|BloodDonation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BloodDonation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BloodDonation query()
 * @method static \Illuminate\Database\Eloquent\Builder|BloodDonation whereBags($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BloodDonation whereBloodDonorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BloodDonation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BloodDonation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BloodDonation whereUpdatedAt($value)
 * @mixin Eloquent
 * @property-read \App\Models\BloodDonor $blooddonor
 */
	class BloodDonation extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\BloodDonor
 *
 * @property int $id
 * @property string $name
 * @property int $age
 * @property int $gender
 * @property string $blood_group
 * @property Carbon $last_donate_date
 * @property int $bags
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read \App\Models\BloodBank $bloodBank
 * @method static \Illuminate\Database\Eloquent\Builder|BloodDonor newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BloodDonor newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BloodDonor query()
 * @method static \Illuminate\Database\Eloquent\Builder|BloodDonor whereAge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BloodDonor whereBags($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BloodDonor whereBloodGroup($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BloodDonor whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BloodDonor whereGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BloodDonor whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BloodDonor whereLastDonateDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BloodDonor whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BloodDonor whereUpdatedAt($value)
 * @mixin Model
 * @property int $is_default
 * @method static \Illuminate\Database\Eloquent\Builder|BloodDonor whereIsDefault($value)
 */
	class BloodDonor extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\BloodIssue
 *
 * @property int $id
 * @property string $issue_date
 * @property int $doctor_id
 * @property int $donor_id
 * @property int $patient_id
 * @property string|null $amount
 * @property string|null $remarks
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read BloodDonor $bloodDonor
 * @property-read Doctor $doctor
 * @property-read Patient $patient
 * @method static \Illuminate\Database\Eloquent\Builder|BloodIssue newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BloodIssue newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BloodIssue query()
 * @method static \Illuminate\Database\Eloquent\Builder|BloodIssue whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BloodIssue whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BloodIssue whereDoctorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BloodIssue whereDonorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BloodIssue whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BloodIssue whereIssueDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BloodIssue wherePatientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BloodIssue whereRemarks($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BloodIssue whereUpdatedAt($value)
 * @mixin Eloquent
 * @property-read \App\Models\BloodDonor $blooddonor
 */
	class BloodIssue extends \Eloquent {}
}

namespace App\Models{
/**
 * Class Brand
 *
 * @version February 13, 2020, 4:28 am UTC
 * @property string name
 * @property string email
 * @property string phone
 * @property int $id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Brand newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Brand newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Brand query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Brand whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Brand whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Brand whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Brand whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Brand wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Brand whereUpdatedAt($value)
 * @mixin Model
 * @property-read Collection|Medicine[] $medicines
 * @property-read int|null $medicines_count
 * @property-read Collection|Category[] $categories
 * @property-read int|null $categories_count
 * @property string $name
 * @property string|null $email
 * @property string|null $phone
 * @property int $is_default
 * @property-read \App\Models\Category $category
 * @method static \Illuminate\Database\Eloquent\Builder|Brand whereIsDefault($value)
 */
	class Brand extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\CallLog
 *
 * @property int $id
 * @property string $name
 * @property string|null $phone
 * @property string|null $date
 * @property string|null $follow_up_date
 * @property string|null $note
 * @property int $call_type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|CallLog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CallLog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CallLog query()
 * @method static \Illuminate\Database\Eloquent\Builder|CallLog whereCallType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CallLog whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CallLog whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CallLog whereFollowUpDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CallLog whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CallLog whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CallLog whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CallLog wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CallLog whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class CallLog extends \Eloquent {}
}

namespace App\Models{
/**
 * Class CaseHandler
 *
 * @version February 28, 2020, 3:14 am UTC
 * @property int $id
 * @property int $user_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Address $address
 * @property-read User $user
 * @method static Builder|CaseHandler newModelQuery()
 * @method static Builder|CaseHandler newQuery()
 * @method static Builder|CaseHandler query()
 * @method static Builder|CaseHandler whereCreatedAt($value)
 * @method static Builder|CaseHandler whereId($value)
 * @method static Builder|CaseHandler whereUpdatedAt($value)
 * @method static Builder|CaseHandler whereUserId($value)
 * @mixin Model
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\EmployeePayroll[] $payrolls
 * @property-read int|null $payrolls_count
 * @property int $is_default
 * @method static Builder|CaseHandler whereIsDefault($value)
 */
	class CaseHandler extends \Eloquent {}
}

namespace App\Models{
/**
 * Class Category
 *
 * @version February 6, 2020, 3:16 am UTC
 * @property string name
 * @property int $id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Eloquent\Builder|Category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category newQuery()
 * @method static Builder|Category onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Category query()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereUpdatedAt($value)
 * @method static Builder|Category withTrashed()
 * @method static Builder|Category withoutTrashed()
 * @mixin Model
 * @property int $is_active
 * @property-read int|null $payments_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Category whereIsActive($value)
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Medicine[] $medicines
 * @property-read int|null $medicines_count
 * @property-read \App\Models\Brand $brand
 * @property int $is_default
 * @method static \Database\Factories\CategoryFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereIsDefault($value)
 * @property string $name
 */
	class Category extends \Eloquent {}
}

namespace App\Models{
/**
 * Class Charge
 *
 * @version April 11, 2020, 9:09 am UTC
 * @property int $id
 * @property int $charge_type
 * @property int $charge_category_id
 * @property string $code
 * @property string $standard_charge
 * @property string|null $description
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read ChargeCategory $chargeCategory
 * @method static \Illuminate\Database\Eloquent\Builder|Charge newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Charge newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Charge query()
 * @method static \Illuminate\Database\Eloquent\Builder|Charge whereChargeCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Charge whereChargeType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Charge whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Charge whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Charge whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Charge whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Charge whereStandardCharge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Charge whereUpdatedAt($value)
 * @mixin Model
 */
	class Charge extends \Eloquent {}
}

namespace App\Models{
/**
 * Class ChargeCategory
 *
 * @version April 11, 2020, 5:26 am UTC
 * @property int $id
 * @property string $name
 * @property string $description
 * @property int $charge_type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ChargeCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ChargeCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ChargeCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ChargeCategory whereChargeType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ChargeCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ChargeCategory whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ChargeCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ChargeCategory whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ChargeCategory whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class ChargeCategory extends \Eloquent {}
}

namespace App\Models{
/**
 * Class DeathReport
 *
 * @version February 18, 2020, 11:10 am UTC
 * @property int $id
 * @property int $patient_id
 * @property int $doctor_id
 * @property string $date
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Doctor $doctor
 * @property-read \App\Models\User $patient
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DeathReport newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DeathReport newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DeathReport query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DeathReport whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DeathReport whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DeathReport whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DeathReport whereDoctorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DeathReport whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DeathReport wherePatientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DeathReport whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string $case_id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DeathReport whereCaseId($value)
 * @property int $is_default
 * @property-read \App\Models\PatientCase $caseFromDeathReport
 * @method static \Illuminate\Database\Eloquent\Builder|DeathReport whereIsDefault($value)
 */
	class DeathReport extends \Eloquent {}
}

namespace App\Models{
/**
 * Class Department
 *
 * @version February 12, 2020, 5:39 am UTC
 * @property string name
 * @property bool is_active
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Department newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Department newQuery()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Department onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Department query()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Department whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Department whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Department whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Department whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Department whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Department whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Department withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Department withoutTrashed()
 * @mixin \Eloquent
 * @property string|null $guard_name
 * @property int $is_default
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Permission[] $permissions
 * @property-read int|null $permissions_count
 * @method static Builder|Department permission($permissions)
 * @method static Builder|Department whereGuardName($value)
 * @method static Builder|Department whereIsDefault($value)
 * @property string $name
 * @property bool $is_active
 */
	class Department extends \Eloquent implements \Spatie\Permission\Contracts\Role {}
}

namespace App\Models{
/**
 * App\Models\DiagnosisCategory
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DiagnosisCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DiagnosisCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DiagnosisCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DiagnosisCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DiagnosisCategory whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DiagnosisCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DiagnosisCategory whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DiagnosisCategory whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class DiagnosisCategory extends \Eloquent {}
}

namespace App\Models{
/**
 * Class Doctor
 *
 * @version February 13, 2020, 8:55 am UTC
 * @property int $id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read User $doctorUser
 * @method static Builder|Doctor newModelQuery()
 * @method static Builder|Doctor newQuery()
 * @method static Builder|Doctor query()
 * @method static Builder|Doctor whereCreatedAt($value)
 * @method static Builder|Doctor whereId($value)
 * @method static Builder|Doctor whereSpecialist($value)
 * @method static Builder|Doctor whereUpdatedAt($value)
 * @method static Builder|Doctor whereUserId($value)
 * @mixin Model
 * @property int $user_id
 * @property int $department_id
 * @property string $specialist
 * @property-read Address $address
 * @method static Builder|Doctor whereDepartmentId($value)
 * @property int $doctor_department_id
 * @method static Builder|Doctor whereDoctorDepartmentId($value)
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\PatientCase[] $cases
 * @property-read int|null $cases_count
 * @property-read \App\Models\DoctorDepartment $department
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Patient[] $patients
 * @property-read int|null $patients_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Appointment[] $appointments
 * @property-read int|null $appointments_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Schedule[] $schedules
 * @property-read int|null $schedules_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\EmployeePayroll[] $payrolls
 * @property-read int|null $payrolls_count
 * @property int $is_default
 * @method static Builder|Doctor whereIsDefault($value)
 * @property-read \App\Models\User $user
 */
	class Doctor extends \Eloquent {}
}

namespace App\Models{
/**
 * Class DoctorDepartment
 *
 * @version February 21, 2020, 5:23 am UTC
 * @property string title
 * @property string description
 * @property int $id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|DoctorDepartment newModelQuery()
 * @method static Builder|DoctorDepartment newQuery()
 * @method static Builder|DoctorDepartment query()
 * @method static Builder|DoctorDepartment whereCreatedAt($value)
 * @method static Builder|DoctorDepartment whereDescription($value)
 * @method static Builder|DoctorDepartment whereId($value)
 * @method static Builder|DoctorDepartment whereTitle($value)
 * @method static Builder|DoctorDepartment whereUpdatedAt($value)
 * @mixin Model
 * @property-read Collection|Doctor[] $doctors
 * @property-read int|null $doctors_count
 * @property int $is_default
 * @method static Builder|DoctorDepartment whereIsDefault($value)
 * @property string $title
 * @property string|null $description
 */
	class DoctorDepartment extends \Eloquent {}
}

namespace App\Models{
/**
 * Class DoctorOPDCharge
 *
 * @property int $id
 * @property int $doctor_id
 * @property float $standard_charge
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @property-read \App\Models\Doctor $doctor
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DoctorOPDCharge newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DoctorOPDCharge newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DoctorOPDCharge query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DoctorOPDCharge whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DoctorOPDCharge whereDoctorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DoctorOPDCharge whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DoctorOPDCharge whereStandardCharge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DoctorOPDCharge whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class DoctorOPDCharge extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Document
 *
 * @property int $id
 * @property string $title
 * @property int $document_type_id
 * @property int $patient_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 * @property-read Collection|Media[] $media
 * @property-read int|null $media_count
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Eloquent\Builder|Document newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Document newQuery()
 * @method static Builder|Document onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Document query()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|Document whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Document whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Document whereDocumentTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Document whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Document whereMediaId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Document wherePatientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Document whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Document whereUpdatedAt($value)
 * @method static Builder|Document withTrashed()
 * @method static Builder|Document withoutTrashed()
 * @mixin Model
 * @property-read \App\Models\DocumentType $documentType
 * @property-read mixed $document_url
 * @property-read \App\Models\Patient $patient
 * @property int $uploaded_by
 * @property string|null $notes
 * @property int $is_default
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Document whereIsDefault($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Document whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Document whereUploadedBy($value)
 */
	class Document extends \Eloquent implements \Spatie\MediaLibrary\HasMedia {}
}

namespace App\Models{
/**
 * App\Models\DocumentType
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DocumentType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DocumentType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DocumentType query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DocumentType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DocumentType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DocumentType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DocumentType whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \App\Models\Document $document
 * @property-read \App\Models\User $user
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Document[] $documents
 * @property-read int|null $documents_count
 * @property-read \App\Models\Patient $patient
 * @property int $is_default
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentType whereIsDefault($value)
 */
	class DocumentType extends \Eloquent {}
}

namespace App\Models{
/**
 * Class EmployeePayroll
 *
 * @version February 19, 2020, 8:03 am UTC
 * @property int $id
 * @property int $sr_no
 * @property string $payroll_id
 * @property string $type
 * @property int $owner_id
 * @property string $owner_type
 * @property string $month
 * @property int $year
 * @property float $net_salary
 * @property int $status
 * @property float $basic_salary
 * @property float $allowance
 * @property float $deductions
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|EmployeePayroll newModelQuery()
 * @method static Builder|EmployeePayroll newQuery()
 * @method static Builder|EmployeePayroll query()
 * @method static Builder|EmployeePayroll whereAllowance($value)
 * @method static Builder|EmployeePayroll whereBasicSalary($value)
 * @method static Builder|EmployeePayroll whereCreatedAt($value)
 * @method static Builder|EmployeePayroll whereDeductions($value)
 * @method static Builder|EmployeePayroll whereId($value)
 * @method static Builder|EmployeePayroll whereMonth($value)
 * @method static Builder|EmployeePayroll whereNetSalary($value)
 * @method static Builder|EmployeePayroll whereOwnerId($value)
 * @method static Builder|EmployeePayroll whereOwnerType($value)
 * @method static Builder|EmployeePayroll wherePayrollId($value)
 * @method static Builder|EmployeePayroll whereSrNo($value)
 * @method static Builder|EmployeePayroll whereStatus($value)
 * @method static Builder|EmployeePayroll whereUpdatedAt($value)
 * @method static Builder|EmployeePayroll whereYear($value)
 * @mixin Model
 * @method static Builder|EmployeePayroll whereType($value)
 * @property-read Nurse $nurse
 * @property-read EmployeePayroll $owner
 * @property int $is_default
 * @property-read mixed $type_string
 * @method static Builder|EmployeePayroll whereIsDefault($value)
 */
	class EmployeePayroll extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Enquiry
 *
 * @property int $id
 * @property string $full_name
 * @property int $contact_no
 * @property string $type
 * @property mixed $message
 * @property int $viewed_by
 * @property int $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Enquiry newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Enquiry newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Enquiry query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Enquiry whereContactNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Enquiry whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Enquiry whereFullName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Enquiry whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Enquiry whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Enquiry whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Enquiry whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Enquiry whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Enquiry whereViewedBy($value)
 * @mixin Eloquent
 * @property string $email
 * @property int $is_default
 * @property-read mixed $enquiry_type
 * @method static \Illuminate\Database\Eloquent\Builder|Enquiry whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Enquiry whereIsDefault($value)
 */
	class Enquiry extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Expense
 * * @property int $id
 *
 * @property string $expense_head
 * @property string $name
 * @property string|null $invoice_number
 * @property \Illuminate\Support\Carbon $date
 * @property float $amount
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read mixed $document_url
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\MediaLibrary\Models\Media[] $media
 * @property-read int|null $media_count
 * @mixin Model
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Expense newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Expense newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Expense query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Expense whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Expense whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Expense whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Expense whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Expense whereExpenseHead($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Expense whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Expense whereInvoiceNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Expense whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Expense whereUpdatedAt($value)
 * @property int $id
 */
	class Expense extends \Eloquent implements \Spatie\MediaLibrary\HasMedia {}
}

namespace App\Models{
/**
 * App\Models\FrontService
 *
 * @property int $id
 * @property string $name
 * @property string $short_description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read mixed $icon_url
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, \Spatie\MediaLibrary\MediaCollections\Models\Media> $media
 * @property-read int|null $media_count
 * @method static \Illuminate\Database\Eloquent\Builder|FrontService newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FrontService newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FrontService query()
 * @method static \Illuminate\Database\Eloquent\Builder|FrontService whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontService whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontService whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontService whereShortDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontService whereUpdatedAt($value)
 */
	class FrontService extends \Eloquent implements \Spatie\MediaLibrary\HasMedia {}
}

namespace App\Models{
/**
 * App\Models\FrontSetting
 *
 * @property int $id
 * @property string $key
 * @property string $value
 * @property string $type
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|FrontSetting newModelQuery()
 * @method static Builder|FrontSetting newQuery()
 * @method static Builder|FrontSetting query()
 * @method static Builder|FrontSetting whereCreatedAt($value)
 * @method static Builder|FrontSetting whereId($value)
 * @method static Builder|FrontSetting whereKey($value)
 * @method static Builder|FrontSetting whereType($value)
 * @method static Builder|FrontSetting whereUpdatedAt($value)
 * @method static Builder|FrontSetting whereValue($value)
 * @mixin \Eloquent
 * @property-read mixed $logo_url
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection|Media[] $media
 * @property-read int|null $media_count
 */
	class FrontSetting extends \Eloquent implements \Spatie\MediaLibrary\HasMedia {}
}

namespace App\Models{
/**
 * App\Models\HospitalSchedule
 *
 * @property int $id
 * @property string $day_of_week
 * @property string $start_time
 * @property string $end_time
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|HospitalSchedule newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HospitalSchedule newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HospitalSchedule query()
 * @method static \Illuminate\Database\Eloquent\Builder|HospitalSchedule whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HospitalSchedule whereDayOfWeek($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HospitalSchedule whereEndTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HospitalSchedule whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HospitalSchedule whereStartTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HospitalSchedule whereUpdatedAt($value)
 * @mixin Eloquent
 */
	class HospitalSchedule extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Income
 *
 * @property int $id
 * @property string $income_head
 * @property string $name
 * @property string|null $invoice_number
 * @property \Illuminate\Support\Carbon $date
 * @property float $amount
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read string $document_url
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\MediaLibrary\Models\Media[] $media
 * @property-read int|null $media_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Income newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Income newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Income query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Income whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Income whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Income whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Income whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Income whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Income whereIncomeHead($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Income whereInvoiceNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Income whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Income whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Income extends \Eloquent implements \Spatie\MediaLibrary\HasMedia {}
}

namespace App\Models{
/**
 * Class Insurance
 *
 * @version February 22, 2020, 9:01 am UTC
 * @property int $id
 * @property string $name
 * @property float $service_tax
 * @property float|null $discount
 * @property string|null $remark
 * @property string $insurance_no
 * @property string $insurance_code
 * @property float $hospital_rate
 * @property float $total
 * @property int $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|Insurance newModelQuery()
 * @method static Builder|Insurance newQuery()
 * @method static Builder|Insurance query()
 * @method static Builder|Insurance whereCreatedAt($value)
 * @method static Builder|Insurance whereDiscount($value)
 * @method static Builder|Insurance whereHospitalRate($value)
 * @method static Builder|Insurance whereId($value)
 * @method static Builder|Insurance whereInsuranceCode($value)
 * @method static Builder|Insurance whereInsuranceNo($value)
 * @method static Builder|Insurance whereName($value)
 * @method static Builder|Insurance whereRemark($value)
 * @method static Builder|Insurance whereServiceTax($value)
 * @method static Builder|Insurance whereStatus($value)
 * @method static Builder|Insurance whereTotal($value)
 * @method static Builder|Insurance whereUpdatedAt($value)
 * @mixin Model
 * @property int $is_default
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\InsuranceDisease[] $insuranceDiseases
 * @property-read int|null $insurance_diseases_count
 * @method static Builder|Insurance whereIsDefault($value)
 */
	class Insurance extends \Eloquent {}
}

namespace App\Models{
/**
 * Class InsuranceDisease
 *
 * @property int $id
 * @property int $insurance_id
 * @property string $disease_name
 * @property float $disease_charge
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|InsuranceDisease newModelQuery()
 * @method static Builder|InsuranceDisease newQuery()
 * @method static Builder|InsuranceDisease query()
 * @method static Builder|InsuranceDisease whereCreatedAt($value)
 * @method static Builder|InsuranceDisease whereDiseaseCharge($value)
 * @method static Builder|InsuranceDisease whereDiseaseName($value)
 * @method static Builder|InsuranceDisease whereId($value)
 * @method static Builder|InsuranceDisease whereInsuranceId($value)
 * @method static Builder|InsuranceDisease whereUpdatedAt($value)
 * @mixin Eloquent
 */
	class InsuranceDisease extends \Eloquent {}
}

namespace App\Models{
/**
 * Class InvestigationReport
 *
 * @version February 21, 2020, 9:02 am UTC
 * @property int $id
 * @property int $patient_id
 * @property Carbon $date
 * @property string $title
 * @property string|null $description
 * @property int $doctor_id
 * @property int $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Doctor $doctor
 * @property-read Patient $patient
 * @method static Builder|InvestigationReport newModelQuery()
 * @method static Builder|InvestigationReport newQuery()
 * @method static Builder|InvestigationReport query()
 * @method static Builder|InvestigationReport whereAttachment($value)
 * @method static Builder|InvestigationReport whereCreatedAt($value)
 * @method static Builder|InvestigationReport whereDate($value)
 * @method static Builder|InvestigationReport whereDescription($value)
 * @method static Builder|InvestigationReport whereDoctorId($value)
 * @method static Builder|InvestigationReport whereId($value)
 * @method static Builder|InvestigationReport wherePatientId($value)
 * @method static Builder|InvestigationReport whereStatus($value)
 * @method static Builder|InvestigationReport whereTitle($value)
 * @method static Builder|InvestigationReport whereUpdatedAt($value)
 * @mixin Model
 * @property int $is_default
 * @property-read mixed $attachment_url
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection|Media[] $media
 * @property-read int|null $media_count
 * @method static Builder|InvestigationReport whereIsDefault($value)
 */
	class InvestigationReport extends \Eloquent implements \Spatie\MediaLibrary\HasMedia {}
}

namespace App\Models{
/**
 * Class Invoice
 *
 * @version February 24, 2020, 5:51 am UTC
 * @property int $id
 * @property int $patient_id
 * @property Carbon $invoice_date
 * @property float $amount
 * @property bool $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Collection|InvoiceItem[] $invoiceItems
 * @property-read int|null $invoice_items_count
 * @property-read Patient $patient
 * @method static Builder|Invoice newModelQuery()
 * @method static Builder|Invoice newQuery()
 * @method static Builder|Invoice query()
 * @method static Builder|Invoice whereAmount($value)
 * @method static Builder|Invoice whereCreatedAt($value)
 * @method static Builder|Invoice whereId($value)
 * @method static Builder|Invoice whereInvoiceDate($value)
 * @method static Builder|Invoice wherePatientId($value)
 * @method static Builder|Invoice whereStatus($value)
 * @method static Builder|Invoice whereUpdatedAt($value)
 * @mixin Model
 * @property-read mixed $status_label
 * @property float $discount
 * @method static Builder|Invoice whereDiscount($value)
 * @property string $invoice_id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Invoice whereInvoiceId($value)
 * @property int $is_default
 * @method static Builder|Invoice whereIsDefault($value)
 */
	class Invoice extends \Eloquent {}
}

namespace App\Models{
/**
 * Class InvoiceItem
 *
 * @version February 24, 2020, 5:57 am UTC
 * @property int $id
 * @property int $account_id
 * @property int $invoice_id
 * @property string $description
 * @property int $quantity
 * @property float $price
 * @property float $total
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|InvoiceItem newModelQuery()
 * @method static Builder|InvoiceItem newQuery()
 * @method static Builder|InvoiceItem query()
 * @method static Builder|InvoiceItem whereAccountId($value)
 * @method static Builder|InvoiceItem whereCreatedAt($value)
 * @method static Builder|InvoiceItem whereDescription($value)
 * @method static Builder|InvoiceItem whereId($value)
 * @method static Builder|InvoiceItem whereInvoiceId($value)
 * @method static Builder|InvoiceItem wherePrice($value)
 * @method static Builder|InvoiceItem whereQuantity($value)
 * @method static Builder|InvoiceItem whereTotal($value)
 * @method static Builder|InvoiceItem whereUpdatedAt($value)
 * @mixin Model
 * @property-read Account $account
 * @property int $is_default
 * @method static Builder|InvoiceItem whereIsDefault($value)
 */
	class InvoiceItem extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\IpdBill
 *
 * @property int $id
 * @property int $ipd_patient_department_id
 * @property int $total_charges
 * @property int $total_payments
 * @property int $gross_total
 * @property int $discount_in_percentage
 * @property int $tax_in_percentage
 * @property int $other_charges
 * @property int $net_payable_amount
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\IpdPatientDepartment $ipdPatient
 * @method static \Illuminate\Database\Eloquent\Builder|IpdBill newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|IpdBill newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|IpdBill query()
 * @method static \Illuminate\Database\Eloquent\Builder|IpdBill whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IpdBill whereDiscountInPercentage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IpdBill whereGrossTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IpdBill whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IpdBill whereIpdPatientDepartmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IpdBill whereNetPayableAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IpdBill whereOtherCharges($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IpdBill whereTaxInPercentage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IpdBill whereTotalCharges($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IpdBill whereTotalPayments($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IpdBill whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class IpdBill extends \Eloquent {}
}

namespace App\Models{
/**
 * Class IpdCharge
 *
 * @version September 9, 2020, 1:55 pm UTC
 * @property int $ipd_patient_department_id
 * @property string $date
 * @property int $charge_type_id
 * @property int $charge_category_id
 * @property int $charge_id
 * @property int $standard_charge
 * @property int $applied_charge
 * @property int $id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Charge $charge
 * @property-read ChargeCategory $chargeCategory
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IpdCharge newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IpdCharge newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IpdCharge query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IpdCharge whereAppliedCharge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IpdCharge whereChargeCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IpdCharge whereChargeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IpdCharge whereChargeTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IpdCharge whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IpdCharge whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IpdCharge whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IpdCharge whereIpdPatientDepartmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IpdCharge whereStandardCharge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IpdCharge whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \App\Models\ChargeCategory $chargecategory
 * @property-read mixed $charge_type
 */
	class IpdCharge extends \Eloquent {}
}

namespace App\Models{
/**
 * Class IpdConsultantRegister
 *
 * @version September 9, 2020, 6:56 am UTC
 * @property int $ipd_patient_department_id
 * @property string $applied_date
 * @property int $doctor_id
 * @property string $instruction
 * @property string $instruction_date
 * @property int $id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Doctor $doctor
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IpdConsultantRegister newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IpdConsultantRegister newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IpdConsultantRegister query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IpdConsultantRegister whereAppliedDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IpdConsultantRegister whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IpdConsultantRegister whereDoctorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IpdConsultantRegister whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IpdConsultantRegister whereInstruction($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IpdConsultantRegister whereInstructionDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IpdConsultantRegister
 *     whereIpdPatientDepartmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IpdConsultantRegister whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class IpdConsultantRegister extends \Eloquent {}
}

namespace App\Models{
/**
 * Class IpdDiagnosis
 *
 * @version September 8, 2020, 11:46 am UTC
 * @property int $ipd_patient_department_id
 * @property string $report_type
 * @property string $report_date
 * @property string $description
 * @property int $id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IpdDiagnosis newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IpdDiagnosis newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IpdDiagnosis query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IpdDiagnosis whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IpdDiagnosis whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IpdDiagnosis whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IpdDiagnosis whereIpdPatientDepartmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IpdDiagnosis whereReportDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IpdDiagnosis whereReportType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IpdDiagnosis whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read mixed $document_url
 * @property-read Collection|Media[] $media
 * @property-read int|null $media_count
 * @property-read mixed $ipd_diagnosis_document_url
 */
	class IpdDiagnosis extends \Eloquent implements \Spatie\MediaLibrary\HasMedia {}
}

namespace App\Models{
/**
 * Class IpdPatientDepartment
 *
 * @version September 8, 2020, 6:42 am UTC
 * @property int $patient_id
 * @property string $ipd_number
 * @property string $height
 * @property string $weight
 * @property string $bp
 * @property string $symptoms
 * @property string $notes
 * @property string $admission_date
 * @property int $case_id
 * @property bool $is_old_patient
 * @property int $doctor_id
 * @property int $bed_type_id
 * @property int $bed_id
 * @property int $id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IpdPatientDepartment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IpdPatientDepartment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IpdPatientDepartment query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IpdPatientDepartment whereAdmissionDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IpdPatientDepartment whereBedId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IpdPatientDepartment whereBedTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IpdPatientDepartment whereBp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IpdPatientDepartment whereCaseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IpdPatientDepartment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IpdPatientDepartment whereDoctorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IpdPatientDepartment whereHeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IpdPatientDepartment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IpdPatientDepartment whereIpdNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IpdPatientDepartment whereIsOldPatient($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IpdPatientDepartment whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IpdPatientDepartment wherePatientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IpdPatientDepartment whereSymptoms($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IpdPatientDepartment whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IpdPatientDepartment whereWeight($value)
 * @mixin \Eloquent
 * @property-read Bed $bed
 * @property-read BedType|null $bedType
 * @property-read Doctor|null $doctor
 * @property-read Patient $patient
 * @property-read PatientCase|null $patientCase
 * @property-read BedAssign $bedAssign
 * @property int $bill_status
 * @property-read \App\Models\IpdBill|null $bill
 * @method static \Illuminate\Database\Eloquent\Builder|IpdPatientDepartment whereBillStatus($value)
 */
	class IpdPatientDepartment extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\IpdPayment
 *
 * @property int $id
 * @property int $ipd_patient_department_id
 * @property int $amount
 * @property \Illuminate\Support\Carbon $date
 * @property int $payment_mode
 * @property int|null $transaction_id
 * @property string|null $notes
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read mixed $ipd_payment_document_url
 * @property-read mixed $payment_mode_name
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection|Media[] $media
 * @property-read int|null $media_count
 * @method static \Illuminate\Database\Eloquent\Builder|IpdPayment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|IpdPayment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|IpdPayment query()
 * @method static \Illuminate\Database\Eloquent\Builder|IpdPayment whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IpdPayment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IpdPayment whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IpdPayment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IpdPayment whereIpdPatientDepartmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IpdPayment whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IpdPayment wherePaymentMode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IpdPayment whereTransactionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IpdPayment whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class IpdPayment extends \Eloquent implements \Spatie\MediaLibrary\HasMedia {}
}

namespace App\Models{
/**
 * App\Models\IpdPrescription
 *
 * @property int $id
 * @property int $ipd_patient_department_id
 * @property string|null $header_note
 * @property string|null $footer_note
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IpdPrescription newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IpdPrescription newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IpdPrescription query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IpdPrescription whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IpdPrescription whereFooterNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IpdPrescription whereHeaderNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IpdPrescription whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IpdPrescription whereIpdPatientDepartmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IpdPrescription whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read Collection|IpdPrescriptionItem[] $ipdPrescriptionItems
 * @property-read int|null $ipd_prescription_items_count
 * @property-read \App\Models\IpdPatientDepartment $ipdPatient
 * @property-read \App\Models\IpdPatientDepartment $patient
 */
	class IpdPrescription extends \Eloquent {}
}

namespace App\Models{
/**
 * Class IpdPrescriptionItem
 *
 * @version September 10, 2020, 11:42 am UTC
 * @property int $ipd_prescription_id
 * @property int $category_id
 * @property int $medicine_id
 * @property string $dosage
 * @property string $instruction
 * @property int $id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IpdPrescriptionItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IpdPrescriptionItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IpdPrescriptionItem query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IpdPrescriptionItem whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IpdPrescriptionItem whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IpdPrescriptionItem whereDosage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IpdPrescriptionItem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IpdPrescriptionItem whereInstruction($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IpdPrescriptionItem whereIpdPrescriptionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IpdPrescriptionItem whereMedicineId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IpdPrescriptionItem whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read Medicine $medicine
 * @property-read Category $medicineCategory
 */
	class IpdPrescriptionItem extends \Eloquent {}
}

namespace App\Models{
/**
 * Class IpdTimeline
 *
 * @version September 12, 2020, 7:18 am UTC
 * @property int $ipd_patient_department_id
 * @property string $title
 * @property string $date
 * @property string $description
 * @property bool $visible_to_person
 * @property-read mixed $ipd_timeline_document_url
 * @property-read Collection|Media[] $media
 * @property-read int|null $media_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IpdTimeline newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IpdTimeline newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IpdTimeline query()
 * @mixin \Eloquent
 * @property int $id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IpdTimeline whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IpdTimeline whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IpdTimeline whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IpdTimeline whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IpdTimeline whereIpdPatientDepartmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IpdTimeline whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IpdTimeline whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IpdTimeline whereVisibleToPerson($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IpdTimeline visible()
 */
	class IpdTimeline extends \Eloquent implements \Spatie\MediaLibrary\HasMedia {}
}

namespace App\Models{
/**
 * Class IssuedItem
 *
 * @version August 27, 2020, 2:15 pm UTC
 * @property int $department_id
 * @property int $user_id
 * @property string $issued_by
 * @property string $issued_date
 * @property string $return_date
 * @property int $item_category_id
 * @property int $item_id
 * @property int $quantity
 * @property string $description
 * @property int $id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Department $department
 * @property-read Item $item
 * @property-read User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IssuedItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IssuedItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IssuedItem query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IssuedItem whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IssuedItem whereDepartmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IssuedItem whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IssuedItem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IssuedItem whereIssuedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IssuedItem whereIssuedDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IssuedItem whereItemCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IssuedItem whereItemId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IssuedItem whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IssuedItem whereReturnDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IssuedItem whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IssuedItem whereUserId($value)
 * @mixin \Eloquent
 * @property bool|null $status
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IssuedItem whereStatus($value)
 */
	class IssuedItem extends \Eloquent {}
}

namespace App\Models{
/**
 * Class Item
 *
 * @version August 26, 2020, 10:11 am UTC
 * @property string $name
 * @property int $item_category_id
 * @property int $unit
 * @property string $description
 * @property int $available_quantity
 * @property int $id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read ItemCategory $itemCategory
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Item newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Item newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Item query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Item whereAvailableQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Item whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Item whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Item whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Item whereItemCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Item whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Item whereUnit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Item whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \App\Models\ItemCategory $itemcategory
 */
	class Item extends \Eloquent {}
}

namespace App\Models{
/**
 * Class ItemCategory
 *
 * @version August 26, 2020, 8:12 am UTC
 * @property string $name
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ItemCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ItemCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ItemCategory query()
 * @mixin \Eloquent
 * @property int $id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ItemCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ItemCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ItemCategory whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ItemCategory whereUpdatedAt($value)
 */
	class ItemCategory extends \Eloquent {}
}

namespace App\Models{
/**
 * Class ItemStock
 *
 * @version August 26, 2020, 12:50 pm UTC
 * @property int $item_category_id
 * @property int $item_id
 * @property string $supplier_name
 * @property string $store_name
 * @property int $quantity
 * @property number $purchase_price
 * @property string $description
 * @property int $id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Item $item
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ItemStock newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ItemStock newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ItemStock query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ItemStock whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ItemStock whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ItemStock whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ItemStock whereItemCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ItemStock whereItemId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ItemStock wherePurchasePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ItemStock whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ItemStock whereStoreName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ItemStock whereSupplierName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ItemStock whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read mixed $item_stock_url
 * @property-read Collection|Media[] $media
 * @property-read int|null $media_count
 */
	class ItemStock extends \Eloquent implements \Spatie\MediaLibrary\HasMedia {}
}

namespace App\Models{
/**
 * Class LabTechnician
 *
 * @version February 14, 2020, 5:19 am UTC
 * @property int $id
 * @property int $user_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read User $user
 * @method static Builder|LabTechnician newModelQuery()
 * @method static Builder|LabTechnician newQuery()
 * @method static Builder|LabTechnician query()
 * @method static Builder|LabTechnician whereCreatedAt($value)
 * @method static Builder|LabTechnician whereId($value)
 * @method static Builder|LabTechnician whereUpdatedAt($value)
 * @method static Builder|LabTechnician whereUserId($value)
 * @mixin Model
 * @property-read \App\Models\Address $address
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\EmployeePayroll[] $payrolls
 * @property-read int|null $payrolls_count
 * @property int $is_default
 * @method static Builder|LabTechnician whereIsDefault($value)
 */
	class LabTechnician extends \Eloquent {}
}

namespace App\Models{
/**
 * Class LiveConsultation
 *
 * @property int $id
 * @property int $doctor_id
 * @property int $patient_id
 * @property string $consultation_title
 * @property string $consultation_date
 * @property int $host_video
 * @property int $participant_video
 * @property string $consultation_duration_minutes
 * @property string $type
 * @property string $type_number
 * @property string $created_by
 * @property int $status
 * @property string|null $description
 * @property string $meeting_id
 * @property array|null $meta
 * @property string $time_zone
 * @property string $password
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Doctor $doctor
 * @property-read string $status_text
 * @property-read \App\Models\IpdPatientDepartment $ipdPatient
 * @property-read \App\Models\OpdPatientDepartment $opdPatient
 * @property-read \App\Models\Patient $patient
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|LiveConsultation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LiveConsultation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LiveConsultation query()
 * @method static \Illuminate\Database\Eloquent\Builder|LiveConsultation whereConsultationDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LiveConsultation whereConsultationDurationMinutes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LiveConsultation whereConsultationTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LiveConsultation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LiveConsultation whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LiveConsultation whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LiveConsultation whereDoctorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LiveConsultation whereHostVideo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LiveConsultation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LiveConsultation whereMeetingId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LiveConsultation whereMeta($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LiveConsultation whereParticipantVideo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LiveConsultation wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LiveConsultation wherePatientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LiveConsultation whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LiveConsultation whereTimeZone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LiveConsultation whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LiveConsultation whereTypeNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LiveConsultation whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class LiveConsultation extends \Eloquent {}
}

namespace App\Models{
/**
 * Class LiveMeeting
 *
 * @property int $id
 * @property string $consultation_title
 * @property string $consultation_date
 * @property string $consultation_duration_minutes
 * @property int $host_video
 * @property int $participant_video
 * @property string|null $description
 * @property string $created_by
 * @property array|null $meta
 * @property string $time_zone
 * @property string $password
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read string $status_text
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\User[] $members
 * @property-read int|null $members_count
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|LiveMeeting newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LiveMeeting newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LiveMeeting query()
 * @method static \Illuminate\Database\Eloquent\Builder|LiveMeeting whereConsultationDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LiveMeeting whereConsultationDurationMinutes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LiveMeeting whereConsultationTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LiveMeeting whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LiveMeeting whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LiveMeeting whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LiveMeeting whereHostVideo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LiveMeeting whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LiveMeeting whereMeta($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LiveMeeting whereParticipantVideo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LiveMeeting wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LiveMeeting whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LiveMeeting whereTimeZone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LiveMeeting whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string $meeting_id
 * @method static \Illuminate\Database\Eloquent\Builder|LiveMeeting whereMeetingId($value)
 */
	class LiveMeeting extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Mail
 *
 * @property int $id
 * @property string $to
 * @property string $subject
 * @property mixed $message
 * @property string|null $attachments
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Mail newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Mail newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Mail query()
 * @method static \Illuminate\Database\Eloquent\Builder|Mail whereAttachments($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mail whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mail whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mail whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mail whereSubject($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mail whereTo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mail whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mail whereUserId($value)
 * @mixin \Eloquent
 */
	class Mail extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Medicine
 *
 * @property int $id
 * @property int|null $category_id
 * @property int|null $brand_id
 * @property string $name
 * @property float $selling_price
 * @property float $buying_price
 * @property string $effect
 * @property Carbon $mfg_date
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|Medicine newModelQuery()
 * @method static Builder|Medicine newQuery()
 * @method static Builder|Medicine query()
 * @method static Builder|Medicine whereBrandId($value)
 * @method static Builder|Medicine whereBuyingPrice($value)
 * @method static Builder|Medicine whereCategoryId($value)
 * @method static Builder|Medicine whereCreatedAt($value)
 * @method static Builder|Medicine whereId($value)
 * @method static Builder|Medicine whereName($value)
 * @method static Builder|Medicine whereSellingPrice($value)
 * @method static Builder|Medicine whereUpdatedAt($value)
 * @mixin Model
 * @property-read Brand|null $brand
 * @property-read Category|null $category
 * @property string $salt_composition
 * @property string|null $side_effects
 * @property string|null $description
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Medicine whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Medicine whereSaltComposition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Medicine whereSideEffects($value)
 * @property int $is_default
 * @method static Builder|Medicine whereIsDefault($value)
 */
	class Medicine extends \Eloquent {}
}

namespace App\Models{
/**
 * Class Module
 *
 * @property int $id
 * @property string $name
 * @property bool $is_active
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Module newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Module newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Module query()
 * @method static \Illuminate\Database\Eloquent\Builder|Module whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Module whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Module whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Module whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Module whereUpdatedAt($value)
 * @mixin Model
 * @property string|null $route
 * @method static \Illuminate\Database\Eloquent\Builder|Module whereRoute($value)
 */
	class Module extends \Eloquent {}
}

namespace App\Models{
/**
 * Class NoticeBoard
 *
 * @version February 18, 2020, 4:23 am UTC
 * @property string $title
 * @property string $description
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\NoticeBoard newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\NoticeBoard newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\NoticeBoard query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\NoticeBoard whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\NoticeBoard whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\NoticeBoard whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\NoticeBoard whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\NoticeBoard whereUpdatedAt($value)
 * @mixin Model
 * @property int $id
 * @property int $is_default
 * @method static \Illuminate\Database\Eloquent\Builder|NoticeBoard whereIsDefault($value)
 */
	class NoticeBoard extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Notification
 *
 * @property int $id
 * @property int $type
 * @property int $notification_for
 * @property int $user_id
 * @property string $title
 * @property string|null $text
 * @property string|null $meta
 * @property string|null $read_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Notification newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Notification newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Notification query()
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereMeta($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereNotificationFor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereReadAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereUserId($value)
 * @mixin \Eloquent
 */
	class Notification extends \Eloquent {}
}

namespace App\Models{
/**
 * Class Nurse
 *
 * @version February 13, 2020, 11:18 am UTC
 * @property int $id
 * @property int $user_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read User $user
 * @method static Builder|Nurse newModelQuery()
 * @method static Builder|Nurse newQuery()
 * @method static Builder|Nurse query()
 * @method static Builder|Nurse whereCreatedAt($value)
 * @method static Builder|Nurse whereId($value)
 * @method static Builder|Nurse whereUpdatedAt($value)
 * @method static Builder|Nurse whereUserId($value)
 * @mixin Model
 * @property-read \App\Models\Address $address
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\EmployeePayroll[] $payrolls
 * @property-read int|null $payrolls_count
 * @property int $is_default
 * @method static Builder|Nurse whereIsDefault($value)
 */
	class Nurse extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\OpdDiagnosis
 *
 * @property int $id
 * @property int $opd_patient_department_id
 * @property string $report_type
 * @property string $report_date
 * @property string|null $description
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read mixed $opd_diagnosis_document_url
 * @property-read Collection|Media[] $media
 * @property-read int|null $media_count
 * @method static \Illuminate\Database\Eloquent\Builder|OpdDiagnosis newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OpdDiagnosis newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OpdDiagnosis query()
 * @method static \Illuminate\Database\Eloquent\Builder|OpdDiagnosis whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OpdDiagnosis whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OpdDiagnosis whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OpdDiagnosis whereOpdPatientDepartmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OpdDiagnosis whereReportDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OpdDiagnosis whereReportType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OpdDiagnosis whereUpdatedAt($value)
 * @mixin Model
 */
	class OpdDiagnosis extends \Eloquent implements \Spatie\MediaLibrary\HasMedia {}
}

namespace App\Models{
/**
 * App\Models\OpdPatientDepartment
 *
 * @property int $id
 * @property int $patient_id
 * @property string $opd_number
 * @property string|null $height
 * @property string|null $weight
 * @property string|null $bp
 * @property string|null $symptoms
 * @property string|null $notes
 * @property Carbon $appointment_date
 * @property int|null $case_id
 * @property bool|null $is_old_patient
 * @property int|null $doctor_id
 * @property int $standard_charge
 * @property int $payment_mode
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Doctor|null $doctor
 * @property-read mixed $payment_mode_name
 * @property-read Patient $patient
 * @property-read PatientCase|null $patientCase
 * @method static \Illuminate\Database\Eloquent\Builder|OpdPatientDepartment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OpdPatientDepartment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OpdPatientDepartment query()
 * @method static \Illuminate\Database\Eloquent\Builder|OpdPatientDepartment whereAppointmentDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OpdPatientDepartment whereBp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OpdPatientDepartment whereCaseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OpdPatientDepartment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OpdPatientDepartment whereDoctorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OpdPatientDepartment whereHeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OpdPatientDepartment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OpdPatientDepartment whereIsOldPatient($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OpdPatientDepartment whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OpdPatientDepartment whereOpdNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OpdPatientDepartment wherePatientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OpdPatientDepartment wherePaymentMode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OpdPatientDepartment whereStandardCharge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OpdPatientDepartment whereSymptoms($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OpdPatientDepartment whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OpdPatientDepartment whereWeight($value)
 * @mixin \Eloquent
 */
	class OpdPatientDepartment extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\OpdTimeline
 *
 * @property-read mixed $opd_timeline_document_url
 * @property-read Collection|Media[] $media
 * @property-read int|null $media_count
 * @method static \Illuminate\Database\Eloquent\Builder|OpdTimeline newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OpdTimeline newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OpdTimeline query()
 * @mixin Model
 * @property int $id
 * @property int $opd_patient_department_id
 * @property string $title
 * @property string $date
 * @property string|null $description
 * @property bool $visible_to_person
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|OpdTimeline whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OpdTimeline whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OpdTimeline whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OpdTimeline whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OpdTimeline whereOpdPatientDepartmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OpdTimeline whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OpdTimeline whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OpdTimeline whereVisibleToPerson($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OpdTimeline visible()
 */
	class OpdTimeline extends \Eloquent implements \Spatie\MediaLibrary\HasMedia {}
}

namespace App\Models{
/**
 * Class OperationReport
 *
 * @version February 18, 2020, 6:02 am UTC
 * @property int $doctor_id
 * @property Carbon $date
 * @property string $description
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OperationReport newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OperationReport newQuery()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\OperationReport onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OperationReport query()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OperationReport whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OperationReport whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OperationReport whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OperationReport whereDoctorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OperationReport whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OperationReport whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\OperationReport withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\OperationReport withoutTrashed()
 * @mixin Model
 * @property int $id
 * @property int $patient_id
 * @property string $case_id
 * @property-read \App\Models\Doctor $doctor
 * @property-read \App\Models\Patient $patient
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OperationReport whereCaseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OperationReport wherePatientId($value)
 * @property int $is_default
 * @property-read \App\Models\PatientCase $caseFromOperationReport
 * @method static \Illuminate\Database\Eloquent\Builder|OperationReport whereIsDefault($value)
 */
	class OperationReport extends \Eloquent {}
}

namespace App\Models{
/**
 * Class Package
 *
 * @version February 25, 2020, 1:10 pm UTC
 * @property int $id
 * @property string $name
 * @property string $description
 * @property float $discount
 * @property float $total_amount
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|Package newModelQuery()
 * @method static Builder|Package newQuery()
 * @method static Builder|Package query()
 * @method static Builder|Package whereCreatedAt($value)
 * @method static Builder|Package whereDescription($value)
 * @method static Builder|Package whereDiscount($value)
 * @method static Builder|Package whereId($value)
 * @method static Builder|Package whereName($value)
 * @method static Builder|Package whereTotalAmount($value)
 * @method static Builder|Package whereUpdatedAt($value)
 * @mixin Model
 * @property-read Collection|PackageService[] $packageServicesItems
 * @property-read int|null $package_services_items_count
 * @property int $is_default
 * @method static Builder|Package whereIsDefault($value)
 */
	class Package extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PackageService
 *
 * @property int $id
 * @property int $package_id
 * @property string $service_name
 * @property float $quantity
 * @property float $rate
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|PackageService newModelQuery()
 * @method static Builder|PackageService newQuery()
 * @method static Builder|PackageService query()
 * @method static Builder|PackageService whereCreatedAt($value)
 * @method static Builder|PackageService whereId($value)
 * @method static Builder|PackageService wherePackageId($value)
 * @method static Builder|PackageService whereQuantity($value)
 * @method static Builder|PackageService whereRate($value)
 * @method static Builder|PackageService whereUpdatedAt($value)
 * @mixin Eloquent
 * @property float $amount
 * @method static Builder|PackageService whereAmount($value)
 * @property int $service_id
 * @method static Builder|PackageService whereServiceId($value)
 * @property-read Service $service
 * @property int $is_default
 * @method static Builder|PackageService whereIsDefault($value)
 */
	class PackageService extends \Eloquent {}
}

namespace App\Models{
/**
 * Class PathologyCategory
 *
 * @version April 11, 2020, 5:39 am UTC
 * @property string name
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|PathologyCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PathologyCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PathologyCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|PathologyCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PathologyCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PathologyCategory whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PathologyCategory whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class PathologyCategory extends \Eloquent {}
}

namespace App\Models{
/**
 * Class PathologyTest
 *
 * @version April 14, 2020, 9:33 am UTC
 * @property string test_name
 * @property string short_name
 * @property string test_type
 * @property int category_id
 * @property int unit
 * @property string subcategory
 * @property string method
 * @property int report_days
 * @property int charge_category_id
 * @property int standard_charge
 * @property int $id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read \App\Models\ChargeCategory $chargecategory
 * @property-read \App\Models\RadiologyCategory $radiologycategory
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PathologyTest newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PathologyTest newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PathologyTest query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PathologyTest whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PathologyTest whereChargeCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PathologyTest whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PathologyTest whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PathologyTest whereMethod($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PathologyTest whereReportDays($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PathologyTest whereShortName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PathologyTest whereStandardCharge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PathologyTest whereSubcategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PathologyTest whereTestName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PathologyTest whereTestType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PathologyTest whereUnit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PathologyTest whereUpdatedAt($value)
 * @mixin \Eloquent
 * // * @property string $test_name
 * // * @property string $short_name
 * // * @property string $test_type
 * // * @property int $category_id
 * // * @property int|null $unit
 * // * @property string|null $subcategory
 * // * @property string|null $method
 * // * @property int|null $report_days
 * // * @property int $charge_category_id
 * // * @property int $standard_charge
 * @property-read \App\Models\PathologyCategory $pathologycategory
 * @property string $test_name
 * @property string $short_name
 * @property string $test_type
 * @property int $category_id
 * @property int|null $unit
 * @property string|null $subcategory
 * @property string|null $method
 * @property int|null $report_days
 * @property int $charge_category_id
 * @property int $standard_charge
 */
	class PathologyTest extends \Eloquent {}
}

namespace App\Models{
/**
 * Class Patient
 *
 * @version February 14, 2020, 5:53 am UTC
 * @property int user_id
 * @property int $id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read User $patientUser
 * @method static Builder|Patient newModelQuery()
 * @method static Builder|Patient newQuery()
 * @method static Builder|Patient query()
 * @method static Builder|Patient whereCreatedAt($value)
 * @method static Builder|Patient whereId($value)
 * @method static Builder|Patient whereUpdatedAt($value)
 * @method static Builder|Patient whereUserId($value)
 * @mixin Model
 * @property int $is_default
 * @property-read \App\Models\Address|null $address
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\PatientAdmission[] $admissions
 * @property-read int|null $admissions_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\AdvancedPayment[] $advancedpayments
 * @property-read int|null $advancedpayments_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Appointment[] $appointments
 * @property-read int|null $appointments_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Bill[] $bills
 * @property-read int|null $bills_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\PatientCase[] $cases
 * @property-read int|null $cases_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Document[] $documents
 * @property-read int|null $documents_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Invoice[] $invoices
 * @property-read int|null $invoices_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\VaccinatedPatients[] $vaccinations
 * @property-read int|null $vaccinations_count
 * @method static Builder|Patient whereIsDefault($value)
 * @property int $user_id
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\OpdPatientDepartment> $opd
 * @property-read int|null $opd_count
 * @property-read \App\Models\OpdPatientDepartment|null $opdDepartment
 * @property-read \App\Models\User $user
 */
	class Patient extends \Eloquent {}
}

namespace App\Models{
/**
 * Class PatientAdmission
 *
 * @mixin Model
 * @property int $id
 * @property int $patient_id
 * @property int $doctor_id
 * @property string $admission_date
 * @property string $discharge_date
 * @property int|null $package_id
 * @property string|null $insurance_id
 * @property string|null $policy_no
 * @property string|null $agent_name
 * @property string|null $guardian_name
 * @property string|null $guardian_relation
 * @property string|null $guardian_contact
 * @property string|null $guardian_address
 * @property int|null $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Doctor $doctor
 * @property-read Package|null $package
 * @property-read Patient $patient
 * @method static Builder|PatientAdmission newModelQuery()
 * @method static Builder|PatientAdmission newQuery()
 * @method static Builder|PatientAdmission query()
 * @method static Builder|PatientAdmission whereAdmissionDate($value)
 * @method static Builder|PatientAdmission whereAgentName($value)
 * @method static Builder|PatientAdmission whereCreatedAt($value)
 * @method static Builder|PatientAdmission whereDischargeDate($value)
 * @method static Builder|PatientAdmission whereDoctorId($value)
 * @method static Builder|PatientAdmission whereGuardianAddress($value)
 * @method static Builder|PatientAdmission whereGuardianContact($value)
 * @method static Builder|PatientAdmission whereGuardianName($value)
 * @method static Builder|PatientAdmission whereGuardianRelation($value)
 * @method static Builder|PatientAdmission whereId($value)
 * @method static Builder|PatientAdmission whereInsuranceId($value)
 * @method static Builder|PatientAdmission wherePackageId($value)
 * @method static Builder|PatientAdmission wherePatientId($value)
 * @method static Builder|PatientAdmission wherePolicyNo($value)
 * @method static Builder|PatientAdmission whereStatus($value)
 * @method static Builder|PatientAdmission whereUpdatedAt($value)
 * @property string $patient_admission_id
 * @property-read Insurance|null $insurance
 * @method static Builder|PatientAdmission wherePatientAdmissionId($value)
 * @property int|null $bed_id
 * @property-read Bed|null $bed
 * @method static Builder|PatientAdmission whereBedId($value)
 * @property int $is_default
 * @method static Builder|PatientAdmission whereIsDefault($value)
 */
	class PatientAdmission extends \Eloquent {}
}

namespace App\Models{
/**
 * Class PatientCase
 *
 * @version February 19, 2020, 4:48 am UTC
 * @property int $id
 * @property string $case_id
 * @property int $patient_id
 * @property int $phone
 * @property int $doctor_id
 * @property string $date
 * @property int $status
 * @property string $description
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Doctor $doctor
 * @property-read Patient $patient
 * @method static Builder|PatientCase newModelQuery()
 * @method static Builder|PatientCase newQuery()
 * @method static Builder|PatientCase query()
 * @method static Builder|PatientCase wherePatientCaseId($value)
 * @method static Builder|PatientCase whereCreatedAt($value)
 * @method static Builder|PatientCase whereDate($value)
 * @method static Builder|PatientCase whereDescription($value)
 * @method static Builder|PatientCase whereDoctorId($value)
 * @method static Builder|PatientCase whereId($value)
 * @method static Builder|PatientCase wherePatientId($value)
 * @method static Builder|PatientCase wherePhone($value)
 * @method static Builder|PatientCase whereStatus($value)
 * @method static Builder|PatientCase whereUpdatedAt($value)
 * @mixin Model
 * @property float $fee
 * @method static Builder|PatientCase whereFee($value)
 * @method static Builder|PatientCase whereCaseId($value)
 * @property int $is_default
 * @property-read \App\Models\BedAssign $bedAssign
 * @method static Builder|PatientCase whereIsDefault($value)
 */
	class PatientCase extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PatientDiagnosisProperty
 *
 * @property int $id
 * @property int $patient_diagnosis_id
 * @property string $property_name
 * @property string $property_value
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\PatientDiagnosisTest $reportNumber
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PatientDiagnosisProperty newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PatientDiagnosisProperty newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PatientDiagnosisProperty query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PatientDiagnosisProperty whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PatientDiagnosisProperty whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PatientDiagnosisProperty
 *     wherePatientDiagnosisId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PatientDiagnosisProperty wherePropertyName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PatientDiagnosisProperty wherePropertyValue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PatientDiagnosisProperty whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class PatientDiagnosisProperty extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PatientDiagnosisTest
 *
 * @property int $id
 * @property int $patient_id
 * @property int $doctor_id
 * @property int $category_id
 * @property string $report_number
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\DiagnosisCategory $category
 * @property-read \App\Models\Doctor $doctor
 * @property-read \App\Models\Patient $patient
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PatientDiagnosisTest newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PatientDiagnosisTest newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PatientDiagnosisTest query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PatientDiagnosisTest whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PatientDiagnosisTest whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PatientDiagnosisTest whereDoctorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PatientDiagnosisTest whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PatientDiagnosisTest wherePatientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PatientDiagnosisTest whereReportNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PatientDiagnosisTest whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read Collection|PatientDiagnosisProperty[] $patientDiagnosisProperties
 * @property-read int|null $patient_diagnosis_properties_count
 */
	class PatientDiagnosisTest extends \Eloquent {}
}

namespace App\Models{
/**
 * Class Payment
 *
 * @version February 22, 2020, 7:06 am UTC
 * @property int $id
 * @property string $payment_date
 * @property int $account_id
 * @property string $pay_to
 * @property float $amount
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Account $account
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Payment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Payment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Payment query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Payment whereAccountId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Payment whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Payment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Payment whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Payment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Payment wherePayTo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Payment wherePaymentDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Payment whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Account[] $accounts
 * @property-read int|null $accounts_count
 * @property int $is_default
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereIsDefault($value)
 */
	class Payment extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Permission
 *
 * @property int $id
 * @property string $name
 * @property string $guard_name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Permission[] $permissions
 * @property-read int|null $permissions_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Department[] $roles
 * @property-read int|null $roles_count
 * @method static \Illuminate\Database\Eloquent\Builder|Permission newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Permission newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Permission permission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission query()
 * @method static \Illuminate\Database\Eloquent\Builder|Permission role($roles, $guard = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereGuardName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Permission extends \Eloquent implements \Spatie\Permission\Contracts\Permission {}
}

namespace App\Models{
/**
 * Class Pharmacist
 *
 * @version February 14, 2020, 9:32 am UTC
 * @property int user_id
 * @property int $id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read User $user
 * @method static Builder|Pharmacist newModelQuery()
 * @method static Builder|Pharmacist newQuery()
 * @method static Builder|Pharmacist query()
 * @method static Builder|Pharmacist whereCreatedAt($value)
 * @method static Builder|Pharmacist whereId($value)
 * @method static Builder|Pharmacist whereUpdatedAt($value)
 * @method static Builder|Pharmacist whereUserId($value)
 * @mixin Model
 * @property-read \App\Models\Address $address
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\EmployeePayroll[] $payrolls
 * @property-read int|null $payrolls_count
 * @property int $user_id
 * @property int $is_default
 * @method static Builder|Pharmacist whereIsDefault($value)
 */
	class Pharmacist extends \Eloquent {}
}

namespace App\Models{
/**
 * Class Postal
 *
 * @property int $id
 * @property string|null $from_title
 * @property string|null $to_title
 * @property string|null $reference_no
 * @property string|null $date
 * @property string|null $address
 * @property int|null $type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read mixed $document_url
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection|Media[] $media
 * @property-read int|null $media_count
 * @method static \Illuminate\Database\Eloquent\Builder|Postal newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Postal newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Postal query()
 * @method static \Illuminate\Database\Eloquent\Builder|Postal whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Postal whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Postal whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Postal whereFromTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Postal whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Postal whereReferenceNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Postal whereToTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Postal whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Postal whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Postal extends \Eloquent implements \Spatie\MediaLibrary\HasMedia {}
}

namespace App\Models{
/**
 * Class Prescription
 *
 * @version March 31, 2020, 12:22 pm UTC
 * @property int patient_id
 * @property string food_allergies
 * @property string tendency_bleed
 * @property string heart_disease
 * @property string high_blood_pressure
 * @property string diabetic
 * @property string surgery
 * @property string accident
 * @property string others
 * @property string medical_history
 * @property string current_medication
 * @property string female_pregnancy
 * @property string breast_feeding
 * @property string health_insurance
 * @property string low_income
 * @property string reference
 * @property bool status
 * @property int $id
 * @property int|null $doctor_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Patient $patient
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Prescription newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Prescription newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Prescription query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Prescription whereAccident($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Prescription whereBreastFeeding($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Prescription whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Prescription whereCurrentMedication($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Prescription whereDiabetic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Prescription whereDoctorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Prescription whereFemalePregnancy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Prescription whereFoodAllergies($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Prescription whereHealthInsurance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Prescription whereHeartDisease($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Prescription whereHighBloodPressure($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Prescription whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Prescription whereLowIncome($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Prescription whereMedicalHistory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Prescription whereOthers($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Prescription wherePatientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Prescription whereReference($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Prescription whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Prescription whereSurgery($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Prescription whereTendencyBleed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Prescription whereUpdatedAt($value)
 * @mixin Model
 * @property int $patient_id
 * @property string|null $food_allergies
 * @property string|null $tendency_bleed
 * @property string|null $heart_disease
 * @property string|null $high_blood_pressure
 * @property string|null $diabetic
 * @property string|null $surgery
 * @property string|null $accident
 * @property string|null $others
 * @property string|null $medical_history
 * @property string|null $current_medication
 * @property string|null $female_pregnancy
 * @property string|null $breast_feeding
 * @property string|null $health_insurance
 * @property string|null $low_income
 * @property string|null $reference
 * @property bool|null $status
 * @property int $is_default
 * @property-read \App\Models\Doctor|null $doctor
 * * @property-read Collection|PrescriptionMedicineModal[] $getMedicine
 * @method static \Illuminate\Database\Eloquent\Builder|Prescription whereIsDefault($value)
 * @property string|null $plus_rate
 * @property string|null $temperature
 * @property string|null $problem_description
 * @property string|null $test
 * @property string|null $advice
 * @property string|null $next_visit_qty
 * @property string|null $next_visit_time
 * @method static \Illuminate\Database\Eloquent\Builder|Prescription whereAdvice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Prescription whereNextVisitQty($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Prescription whereNextVisitTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Prescription wherePlusRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Prescription whereProblemDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Prescription whereTemperature($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Prescription whereTest($value)
 */
	class Prescription extends \Eloquent {}
}

namespace App\Models{
/**
 * Class PrescriptionMedicineModal
 *
 * @package App\Models
 * @version July 30, 2022, 6:29 pm UTC
 * @property string $medicine
 * @property string $dosage
 * @property string $day
 * @property string $time
 * @property string $comment
 * @property int $id
 * @property string $prescription_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Medicine> $medicines
 * @property-read int|null $medicines_count
 * @property-read \App\Models\Prescription $prescription
 * @method static \Illuminate\Database\Eloquent\Builder|PrescriptionMedicineModal newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PrescriptionMedicineModal newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PrescriptionMedicineModal query()
 * @method static \Illuminate\Database\Eloquent\Builder|PrescriptionMedicineModal whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PrescriptionMedicineModal whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PrescriptionMedicineModal whereDay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PrescriptionMedicineModal whereDosage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PrescriptionMedicineModal whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PrescriptionMedicineModal whereMedicine($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PrescriptionMedicineModal wherePrescriptionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PrescriptionMedicineModal whereTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PrescriptionMedicineModal whereUpdatedAt($value)
 */
	class PrescriptionMedicineModal extends \Eloquent {}
}

namespace App\Models{
/**
 * Class RadiologyCategory
 *
 * @version April 11, 2020, 7:08 am UTC
 * @property string name
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|RadiologyCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RadiologyCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RadiologyCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|RadiologyCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RadiologyCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RadiologyCategory whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RadiologyCategory whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class RadiologyCategory extends \Eloquent {}
}

namespace App\Models{
/**
 * Class RadiologyTest
 *
 * @version April 13, 2020, 5:06 am UTC
 * @property string test_name
 * @property string short_name
 * @property string test_type
 * @property int category_id
 * @property string subcategory
 * @property int report_days
 * @property int charge_category_id
 * @property int standard_charge
 * @property int $id
 * @property string $test_name
 * @property string $short_name
 * @property string $test_type
 * @property int $category_id
 * @property string|null $subcategory
 * @property int|null $report_days
 * @property int $charge_category_id
 * @property int $standard_charge
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\ChargeCategory $chargecategory
 * @property-read \App\Models\RadiologyCategory $radiologycategory
 * @method static \Illuminate\Database\Eloquent\Builder|RadiologyTest newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RadiologyTest newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RadiologyTest query()
 * @method static \Illuminate\Database\Eloquent\Builder|RadiologyTest whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RadiologyTest whereChargeCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RadiologyTest whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RadiologyTest whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RadiologyTest whereReportDays($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RadiologyTest whereShortName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RadiologyTest whereStandardCharge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RadiologyTest whereSubcategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RadiologyTest whereTestName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RadiologyTest whereTestType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RadiologyTest whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class RadiologyTest extends \Eloquent {}
}

namespace App\Models{
/**
 * Class Receptionist
 *
 * @version February 14, 2020, 9:14 am UTC
 * @property int $id
 * @property int $user_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read User $user
 * @method static Builder|Receptionist newModelQuery()
 * @method static Builder|Receptionist newQuery()
 * @method static Builder|Receptionist query()
 * @method static Builder|Receptionist whereCreatedAt($value)
 * @method static Builder|Receptionist whereId($value)
 * @method static Builder|Receptionist whereUpdatedAt($value)
 * @method static Builder|Receptionist whereUserId($value)
 * @mixin Model
 * @property-read \App\Models\Address $address
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\EmployeePayroll[] $payrolls
 * @property-read int|null $payrolls_count
 * @property int $is_default
 * @method static Builder|Receptionist whereIsDefault($value)
 */
	class Receptionist extends \Eloquent {}
}

namespace App\Models{
/**
 * Class Schedule
 *
 * @version February 24, 2020, 5:55 am UTC
 * @property int $id
 * @property int $doctor_id
 * @property string $per_patient_time
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Doctor $doctor
 * @method static Builder|Schedule newModelQuery()
 * @method static Builder|Schedule newQuery()
 * @method static Builder|Schedule query()
 * @method static Builder|Schedule whereCreatedAt($value)
 * @method static Builder|Schedule whereDoctorId($value)
 * @method static Builder|Schedule whereId($value)
 * @method static Builder|Schedule wherePerPatientTime($value)
 * @method static Builder|Schedule whereSerialVisibility($value)
 * @method static Builder|Schedule whereUpdatedAt($value)
 * @mixin Model
 * @property-read Collection|ScheduleDay[] $scheduleDays
 * @property-read int|null $schedule_days_count
 * @property int $is_default
 * @method static Builder|Schedule whereIsDefault($value)
 */
	class Schedule extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ScheduleDay
 *
 * @property int $id
 * @property int $doctor_id
 * @property string $per_patient_time
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Doctor $doctor
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ScheduleDay newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ScheduleDay newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ScheduleDay query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ScheduleDay whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ScheduleDay whereDoctorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ScheduleDay whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ScheduleDay wherePerPatientTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ScheduleDay whereSerialVisibility($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ScheduleDay whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property int $schedule_id
 * @property string $available_on
 * @property string $available_from
 * @property string $available_to
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ScheduleDay whereAvailableFrom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ScheduleDay whereAvailableOn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ScheduleDay whereAvailableTo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ScheduleDay whereScheduleId($value)
 * @property-read Schedule $schedule
 */
	class ScheduleDay extends \Eloquent {}
}

namespace App\Models{
/**
 * Class Service
 *
 * @version February 25, 2020, 10:50 am UTC
 * @property int $id
 * @property string $name
 * @property string $description
 * @property int $quantity
 * @property int $rate
 * @property int $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static Builder|Service newModelQuery()
 * @method static Builder|Service newQuery()
 * @method static Builder|Service query()
 * @method static Builder|Service whereCreatedAt($value)
 * @method static Builder|Service whereDeletedAt($value)
 * @method static Builder|Service whereDescription($value)
 * @method static Builder|Service whereId($value)
 * @method static Builder|Service whereName($value)
 * @method static Builder|Service whereQuantity($value)
 * @method static Builder|Service whereRate($value)
 * @method static Builder|Service whereStatus($value)
 * @method static Builder|Service whereUpdatedAt($value)
 * @mixin Model
 * @property int $is_default
 * @method static Builder|Service whereIsDefault($value)
 */
	class Service extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Setting
 *
 * @property int $id
 * @property string $key
 * @property string|null $value
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read mixed $logo_url
 * @property-read Collection|Media[] $media
 * @property-read int|null $media_count
 * @method static Builder|Setting newModelQuery()
 * @method static Builder|Setting newQuery()
 * @method static Builder|Setting query()
 * @method static Builder|Setting whereCreatedAt($value)
 * @method static Builder|Setting whereId($value)
 * @method static Builder|Setting whereKey($value)
 * @method static Builder|Setting whereUpdatedAt($value)
 * @method static Builder|Setting whereValue($value)
 * @mixin Model
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Setting whereCompanyName($value)
 */
	class Setting extends \Eloquent implements \Spatie\MediaLibrary\HasMedia {}
}

namespace App\Models{
/**
 * App\Models\Sms
 *
 * @property int $id
 * @property int|null $send_to
 * @property string|null $region_code
 * @property string $phone_number
 * @property string $message
 * @property int $send_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User $sendBy
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|Sms newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Sms newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Sms query()
 * @method static \Illuminate\Database\Eloquent\Builder|Sms whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sms whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sms whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sms wherePhoneNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sms whereRegionCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sms whereSendBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sms whereSendTo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sms whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Sms extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Testimonial
 *
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read mixed $document_url
 * @property-read Collection|Media[] $media
 * @property-read int|null $media_count
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial query()
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial whereUpdatedAt($value)
 * @mixin Eloquent
 */
	class Testimonial extends \Eloquent implements \Spatie\MediaLibrary\HasMedia {}
}

namespace App\Models{
/**
 * App\Models\Transaction
 *
 * @property int $id
 * @property string $stripe_transaction_id
 * @property int $amount
 * @property int $user_id
 * @property string $status
 * @property array|null $meta
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction query()
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereMeta($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereStripeTransactionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereUserId($value)
 * @mixin \Eloquent
 */
	class Transaction extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property int|null $address_id
 * @property int|null $department_id
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $password
 * @property string|null $designation
 * @property string $phone
 * @property int $gender
 * @property string|null $education
 * @property string $dob
 * @property int $status
 * @property string|null $remember_token
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read string $full_name
 * @property-read DatabaseNotificationCollection|DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static Builder|User newModelQuery()
 * @method static Builder|User newQuery()
 * @method static Builder|User query()
 * @method static Builder|User whereAddressId($value)
 * @method static Builder|User whereCreatedAt($value)
 * @method static Builder|User whereDeletedAt($value)
 * @method static Builder|User whereDepartmentId($value)
 * @method static Builder|User whereDesignation($value)
 * @method static Builder|User whereDob($value)
 * @method static Builder|User whereEducation($value)
 * @method static Builder|User whereEmail($value)
 * @method static Builder|User whereFirstName($value)
 * @method static Builder|User whereGender($value)
 * @method static Builder|User whereId($value)
 * @method static Builder|User whereLastName($value)
 * @method static Builder|User wherePassword($value)
 * @method static Builder|User wherePhone($value)
 * @method static Builder|User whereRememberToken($value)
 * @method static Builder|User whereStatus($value)
 * @method static Builder|User whereUpdatedAt($value)
 * @mixin Eloquent
 * @property string|null $blood_group
 * @property int|null $owner_id
 * @property string|null $owner_type
 * @property-read mixed $image_url
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\MediaLibrary\Models\Media[] $media
 * @property-read int|null $media_count
 * @property-read \App\Models\User|null $owner
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Permission[] $permissions
 * @property-read int|null $permissions_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Department[] $roles
 * @property-read int|null $roles_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User permission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User userRolerole($roles, $guard = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereBloodGroup($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereOwnerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereOwnerType($value)
 * @property string|null $qualification
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $language
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereLanguage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereQualification($value)
 * @property int $is_default
 * @property string|null $stripe_id
 * @property string|null $card_brand
 * @property string|null $card_last_four
 * @property string|null $trial_ends_at
 * @property-read \App\Models\Department|null $department
 * @property-read mixed $age
 * @property-read \App\Models\Patient|null $patient
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static Builder|User whereCardBrand($value)
 * @method static Builder|User whereCardLastFour($value)
 * @method static Builder|User whereIsDefault($value)
 * @method static Builder|User whereStripeId($value)
 * @method static Builder|User whereTrialEndsAt($value)
 * @property string|null $facebook_url
 * @property string|null $twitter_url
 * @property string|null $instagram_url
 * @property string|null $linkedIn_url
 * @property string $thememode
 * @property-read array|\Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Translation\Translator|string|null $gender_string
 * @method static \Illuminate\Database\Eloquent\Builder|User role($roles, $guard = null)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereFacebookUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereInstagramUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLinkedInUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereThememode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTwitterUrl($value)
 */
	class User extends \Eloquent implements \Spatie\MediaLibrary\HasMedia, \Illuminate\Contracts\Auth\MustVerifyEmail {}
}

namespace App\Models{
/**
 * App\Models\UserZoomCredential
 *
 * @property int $id
 * @property int $user_id
 * @property string $zoom_api_key
 * @property string $zoom_api_secret
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|UserZoomCredential newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserZoomCredential newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserZoomCredential query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserZoomCredential whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserZoomCredential whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserZoomCredential whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserZoomCredential whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserZoomCredential whereZoomApiKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserZoomCredential whereZoomApiSecret($value)
 * @mixin \Eloquent
 */
	class UserZoomCredential extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\VaccinatedPatients
 *
 * @property int $id
 * @property int $patient_id
 * @property int $vaccination_id
 * @property string|null $vaccination_serial_number
 * @property string $dose_number
 * @property \Illuminate\Support\Carbon $dose_given_date
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Patient $patient
 * @property-read \App\Models\Vaccination $vaccination
 * @method static \Illuminate\Database\Eloquent\Builder|VaccinatedPatients newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|VaccinatedPatients newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|VaccinatedPatients query()
 * @method static \Illuminate\Database\Eloquent\Builder|VaccinatedPatients whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VaccinatedPatients whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VaccinatedPatients whereDoseGivenDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VaccinatedPatients whereDoseNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VaccinatedPatients whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VaccinatedPatients wherePatientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VaccinatedPatients whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VaccinatedPatients whereVaccinationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VaccinatedPatients whereVaccinationSerialNumber($value)
 * @mixin Model
 */
	class VaccinatedPatients extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Vaccination
 *
 * @property int $id
 * @property string $name
 * @property string $manufactured_by
 * @property string $brand
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Vaccination newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Vaccination newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Vaccination query()
 * @method static \Illuminate\Database\Eloquent\Builder|Vaccination whereBrand($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vaccination whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vaccination whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vaccination whereManufacturedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vaccination whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vaccination whereUpdatedAt($value)
 * @mixin Model
 */
	class Vaccination extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Visitor
 *
 * @property int $id
 * @property int $purpose
 * @property string $name
 * @property string|null $phone
 * @property string|null $id_card
 * @property string|null $no_of_person
 * @property string|null $date
 * @property string|null $in_time
 * @property string|null $out_time
 * @property string|null $note
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read mixed $document_url
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection|Media[] $media
 * @property-read int|null $media_count
 * @method static \Illuminate\Database\Eloquent\Builder|Visitor newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Visitor newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Visitor query()
 * @method static \Illuminate\Database\Eloquent\Builder|Visitor whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Visitor whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Visitor whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Visitor whereIdCard($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Visitor whereInTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Visitor whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Visitor whereNoOfPerson($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Visitor whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Visitor whereOutTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Visitor wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Visitor wherePurpose($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Visitor whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Visitor extends \Eloquent implements \Spatie\MediaLibrary\HasMedia {}
}

