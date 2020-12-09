<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PersonalInfo;
use App\Models\PersonalContact;
use App\Models\FamilyBackground;
use App\Models\ApplicantInfo;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function addNewApplicant(Request $request) {
        $newPersonalInfo = new PersonalInfo;
        $newPersonalInfo->name = $request->firstname;
        $newPersonalInfo->middle = $request->middlename;
        $newPersonalInfo->surname = $request->lastname;
        $newPersonalInfo->status = $request->status;
        $newPersonalInfo->birth = $request->birth;
        $newPersonalInfo->birthplace = $request->birthplace;
        $newPersonalInfo->gender = $request->gender;
        $newPersonalInfo->save();

        $newPersonalContact = new PersonalContact;
        $newPersonalContact->personal_id = $newPersonalInfo->id;
        $newPersonalContact->address = $request->address;
        $newPersonalContact->city = $request->city;
        $newPersonalContact->province = $request->province;
        $newPersonalContact->occupation = $request->occupation;
        $newPersonalContact->office_no = $request->office_number;
        $newPersonalContact->office_address = $request->office_address;
        $newPersonalContact->email = $request->email;
        $newPersonalContact->phone = $request->phone;
        $newPersonalContact->save();


        $newFamilyBackground = new FamilyBackground;
        $newFamilyBackground->personal_id = $newPersonalInfo->id;
        $newFamilyBackground->m_name = $request->m_name;
        $newFamilyBackground->m_middle = $request->m_middle;
        $newFamilyBackground->m_surname = $request->m_last;
        $newFamilyBackground->m_citizenship = $request->m_citizenship;
        $newFamilyBackground->f_name = $request->f_name;
        $newFamilyBackground->f_middle = $request->f_middle;
        $newFamilyBackground->f_surname = $request->f_last;
        $newFamilyBackground->f_citizenship = $request->f_citizenship;
        $newFamilyBackground->save();

        $newApplicantInfo = new ApplicantInfo;
        $newApplicantInfo->personal_id = $newPersonalInfo->id;
        $newApplicantInfo->basis = $request->citizenship;
        $newApplicantInfo->emergency_contact = $request->emergency_contact;
        $newApplicantInfo->foreign_passport = $request->holder;
        $newApplicantInfo->save();

        return back();
    }

    public function showApplicantInfo(Request $request) {
        $applicantInfo = DB::table('personal_information')
        ->where('personal_information.personal_id', $request->applicant_id)
        ->join('family_background', 'personal_information.personal_id', '=', 'family_background.personal_id')
        ->join('personal_contact', 'personal_information.personal_id', '=', 'personal_contact.personal_id')
        ->join('applicants_info', 'personal_information.personal_id', '=', 'applicants_info.personal_id')
        ->get()
        ->toArray();

        return view('layouts.applicant_info', compact('applicantInfo'));
    }
}
