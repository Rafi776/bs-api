<?php

namespace App\Http\Controllers;

use App\Services\SupabaseService;
use Illuminate\Http\Request;

class BsMemberController extends Controller
{
    public function index(SupabaseService $supabase)
    {
        return $supabase->get('prm_recruitment')->json();
    }

    public function store(Request $request, SupabaseService $supabase)
    {
        $data = $request->only([
            'bs_id',
            'full_name',
            'email',
            'whatsapp_number',
            'unit',
            'district',
            'level',
            'current_education',
            'preferred_team',
            'photo_url'
        ]);

        return $supabase->insert('prm_recruitment', $data)->json();
    }
}
