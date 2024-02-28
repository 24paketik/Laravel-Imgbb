<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ImageController extends Controller
{
    public function index(){
        return view('upload');
    }
    public function upload(Request $request){
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,gif|max:32768', // Ограничиваем форматы и размер до 32MB
        ]);
        $client = new Client();
        $response = $client->request('POST', 'https://api.imgbb.com/1/upload', [
            'multipart' => [
                [
                    'name' => 'image',
                    'contents' => fopen($request->file('image')->path(), 'r'),
                    'filename' => $request->file('image')->getClientOriginalName()
                ],
                [
                    'name' => 'key',
                    'contents' => 'YOUR_API_KEY_HERE' // Вставьте ваш API-ключ imgbb
                ]
            ]
        ]);

        $body = $response->getBody();
        $result = json_decode($body);
        return view('image-upload', ['imageUrl' => $result->data->url]);
    }
}
