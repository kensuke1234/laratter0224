<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Userモデルを使用するために追加

class FollowController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
        /**
     * ユーザーをフォローする。
     */

    public function store(Request $request, $user_id)
    {
        // 認証済みユーザー（フォロワー）を取得
        $follower = auth()->user();

        // フォロー対象のユーザーを取得
        $userToFollow = User::findOrFail($user_id);

        // 既にフォローしているかチェック
        if ($follower->followings()->where('following_id', $userToFollow->id)->exists()) {
            return back()->with('error', '既にフォローしています。');
        }

        // フォロー関係を追加
        $follower->followings()->attach($userToFollow);

        return back()->with('success', 'ユーザーをフォローしました。');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
 /**
     * ユーザーのフォローを解除する。
     */
    public function destroy(Request $request, $user_id)
    {
        // 認証済みユーザー（フォロワー）を取得
        $follower = auth()->user();

        // フォロー解除対象のユーザーを取得
        $userToUnfollow = User::findOrFail($user_id);

        // フォロー関係を解除
        $follower->followings()->detach($userToUnfollow);

        return back()->with('success', 'ユーザーのフォローを解除しました。');
    }
}
