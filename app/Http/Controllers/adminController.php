<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\User;
use function Ramsey\Uuid\v1;

class adminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function products(){
        $data = Products::all();
        $hitung = Products::all();
        return view('admin.products' , ['data' => $data , 'hitung' =>$hitung]);
    }
    public function users(){
        $admin = User::all()->where('role','admin');
        $cashier = User::all()->where('role' , 'cashier');
        $data = User::all();
        return view('admin.users', ['admin' => $admin , 'cashier'=> $cashier]);
    }
    public function productsadd(){
        return view('admin.productsadd');
    }
    public function productsadds(Request $request){
        $data = new Products();
        $data->name  = $request->name;
        $data->category = $request->category;
        $data->price = $request->price;
        $data->quantity = $request->quantity;
        $data->description = $request->description;

        $imageName = time().'.'.$request->gambar->extension();
        $request->gambar->move(public_path('products/'), $imageName);
        $data->gambar = $imageName;

        $data->save();
        return redirect(route('admin.products'));
    }

    public function productssearch(Request $request){
        $data = Products::where('name', 'LIKE',"%{$request->search}%")->paginate();
        $hitung = Products::all();

        return view('admin.products' , ['data' => $data , 'hitung'=>$hitung]);
    }

    public function productsedit($id){
        $data = Products::find($id);
        return view('admin.productsedit' , ['data'=>$data]);
    }
    public function productsedits($id, Request $request){
        $data = Products::find($id);
        $data->name  = $request->name;
        $data->category = $request->category;
        $data->price = $request->price;
        $data->quantity = $request->quantity;
        $data->description = $request->description;
        if ($request->gambar != null){
        $imageName = time().'.'.$request->gambar->extension();
        $request->gambar->move(public_path('products/'), $imageName);
        $data->gambar = $imageName;
        }

        $data->update();
        return redirect(route('admin.products'));
    }

    public function usersadd(){
        return view('admin.usersadd');
    }
}
