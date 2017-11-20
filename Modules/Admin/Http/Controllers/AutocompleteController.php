<?php
/**
 * Created by PhpStorm.
 * User: Eng.Mohammad
 * Date: 10/22/2017
 * Time: 9:15 PM
 */

namespace Modules\Admin\Http\Controllers;


use App\Http\Controllers\Controller;
use App\User;
use App\UserType;
use Illuminate\Http\Request;
use Modules\General\Entities\Category;
use Modules\General\Entities\City;
use Modules\General\Entities\Country;
use Modules\General\Entities\Course;
use Modules\General\Entities\Differentiation;
use Modules\General\Entities\Faculty;
use Modules\General\Entities\FacultyUniversity;
use Modules\General\Entities\Gender;
use Modules\General\Entities\MenuItem;
use Modules\General\Entities\Semester;
use Modules\General\Entities\State;
use Modules\General\Entities\StudyYear;
use Modules\General\Entities\University;

class AutocompleteController extends Controller
{
    public function categoryAutocomplete(Request $request)
    {
        $q = str_replace(' ', '%', $request->get('q', ''));
        $data = Category::whereRaw('upper(name_' . $this->lang . ') like upper(\'%' . $request->get('q', '') . '%\')')
            ->get(['name_' . $this->lang . ' as name', 'category_id as id']);
        return ['items' => $data];
    }

    public function genderAutocomplete(Request $request)
    {
        $q = str_replace(' ', '%', $request->get('q', ''));
        $data = Gender::whereRaw('upper(name_' . $this->lang . ') like upper(\'%' . $q . '%\')')
            ->get(['name_' . $this->lang . ' as name', 'gender_id as id']);
        return ['items' => $data];
    }

    public function semesterAutocomplete(Request $request)
    {
        $q = str_replace(' ', '%', $request->get('q', ''));
        $data = Semester::whereRaw('upper(name_' . $this->lang . ') like upper(\'%' . $q . '%\')')
            ->get(['name_' . $this->lang . ' as name', 'semester_id as id']);
        return ['items' => $data];
    }

    public function faculty1Autocomplete(Request $request)
    {
        $faculty=[];
        $data = FacultyUniversity::select(['faculties.name_'.$this->lang.' as f_name_en','universities.name_'.$this->lang.' as u_name_en','faculty_universities.total_required','faculty_universities.id as id'])
            ->leftJoin('faculties','faculties.faculty_id','=','faculty_universities.faculty_id')
            ->leftJoin('universities','universities.university_id','=','faculty_universities.university_id')
            ->where('faculty_universities.id','>=',1)
            ->get();
        for ($i=0;$i<count($data);$i++){
            $faculty[$i]=['name'=>$data[$i]['f_name_en'].'-'.$data[$i]['u_name_en'].'     '.$data[$i]['total_required'],'id'=>$data[$i]['id']];
        }
//        dd($faculty);
        return ['items'=>$faculty];
    }

    public function facultyAutocomplete(Request $request)
    {
        $q = str_replace(' ', '%', $request->get('q', ''));
        $data = Faculty::whereRaw('upper(name_' . $this->lang . ') like upper(\'%' . $q . '%\')')
            ->get(['name_' . $this->lang . ' as name', 'faculty_id as id']);
        return ['items' => $data];
    }

    public function universityAutocomplete(Request $request)
    {
        $q = str_replace(' ', '%', $request->get('q', ''));
        $data = University::whereRaw('upper(name_' . $this->lang . ') like upper(\'%' . $q . '%\')')
            ->get(['name_' . $this->lang . ' as name', 'university_id as id']);
        return ['items' => $data];
    }

    public function usertypeAutocomplete(Request $request)
    {
        $q = str_replace(' ', '%', $request->get('q', ''));
        $data = UserType::whereRaw('upper(name_' . $this->lang . ') like upper(\'%' . $q . '%\')')
            ->get(['name_' . $this->lang . ' as name', 'user_type_id as id']);
        return ['items' => $data];
    }

    public function studyyearAutocomplete(Request $request)
    {
        $q = str_replace(' ', '%', $request->get('q', ''));
        $data = StudyYear::whereRaw('upper(name_' . $this->lang . ') like upper(\'%' . $q . '%\')')
            ->get(['name_' . $this->lang . ' as name', 'study_year_id as id']);
        return ['items' => $data];
    }

    public function differenationAutocomplete(Request $request)
    {
        $q = str_replace(' ', '%', $request->get('q', ''));
        $data = Differentiation::whereRaw('upper(name_' . $this->lang . ') like upper(\'%' . $q . '%\')')
            ->get(['name_' . $this->lang . ' as name', 'differentiation_id as id']);
        return ['items' => $data];
    }

    public function courseAutocomplete(Request $request)
    {
        $q = str_replace(' ', '%', $request->get('q', ''));
        $data = Course::whereRaw('upper(name_' . $this->lang . ') like upper(\'%' . $q . '%\')')
            ->get(['name_' . $this->lang . ' as name', 'course_id as id']);
        return ['items' => $data];
    }

    public function menuItemAutocomplet(Request $request)
    {
        $q = str_replace(' ', '%', $request->get('q', ''));
        $data = MenuItem::whereRaw('upper(name_' . $this->lang . ') like upper(\'%' . $q . '%\')')->where('is_root', '=', 'Y')
            ->get(['name_' . $this->lang . ' as name', 'menu_item_id as id']);
        return ['items' => $data];
    }

    public function userAutocomplete(Request $request)
    {
        $q = str_replace(' ', '%', $request->get('q', ''));
        $data = User::whereRaw('upper(name) like upper(\'%' . $q . '%\')')
            ->get(['name as name', 'id as id']);
        return ['items' => $data];
    }

    public function countryAutocomplete(Request $request)
    {
        $q = str_replace(' ', '%', $request->get('q', ''));
        $data = Country::whereRaw('upper(name_' . $this->lang . ') like upper(\'%' . $q . '%\')')->where('supported', 'like', 'Y')
            ->get(['name_' . $this->lang . ' as name', 'country_id as id']);
        return ['items' => $data];
    }

    public function stateAutocomplete(Request $request)
    {
        $q = str_replace(' ', '%', $request->get('q', ''));
        $data = State::whereRaw('upper(name_' . $this->lang . ') like upper(\'%' . $q . '%\')');
        if ($request->get('country_id', "null") != "null") $data->where('country_id', $request->get('country_id'));
        return ['items' => $data->get(['name_' . $this->lang . ' as name', 'state_id as id'])];
    }

    public function cityAutocomplete(Request $request)
    {
        $q = str_replace(' ', '%', $request->get('q', ''));
        $data = City::whereRaw('upper(cities.name_' . $this->lang . ') like upper(\'%' . $q . '%\')');
        if ($request->get('cities.state_id', "null") != "null") {
            $data->where('cities.state_id', $request->get('state_id'));
        }
        if (\Request::exists('withCountry')) {
            $data->leftJoin('states', 'cities.state_id', '=', 'states.state_id');
            $data->leftJoin('countries', 'countries.country_id', '=', 'states.country_id');
            return ['items' => $data->get([\DB::raw('concat(cities.name_' . $this->lang . ',\', \',countries.name_' . $this->lang . ') as name'), 'cities.city_id as id'])];
        }
        return ['items' => $data->get(['name_' . $this->lang . ' as name', 'city_id as id'])];
    }

}