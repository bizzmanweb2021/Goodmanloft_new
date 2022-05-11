<?php

namespace App\Http\Controllers;
use Intervention\Image\ImageManagerStatic as Image;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ArticleAdminController extends Controller
{
    //
    public function index()
    {
        $data = Article::orderBy('id')->get();
        return view('Admin.Article.articleView')->with('article',$data);
    }
    public function create()
    {
        return view('Admin.Article.articleAdd');
    }
    public function show(Request $request)
    {
        $this->validate($request,['description'=>'required',
                                    'title'=>'required',
                                   'image'=>'required|mimes:jpg,png,jpeg'
                                 ]);

                                $img = $request->image;
                                $filename = $img->getClientOriginalName();
                                $image_resize = Image::make($img->getRealPath())->resize(300,200)->save(public_path('images/'.$filename));
                                $image_destination =  'images/'.$filename;

                                $art=new Article();
                                $art->Description=$request->description;
                                $art->Title = $request->title;
                                $art->Image=$image_destination;
                                $art->save();
                                $notification1=array('alert-type'=>'success',
                                'message'=>'Article Added Successfully'
                                );
                                return redirect()->route('admin.articleView')->with($notification1);
    }

    public function updateArticle(Request $request)
    {
        $article = DB::table('articles')->where('id','=',$request->id)->update([
            'Title' => $request->input('Title'),
            'Description' => $request->input('Description')
        ]);
        return redirect()->route('admin.articleView');
    }
}
