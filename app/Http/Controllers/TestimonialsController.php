<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\BadResponseException;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class TestimonialsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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

                //  echo Session::get('access_token');
                //  return false;
                // return view('testimonial');
                return view('testimonial', ['testimonials' => $data]);
            }
        } catch (BadResponseException $ex) {
            return dd($ex->getMessage());
            $data = json_decode($ex->getResponse()->getBody()->getContents(), true);
            $errors = [];
            foreach ($data as $k => $v)
                $errors[$k] = $v;
            return redirect('/testimonial')->with('error', "Error! There is an error in album images loading");
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
            return view('testi', ['testimonials' => $data]);
        }
    }
    public function paginate($items, $perPage = 6, $page = null, $options = [])
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        $paginatedItems = new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
        $paginatedItems->setPath(url('/testimonial'));
        return $paginatedItems;
    }
}
