<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Service; 
use App\Models\InsuranceCover; 
use App\Models\Feature; 
use App\Models\Review; 
use App\Models\Faq;
use App\Models\Contact;
use Carbon\Carbon;

class PremiumController extends Controller
{
    private $username = 'webservice@probusinsurance.in';
    private $password = 'Bagic@12345';
    private $fixedBagicToken = 'eyJpc3MiOiJCYWphaiIsImV4cCI6MTU4NDM0MzM1NywiaWF0IjoxNTg0MzQwNjU3fQ.30ylKAo4xVaCBLUX50PT8tmsOS5Ix2wJ6fCrEe60JC1IPthNF9N0bi8tp2WN5V';
    private $getTokenUrl = 'https://extuat.bajajallianz.com/BjazPetIntNew/getToken';
    private $premiumUrl = 'https://extuat.bajajallianz.com/BjazPetIntNew/calculatePremiumNew';

    public function calculatePremium(Request $request)
    {
        // dd($request);
        // Step 1: Get Bearer Token using fixed BagicToken
        $tokenResponse = Http::withHeaders([
            'BagicToken' => $this->fixedBagicToken
        ])->get($this->getTokenUrl);

        if (!$tokenResponse->ok()) {
            return response()->json(['error' => 'Failed to get bearer token', 'details' => $tokenResponse->body()], 500);
        }

        $bearerToken = $tokenResponse->json()['token'] ?? null;
        
        if (!$bearerToken) {
            return response()->json(['error' => 'Bearer token not found in response'], 500);
        }

        $formatted = $request->all();
        $dateKeys = [
            'term_start_date',
            'term_end_date',
            'date_of_birth',
            // Add more date keys if needed
        ];

        foreach ($dateKeys as $key) {
            if (!empty($formatted[$key])) {
                $formatted[$key] = Carbon::parse($formatted[$key])->format('d-M-Y');
            }
        }

        // Step 2: Prepare payload
        $payload = [
            "user_id" => "bajajallianzsme@policybazaar.com",
            "password" => "newpas12",
            "p_transaction_id" => "",
            "policy_details" => [
                "scrutiny_no"=> "0",
                "business_type"=> "NB",
                "policy_period"=> "1200",
                "term_start_date"=> $formatted['term_start_date'],
                "term_start_time"=> "00:00",
                "term_end_date"=> $formatted['term_end_date'],
                "partner_type"=> "P",
                "trans_time"=> "00:21:46"
            ],
            "cp_obj" => [
                "partner_type"=> "P",
                "contact1"=> $request->contact1,
                "date_of_birth"=> $formatted['date_of_birth'],
                "sex"=> $request->sex,
                "email"=> $request->email,
                "first_name"=> $request->first_name,
                "surname"=> $request->surname,
                "institution_name"=> "",
                "middle_name"=> "",
                "telephone3"=> "",
                "addressee"=> ""
            ],
            "address_lst" => [
                [
                    "postcode"=> $request->postcode,
                    "country_code"=> "",
                    "address_line1"=> $request->address_line1,
                    "address_line2"=> $request->address_line2,
                    "address_line3"=> $request->address_line3,
                    "address_line4"=> "",
                    "address_line5"=> "",
                    "state"=> $request->state
                ]
            ],
            "pet_pol_dtls_new" => [
                "PET_ID"=> "",
                "pet_type"=> $request->pet_type,
                "pet_name"=> $request->pet_name,
                "sex"=> $request->petsex,
                "breed"=> $request->breed,
                "breed_others"=> "",
                "category"=> "medium",
                "age_in_year"=> $request->age_in_year,
                "age_in_month"=> $request->age_in_month,
                "Commercial"=> "no",
                "pet_prerequisite"=> "Healthy",

                "is_pedigree_lineage"=> "No",
                "registration_dtls"=> "Registered",
                "dog_house"=> $request->dog_house,
                "weight"=> $request->weight,
                "microchip_no"=> "",
                "is_doc_uploaded_yn"=> "Yes",
                "pet_features"=> "Playful and friendly",
                "is_pet_healthy"=> $request->is_pet_healthy,
                "health_dtls"=> "None",
                "other_defects"=> "None",
                "is_pet_vacinated"=> $request->is_pet_vacinated,
                "vaccination_dtls"=> "Up-to-date",

                "past_diseases"=> "None",
                "is_spayed_castrated"=> "No",
                "spayed_castrted_reason"=> "",
                "is_pet_ins_declined"=> "No",
                "is_pet_ins_rnw_declined"=> "No",
                "special_rnw_cndtn"=> "No",
                "info_material_to_risk"=> "None",
                "pet_special_cond"=> "",
                "prev_ins_claims"=> "",
                "is_pet_loss"=> "No",
                "PLAN"=> "A",

                "SURG_COVER_YN"=> "on",
                "surg_exp_si"=> "10000",
                "accident_fracture_si"=> "1000",
                "SURG_COVER_CATARACT"=> "No",
                "SURG_COVER_EXC_HIPDISP"=> "No",
                "SURG_COVER_COPAY"=> "0",
                "SURG_COVER_PREM"=> "",
                "surg_exp_hospt_cvr_yn"=> "off",
                "surg_exp_hospt_prem"=> "",
                "hospitaliztion_si"=> "4000",
                "mortality_cvr_yn"=> "off",

                "mortality_cvr_si"=> "",
                "mortality_disp_si"=> "",
                "MORTALITY_CVR_kid_fail"=> "",
                "MORTALITY_CVR_ACDN_DTH"=> "",
                "mortality_cvr_prem"=> "",
                "term_disease_cvr_yn"=> "off",
                "term_disease_cvr_si"=> "",
                "term_disease_cvr_prem"=> "",
                "longterm_care_cvr_yn"=> "off",
                "longterm_care_cvr_si"=> "8000",
                "longterm_care_cvr_prem"=> "",

                "opd_cvr_yn"=> "off",
                "opd_cvr_si"=> "2000",
                "OPD_CVR_COPAY"=> "500",
                "opd_cvr_prem"=> "",
                "tp_liability_cvr_yn"=> "off",
                "tp_liability_cvr_si"=> "10000",
                "TP_LIABILITY_CVR_COPAY"=> "2000",
                "tp_liability_cvr_prem"=> "",
                "theft_cvr_yn"=> "off",
                "theft_cvr_si"=> "",
                "theft_advert_cvr_si"=> "",

                "theft_cvr_prem"=> "",
                "HOSPITAL_COVER_YN"=> "off",
                "HOSPITAL_AGG_CVR_SI"=> "20000",
                "HOSPITAL_PER_DAY_LT_SI"=> "1000",
                "HOSPITAL_COVER_EXC_HIPDISP"=> "No",
                "HOSPITAL_COVER_copay"=> "2000",
                "HOSPITAL_COVER_PRM"=> "4000",
                "EMP_DISC_APPL_YN"=> "No",
                "Employee_id"=> "",
                "ACQUISITION_COST"=> "",
                "loyalty_disc"=> "1000",

                "PET_NET_PREMIUM"=> "",
                "PET_LOAD_DISC_AMT"=> "",
                "TOTAL_PET_PREM"=> "",
                "total_prem"=> "",
                "p_param_1"=> "",
                "p_param_2"=> "",
                "p_param_3"=> "",
                "p_param_4"=> "",
                "p_param_5"=> "",
                "p_param_6"=> "",
                "p_param_7"=> "",
                "p_param_8"=> "",
                "p_param_9"=> "",
                "p_param_10"=> "",
                "location_id"=> "",
                "delete_location_yn"=> "N",
                "display_location_id"=> ""
            ],
            "pet_pol_dtls_lst_new" => [
                [
                "PET_ID"=> "",
                "pet_type"=> "dog",
                "pet_name"=> "Buddy",
                "sex"=> "M",
                "breed"=> "American Bully",
                "breed_others"=> "",
                "category"=> "medium",
                "age_in_year"=> "3",
                "age_in_month"=> "0",
                "Commercial"=> "no",
                "pet_prerequisite"=> "Healthy",
                "is_pedigree_lineage"=> "No",
                "registration_dtls"=> "Registered",
                "dog_house"=> "Yes",
                "weight"=> "25",
                "microchip_no"=> "",

                "is_doc_uploaded_yn"=> "Yes",
                "pet_features"=> "Playful and friendly",
                "is_pet_healthy"=> "Yes",
                "health_dtls"=> "None",
                "other_defects"=> "None",
                "is_pet_vacinated"=> "yes",
                "vaccination_dtls"=> "Up-to-date",
                "past_diseases"=> "None",
                "is_spayed_castrated"=> "No",
                "spayed_castrted_reason"=> "",
                "is_pet_ins_declined"=> "No",
                "is_pet_ins_rnw_declined"=> "No",
                "special_rnw_cndtn"=> "No",
                "info_material_to_risk"=> "None",
                "pet_special_cond"=> "",
                "prev_ins_claims"=> "",
                "is_pet_loss"=> "No",

                "PLAN"=> "A",
                "SURG_COVER_YN"=> "on",
                "surg_exp_si"=> "10000",
                "accident_fracture_si"=> "1000",
                "SURG_COVER_CATARACT"=> "No",
                "SURG_COVER_EXC_HIPDISP"=> "No",
                "SURG_COVER_COPAY"=> "0",
                "SURG_COVER_PREM"=> "",
                "surg_exp_hospt_cvr_yn"=> "off",
                "surg_exp_hospt_prem"=> "",
                "hospitaliztion_si"=> "4000",
                "mortality_cvr_yn"=> "off",
                "mortality_cvr_si"=> "",
                "mortality_disp_si"=> "",
                "MORTALITY_CVR_kid_fail"=> "",
                "MORTALITY_CVR_ACDN_DTH"=> "",

                "mortality_cvr_prem"=> "",
                "term_disease_cvr_yn"=> "off",
                "term_disease_cvr_si"=> "",
                "term_disease_cvr_prem"=> "",
                "longterm_care_cvr_yn"=> "off",
                "longterm_care_cvr_si"=> "8000",
                "longterm_care_cvr_prem"=> "",
                "opd_cvr_yn"=> "off",
                "opd_cvr_si"=> "2000",
                "OPD_CVR_COPAY"=> "500",
                "opd_cvr_prem"=> "",
                "tp_liability_cvr_yn"=> "off",
                "tp_liability_cvr_si"=> "10000",
                "TP_LIABILITY_CVR_COPAY"=> "2000",
                "tp_liability_cvr_prem"=> "",

                "theft_cvr_yn"=> "off",
                "theft_cvr_si"=> "",
                "theft_advert_cvr_si"=> "",
                "theft_cvr_prem"=> "",
                "HOSPITAL_COVER_YN"=> "off",
                "HOSPITAL_AGG_CVR_SI"=> "20000",
                "HOSPITAL_PER_DAY_LT_SI"=> "1000",
                "HOSPITAL_COVER_EXC_HIPDISP"=> "No",
                "HOSPITAL_COVER_copay"=> "2000",
                "HOSPITAL_COVER_PRM"=> "4000",
                "EMP_DISC_APPL_YN"=> "No",
                "Employee_id"=> "",
                "ACQUISITION_COST"=> "",
                "loyalty_disc"=> "1000",
                "PET_NET_PREMIUM"=> "",
                "PET_LOAD_DISC_AMT"=> "",

                "TOTAL_PET_PREM"=> "",
                "total_prem"=> "",
                "p_param_1"=> "",
                "p_param_2"=> "",
                "p_param_3"=> "",
                "p_param_4"=> "",
                "p_param_5"=> "",
                "p_param_6"=> "",
                "p_param_7"=> "",
                "p_param_8"=> "",
                "p_param_9"=> "",
                "p_param_10"=> "",
                "location_id"=> "",
                "delete_location_yn"=> "N",
                "display_location_id"=> ""
            ]
            ]
        ];

        // Step 3: Call Premium API using bearer token
        $response = Http::withHeaders([
            'Authorization' => $bearerToken,
            'Content-Type' => 'application/json',
            'Accept' => 'application/json'
        ])->post($this->premiumUrl, $payload);
        
        if (!$response->ok()) {
            return response()->json(['error' => 'Failed to calculate premium', 'details' => $response->body()], 500);
        }

        $data = $response->json();
        dd($data);
        return back()->with('premiumDetails', $data['premiumDetails']);

        // return response()->json($response->json());
    }

    public function index()
    {
        $services = Service::all(); // Fetch all services from the database
        $covers = InsuranceCover::all();
        $features = Feature::all();
        $reviews = Review::all();
        $faqs = Faq::all();
        return view('calculate_premium_new', compact('services', 'covers', 'features', 'reviews', 'faqs')); // Pass services to the view
    }
}
