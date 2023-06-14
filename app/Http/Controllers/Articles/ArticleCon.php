<?php

namespace App\Http\Controllers\Articles;

use App\Http\Controllers\Controller;
use App\Models\{Article, ArticleCategori};
use Illuminate\Http\{Request};
use Illuminate\Support\Facades\{Auth, Validator};

class ArticleCon extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $articles = Article::paginate(2);


        return view('artikel.list', compact('user', 'articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        $categories = ArticleCategori::all();

        return view('artikel.create', compact('user', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'judul' => 'required|string|max:300',
            'isi' => 'required|string',
            'id_cat' => 'required|numeric|max:50',

        ]);

        $attributeNames = array(
            'judul'           => 'JUDUL',
            'isi'          => 'ISI',
            'id_cat'          => 'KATEGORI',
        );

        $validator->setAttributeNames($attributeNames);

        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator)->with('error', 'Data belum terisi dengan benar');
        }

        $image = '';

        $user = Auth::user();
        $data = new Article();


        $data->id_user = $user->id;
        $data->id_kategori = $request->id_cat;
        $data->judul = $request->judul;
        $data->name = slugify($request->judul);
        $data->isi = $request->isi;
        $data->image = $image;
        $data->save();

        return redirect(route('article.index'))->with('success', 'Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = Auth::user();

        $data = Article::findOrFail($id);


        return view('artikel.detail', compact('user', 'data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Auth::user();
        $categories = ArticleCategori::all();

        $data = Article::findOrFail($id);

        // dd($user);
        return view('artikel.edit', compact('user', 'categories', 'data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'judul' => 'required|string|max:300',
            'isi' => 'required|string',
            'id_cat' => 'required|numeric|max:50',

        ]);

        $attributeNames = array(
            'judul'           => 'JUDUL',
            'isi'          => 'ISI',
            'id_cat'          => 'KATEGORI',
        );

        $validator->setAttributeNames($attributeNames);

        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator)->with('error', 'Data belum terisi dengan benar');
        }

        $image = '';
        $data = Article::findOrFail($id);

        $data->id_kategori = $request->id_cat;
        $data->judul = $request->judul;
        $data->name = slugify($request->judul);
        $data->isi = $request->isi;
        $data->image = $image;
        $data->update();

        return redirect(route('article.index'))->with('success', 'Ubah Data Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $data = Article::findOrFail($id)->delete();

        return redirect(route('article.index'))->with('info', 'Data Sudah Berhasil Dihapus');
    }
}
