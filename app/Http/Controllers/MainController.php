<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class MainController extends Controller
{
    //
    public function displayAssessment(){
        return view('health-assessment.exams.main-exam');
    }

    public function displayListahan(){
        $mgapasyente = DB::table('patients')->get();
        return view('pages.listahan', compact('mgapasyente'));
    }

    public function editAngPasyente($id){
        $mgapasyente = DB::table('patients')
                        ->where('id', $id)->get();
        $detalye1 = DB::table('patient_histories_1')
                        ->where('patient_id', $id)->get();
        $detalye2 = DB::table('patient_histories_2')
                        ->where('patient_id', $id)->get();
        $detalye3 = DB::table('patient_histories_3')
                        ->where('patient_id', $id)->get();
        $detalye4 = DB::table('patient_histories_4')
                        ->where('patient_id', $id)->get();
        $detalye5 = DB::table('patient_histories_5')
                        ->where('patient_id', $id)->get();
        $detalye6 = DB::table('patient_histories_6')
                        ->where('patient_id', $id)->get();
        $detalye7 = DB::table('patient_histories_7')
                        ->where('patient_id', $id)->get();
        $detalye8 = DB::table('patient_histories_8')
                        ->where('patient_id', $id)->get();
        $detalye9 = DB::table('patient_histories_9')
                        ->where('patient_id', $id)->get();
        $detalye10 = DB::table('patient_histories_10')
                        ->where('patient_id', $id)->get();
        $detalye11 = DB::table('patient_histories_11')
                        ->where('patient_id', $id)->get();
        $detalye12 = DB::table('patient_exam_1')
                        ->where('patient_id', $id)->get();
        $detalye13 = DB::table('patient_exam_2')
                        ->where('patient_id', $id)->get();
        $detalye14 = DB::table('patient_exam_3')
                        ->where('patient_id', $id)->get();
        $detalye15 = DB::table('patient_exam_4')
                        ->where('patient_id', $id)->get();
        $detalye16 = DB::table('patient_exam_5')
                        ->where('patient_id', $id)->get();
        $detalye17 = DB::table('patient_exam_6')
                        ->where('patient_id', $id)->get();
        $detalye18 = DB::table('patient_exam_7')
                        ->where('patient_id', $id)->get();
        $detalye19 = DB::table('patient_exam_8')
                        ->where('patient_id', $id)->get();
        $detalye20 = DB::table('patient_exam_9')
                        ->where('patient_id', $id)->get();
        $detalye21 = DB::table('patient_exam_10')
                        ->where('patient_id', $id)->get();
        $detalye22 = DB::table('patient_exam_11')
                        ->where('patient_id', $id)->get();
        $detalye23 = DB::table('patient_exam_12')
                        ->where('patient_id', $id)->get();
        $detalye24 = DB::table('patient_exam_13')
                        ->where('patient_id', $id)->get();
        $detalye25 = DB::table('patient_exam_14')
                        ->where('patient_id', $id)->get();
        $detalye26 = DB::table('patient_exam_15')
                        ->where('patient_id', $id)->get();
        $detalye27 = DB::table('patient_exam_16')
                        ->where('patient_id', $id)->get();
                                       
            dd($mgapasyente);
        return view('health-assessment.edit-exams.main-exam', compact(
            'mgapasyente',
            'detalye1',
            'detalye2',
            'detalye3',
            'detalye4',
            'detalye5',
            'detalye6',
            'detalye7',
            'detalye8',
            'detalye9',
            'detalye10',
            'detalye11',
            'detalye12',
            'detalye13',
            'detalye14',
            'detalye15',
            'detalye16',
            'detalye17',
            'detalye18',
            'detalye19',
            'detalye20',
            'detalye21',
            'detalye22',
            'detalye23',
            'detalye24',
            'detalye25',
            'detalye26',
            'detalye27',
        ));
    }

    public function addData(Request $request){

    $pasyenteNgay = [
        'first_name' => $request->input('firstName'),
        'last_name' => $request->input('lastName'),
        'preferred_name' => $request->input('preferredName'),
        'dob' => $request->input('dob'),
        'admitted_location' => $request->input('alocation'),
        'admission_date' => $request->input('doa'),
        'acf_id' => $request->input('acfid'),
        'medicare_no' => $request->input('mednum'),
        'pension_no' => $request->input('pensionnum'),
        'kin_name' => $request->input('kinName'),
        'kin_phone' => $request->input('kinPhone'),
        'kin_work' => $request->input('kinWork'),
        'kin_mobile' => $request->input('kinMobile'),
        'family_history_unknown' => $request->input('family-history-unknown'), 
        'family_history_none' => $request->input('family-history-none'), 
        'allergy_history' => $request->input('allergy-history'),
        'past_medical_history' => $request->input('past-medical-history'),
        'created_at' => now(), 
        'updated_at' => now(), 
    ];

    $patientId = DB::table('patients')->insertGetId($pasyenteNgay);
  
    $historyData = [
        'patient_id' => $patientId,
        'created_at' => now(),
        'updated_at' => now(),
    ];

    $fields = [
        'fever', 'lethargy', 'malaise', 'anorexia', 'nausea', 'giddiness',
        'weightloss', 'weightgain', 'recenttravel', 'lossoftaste', 'lossofsmell',
    ];

    foreach ($fields as $field) {
        $value = $request->input($field);
        $historyData[$field] = $value === 'yes' ? true : ($value === 'no' ? false : null);
    }

    DB::table('patient_histories_1')->insert($historyData);

    $examinationData1 = [
        'patient_id' => $patientId, // Foreign key to link to the patient
        'clinically_anemic' => ($request->input('clinically_anemic') === 'yes'),
        'jaundiced' => ($request->input('jaundiced') === 'yes'),
        'pulse' => $request->input('pulse'),
        'sitting_bp_top' => $request->input('sitting_bp_top'),
        'sitting_bp_low' => $request->input('sitting_bp_low'),
        'standing_bp_top' => $request->input('standing_bp_top'),
        'standing_bp_low' => $request->input('standing_bp_low'),
        'lying_bp_top' => $request->input('lying_bp_top'),
        'lying_bp_low' => $request->input('lying_bp_low'),
        'temp' => $request->input('temp'),
        'temp_desc' => $request->input('temp_desc'),
        'resp_rate' => $request->input('resp_rate'),
        'weight_kg' => $request->input('weight_kg'),
        'height_cm' => $request->input('height_cm'),
        'bsl' => $request->input('bsl'),
        'bsl_desc' => $request->input('bsl_desc'),
        'waist_measurement_cm' => $request->input('waist_measurement_cm'),
        'hip_measurement_cm' => $request->input('hip_measurement_cm'),
        'bmi' => $request->input('bmi'),
        'o2_saturation_percent' => $request->input('o2_saturation_percent'),
        'created_at' => now(),
        'updated_at' => now(),
    ];

    DB::table('patient_exam_1')->insert($examinationData1);
           
    $cardioHistoryData = [
        'patient_id' => $patientId,
        'chest_pain' => ($request->input('chestpain') === 'yes'),
        'dyspnoea' => ($request->input('dyspnoea') === 'yes'),
        'orthopnoea' => ($request->input('orthopnoea') === 'yes'),
        'nocturnal_dyspnoea' => ($request->input('nocturnaldys') === 'yes'),
        'swollen_ankles' => ($request->input('swollenank') === 'yes'),
        'palpitations' => ($request->input('palpitation') === 'yes'),
        'claudication' => $request->input('claudication'), // Stores 'yes', 'no', 'both', or 'neither'
        'created_at' => now(),
        'updated_at' => now(),
    ];

    DB::table('patient_histories_2')->insert($cardioHistoryData);
   

    $examinationData2 = [
        'patient_id' => $patientId, // Foreign key to link to the patient
        'jpv' => $request->input('jpv'),
        'ankle_oedema' => $request->input('ankle_oedema'),
        'apex_beat' => $request->input('apex_beat'),
        'intercostal_space' => $request->input('intercostal_space'),
        'heart_sounds' => $request->input('heart_sounds'),
        'no_murmurs' => $request->has('no_murmurs'), // Checkbox: true if present, false otherwise
        'murmur_volume' => $request->input('murmur_volume'),
        'murmur_description' => $request->input('murmur_description'),
        'murmur_radiation' => $request->input('murmur_radiation'),
        'carotid_bruit' => $request->input('carotid_bruit'),
        'brachial_right' => $request->input('brachial_right'),
        'brachial_left' => $request->input('brachial_left'),
        'radial_right' => $request->input('radial_right'),
        'radial_left' => $request->input('radial_left'),
        'femoral_right' => $request->input('femoral_right'),
        'femoral_left' => $request->input('femoral_left'),
        'popliteal_right' => $request->input('popliteal_right'),
        'popliteal_left' => $request->input('popliteal_left'),
        'pt_right' => $request->input('pt_right'),
        'pt_left' => $request->input('pt_left'),
        'dp_right' => $request->input('dp_right'),
        'dp_left' => $request->input('dp_left'),
        'created_at' => now(),
        'updated_at' => now(),
    ];

    DB::table('patient_exam_2')->insert($examinationData2);
          

    $gastroHistoryData = [
        'patient_id' => $patientId, // Foreign key to link to the patient (assuming this table has it)
        'abdominal_pain' => ($request->input('abdominal_pain') === 'yes'),
        'nausea' => ($request->input('nausea') === 'yes'),
        'vomiting' => ($request->input('vomiting') === 'yes'),
        'heartburn' => ($request->input('heartburn') === 'yes'),
        'dysphagia' => ($request->input('dysphagia') === 'yes'),
        'anorexia' => ($request->input('anorexia') === 'yes'),
        'reflux' => ($request->input('reflux') === 'yes'),
        'haematemesis' => ($request->input('haematemesis') === 'yes'),
        'weight_loss' => ($request->input('weight_loss') === 'yes'),
        'diarrhoea' => ($request->input('diarrhoea') === 'yes'),
        'constipation' => ($request->input('constipation') === 'yes'),
        'changed_bowel_habit' => ($request->input('changed_bowel_habit') === 'yes'),
        'pr_bleeding' => ($request->input('pr_bleeding') === 'yes'),
        'created_at' => now(),
        'updated_at' => now(),
    ];

    DB::table('patient_histories_3')->insert($gastroHistoryData);


    $abdominalExaminationData = [
        'patient_id' => $patientId, // Foreign key to link to the patient (assuming this table has it)
        'no_tenderness' => $request->has('no_tenderness'),
        'no_masses' => $request->has('no_masses'),
        'tenderness_regions' => json_encode($request->input('tenderness_regions')), 
        'mass_regions' => json_encode($request->input('mass_regions')),          
        'guarding' => ($request->input('guarding') === 'yes'),
        'rigidity' => ($request->input('rigidity') === 'yes'),
        'rebound' => ($request->input('rebound') === 'yes'),
        'distension' => ($request->input('distension') === 'yes'),
        'hepatomegaly' => ($request->input('hepatomegaly') === 'yes'),
        'splenomegaly' => ($request->input('splenomegaly') === 'yes'),
        'bowel_sounds' => ($request->input('bowel_sounds') === 'yes'),
        'ascites' => ($request->input('ascites') === 'yes'),
        'pr_blood' => ($request->input('pr_blood') === 'yes'),
        'pr_mass' => ($request->input('pr_mass') === 'yes'),
        'pr_tenderness' => ($request->input('pr_tenderness') === 'yes'),
        'right_inguinal_hernia' => ($request->input('right_inguinal') === 'yes'),
        'left_inguinal_hernia' => ($request->input('left_inguinal') === 'yes'),
        'right_femoral_hernia' => ($request->input('right_femoral') === 'yes'),
        'left_femoral_hernia' => ($request->input('left_femoral') === 'yes'),
        'umbilical_hernia' => ($request->input('umbilical') === 'yes'),
        'incisional_hernia' => ($request->input('incisional') === 'yes'),
        'created_at' => now(),
        'updated_at' => now(),
    ];

    DB::table('patient_exam_3')->insert($abdominalExaminationData);


    $neuroHistoryData = [
        'patient_id' => $patientId, // Foreign key to link to the patient (assuming this table has it)
        'headache' => ($request->input('headache') === 'yes'),
        'neck_stiffness' => ($request->input('neck_stiffness') === 'yes'),
        'photophobia' => ($request->input('photophobia') === 'yes'),
        'hyperacusis' => ($request->input('hyperacusis') === 'yes'),
        'fits' => ($request->input('fits') === 'yes'),
        'faints' => ($request->input('faints') === 'yes'),
        'weakness' => ($request->input('weakness') === 'yes'),
        'numbness' => ($request->input('numbness') === 'yes'),
        'slurred_speech' => ($request->input('slurred_speech') === 'yes'),
        'incoordination' => ($request->input('incoordination') === 'yes'),
        'confusion' => ($request->input('confusion') === 'yes'),
        'disorientation' => ($request->input('disorientation') === 'yes'),
        'tremor' => ($request->input('tremor') === 'yes'),
        'created_at' => now(),
        'updated_at' => now(),
    ];

    DB::table('patient_histories_4')->insert($neuroHistoryData);
    
    
    $neuroExaminationData = [
        'patient_id' => $patientId, 
        'essential_tremor' => ($request->input('essential_tremor') === 'yes'),
        'intention_tremor' => ($request->input('intention_tremor') === 'yes'),
        'involuntary_movements' => ($request->input('involuntary_movements') === 'yes'),
        'cogwheel_rigidity' => ($request->input('cogwheel_rigidity') === 'yes'),

        'upper_facial_palsy_side' => $request->input('upper_facial_palsy'),
        'lower_facial_palsy_side' => $request->input('lower_facial_palsy'),
        'arm_weakness_side' => $request->input('arm_weakness'),
        'leg_weakness_side' => $request->input('leg_weakness'),
        'arm_numbness_side' => $request->input('arm_numbness'),
        'leg_numbness_side' => $request->input('leg_numbness'),
        'foot_drop_side' => $request->input('foot_drop'),

        'right_eye_ptosis' => ($request->input('right_ptosis') === 'yes'),
        'right_eye_eom' => $request->input('right_eom'),
        'right_eye_fields' => $request->input('right_fields'),
        'right_eye_pupils' => $request->input('right_pupils'),

        'left_eye_ptosis' => ($request->input('left_ptosis') === 'yes'),
        'left_eye_eom' => $request->input('left_eom'),
        'left_eye_fields' => $request->input('left_fields'),
        'left_eye_pupils' => $request->input('left_pupils'),
        'created_at' => now(),
        'updated_at' => now(),
    ];

    DB::table('patient_exam_4')->insert($neuroExaminationData);
   

    $genitoHistoryData = [
        'patient_id' => $patientId, 
        'dysuria' => ($request->input('dysuria') === 'yes'),
        'frequency' => ($request->input('frequency') === 'yes'),
        'nocturia' => ($request->input('nocturia') === 'yes'),
        'right_loin_pain' => ($request->input('right_loin_pain') === 'yes'),
        'left_loin_pain' => ($request->input('left_loin_pain') === 'yes'),
        'suprapubic_pain' => ($request->input('suprapubic_pain') === 'yes'),
        'haematuria' => ($request->input('haematuria') === 'yes'),
        'urgency' => ($request->input('urgency') === 'yes'),
        'stress_incontinence' => ($request->input('stress_incontinence') === 'yes'),
        'created_at' => now(),
        'updated_at' => now(),
    ];
    
    DB::table('patient_histories_5')->insert($genitoHistoryData);
    

    $urinalysisExaminationData = [
        'patient_id' => $patientId, 
        'loin_tenderness_right' => $request->input('loin_tenderness_right'),
        'loin_tenderness_left' => $request->input('loin_tenderness_left'),
        'loin_tenderness_neither' => $request->input('loin_tenderness_neither'),

        'blood' => $request->input('blood'),
        'protein' => $request->input('protein'),
        'glucose' => $request->input('glucose'),
        'bilirubin' => $request->input('bilirubin'),
        'leucocytes' => $request->input('leucocytes'),
        'nitrites' => $request->input('nitrites'),
        'ph' => $request->input('ph'),
        'ketones' => $request->input('ketones'),
        'sp_gravity' => $request->input('sp_gravity'),
        'urobilinogen' => $request->input('urobilinogen'),
        'created_at' => now(),
        'updated_at' => now(),
    ];

    DB::table('patient_exam_5')->insert($urinalysisExaminationData);
 
    
    $entHistoryData = [
        'patient_id' => $patientId, 
        'earache_sides' => $request->input('earache_sides'),
        'ear_discharge_sides' => $request->input('ear_discharge_sides'),
        'deafness_sides' => $request->input('deafness_sides'),

        // Radio button fields for 'yes'/'no' responses
        'rhinorrhoea' => ($request->input('rhinorrhoea') === 'yes'),
        'epistaxis' => ($request->input('epistaxis') === 'yes'),
        'nasal_congestion' => ($request->input('nasal_congestion') === 'yes'),
        'sore_throat' => ($request->input('sore_throat') === 'yes'),
        'hoarse_voice' => ($request->input('hoarse_voice') === 'yes'),
        'lost_voice' => ($request->input('lost_voice') === 'yes'),
        'facial_pain' => ($request->input('facial_pain') === 'yes'),
        'created_at' => now(),
        'updated_at' => now(),
    ];

    DB::table('patient_histories_6')->insert($entHistoryData);

    
    $entExaminationData = [
        'patient_id' => $patientId, 
        'drum_red_sides' => $request->input('drum_red_sides'),
        'ear_discharge_sides' => $request->input('ear_discharge_sides'),
        'perforation_sides' => $request->input('perforation_sides'),
        'glue_sides' => $request->input('glue_sides'),
        'canal_red_sides' => $request->input('canal_red_sides'),
        'wax_sides' => $request->input('wax_sides'),
        'fb_sides' => $request->input('fb_sides'),

        'red_throat' => ($request->input('redThroat') === 'yes'),
        'pus_on_tonsils_sides' => $request->input('pus_on_tonsils_sides'),
        'enlarged_tonsils_sides' => $request->input('enlarged_tonsils_sides'),

        'nose_discharge_sides' => $request->input('nose_discharge_sides'),
        'nasal_obstruction_sides' => $request->input('nasal_obstruction_sides'),
        'nose_redness_sides' => $request->input('nose_redness_sides'),
        'nasal_fb_sides' => $request->input('nasal_fb_sides'),

        // Mouth examination fields
        'mouth_lesion' => ($request->input('mouthLesion') === 'yes'),
        'mouth_lesion_description' => $request->input('mouthLesionDescription'),
        'created_at' => now(),
        'updated_at' => now(),
    ];

    DB::table('patient_exam_6')->insert($entExaminationData);

    
    $eyeExaminationData = [
        'patient_id' => $patientId, 
        'visual_deterioration_sides' => json_encode($request->input('visual_deterioration_sides')),
        'visual_loss_sides' => json_encode($request->input('visual_loss_sides')),
        'something_in_eye_sides' => json_encode($request->input('something_in_eye_sides')),
        'itchy_eye_sides' => json_encode($request->input('itchy_eye_sides')),
        'red_eye_sides' => json_encode($request->input('red_eye_sides')),
        'sore_eye_sides' => json_encode($request->input('sore_eye_sides')),
        'watering_eye_sides' => json_encode($request->input('watering_eye_sides')),
        'eye_discharge_sides' => json_encode($request->input('eye_discharge_sides')),

        // Radio button field for 'yes'/'no' response
        'double_vision' => ($request->input('doubleVision') === 'yes'),
        'created_at' => now(),
        'updated_at' => now(),
    ];

    DB::table('patient_histories_7')->insert($eyeExaminationData);

    
    $ophthalmologicalExaminationData = [
        'patient_id' => $patientId,
        'visual_acuity_without_glasses_right' => $request->input('acuityWithoutRight'),
        'visual_acuity_without_glasses_left' => $request->input('acuityWithoutLeft'),
        'visual_acuity_without_glasses_both' => $request->input('acuityWithoutBoth'),
        'visual_acuity_with_glasses_right' => $request->input('acuityWithRight'),
        'visual_acuity_with_glasses_left' => $request->input('acuityWithLeft'),
        'visual_acuity_with_glasses_both' => $request->input('acuityWithBoth'),
        'foreign_body_right' => $request->input('foreignBodyRight'),
        'foreign_body_left' => $request->input('foreignBodyLeft'),

        'redness_sides' => json_encode($request->input('redness_sides')),
        'discharge_sides' => json_encode($request->input('discharge_sides')),
        'swelling_sides' => json_encode($request->input('swelling_sides')),
        'ulcer_sides' => json_encode($request->input('ulcer_sides')),
        'pterygium_sides' => json_encode($request->input('pterygium_sides')),
        'ingrowing_lashes_sides' => json_encode($request->input('ingrowing_lashes_sides')),
        'ectropion_sides' => json_encode($request->input('ectropion_sides')),
        'entropion_sides' => json_encode($request->input('entropion_sides')),
        'hyphaema_sides' => json_encode($request->input('hyphaema_sides')),
        'cataract_sides' => json_encode($request->input('cataract_sides')),
        'papilloedema_sides' => json_encode($request->input('papilloedema_sides')),

        'colour_vision' => $request->input('colourVision'),

        'retinopathy_right' => $request->input('retinopathyRight'),
        'retinopathy_left' => $request->input('retinopathyLeft'),
        'created_at' => now(),
        'updated_at' => now(),
    ];

    DB::table('patient_exam_7')->insert($ophthalmologicalExaminationData);
     

    $skinHistoryData = [
        'patient_id' => $patientId, 
        'rash' => ($request->input('rash') === 'yes'),
        'itch' => ($request->input('itch') === 'yes'),
        'lesion' => ($request->input('lesion') === 'yes'),
        'created_at' => now(),
        'updated_at' => now(),
    ];
    
    DB::table('patient_histories_8')->insert($skinHistoryData);

       
    $skinExaminationData = [
        'patient_id' => $patientId, // Foreign key to link to the patient (assuming this table has it)
        'lesion_description' => $request->input('lesionDescription'),
        'skin_issues' => $request->input('skin-issues'),
        'rash_description' => $request->input('rashDescription'),

        'distribution_areas' => json_encode($request->input('distribution_areas')),
        'distribution_other' => $request->input('distributionOther'),
        'created_at' => now(),
        'updated_at' => now(),
    ];

    DB::table('patient_exam_8')->insert($skinExaminationData);
    
         
    $musculoskeletalHistoryData = [
        'patient_id' => $patientId, 
        'neck_pain' => ($request->input('neckPain') === 'yes'),
        'back_pain' => ($request->input('backPain') === 'yes'),
        'injury' => ($request->input('injury') === 'yes'),

        'shoulder_pain_sides' => json_encode($request->input('shoulderPain')),
        'hip_pain_sides' => json_encode($request->input('hipPain')),
        'elbow_pain_sides' => json_encode($request->input('elbowPain')),
        'knee_pain_sides' => json_encode($request->input('kneePain')),
        'wrist_pain_sides' => json_encode($request->input('wristPain')),
        'ankle_pain_sides' => json_encode($request->input('anklePain')),
        'hand_pain_sides' => json_encode($request->input('handPain')),
        'foot_pain_sides' => json_encode($request->input('footPain')),
        'finger_pain_sides' => json_encode($request->input('fingerPain')),
        'toe_pain_sides' => json_encode($request->input('toePain')),
        'created_at' => now(),
        'updated_at' => now(),
    ];

    DB::table('patient_histories_9')->insert($musculoskeletalHistoryData);

    $musculoskeletalExaminationData = [
        'patient_id' => $patientId, 
        'joints_description' => $request->input('jointsDescription'),
        'created_at' => now(),
        'updated_at' => now(),
    ];

    DB::table('patient_exam_9')->insert($musculoskeletalExaminationData);
  
    $gynaecoHistoryData = [
        'patient_id' => $patientId, 
        'pv_bleeding' => ($request->input('pvBleeding') === 'yes'),
        'pv_discharge' => ($request->input('pvDischarge') === 'yes'),
        'amenorrhoea' => ($request->input('amenorrhoea') === 'yes'),
        'dysmenorrhoea' => ($request->input('dysmenorrhoea') === 'yes'),
        'vulval_itch' => ($request->input('vulvalItch') === 'yes'),
        'intermenstrual_bleeding' => ($request->input('intermenstrualBleeding') === 'yes'),
        'post_coital_bleeding' => ($request->input('postCoitalBleeding') === 'yes'),
        'post_menopausal_bleeding' => ($request->input('postMenopausalBleeding') === 'yes'),
        'dyspareunia' => ($request->input('dyspareunia') === 'yes'),
        'unprotected_intercourse' => ($request->input('unprotectedIntercourse') === 'yes'),
        'heavy_periods' => ($request->input('heavyPeriods') === 'yes'),
        'irregular_periods' => ($request->input('irregularPeriods') === 'yes'),
        'pregnancy_test_positive' => ($request->input('pregnancyTestPositive') === 'yes'),
        'lmp' => $request->input('lmp'),
        'last_cervical_screening' => $request->input('lastCervicalScreening'),
        'created_at' => now(),
        'updated_at' => now(),
    ];

    DB::table('patient_histories_10')->insert($gynaecoHistoryData);
       

    $gynaecologicalExaminationData = [
        'patient_id' => $patientId, 
        'vaginal_discharge' => ($request->input('vaginalDischarge') === 'yes'),
        'cst_performed' => ($request->input('cstPerformed') === 'yes'),
        'cervix_suspicious' => ($request->input('cervixSuspicious') === 'yes'),
        'cervical_ectopy' => ($request->input('cervicalEctopy') === 'yes'),
        'cervical_polyp' => ($request->input('cervicalPolyp') === 'yes'),
        'cystocele' => ($request->input('cystocele') === 'yes'),
        'rectocele' => ($request->input('rectocele') === 'yes'),
        'bulky_uterus' => ($request->input('bulkyUterus') === 'yes'),
        'retroverted_uterus' => ($request->input('retrovertedUterus') === 'yes'),

        'forniceal_tenderness_sides' => json_encode($request->input('fornicealTenderness')),
        'forniceal_mass_sides' => json_encode($request->input('fornicealMass')),
        'created_at' => now(),
        'updated_at' => now(),
    ];

    DB::table('patient_exam_10')->insert($gynaecologicalExaminationData);
     

    $breastExaminationData = [
        'patient_id' => $patientId, 
        'breast_lump_sides' => json_encode($request->input('breastLump')),
        'breast_pain_sides' => json_encode($request->input('breastPain')),
        'breast_swelling_sides' => json_encode($request->input('breastSwelling')),
        'nipple_discharge_sides' => json_encode($request->input('nipple_discharge_sides')),
        'bleeding_from_nipple_sides' => json_encode($request->input('bleedingFromNipple')),
        'created_at' => now(),
        'updated_at' => now(),
    ];
    DB::table('patient_histories_11')->insert($breastExaminationData);

    
    $breastExaminationDetailData = [
        'patient_id' => $patientId, 
        'no_lumps_right_breast' => $request->has('no_lumps_right_breast'),
        'no_lumps_left_breast' => $request->has('no_lumps_left_breast'),

        // Textarea for lumps description
        'lumps_description' => $request->input('lumpsDescription'),

        'redness_sides' => json_encode($request->input('redness_sides')),
        'swelling_sides' => json_encode($request->input('swelling_sides')),
        'heat_sides' => json_encode($request->input('heat_sides')),
        'discharge_sides' => json_encode($request->input('nippleDischarge')),
        'blood_sides' => json_encode($request->input('bloodNipple')),
        'tethering_sides' => json_encode($request->input('tethering')),
        'nipple_inversion_sides' => json_encode($request->input('nippleInversion')),
        'peau_d_orange_sides' => json_encode($request->input('peauDOrange')),
        'axillary_nodes_sides' => json_encode($request->input('axillaryNodes')),
        'created_at' => now(),
        'updated_at' => now(),
    ];

    DB::table('patient_exam_11')->insert($breastExaminationDetailData);



    $mentalHealthHistoryData = [
        'patient_id' => $patientId, // Foreign key to link to the patient (assuming this table has it)
        'poor_sleep' => ($request->input('poorSleep') === 'yes'),
        'early_wakening' => ($request->input('earlyWakening') === 'yes'),
        'irritability' => ($request->input('irritability') === 'yes'),
        'depressed_mood' => ($request->input('depressedMood') === 'yes'),
        'work_stress' => ($request->input('workStress') === 'yes'),
        'financial_stress' => ($request->input('financialStress') === 'yes'),
        'relationship_problems' => ($request->input('relationshipProblems') === 'yes'),
        'recent_bereavement' => ($request->input('recentBereavement') === 'yes'),
        'irrational_fear' => ($request->input('irrationalFear') === 'yes'),
        'panic_attacks' => ($request->input('panicAttacks') === 'yes'),
        'compulsive_behaviour' => ($request->input('compulsiveBehaviour') === 'yes'),
        'delusions' => ($request->input('delusions') === 'yes'),
        'auditory_hallucinations' => ($request->input('auditoryHallucinations') === 'yes'),
        'visual_hallucinations' => ($request->input('visualHallucinations') === 'yes'),
        'suicidal_thoughts' => ($request->input('suicidalThoughts') === 'yes'),
        'suicide_attempts' => ($request->input('suicideAttempts') === 'yes'),
        'low_self_esteem' => ($request->input('lowSelfEsteem') === 'yes'),
        'substance_abuse' => ($request->input('substanceAbuse') === 'yes'),
        'anxious_feelings' => ($request->input('anxiousFeelings') === 'yes'),
        'created_at' => now(),
        'updated_at' => now(),
    ];

    DB::table('patient_exam_12')->insert($mentalHealthHistoryData);

    $adlData = [
        'patient_id' => $patientId, 
        'dressing' => $request->input('dressing'),
        'personal_hygiene' => $request->input('hygiene'),
        'bathing' => $request->input('bathing'),
        'eating' => $request->input('eating'),
        'toileting' => $request->input('toileting'),
        'housework' => $request->input('housework'),
        'phone_use' => $request->input('phone'),
        'managing_finances' => $request->input('finances'),
        'shopping' => $request->input('shopping'),
        'transport' => $request->input('transport'),
        'meal_preparation' => $request->input('mealprep'),
        'social_contact' => $request->input('social'),
        'reading' => $request->input('reading'),
        'watching_tv' => $request->input('tv'),
        'listening_to_radio' => $request->input('radio'),
        'home_maintenance' => $request->input('homemaintenance'),
        'home_safety' => $request->input('homesafety'),
        'driving' => $request->input('driving'),
        'created_at' => now(),
        'updated_at' => now(),
    ];

    DB::table('patient_exam_13')->insert($adlData);
    

    $generalHistoryData = [
        'patient_id' => $patientId, // Foreign key to link to the patient (assuming this table has it)
        // Mobility fields
        'mobility' => $request->input('mobility'),
        'uses_aid' => $request->input('usesAid'),

        // Nutrition, Exercise, Sleep, Continence fields (boolean)
        'adequate_nutrition' => ($request->input('nutrition') === 'yes'),
        'adequate_exercise' => ($request->input('exercise') === 'yes'),
        'adequate_sleep' => ($request->input('sleep') === 'yes'),
        'continent_of_urine' => ($request->input('urine') === 'yes'),
        'continent_of_faeces' => ($request->input('faeces') === 'yes'),

        // Hearing fields
        'hearing' => $request->input('hearing'),
        'hearing_aid' => $request->input('hearingAid'),

        // Vision fields
        'vision' => $request->input('vision'),
        'glasses' => $request->input('glasses'),

        // Teeth fields
        'teeth' => $request->input('teeth'),
        'dentures' => $request->input('dentures'),

        // Cognitive and Mental Health fields
        'cognitive_impairment' => ($request->input('cognitive') === 'yes'),
        'mental_state_exam' => $request->input('mentalStateExam'),
        'depression' => ($request->input('depression') === 'yes'),
        'depression_score' => $request->input('depressionScore'),

        // Other history fields
        'has_had_a_fall' => ($request->input('fall') === 'yes'),
        'attended_other_doctor' => ($request->input('doctor') === 'yes'),
        'medications_prescribed' => ($request->input('medications') === 'yes'),
        'created_at' => now(),
        'updated_at' => now(),
    ];

    DB::table('patient_exam_14')->insert($generalHistoryData);
       
        
    $dataDrinkingBud = [
        'patient_id' => $patientId,
        'non_drinker' => $request->has('non_drinker'), // Check if checkbox is present
        'current_days_per_week' => $request->input('current_days_per_week'),
        'current_standard_drinks_per_day' => $request->input('current_standard_drinks_per_day'),
        'current_description' => $request->input('current_description'),
        'past_alcohol_intake_level' => $request->input('past_alcohol_intake_level'),
        'past_year_started' => $request->input('past_year_started'),
        'past_year_stopped' => $request->input('past_year_stopped'),
        'past_comment' => $request->input('past_comment'),
        'cage_questions_score' => $request->input('cage_questions_score'),
        'standard_drinks_total' => $request->input('standard_drinks_total'),
        'audit_c_score' => $request->input('audit_c_score'),
        'created_at' => now(), 
        'updated_at' => now(),
    ];

    // Insert data into the 'alcohol_intake_histories' table
    DB::table('patient_exam_15')->insert($dataDrinkingBud);

   
    $telelastly = [
        'patient_id' => $patientId,
        'marital_status' => $request->input('maritalStatus'),
        'sexuality' => $request->input('sexuality'),
        'elite_athlete' => ($request->input('eliteAthlete') === 'yes'), 
        'advance_health_directive' => $request->input('advanceHealthDirective'),
        'enduring_power_of_attorney' => $request->input('enduringPowerOfAttorney'),
        'on_screen_comment' => $request->input('onScreenComment'),
        'recreational_activities' => $request->input('recreationalActivities'),
        'accommodation' => $request->input('accommodation'),
        'lives_with' => $request->input('livesWith'),
        'has_carer' => $request->input('hasCarer'),
        'carer_details' => $request->input('carerDetails'),
        'is_carer' => $request->input('isCarer'),
        'safe_home' => ($request->input('safeHome') === 'yes'),
        'other_social_history' => $request->input('otherSocialHistory'),
        'created_at' => now(), 
        'updated_at' => now(), 
    ];

    DB::table('patient_exam_16')->insert($telelastly);

    return redirect()->back()->with('success', 'Patient history saved.');
    }
}
