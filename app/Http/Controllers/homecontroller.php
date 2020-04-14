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
class homecontroller extends Controller
{
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
// dd($data);exit;
            //  echo Session::get('access_token');
            //  return false;

            return view('index',['albums'=>$data]);

        }

        }
        catch(BadResponseException $ex)
        {
            $data = json_decode($ex->getResponse()->getBody()->getContents(), true);
            $errors = [];

            // session()->forget('access_token');

            foreach($data as $k=>$v)
                $errors[$k]=$v;
            return redirect('/')->with('error',"Error! There is an error in album images loading");
            //return view('auth.register')->with(['error'=>$errors]);
        }
        if($response->getStatusCode() == 201)
        {
            $albums = json_decode($response->getBody(),true);

            //  echo Session::get('access_token');
            //  return false;

            return view('index')->with('albums',compact('albums'));
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
    $paginatedItems->setPath(url('/'));
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
    //
}


class TestimonialsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function hometest()
    {
        try {

            $client = new Client();
            $response = $client->request(
                'GET',
                'http://restschool.hridham.com/api/getAllReview',
                []
            );

            //  dd($response);
            //  return false;

            if ($response->getStatusCode() === 200) {
                //  echo $response->getBody();

                $testimonial_data = json_decode($response->getBody());
                $data = $this->paginate($testimonial_data->data);
dd($data);exit;
                //  echo Session::get('access_token');
                //  return false;
                // return view('testimonial');
                return view('index', ['testimonials' => $data]);
            }
        } catch (BadResponseException $ex) {
            return dd($ex->getMessage());
            $data = json_decode($ex->getResponse()->getBody()->getContents(), true);
            $errors = [];
            foreach ($data as $k => $v)
                $errors[$k] = $v;
            return redirect('index')->with('error', "Error! There is an error in album images loading");
            //return view('auth.register')->with(['error'=>$errors]);
        }
        if ($response->getStatusCode() == 201) {
            $albums = json_decode($response->getBody(), true);
            //  return view('gallery')->with('albums',compact('albums'));

        } else {
            return 'Internal Server Error!<br>Check api/users/create<br>' . $response;
        }
    }
    public function show($id)
    {
        $client = new Client();
        $response = $client->request(
            'GET',
            'http://restschool.hridham.com/api/review/' . $id,
            []
        );

        if ($response->getStatusCode() === 200) {
            //  echo $response->getBody();

            $testimonial_data = json_decode($response->getBody());
            $data = $testimonial_data->data;

            //  echo Session::get('access_token');
            //  return false;
            // return view('testimonial');
            return view('index', ['testimonials' => $data]);
        }
    }
    public function paginate($items, $perPage = 10, $page = null, $options = [])
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        $paginatedItems = new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
        $paginatedItems->setPath(url('/testimonial'));
        return $paginatedItems;
    }
}
