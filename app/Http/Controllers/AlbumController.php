<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use Session;
use Image;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\BadResponseException;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

// use Illuminate\Http\Request;


class AlbumController extends Controller
{
    //
    public function index()
    {

        try
        {

        $client = new Client();
        $response = $client->request('GET', 'http://restschool.hridham.com/api/getAllAlbums',
        []);

        //  dd($response);
        //  return false;

        if($response->getStatusCode() === 200)
        {
            //  echo $response->getBody();

            $albumdata = json_decode($response->getBody());
            $data = $this->paginate($albumdata->message);

            //  echo Session::get('access_token');
            //  return false;

            return view('gallery',['albums'=>$data]);

        }

        }
        catch(BadResponseException $ex)
        {
            $data = json_decode($ex->getResponse()->getBody()->getContents(), true);
            $errors = [];

            // session()->forget('access_token');

            foreach($data as $k=>$v)
                $errors[$k]=$v;
            return redirect('/gallery')->with('error',"Error! There is an error in album images loading");
            //return view('auth.register')->with(['error'=>$errors]);
        }
        if($response->getStatusCode() == 201)
        {
            $albums = json_decode($response->getBody(),true);

            //  echo Session::get('access_token');
            //  return false;

            return view('gallery')->with('albums',compact('albums'));
            // return redirect('/gallery')->with('success','Successfully Registered');
        }
        else
        {
            return 'Internal Server Error!<br>Check api/users/create<br>'.$response;
        }

        // $albums = Album::all();
        // return view('album',compact('albums'));

    }



public function paginate($items, $perPage = 5, $page = null, $options = [])
{
    $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
    $items = $items instanceof Collection ? $items : Collection::make($items);
    $paginatedItems =new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
    $paginatedItems->setPath(url('/gallery'));
    return $paginatedItems;
}

    public function imageresize($path)
    {

        $imgpath = 'http://restschool.hridham.com/storage/cover_pictures/'.$path;
        Image::make($imgpath)->fit('250','250')
            // ->fit('250','250', function ($constraint) {
            //     $constraint->upsize();
            //     $constraint->aspectRatio();
            // })
            ->save(storage_path()."/app/public/cover_pictures/".$path, 80);

        // Return the thumbnail url
        // return Storage::url("photos/".$path);


    }

}
