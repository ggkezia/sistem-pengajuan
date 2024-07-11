<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
// use App\Models\Pengguna;

class Biro3Controller extends Controller
{
    public function pengguna(Request $request){
        $pengguna = User::paginate(5)->onEachSide(1)->fragment('pengguna');
        // $perPage = $request->input('per_page', 10);
        // $perPage = in_array($perPage, [10, 25, 50, 100]) ? $perPage : 10;
        // $pengguna = User::paginate($perPage); // Mengambil pengguna sesuai jumlah item per halaman
        return view('biro3.pengguna', ['pengguna' => $pengguna]);
        // return view('biro3.pengguna', compact('pengguna', 'perPage'));
    }

    // public function caripengguna(Request $request)
    // {
    //     $filter = $request->input('filter');
    //     $keyword = $request->input('keyword');
    
    //     // Validasi apakah keyword diisi
    //     $rules = [
    //         'keyword' => 'required',
    //     ];
    
    //     if ($filter == 'email') {
    //         $rules['keyword'] .= '|email';
    //     }
    
    //     $request->validate($rules);
    
    //     // Query untuk mengambil data pengguna sesuai filter dan keyword
    //     $query = User::query();
    
    //     if (!empty($filter) && in_array($filter, ['name', 'email', 'role'])) {
    //         $query->where($filter, 'like', '%' . $keyword . '%');
    //     } else {
    //         $query->where(function ($query) use ($keyword) {
    //             $query->where('name', 'like', '%' . $keyword . '%')
    //                   ->orWhere('email', 'like', '%' . $keyword . '%')
    //                   ->orWhere('role', 'like', '%' . $keyword . '%');
    //         });
    //     }
    
    //     // Mengambil data dengan pagination
    //     $perPage = $request->input('per_page', 10); // Ambil nilai per_page dari request
    //     $pengguna = $query->paginate($perPage);
    
    //     // Mengirimkan data ke view, termasuk $perPage
    //     return view('biro3.pengguna', compact('pengguna', 'perPage'));
    // }
    
    public function caripengguna(Request $request)
    {
        // Mengambil nilai filter dan keyword dari permintaan GET
        $filter = $request->input('filter');
        $keyword = $request->input('keyword');

        // Jika filter dipilih 'none', langsung kembali ke halaman awal
        if ($filter == '') {
            return redirect('/biro3/pengguna');
        }

        // Validasi apakah keyword diisi
        $rules = [
            'keyword' => 'required',
        ];

        // Jika filter adalah email, tambahkan aturan validasi untuk memeriksa apakah nilai keyword adalah alamat email yang valid
        if ($filter == 'email') {
            $rules['keyword'] .= '|email';
        }

        $request->validate($rules, [
            'keyword.required' => 'Keyword is required!',
            'keyword.email' => 'Please enter a valid email address!',
        ]);  

        // Logika untuk menangani jika filter tidak dipilih atau dipilih None
        if ($filter == '' || $filter == 'none') {
            $pengguna = User::where('name', 'like', '%' . $keyword . '%')
                                ->orWhere('email', 'like', '%' . $keyword . '%')
                                ->orWhere('role', 'like', '%' . $keyword . '%')
                                ->paginate(5);
        } else {
            // Logika untuk menangani jika filter dipilih
            $pengguna = User::where($filter, 'like', '%' . $keyword . '%')->paginate(5);
        }
        // Mengirimkan data pengguna yang ditemukan ke view untuk ditampilkan
        // return view('biro3.pengguna', ['pengguna' => $pengguna, 'perPage' => $request->input('per_page', 10)]);
        return view('biro3.pengguna', ['pengguna' => $pengguna]);
    }

    // {
    //     // Mengambil nilai filter dan keyword dari permintaan GET
    //     $filter = $request->input('filter');
    //     $keyword = $request->input('keyword');

    //     // Logika untuk menangani jika filter tidak dipilih atau dipilih None
    //     if ($filter == '' || $filter == 'none') {
    //         $pengguna = Pengguna::where('name', 'like', '%' . $keyword . '%')
    //                             ->orWhere('email', 'like', '%' . $keyword . '%')
    //                             ->orWhere('is_admin', 'like', '%' . $keyword . '%')
    //                             ->paginate(5);
    //     } else {
    //         // Logika untuk menangani jika filter dipilih
    //         $pengguna = Pengguna::where($filter, 'like', '%' . $keyword . '%')->paginate(5);
    //     }
    //     // Mengirimkan data pengguna yang ditemukan ke view untuk ditampilkan
    //     return view('biro3.pengguna', ['pengguna' => $pengguna]);
    // }

    public function tambahpengguna(Request $request)
    {
       return view('biro3.tambahpengguna');
    }

    public function simpanpengguna(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
            'role' => 'required|in:Admin,WR,BEMU,UKM'
        ]);

        // Simpan data pengguna baru
        User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
            'role' => $validatedData['role']
        ]);
        // $pengguna = User::create([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'password' => bcrypt($request->password),
        //     'role' => $request->role
        // ]);
       return redirect('/biro3/pengguna')->with('status', 'Data Berhasil Ditambah!');
    }

    public function editpengguna($id_pengguna)
    {
        $pengguna = User::find($id_pengguna);
        return view('biro3.editpengguna', ['pengguna'=> $pengguna]);
    }
    public function updatepengguna($id_pengguna, Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,'.$id_pengguna,
            'password' => 'nullable|string|min:8',
            'role' => 'required|in:Admin,WR,BEMU,UKM',
        ]);
    
        $pengguna = User::findOrFail($id_pengguna);
        $pengguna->name = $validatedData['name'];
        $pengguna->email = $validatedData['email'];
        if ($request->filled('password')) {
            $pengguna->password = bcrypt($validatedData['password']);
        }
        $pengguna->role = $validatedData['role'];
        $pengguna->save();
        
        // $pengguna = User::find($id_pengguna);
        // $pengguna -> name = $request -> name;
        // $pengguna -> email = $request -> email;
        // $pengguna -> password = $request -> password;
        // $pengguna -> role = $request -> role;
        // $pengguna->save();
        // // Alert::success('Sukses', 'Mengedit Data Pengguna');
        return redirect('/biro3/pengguna')->with('status', 'Data Berhasil Diedit!');
    }

    public function hapuspengguna($id_pengguna)
    {
        $pengguna = User::find($id_pengguna);
        $pengguna->delete();
        // Alert::success('Sukses', 'Menghapus Data Pengguna');
        return redirect('/biro3/pengguna');//->with('status', 'Data Berhasil Dihapus!');
    }

}
