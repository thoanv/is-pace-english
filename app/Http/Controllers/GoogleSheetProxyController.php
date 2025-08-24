<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Province;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class GoogleSheetProxyController extends Controller
{
    public function proxyToGoogleSheet(Request $request)
    {
        // Lấy dữ liệu từ request
        $data = $request->all();
        // Log dữ liệu gốc để debug
        Log::info('Original Request Data:', $data);
         // Query để lấy tên tỉnh/thành phố
         if (isset($data['your_province'])) {
            $province = Province::find($data['your_province']);
            $data['your_province'] = $province ? $province->name : $data['your_province'];
        }

        // Query để lấy tên khóa học
        if (isset($data['course'])) {
            $course = Course::find($data['course']);
            $data['course'] = $course ? $course->category->translation->name. '-'.($course->translation?->name === 'IELTS' ? '(Từ 12 tuổi trở lên)' : $course->translation?->name)  : $data['course'];
        }
        // Log dữ liệu sau khi xử lý
        Log::info('Processed Data:', $data);
        // Gửi request đến Google Apps Script
        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
        ])->post('https://script.google.com/macros/s/AKfycbxnYcJflEx9lBHL4Bjo-BkP9tX384hWQruSkNTxwsrS9fdMZf3jPsAwbezRByzMtaq_tg/exec', $data);

        // Kiểm tra response từ Google Apps Script
        if ($response->failed()) {
            return response()->json([
                'status' => 'error',
                'message' => 'Không thể kết nối đến Google Apps Script: ' . $response->status()
            ], $response->status());
        }

        // Trả về response từ Google Apps Script với header CORS
        return response()->json($response->json())
            ->header('Access-Control-Allow-Origin', '*') // Cho phép tất cả origin (hoặc chỉ định 'https://scotsenglish.cloud' khi production)
            ->header('Access-Control-Allow-Methods', 'POST, OPTIONS')
            ->header('Access-Control-Allow-Headers', 'Content-Type');
    }

    public function handleOptions()
    {
        // Xử lý preflight request (OPTIONS)
        return response()->json([])
            ->header('Access-Control-Allow-Origin', '*') // Cho phép tất cả origin
            ->header('Access-Control-Allow-Methods', 'POST, OPTIONS')
            ->header('Access-Control-Allow-Headers', 'Content-Type');
    }
}
