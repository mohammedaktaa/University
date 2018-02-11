<?php

namespace App\Http\Factory;

use App\User;
use Aut\DataTable\DataTableBuilder;
use Aut\DataTable\Http\Maker\BaseDataTableMaker;

use DB;

class DatatableMaker extends BaseDataTableMaker
{
    // use CustomDatatableMaker;

    protected $table;
    protected $yesNo;
    protected $update;
    protected $delete;
    protected $add;
    protected $userType;

    public function __construct(DataTableBuilder $table)
    {
        $this->table = $table;
        $this->update = trans('app.update');
        $this->delete = trans('app.delete');
        $this->add = trans('app.add');
        $this->yesNo = [
            'Y' => trans('admin::main.yes'),
            'N' => trans('admin::main.no')
        ];
        $this->userType=$this->user_type;
    }

    /**
     * --------------------------------------
     *             Users Table
     * --------------------------------------
     */
    public function get_admins_table($model, $request)
    {
        $query = $model::where('user_type_id',$model::Proffessor_ID)->with(['user_type', 'faculty','study_year','gender'])->get();

        return $this->table
            ->queryConfig('admins')
            ->queryDatatable($query)
            ->queryCustomButton('courses_info', 'id', 'icon-book', '', " onClick='open_courses_modal($(this))' href='javascript:void(0);'")
            ->queryCustomButton('file_user', 'id', 'fa fa-file-pdf-o', 'upload-doc', " onClick='open_file_upload()' href='javascript:void(0);'")
            ->queryUpdateButton('id')
            ->queryDeleteButton('id')
            ->queryRender(true);
    }

    public function build_admins_table($model, $request)
    {
        return $this->table
            ->config('admins'/*'',['withTab'=>true,'dialogWidth'=>'300px','scrollX'=>true]*/)
            ->addHiddenInput('id', 'id', '', true)
//            ->startTab('Moh','fa fa-book')
            ->addInputText(trans('app.name'), 'name', 'name', ' required req')
            ->addInputText(trans('app.email'), 'email', 'email', 'none required req')
//            ->endTab()
            ->addInputText(trans('app.phone'), 'phone', 'phone', ' required req')
            ->addInputText(trans('app.mobile'), 'mobile', 'mobile', 'none required req')
            ->addInputText(trans('app.address'), 'address', 'address', 'none required req')
            ->addInputText(trans('app.father_name'), 'father_name', 'father_name', 'none required req')
            ->addInputText(trans('app.mother_name'), 'mother_name', 'mother_name', 'none required req')
            ->addInputText(trans('profile.birth_date'), 'birth_date', 'birth_date', 'none required req d:datepicker')
            ->addInputText(trans('profile.register_date'), 'register_date', 'register_date', 'none required req d:datepicker')
            ->addInputText(trans('app.national_number'), 'national_number', 'national_number', 'none required req')
            ->addInputText(trans('app.total_baccalaureate'), 'total_baccalaureate', 'total_baccalaureate', 'none required req')
            ->addAutocomplete('admin/user-type-autocomplete', trans('app.type'), 'user_type_id', 'user_type.name_' . \App::getLocale(), 'user_type.name_' . \App::getLocale(), 'req required')
            ->addAutocomplete('admin/faculty-autocomplete', trans('app.faculty'), 'faculty_id', 'faculty.name_' . \App::getLocale(), 'faculty.name_' . \App::getLocale(), 'none req required')
            ->addAutocomplete('admin/gender-autocomplete', trans('profile.gender'), 'gender_id', 'gender.name_' . \App::getLocale(), 'gender.name_' . \App::getLocale(), 'none req required')
            ->addAutocomplete('admin/study-year-autocomplete', trans('app.study_year'), 'study_year_id', 'study_year.name_' . \App::getLocale(), 'study_year.name_' . \App::getLocale(), 'req required')
            ->addInputText(trans('app.university_id'), 'university_id', 'university_id', ' required req')
            ->addActionButton(trans('admin::menu.courses'), 'courses_info', 'courses_info')
            ->addActionButton(trans('admin::menu.file_user'), 'file_user', 'file_user')
            ->addActionButton($this->update, 'update', 'update')
            ->addActionButton($this->delete, 'delete', 'delete')
            ->addNavButton()
            ->onModalOpen('_datePicker($(modal))')
            ->render();
    }

    /* --------------------------------------------------
      *             Students Table
      * -------------------------------------------------
      */
    public function get_students_table($model, $request)
    {
        $query = $model::where('user_type_id', $model::Student_ID)->with(['user_type','study_year']);

        return $this->table
            ->queryConfig('students')
            ->queryDatatable($query)
            ->queryUpdateButton('id')
            ->queryDeleteButton('id')
            ->queryRender(true);
    }

    public function build_students_table($model, $request)
    {
        return $this->table
            ->config('students')
            ->addHiddenInput('id', 'id', '', true)
            ->addInputText(trans('app.name'), 'name', 'name', ' required req')
            ->addInputText(trans('app.email'), 'email', 'email', 'none required req')
            ->addAutocomplete('admin/study-year-autocomplete', trans('app.study_year'), 'study_year_id', 'study_year.name_' . \App::getLocale(), 'study_year.name_' . \App::getLocale(), 'req required')
            ->addInputText(trans('app.university_id'), 'university_id', 'university_id', ' required req')
            ->addInputText(trans('profile.register_date'), 'register_date', 'register_date', 'none required req d:datepicker')
            ->addActionButton($this->update, 'update', 'update')
            ->addActionButton($this->delete, 'delete', 'delete')
            ->addNavButton()
             ->onModalOpen('_datePicker($(modal))')
            ->render();
    }

    /* --------------------------------------------------
      *             Teachers Table
      * -------------------------------------------------
      */
    public function get_teachers_table($model, $request)
    {
        $query = $model::where('user_type_id', $model::Teacher_ID)->with('user_type');

        return $this->table
            ->queryConfig('teachers')
            ->queryDatatable($query)
            ->queryUpdateButton('id')
            ->queryDeleteButton('id')
            ->queryRender(true);
    }

    public function build_teachers_table($model, $request)
    {
        return $this->table
            ->config('teachers')
            ->addHiddenInput('id', 'id', '', true)
            ->addInputText(trans('app.name'), 'name', 'name', ' required req')
            ->addInputText(trans('app.email'), 'email', 'email', 'none required req')
            ->addInputText(trans('app.university_id'), 'university_id', 'university_id', ' required req')
            ->addActionButton($this->update, 'update', 'update')
            ->addActionButton($this->delete, 'delete', 'delete')
            ->addNavButton()
            ->render();
    }

    /* --------------------------------------------------
      *             Users Types Table
      * -------------------------------------------------
      */
    public function get_users_types_table($model, $request)
    {
        $query = $model::all();

        return $this->table
            ->queryConfig('users_types')
            ->queryDatatable($query)
            ->queryUpdateButton('user_type_id')
            ->queryDeleteButton('user_type_id')
            ->queryRender(true);
    }

    public function build_users_types_table($model, $request)
    {
        return $this->table
            ->config('users_types')
            ->addHiddenInput('user_type_id', 'user_type_id', '', true)
            ->addInputText(trans('app.full_name') . ' ' . trans('app.en'), 'name_en', 'name_en', 'en required req')
            ->addInputText(trans('app.full_name') . ' ' . trans('app.ar'), 'name_ar', 'name_ar', 'ar required req')
            ->addInputText('Code', 'code', 'code', ' required req')
            ->addActionButton($this->update, 'update', 'update')
            ->addActionButton($this->delete, 'delete', 'delete')
            ->addNavButton()
            ->render();
    }
    /* --------------------------------------------------
      *             Faculties Table
      * -------------------------------------------------
      */
    public function get_faculties_table($model, $request)
    {
        $query = $model::all();

        return $this->table
            ->queryConfig('faculties')
            ->queryDatatable($query)
            ->queryUpdateButton('faculty_id')
            ->queryDeleteButton('faculty_id')
            ->queryRender(true);
    }

    public function build_faculties_table($model, $request)
    {
        return $this->table
            ->config('faculties')
            ->addHiddenInput('faculty_id', 'faculty_id', '', true)
            ->addInputText(trans('app.full_name') . ' ' . trans('app.en'), 'name_en', 'name_en', 'en required req')
            ->addInputText(trans('app.full_name') . ' ' . trans('app.ar'), 'name_ar', 'name_ar', 'ar required req')
            ->addActionButton($this->update, 'update', 'update')
            ->addActionButton($this->delete, 'delete', 'delete')
            ->addNavButton()
            ->render();
    }

    /* --------------------------------------------------
      *             Study Years Table
      * -------------------------------------------------
      */
    public function get_study_years_table($model, $request)
    {
        $query = $model::all();

        return $this->table
            ->queryConfig('study_years')
            ->queryDatatable($query)
            ->queryUpdateButton('study_year_id')
            ->queryDeleteButton('study_year_id')
            ->queryRender(true);
    }

    public function build_study_years_table($model, $request)
    {
        return $this->table
            ->config('study_years')
            ->addHiddenInput('study_year_id', 'study_year_id', '', true)
            ->addInputText(trans('app.full_name') . ' ' . trans('app.en'), 'name_en', 'name_en', 'en required req')
            ->addInputText(trans('app.full_name') . ' ' . trans('app.ar'), 'name_ar', 'name_ar', 'ar required req')
            ->addActionButton($this->update, 'update', 'update')
            ->addActionButton($this->delete, 'delete', 'delete')
            ->addNavButton()
            ->render();
    }

    /* --------------------------------------------------
      *             Faculties Universities Table
      * -------------------------------------------------
      */
    public function get_faculties_universities_table($model, $request)
    {
        if(request()->get('university_id'))
        $query = $model::where('university_id',request()->get('university_id'))->with(['faculty', 'university']);
        else
        $query = $model::with(['faculty', 'university']);

        return $this->table
            ->queryConfig('faculties_universities')
            ->queryDatatable($query)
            ->queryUpdateButton('id')
            ->queryDeleteButton('id')
            ->queryRender(true);
    }

    public function build_faculties_universities_table($model, $request)
    {
        $table= $this->table
            ->config('faculties_universities')
            ->addHiddenInput('id', 'id', '', true);
        if(request()->get('university_id')) {
            $table/*->addViewField(trans('app.university'), 'university.name_' . \App::getLocale(), 'university.name_' . \App::getLocale())
                */->addHiddenInput('university_id','university_id',request()->get('university_id'),false,true);
        }
        else
            $table->addAutocomplete('admin/university-autocomplete', trans('app.university'), 'university_id', 'university.name_' . \App::getLocale(), 'university.name_' . \App::getLocale(), 'req required');
            $table->addAutocomplete('admin/faculty-autocomplete', trans('app.faculty'), 'faculty_id', 'faculty.name_' . \App::getLocale(), 'faculty.name_' . \App::getLocale(), 'req required')
            ->addInputText(trans('app.total_required'),'total_required','total_required','req required')
            ->addActionButton($this->update, 'update', 'update')
            ->addActionButton($this->delete, 'delete', 'delete')
            ->addNavButton();
            return  $table->render();
    }

    /* --------------------------------------------------
      *             Differenation Universities Table
      * -------------------------------------------------
      */
    public function get_differenation_universities_table($model, $request)
    {
        if(request()->get('differentiation_id'))
        $query = $model::where('differentiation_id',request()->get('differentiation_id'))->with(['differenation', 'university']);
        else
        $query = $model::with(['differenation', 'university']);
//dd($query->get());
        return $this->table
            ->queryConfig('differenation_universities')
            ->queryDatatable($query)
            ->queryCustomButton('acceptance','university_id','icon-book3','',"onClick='open_faculties_modal($(this))' href='javascript:void(0);' ")
            ->queryUpdateButton('id')
            ->queryDeleteButton('id')
            ->queryRender(true);
    }

    public function build_differenation_universities_table($model, $request)
    {
        $table= $this->table
            ->config('differenation_universities')
            ->addHiddenInput('id', 'id', '', true);
        if(request()->get('differentiation_id')) {
            $table/*->addViewField(trans('app.university'), 'university.name_' . \App::getLocale(), 'university.name_' . \App::getLocale())
                */->addHiddenInput('differentiation_id','differentiation_id',request()->get('differentiation_id'),false,true);
        }
        else
            $table->addAutocomplete('admin/differenation-autocomplete', trans('app.differentiation'), 'differentiation_id', 'differenation.name_' . \App::getLocale(), 'differenation.name_' . \App::getLocale(), 'req required');
            $table->addAutocomplete('admin/university-autocomplete', trans('app.university'), 'university_id', 'university.name_' . \App::getLocale(), 'university.name_' . \App::getLocale(), 'req required')
            ->addActionButton(trans('admin::menu.faculties'),'acceptance','acceptance')
            ->addActionButton($this->update, 'update', 'update')
            ->addActionButton($this->delete, 'delete', 'delete')
            ->addNavButton();
            return  $table->render();
    }

    /* --------------------------------------------------
  *             Universities Table
  * -------------------------------------------------
  */
    public function get_universities_table($model, $request)
    {
        $query = $model::with('state');

        return $this->table
            ->queryConfig('universities')
            ->queryDatatable($query)
            ->queryUpdateButton('university_id')
            ->queryDeleteButton('university_id')
            ->queryCustomButton('acceptance','university_id','icon-book3','',"onClick='open_faculties_modal($(this))' href='javascript:void(0);' ")
            ->queryRender(true);
    }

    public function build_universities_table($model, $request)
    {
        return $this->table
            ->config('universities')
            ->addHiddenInput('university_id', 'university_id', '', true)
            ->addInputText(trans('app.full_name') . ' ' . trans('app.en'), 'name_en', 'name_en', 'en required req')
            ->addInputText(trans('app.full_name') . ' ' . trans('app.ar'), 'name_ar', 'name_ar', 'ar required req')
            ->addAutocomplete('admin/state-autocomplete', trans('app.state'), 'state_id', 'state.name_' . \App::getLocale(), 'state.name_' . \App::getLocale(), 'req required')
            ->addActionButton(trans('admin::menu.faculties'),'acceptance','acceptance')
            ->addActionButton($this->update, 'update', 'update')
            ->addActionButton($this->delete, 'delete', 'delete')
            ->addNavButton()
            ->render();
    }

    /* --------------------------------------------------
  *             Categories Table
  * -------------------------------------------------
  */
    public function get_categories_table($model, $request)
    {
        $query = $model::all();

        return $this->table
            ->queryConfig('categories')
            ->queryDatatable($query)
            ->queryUpdateButton('category_id')
            ->queryDeleteButton('category_id')
            ->queryRender(true);
    }

    public function build_categories_table($model, $request)
    {
        return $this->table
            ->config('categories')
            ->addHiddenInput('category_id', 'category_id', '', true)
            ->addInputText(trans('app.full_name') . ' ' . trans('app.en'), 'name_en', 'name_en', 'en required req')
            ->addInputText(trans('app.full_name') . ' ' . trans('app.ar'), 'name_ar', 'name_ar', 'ar required req')
            ->addInputText('Code', 'code', 'code', ' required req')
            ->addActionButton($this->update, 'update', 'update')
            ->addActionButton($this->delete, 'delete', 'delete')
            ->addNavButton()
            ->render();
    }
    /* --------------------------------------------------
  *             Semesters Table
  * -------------------------------------------------
  */
    public function get_semesters_table($model, $request)
    {
        $query = $model::all();

        return $this->table
            ->queryConfig('semesters')
            ->queryDatatable($query)
            ->queryUpdateButton('semester_id')
            ->queryDeleteButton('semester_id')
            ->queryRender(true);
    }

    public function build_semesters_table($model, $request)
    {
        return $this->table
            ->config('semesters')
            ->addHiddenInput('semester_id', 'semester_id', '', true)
            ->addInputText(trans('app.full_name') . ' ' . trans('app.en'), 'name_en', 'name_en', 'en required req')
            ->addInputText(trans('app.full_name') . ' ' . trans('app.ar'), 'name_ar', 'name_ar', 'ar required req')
            ->addActionButton($this->update, 'update', 'update')
            ->addActionButton($this->delete, 'delete', 'delete')
            ->addNavButton()
            ->render();
    }

    /* --------------------------------------------------
      *             Courses Table
      * -------------------------------------------------
      */
    public function get_courses_table($model, $request)
    {

        $query = $model::with(['category','semester','study_year'])->get();

        return $this->table
            ->queryConfig('courses')
            ->queryDatatable($query)
            ->queryCustomButton('marks','course_id','icon-book',''," onClick='open_marks_modal($(this))' href='javascript:void(0);'")
            ->queryUpdateButton('course_id')
            ->queryDeleteButton('course_id')
            ->queryRender(true);
    }

    public function build_courses_table($model, $request)
    {
        $table = $this->table
            ->config('courses')
//            ->addHiddenInput('course_id', 'course_id', '', true)
            ->addInputText(trans('app.full_name') . ' ' . trans('app.en'), 'name_en', 'name_en', 'en required req')
            ->addInputText(trans('app.full_name') . ' ' . trans('app.ar'), 'name_ar', 'name_ar', 'ar required req')
            ->addAutocomplete('admin/category-autocomplete', trans('app.category'), 'category_id', 'category.name_' . \App::getLocale(), 'category.name_' . \App::getLocale(), 'req required')
            ->addAutocomplete('admin/semester-autocomplete', trans('app.semester'), 'semester_id', 'semester.name_' . \App::getLocale(), 'semester.name_' . \App::getLocale(), 'req required')
            ->addAutocomplete('admin/study-year-autocomplete', trans('app.study_year'), 'study_year_id', 'study_year.name_' . \App::getLocale(), 'study_year.name_' . \App::getLocale(), 'req required')
            ->addInputText(trans('app.year'), 'year', 'year', ' required req')
            ->addActionButton(trans('admin::menu.marks'),'marks','marks')
            ->addActionButton($this->update, 'update', 'update')
            ->addActionButton($this->delete, 'delete', 'delete')
            ->addNavButton();
        return $table->render();
    }

    /* --------------------------------------------------
      *             Courses Users Table
      * -------------------------------------------------
      */
    public function get_courses_users_table($model, $request)
    {
        if (request()->get('user')) {
            $user_id = request()->get('user');
            $query = $model::where('user_id', $user_id)->with(['course', 'user'])->get();
        } elseif(request()->get('course')){
            $course_id=request()->get('course');
            $query = $model::where('course_id', $course_id)->with(['course', 'user'])->get();
        }
        else{
            $query = $model::with(['user', 'course'])->get();
        }
        return $this->table
            ->queryConfig('courses_users')
            ->queryDatatable($query)
            ->queryUpdateButton('id')
            ->queryDeleteButton('id')
            ->queryRender(true);
    }

    public function build_courses_users_table($model, $request)
    {
        $table = $this->table
            ->config('courses_users')
            ->addAutocomplete('admin/course-autocomplete', trans('app.course'), 'course.course_id', 'course.name_' . \App::getLocale(), 'course.name_' . \App::getLocale(), 'req required')
            ->addAutocomplete('admin/user-autocomplete', trans('app.student'), 'user.user_id', 'user.name', 'user.name', 'req required')
            ->addInputText('Mark', 'mark', 'mark', ' required req')
            ->addActionButton($this->update, 'update', 'update')
            ->addActionButton($this->delete, 'delete', 'delete')
            ->addNavButton();
        return $table->render();
    }

    /* --------------------------------------------------
  *             Countries Table
  * -------------------------------------------------
  */
    public function get_countries_table($model)
    {
        $query = $model::orderBy('supported', 'desc');
        return $this->table
            ->queryConfig('countries')
            ->queryDatatable($query)
            ->queryDeleteButton('country_id')
            ->queryUpdateButton('country_id')
            ->queryAddColumn('supported_view', function ($item) {
                return $this->yesNo[$item->supported];
            })
            ->queryRender(true);
    }

    public function build_countries_table()
    {
        return $this->table->config('countries')
            ->addHiddenInput('country_id', 'country_id', '', true)
            ->addInputText(trans('app.full_name') . ' ' . trans('app.en'), 'name_en', 'name_en', 'en req required')
            ->addInputText(trans('app.full_name') . ' ' . trans('app.ar'), 'name_ar', 'name_ar', 'ar req required')
            ->addInputText(trans('app.nationality') . ' ' . trans('app.en'), 'nationality_en', 'nationality_en', 'en req required')
            ->addInputText(trans('app.nationality') . ' ' . trans('app.ar'), 'nationality_ar', 'nationality_ar', 'ar req required')
            ->addSelect($this->yesNo, trans('admin::main.supported'), 'supported', 'supported', 'supported_view', 'req required')
            ->addActionButton($this->update, 'update', 'update')
            ->addNavButton([], ['add'])
            ->render();
    }

    /* --------------------------------------------------
    *             States Table
    * -------------------------------------------------
    */
    public function get_states_table($model)
    {
        $query = $model::with('country')->get();
        return $this->table
            ->queryConfig('states')
            ->queryDatatable($query)
            ->queryDeleteButton('state_id')
            ->queryUpdateButton('state_id')
            ->queryRender(true);
    }

    public function build_states_table()
    {
        return $this->table->config('states')
            ->addHiddenInput('state_id', 'state_id', '', true)
            ->addInputText(trans('app.full_name') . ' ' . trans('app.en'), 'name_en', 'name_en', 'en req required')
            ->addInputText(trans('app.full_name') . ' ' . trans('app.ar'), 'name_ar', 'name_ar', 'ar req required')
            ->addAutocomplete('admin/country-autocomplete', trans('app.country'), 'country_id', 'country_id', 'country.name_' . \App::getLocale(), 'req required')
            ->addActionButton($this->update, 'update', 'update')
            ->addActionButton($this->delete, 'delete', 'delete')
            ->addNavButton([], ['add'])
            ->render();
    }

    /* --------------------------------------------------
    *             Cities Table
    * -------------------------------------------------
    */
    public function get_cities_table($model)
    {
        $query = $model::with('state')->get();
        return $this->table
            ->queryConfig('cities')
            ->queryDatatable($query)
            ->queryDeleteButton('city_id')
            ->queryUpdateButton('city_id')
            ->queryRender(true);
    }

    public function build_cities_table()
    {
        return $this->table->config('cities')
            ->addHiddenInput('city_id', 'city_id', '', true)
            ->addInputText(trans('app.full_name') . ' ' . trans('app.en'), 'name_en', 'name_en', 'en req required')
            ->addInputText(trans('app.full_name') . ' ' . trans('app.ar'), 'name_ar', 'name_ar', 'ar req required')
            ->addAutocomplete('admin/state-autocomplete', trans('app.state'), 'state_id', 'state_id', 'state.name_' . \App::getLocale(), 'req required')
            ->addActionButton($this->update, 'update', 'update')
            ->addActionButton($this->delete, 'delete', 'delete')
            ->addNavButton([], ['add'])
            ->render();
    }
    /* --------------------------------------------------
        *             News Table
        * -------------------------------------------------
        */
    public function get_news_table($model)
    {
        $query = $model::all();
        return $this->table
            ->queryConfig('news')
            ->queryDatatable($query)
            ->queryDeleteButton('new_id')
            ->queryUpdateButton('new_id')
            ->queryRender();
    }

    public function build_news_table()
    {
        return $this->table->config('news')
            ->addHiddenInput('new_id', 'new_id', '', true)
            ->addInputText(trans('app.title') . ' ' . trans('app.ar'), 'title_ar', 'title_ar', 'en req required')
            ->addInputText(trans('app.title') . ' ' . trans('app.en'), 'title_en', 'title_en', 'ar req required')
            ->addInputText(trans('app.content') . ' ' . trans('app.ar'), 'content_ar', 'content_ar', 'en req required')
            ->addInputText(trans('app.content') . ' ' . trans('app.en'), 'content_en', 'content_en', 'ar req required')
            ->addActionButton($this->update, 'update', 'update')
            ->addActionButton($this->delete, 'delete', 'delete')
            ->addNavButton()
            ->render();
    }
    /* --------------------------------------------------
        *             Decisions Table
        * -------------------------------------------------
        */
    public function get_decisions_table($model)
    {
        $query = $model::all();
        return $this->table
            ->queryConfig('decisions')
            ->queryDatatable($query)
            ->queryDeleteButton('decision_id')
            ->queryUpdateButton('decision_id')
            ->queryAddColumn('content_en_view', function ($item) {
                return '<br>' . ($item->content_en);
            })
            ->queryAddColumn('content_ar_view', function ($item) {
                return '<br>' . ($item->content_ar);
            })
            ->queryRender();
    }

    public function build_decisions_table()
    {
        return $this->table->config('decisions')
            ->addHiddenInput('decision_id', 'decision_id', '', true)
            ->addTextArea(trans('app.content') . ' ' . trans('app.en'), 'content_en_view', 'content_en_view', 'ar d:rtl  d:text-editor  req required')
            ->addTextArea(trans('app.content') . ' ' . trans('app.ar'), 'content_ar_view', 'content_ar_view', 'en d:ltr  d:text-editor  req required')
            ->addActionButton($this->update, 'update', 'update')
            ->addActionButton($this->delete, 'delete', 'delete')
            ->addNavButton()
            ->onModalOpen('_textEditor($(modal));')
            ->render();
    }
    /* --------------------------------------------------
    *             Subjects Table
    * -------------------------------------------------
    */
    public function get_subjects_table($model)
    {
        $query = $model::all();
        return $this->table
            ->queryConfig('subjects')
            ->queryDatatable($query)
            ->queryDeleteButton('subject_id')
            ->queryUpdateButton('subject_id')
            ->queryRender(true);
    }

    public function build_subjects_table()
    {
        return $this->table->config('subjects')
            ->addHiddenInput('subject_id', 'subject_id', '', true)
            ->addInputText(trans('app.full_name') . ' ' . trans('app.en'), 'name_en', 'name_en', 'en req required')
            ->addInputText(trans('app.full_name') . ' ' . trans('app.ar'), 'name_ar', 'name_ar', 'ar req required')
            ->addActionButton($this->update, 'update', 'update')
            ->addActionButton($this->delete, 'delete', 'delete')
            ->addNavButton([])
            ->render();
    }
    /* --------------------------------------------------
    *            Differentiations Table
    * -------------------------------------------------
    */
    public function get_differentiations_table($model)
    {
        $query = $model::all();
        return $this->table
            ->queryConfig('differentiations')
            ->queryDatatable($query)
            ->queryCustomButton('marks_subject','differentiation_id','icon-book',''," onClick='open_subjects_modal($(this))' href='javascript:void(0);'")
            ->queryDeleteButton('differentiation_id')
            ->queryUpdateButton('differentiation_id')
            ->queryRender(true);
    }

    public function build_differentiations_table()
    {
        return $this->table->config('differentiations')
            ->addHiddenInput('differentiation_id', 'differentiation_id', '', true)
            ->addInputText(trans('app.full_name') . ' ' . trans('app.en'), 'name_en', 'name_en', 'en req required')
            ->addInputText(trans('app.full_name') . ' ' . trans('app.ar'), 'name_ar', 'name_ar', 'ar req required')
            ->addInputText(trans('app.year') , 'year', 'year', ' req required')
            ->addActionButton(trans('admin::menu.courses'), 'marks_subject', 'marks_subject')
            ->addActionButton($this->update, 'update', 'update')
            ->addActionButton($this->delete, 'delete', 'delete')
            ->addNavButton([])
            ->render();
    }
    /* --------------------------------------------------
    *           Public Differentiation Table
    * -------------------------------------------------
    */
    public function get_public_differentiation_table($model)
    {
        $query = $model::all();
        return $this->table
            ->queryConfig('public_differentiation')
            ->queryDatatable($query)
            ->queryCustomButton('universities','differentiation_id','fa fa-building',''," onClick='open_universities_modal($(this))' href='javascript:void(0);'")
            ->queryDeleteButton('differentiation_id')
            ->queryUpdateButton('differentiation_id')
            ->queryRender(true);
    }

    public function build_public_differentiation_table()
    {
        return $this->table->config('public_differentiation')
            ->addHiddenInput('differentiation_id', 'differentiation_id', '', true)
            ->addInputText(trans('app.full_name') . ' ' . trans('app.en'), 'name_en', 'name_en', 'en req required')
            ->addInputText(trans('app.full_name') . ' ' . trans('app.ar'), 'name_ar', 'name_ar', 'ar req required')
            ->addInputText(trans('app.year') , 'year', 'year', ' req required')
            ->addActionButton(trans('admin::menu.universities'), 'universities', 'universities')
            ->addActionButton($this->update, 'update', 'update')
            ->addActionButton($this->delete, 'delete', 'delete')
            ->addNavButton([])
            ->render();
    }
    /* --------------------------------------------------
*             Menu Items Table
* -------------------------------------------------
*/
    public function get_menu_items_table($model)
    {
        $query = $model::with('parent')->get();
//        dd($query);
        return $this->table
            ->queryConfig('menu_items')
            ->queryDatatable($query)
            ->queryDeleteButton('menu_item_id')
            ->queryUpdateButton('menu_item_id')
            ->queryCustomButton('edit','menu_item_id','icon-book','',"onClick='_edit($(this))' href='javascript:void(0)'")
            ->queryAddColumn('is_root_view', function ($item) {
                return $this->yesNo[$item->is_root];
            })
            ->queryRender(true);
    }

    public function build_menu_items_table()
    {
        return $this->table->config('menu_items','',['dialogHeight'=>'300px'])
            ->addHiddenInput('menu_item_id', 'menu_item_id', '', true)
            ->addInputText(trans('app.full_name') . ' ' . trans('app.en'), 'name_en', 'name_en', 'en req required')
            ->addInputText(trans('app.full_name') . ' ' . trans('app.ar'), 'name_ar', 'name_ar', 'ar req required')
            ->addInputText(trans('app.target'), 'target', 'target', '')
            ->addInputText(trans('app.order'), 'order', 'order', '')
            ->addInputText(trans('app.classes'), 'classes', 'classes', '')
            ->addSelect($this->yesNo,trans('app.is_root') , 'is_root', 'is_root', 'is_root_view',' req required')
            ->addAutocomplete('admin/menu-item-autocomplete', trans('app.parent'), 'parent_id', 'parent.name_' . \App::getLocale(), 'parent.name_' . \App::getLocale(), '')
            ->addActionButton('Edit','edit','edit')
            ->addActionButton($this->update, 'update', 'update')
            ->addActionButton($this->delete, 'delete', 'delete')
            ->onAdd('_ajaxLoadHeader();')
            ->onUpdate('_ajaxLoadHeader()')
            ->onDelete('_ajaxLoadHeader()')
            ->addNavButton([])
            ->render();
    }
}
