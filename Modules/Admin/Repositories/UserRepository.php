<?php
/**
 * Created by PhpStorm.
 * User: Eng.Mohammad
 * Date: 10/1/2017
 * Time: 8:35 AM
 */

namespace Modules\Admin\Repositories;
use Intervention\Image\ImageManager;
use App\User;

class UserRepository
{

    public function update($id, $request, $isAdmin = null)
    {
        $manager = new ImageManager(array('driver' => 'gd'));
        $user = User::findOrFail($id);
        //handle image update
        if ($request->get('image', $user->image) != $user->image) {
            $image = $manager->make(\Storage::drive('public')->get('temp/' . $request->get('image')));
            $image->save(User::IMAGE_URL_PATH . $request->get('image'));
            $image->destroy();//Free Memory
            //delete image from temp
            \Storage::drive('public')->delete('temp/' . $request->get('image'));
        }
        $extraUserRole = [];
        if ($isAdmin === true)
            $extraUserRole = ['user_type_id' => User::ADMIN_DB_ID];
        //update image
        $user->update($request->input());
    }

}