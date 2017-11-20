<?php

namespace Modules\Admin\Http\Controllers;

use App\User;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Routing\Route;
use Intervention\Image\ImageManager;
use Modules\Admin\Repositories\UserRepository;
use Modules\General\Entities\Faculty;
use Modules\General\Entities\StudyYear;
use Storage;

class AdminController extends Controller
{

    protected $rep;

    function __construct(Route $route, UserRepository $rep)
    {
        $this->rep = $rep;
        parent::__construct($route);
    }

    public function index()
    {
        return view('admin::index');
    }


    /**
     * @param $table
     * @param bool $hasExtra
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function table($table, $hasExtra = false)
    {
        session()->flash('success', 'This is ' . str_replace_first('-', ' ', ucfirst($table)) . ' table');
        $tableName = $table . '-table';
        if (\Request::ajax() == 1) {
            $html = view('admin::tables', compact('tableName', 'title', 'hasExtra', 'table'))->render();
            return \Response::json(['success' => true, 'html' => $html]);
        } else {
            return view('admin::tables', compact('tableName', 'title', 'hasExtra', 'table'));
        }
    }

    public function uploadImage(Request $request)
    {

        $this->validate($request, [
            'image' => 'mimes:jpeg,jpg,bmp,png,mp4,avi,flv|max:100000',
            'upload' => 'image|max:100000',//For CKEditor
            'image_url' => 'max:10000000',//For Crop
        ]);
        $manager = new ImageManager(array('driver' => 'gd'));
        $image = $manager->make($request->files->get('image', $request->get('image_url', $request->get('upload', ''))));
        $fileTempName = sha1(time() . (int)rand(100000, 1000000)) . '.' . explode('/', $image->mime())[1];
        $image->save(storage_path('app\\public\\temp\\' . $fileTempName));
        return ['success' => true, 'filename' => $fileTempName, 'fileurl' => url('storage/temp/' . $fileTempName)];
    }

    public function uploadDocument(Request $request, $data = '')
    {
//        $this->validate($request, [
//            'doc' => 'mimes:pdf|max:8000',
//        ]);
        $file = $request->files->get('doc');
        $extention = pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION);
        $fileTempName = ((int)rand(100000, 1000000)) . "_$data" . '.' . $extention;//public_path() . '/upload/temp/';
        Storage::disk('public')->put('pdf/' . $fileTempName, file_get_contents($file->getRealPath()));
        // $upload_success = $file->move($destinationPath, $fileTempName);
        return ['sucess' => true, 'filename' => $fileTempName];
    }

    public function getFiles(Request $request)
    {
//        dd($request->get('file'));

        if ($request->get('file')) {

            $files = Storage::disk('public')->files('pdf');
            $urlFile = [];
            $config = [];
            $sizefile = new Filesystem;
            $file = $request->get('file');
            $f = substr($file, 5, -4);

            $foundFiles = collect($files)->filter(function ($v) use ($f) {
                return preg_match("/$f/", $v);
            });
            foreach ($foundFiles as $index => $file) {
                $key = substr($file, 4);
                $urlFile[] = url("storage/$file");
                $config[] = ['type' => "pdf", 'size' => $sizefile->size("storage/$file"), 'key' => $key, 'caption' => $sizefile->name("storage/$file.pdf"), 'url' => url('delete-file') . '/' . $sizefile->name("storage/$file.pdf"), 'downloadUrl' => url("storage/$file")];
            }
//dd($urlFile);
            return ['success' => true, 'files' => $urlFile, 'config' => $config];
        }
        return ['suucess' => false];
    }

    public function deleteFile($file)
    {
        Storage::delete('public/pdf/' . $file);
        return ['success' => true];
    }

    public function getFaculties()
    {
        $data=[];
        $users=[];
        $faculty=Faculty::where('faculty_id','>=',1)->limit(4)->get(['name_'.$this->lang,'faculty_id']);
        foreach ($faculty as $item) {
            $users[]=count(User::where('faculty_id',$item->faculty_id)->get());
        }
        for ($i=0;$i<count($faculty);$i++){
            $data[$i]=['labels'=>$faculty[$i]['name_'.$this->lang],'data'=>$users[$i]];
        }
        return['data'=>$data];
    }

    public function getStuYear()
    {
        $stuYears=StudyYear::where('study_year_id','>=','1')->limit(5)->get(['name_'.$this->lang,'study_year_id']);
        foreach ($stuYears as $item){
            $students[]=count(User::where('study_year_id',$item->study_year_id)->get());
        }
//        dd($students);
        for ($i=0;$i<count($stuYears);$i++){
            $data[$i]=['labels'=>$stuYears[$i]['name_'.$this->lang],'data'=>$students[$i]];
        }
        return['data'=>$data];

    }
    public function getGraduations(Request $request)
    {
        for ($i=$request->get('years')[0];$i<=$request->get('years')[1];$i++){
            $graduations[]=count(User::where('study_year_id',11)->where('graduation_date',$i)->get());
        }
//        dd($graduations);
        for ($i=$request->get('years')[0],$j=0;$i<=$request->get('years')[1];$i++,$j++){
            $data[]=['labels'=>$i,'data'=>$graduations[$j]];
        }
        return['data'=>$data];

    }

}
