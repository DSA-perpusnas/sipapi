<?php

namespace App\Models\Traits;

trait HasCategory
{
    public static function categoryList()
    {
        return [
            'Perpustakaan Desa',
            'Kecamatan',
            'Kabupaten Kota',
            'Provinsi',
            'SD MI',
            'SMP MTs',
            'SMA SMK MA',
            'Perguruan Tinggi',
            'Khusus',
            'PAUD',
            'SLB',
            'Lembaga NonPemerintah',
            'Rumah Ibadah',
	    'Desa Kelurahan [2025]',
	    'Kecamatan [2025]',
	    'Kabupaten Kota [2025]',
	    'Provinsi [2025]',
	    'PAUD [2025]',
	    'SLB [2025]',
	    'SD MI [2025]',
	    'SMP MTs [2025]',
	    'SMA SMK MA MAK [2025]',
	    'PT Universitas [2025]',
	    'PT Institut Politeknik Sekolah Tinggi [2025]',
	    'PT Akademi Akademi Komunitasi [2025]',
	    'Khusus Lembaga Pemerintah [2025]',
	    'Khusus Lembaga NonPemerintah [2025]',
	    'Khusus Rumah Ibadah [2025]',
        ];
    }
}
