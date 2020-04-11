<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Response;

use Auth;
use Session;
use Image;

use Illuminate\Support\Facades\Storage;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\BadResponseException;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;


class PhotoController extends Controller
{
    //

    public function index($id)
    {

        try
        {

        $client = new Client();
        $response = $client->request('GET', 'http://restschool.hridham.com/api/albums/'.$id,
        []);

        //  dd($response);
        //  return false;

        if($response->getStatusCode() === 200)
        {
            //  echo $response->getBody();

            $photodata = json_decode($response->getBody());
            $data = $this->paginate($photodata->photos);
            $albumdata = $photodata->data;

            //  echo Session::get('access_token');
            //  return false;

            return view('photo',['photos'=>$data,'albumdata'=>$albumdata]);

        }

        }
        catch(BadResponseException $ex)
        {
            $data = json_decode($ex->getResponse()->getBody()->getContents(), true);
            $errors = [];

            // session()->forget('access_token');

            foreach($data as $k=>$v)
                $errors[$k]=$v;
            return view('photo')->with('error',"Error! There is an error in album images loading");
            //return view('auth.register')->with(['error'=>$errors]);
        }
        if($response->getStatusCode() == 201)
        {
            $albums = json_decode($response->getBody(),true);

            //  echo Session::get('access_token');
            //  return false;

            return view('photo',['photos'=>$data]);
            // return redirect('/gallery')->with('success','Successfully Registered');
        }
        else
        {
            return 'Internal Server Error!<br>Check api/albums/id<br>'.$response;
        }


    }

    public function paginate($items, $perPage = 5, $page = null, $options = [])
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        $paginatedItems =new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
        $paginatedItems->setPath(url()->current());
        return $paginatedItems;
    }

    public function imageresize($path)
    {

        $imgpath = 'http://restschool.hridham.com/storage/photos/'.$path;
        Image::make($imgpath)->fit('250','250')
            // ->fit('250','250', function ($constraint) {
            //     $constraint->upsize();
            //     $constraint->aspectRatio();
            // })
            ->save(storage_path()."/app/public/photos/".$path, 80);

        // Return the thumbnail url
        // return Storage::url("photos/".$path);


    }
}
