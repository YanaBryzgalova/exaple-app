<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data; // Подключение модели Data

class DataController extends Controller
{
    public function uploadData(Request $request)
    {
        $file = $request->file('file');
        $path = $file->storeAs('uploads', 'data.csv');

        // Чтение файла data.csv и сохранение данных в базу данных

        return response()->json(['message' => 'Data uploaded successfully']);
    }
}
