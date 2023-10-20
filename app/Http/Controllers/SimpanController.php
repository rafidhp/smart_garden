<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SimpanController extends Controller
{
    public function simpanTds(Request $request) {
        // Mengambil nilai TDS yang dikirim dari tampilan
        $tdsValue = $request->input('value');

        // Sekarang Anda dapat melakukan apa pun dengan nilai TDS, seperti menyimpannya di database
        // Contoh: Simpan nilai TDS ke dalam model atau tabel yang sesuai
        // Misalnya, SimpanTds::create(['tds' => $tdsValue]);

        // Jika Anda hanya ingin memberi contoh respons berhasil
        return response()->json(['message' => 'Data TDS berhasil diterima dan dapat diolah di controller', 'tdsValue' => $tdsValue]);
    }
}
