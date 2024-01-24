<?php

namespace App\Http\Controllers;

use App\Models\UserAddress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserAddressController extends Controller
{
    public function index()
    {
        return view('frontend.info');
    }
    public function getAddress()
    {
        return view('frontend.address.address');
    }
    public function add()
    {
        return view('frontend.address.add');
    }
    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required'
        ]);
        $address = new UserAddress();
        $address->user_id = Auth::user()->id;
        $address->name = $request['name'];
        $address->address = $request['address'];
        $address->save();
        return redirect()->route('get-address')->with('status', 'Thêm địa chỉ thành công');
    }
    public function edit(UserAddress $address)
    {
        return view('frontend.address.edit', compact('address'));
    }
    public function update(Request $request, UserAddress $address)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required'
        ]);
        $address->update($request->all());
        return redirect()->route('get-address')->with('status', 'Cập nhật địa chỉ thành công');
    }
    public function destroy(UserAddress $address)
    {
        $address->delete();
        return redirect()->route('get-address')->with('status', 'Xóa địa chỉ thành công');
    }
}
