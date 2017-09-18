<?php
/*ini nomor 1*/
namespace App\Http\Controllers;

use App\Models\User;
use App\Models\City;
use App\Models\Forum;
use App\Models\Lesson;
use App\Models\Passport;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showProfile($id)
    {
        $user = User::with('forums.tags','lessons')->where('id', $id)->first();
         return view('user.profile', ['user' => $user]);
    }

    public function showPassport($id)
    {
         return view('user.passport', ['passport' => Passport::findOrFail($id)]);
    }

    public function showLesson($id)
    {
         return view('user.lesson', ['lesson' => Lesson::findOrFail($id)]);
    }

    public function showForum($id)
    {
         return view('user.forum', ['forum' => Forum::findOrFail($id)]);
    }


    public function createForum()
    {
        $forum = new Forum(['title'=>'test Forum baru',
                            'body'=>'body Forum baru',
                            ]);

        $user = User::find(2);

         $user->forums()->save($forum);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateForum()
    {
        $forum = Forum::find(1);
        $user = User::find(2);

        $forum->user()->associate($user);
        $forum->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteForum()
    {
        $forum = Forum::find(1);

        $forum->user()->dissociate();
        $forum->save();
    }
}
