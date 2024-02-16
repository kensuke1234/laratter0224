<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use Illuminate\Http\Request;

class TweetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
  {
    // 🔽 追加
    $tweets = Tweet::with('user')->latest()->get();
    return view('tweets.index', compact('tweets'));
  }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
  {
    // 🔽 追加
    return view('tweets.create');
  }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tweet' => 'required|max:255',
            'image' => 'nullable|image|max:1024', // 画像は任意で、画像ファイルで1MB未満であることを検証
        ]);
    
        // ツイートデータを作成
        $tweet = $request->user()->tweets()->create($request->only('tweet'));
    
        // 画像がアップロードされている場合、画像を保存
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
    
            // 画像モデルを作成して関連付け
            $image = new Image(['path' => $imagePath]);
            $tweet->images()->save($image);
        }
    
        return redirect()->route('tweets.index');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Tweet $tweet)
    {
      return view('tweets.show', compact('tweet'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tweet $tweet)
    {
      return view('tweets.edit', compact('tweet'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tweet $tweet)
    {
      $request->validate([
        'tweet' => 'required|max:255',
      ]);
  
      $tweet->update($request->only('tweet'));
  
      return redirect()->route('tweets.show', $tweet);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tweet $tweet)
    {
      $tweet->delete();
  
      return redirect()->route('tweets.index');
    }
}
