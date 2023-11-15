<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Tweet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TweetController extends Controller
{
    public function all()
    {

        $tweets = Tweet::where('status', 'active')->with(['user'])->withCount('like')->latest()->paginate(10);

        return response()->json($tweets);
    }

    public function show($id)
    {
        $data = Tweet::where('id',$id)->first();
        if(!$data){
            return response()->json([
                'err_message' => 'not found',
                'errors' => ['role'=>['data not found']],
            ], 422);
        }
        return response()->json($data,200);
    }

    public function store()
    {
        // dd(request()->all());
        $validator = Validator::make(request()->all(), [
            'content' => ['required', 'string'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'err_message' => 'validation error',
                'errors' => $validator->errors(),
            ], 422);
        }

        $data = new Tweet();
        $data->content = request()->content;
        $data->user_id = request()->user_id;
        $data->save();

        // if (request()->hasFile('image')) {
        //     $file = request()->file('image');
        //     $path = 'uploads/site/Tweet-' . $data->id . rand(1000, 9999) . '.' . $file->getClientOriginalExtension();
        //     // Storage::put($path, $file);
        //     Image::make($file)->resize(null, 600, function ($constraint) {
        //         $constraint->aspectRatio();
        //     })->save(public_path($path));
        //     $data->image = $path;
        //     $data->save();
        // }

        return response()->json($data, 200);
    }

    public function like_post()  {
        $validator = Validator::make(request()->all(), [
            'tweet_id' => ['required'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'err_message' => 'validation error',
                'errors' => $validator->errors(),
            ], 422);
        }

        $check_tweet = Like::where('tweet_id', request()->tweet_id)->where('user_id', request()->user_id)->first();
        if($check_tweet != null) {
            Like::where('tweet_id', request()->tweet_id)->where('user_id', request()->user_id)->delete();
            return response()->json(["message" => "unliked"], 200);
        }else {
            $like = new Like();
            $like->tweet_id = request()->tweet_id;
            $like->user_id = request()->user_id;
            $like->save();
            return response()->json($like, 200);
        }
        
    }

    public function myProfile() {
        
    }

    public function update()
    {
        $data = Tweet::find(request()->id);
        if(!$data){
            return response()->json([
                'err_message' => 'validation error',
                'errors' => ['name'=>['asset not found by given id '.(request()->id?request()->id:'null')]],
            ], 422);
        }

        $validator = Validator::make(request()->all(), [
            'title' => ['required', 'string'],
            'paragraph' => ['required', 'string'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'err_message' => 'validation error',
                'errors' => $validator->errors(),
            ], 422);
        }

        $data->title = request()->title;
        $data->paragraph = request()->paragraph;
        $data->title_highlight = request()->title_highlight;
        $data->link = request()->link;
        $data->save();

        if (request()->hasFile('image')) {
            $file = request()->file('image');
            $path = 'uploads/site/Tweet-' . $data->id . rand(1000, 9999) . '.' . $file->getClientOriginalExtension();
            Image::make($file)->resize(null, 600, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path($path));
            $data->image = $path;
            $data->save();
        }

        return response()->json($data, 200);
    }

    public function canvas_update()
    {
        
    }

    public function soft_delete()
    {
        
    }

    public function destroy()
    {
        $validator = Validator::make(request()->all(), [
            'id' => ['required','exists:tweets,id'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'err_message' => 'validation error',
                'errors' => $validator->errors(),
            ], 422);
        }

        $data = Tweet::where('id', request()->id)->delete();

        return response()->json([
            'result' => 'deleted',
        ], 200);
    }

    public function bulk_import()
    {
        $validator = Validator::make(request()->all(), [
            'data' => ['required','array'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'err_message' => 'validation error',
                'errors' => $validator->errors(),
            ], 422);
        }

        foreach (request()->data as $item) {
            $item['created_at'] = $item['created_at'] ? Carbon::parse($item['created_at']): Carbon::now()->toDateTimeString();
            $item['updated_at'] = $item['updated_at'] ? Carbon::parse($item['updated_at']): Carbon::now()->toDateTimeString();
            $item = (object) $item;
            $check = Tweet::where('id',$item->id)->first();
            if(!$check){
                try {
                    Tweet::create((array) $item);
                } catch (\Throwable $th) {
                    return response()->json([
                        'err_message' => 'validation error',
                        'errors' => $th->getMessage(),
                    ], 400);
                }
            }
        }

        return response()->json('success', 200);
    }
}
