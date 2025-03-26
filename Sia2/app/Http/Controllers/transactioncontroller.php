<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\payments;
use Illuminate\Support\Facades\DB;
use App\Models\service__requests;
use App\Models\Resident;

use App\Models\Verification;
class transactioncontroller extends Controller
{
   

    public function getPaymentsData()
{
    try {
        $moderate = Resident::join('payments as p', 'residents.id', '=', 'p.resident_id')
            ->join('service_requests as s', 's.id', '=', 'p.request_id')
            ->select('p.*', 'residents.name AS resident_name', 's.request_type AS service_request_type')
            ->orderBy('p.created_at', 'desc') // Sorts payments by latest
            ->get();

        return response()->json(['success' => true, 'moderate' => $moderate], 200);
    } catch (\Exception $e) {
        return response()->json(['success' => false, 'message' => 'Failed to fetch data', 'error' => $e->getMessage()], 500);
    }
}



    public function getServiceRequest()
    {

        $challenging = service__requests::with(['resident'])->get(); // ✅ Correct


        return response()->json([
            'success' => true,
            'challenging' => $challenging
        ], 200);
    }

    public function getVerificationsDifficult()
    {
        $difficult = Verification::with([
            'resident' => function($q) {
                $q->select('*');
            }
        ])->get();

        return response()->json([
            'success' => true,
            'difficult' => $difficult
        ], 200);
    }

}
