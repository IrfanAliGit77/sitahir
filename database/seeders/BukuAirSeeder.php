<?php

namespace Database\Seeders;

use App\Models\BukuAir;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class BukuAirSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

        $datas = [
            [
                'id' => 1,
                'id_anggota' => 1,
                'tahun' => 2021,
                'bulan' => 2,
                'meteran_air' => 998,
                'kubik' => 10,
                'tarif' => 15000,
                'status' => 'Lunas',
                'tgl_bayar' => Carbon::parse('2021-02-23'),
            ],
            [
                'id' => 2,
                'id_anggota' => 2,
                'tahun' => 2021,
                'bulan' => 3,
                'meteran_air' =>1000,
                'kubik' => 13,
                'tarif' => 19500,
                'status' => 'Lunas',
                'tgl_bayar' =>  Carbon::parse('2021-03-12'),
            ],
            [
                'id' => 3,
                'id_anggota' => 3,
                'tahun' => 2021,
                'bulan' => 3,
                'meteran_air' => 976,
                'kubik' => 9,
                'tarif' => 14000, 
                'status' => 'Lunas',
                'tgl_bayar' => Carbon::parse('2021-03-23'),
            ],
            [
                'id' => 4,
                'id_anggota' => 4,
                'tahun' => 2021,
                'bulan' => 3,
                'meteran_air' => 1098,
                'kubik' => 16,
                'tarif' => 24000,
                'status' => 'Lunas',
                'tgl_bayar' => Carbon::parse('2021-03-24'),
            ],
            [
                'id' => 5,
                'id_anggota' => 5,
                'tahun' => 2021,
                'bulan' => 4,
                'meteran_air' => 1023,
                'kubik' => 14,
                'tarif' => 21000, 
                'status' => 'Lunas',
                'tgl_bayar' => Carbon::parse('2021-04-11'),
            ],
            [
                'id' => 6,
                'id_anggota' => 1,
                'tahun' => 2021,
                'bulan' => 3,
                'meteran_air' => 1021,
                'kubik' => 13, 
                'tarif' => 19500,
                'status' => 'Lunas',
                'tgl_bayar' => Carbon::parse('2021-03-11'),
            ],
            [
                'id' => 7,
                'id_anggota' => 1,
                'tahun' => 2021,
                'bulan' => 4,
                'meteran_air' => 996,
                'kubik' => 10,
                'tarif' => 15000,
                'status' => 'Lunas',
                'tgl_bayar' => Carbon::parse('2021-04-13'),
            ],
            [
                'id' => 8,
                'id_anggota' => 2,
                'tahun' => 2021,
                'bulan' => 4,
                'meteran_air' => 1020,
                'kubik' => 13,
                'tarif' => 19500,
                'status' => 'Lunas',
                'tgl_bayar' => Carbon::parse('2021-04-01'),
            ],
            [
                'id' => 9,
                'id_anggota' => 3,
                'tahun' => 2021,
                'bulan' => 4,
                'meteran_air' => 1209,
                'kubik' => 25,
                'tarif' => 40000,
                'status' => 'Lunas',
                'tgl_bayar' => Carbon::parse('2021-04-13'),
            ],
            [
                'id' => 10,
                'id_anggota' => 4,
                'tahun' => 2021,
                'bulan' => 4,
                'meteran_air' => 956,
                'kubik' => 8,
                'tarif' => 13000,
                'status' => 'Lunas',
                'tgl_bayar' => Carbon::parse('2021-04-13'),
            ],
            [
                'id' => 11,
                'id_anggota' => 1,
                'tahun' => 2021,
                'bulan' => 5,
                'meteran_air' => 976,
                'kubik' => 9,
                'tarif' => 14000,
                'status' => 'Lunas',
                'tgl_bayar' => Carbon::parse('2021-05-01'),
            ],
            [
                'id' => 12,
                'id_anggota' => 2,
                'tahun' => 2021,
                'bulan' => 5,
                'meteran_air' => 1098,
                'kubik' => 16,
                'tarif' => 24000,
                'status' => 'Lunas',
                'tgl_bayar' => Carbon::parse('2021-05-21'),
            ],
            [
                'id' => 13,
                'id_anggota' => 3,
                'tahun' => 2021,
                'bulan' => 5,
                'meteran_air' => 1023,
                'kubik' => 14,
                'tarif' => 21000,
                'status' => 'Lunas',
                'tgl_bayar' => Carbon::parse('2021-05-06'),
            ],
            [
                'id' => 14,
                'id_anggota' => 4,
                'tahun' => 2021,
                'bulan' => 5,
                'meteran_air' => 1021,
                'kubik' => 13,
                'tarif' => 19500,
                'status' => 'Lunas',
                'tgl_bayar' => Carbon::parse('2021-05-20'),
            ],
            [
                'id' => 15,
                'id_anggota' => 5,
                'tahun' => 2021,
                'bulan' => 5,
                'meteran_air' => 996,
                'kubik' => 10,
                'tarif' => 15000,
                'status' => 'Lunas',
                'tgl_bayar' => Carbon::parse('2021-05-05'),
            ],
            [
                'id' => 16,
                'id_anggota' => 1,
                'tahun' => 2021,
                'bulan' => 6,
                'meteran_air' => 1020,
                'kubik' => 13,
                'tarif' => 19500,
                'status' => 'Lunas',
                'tgl_bayar' => Carbon::parse('2021-06-21'),
            ],
            [
                'id' => 17,
                'id_anggota' => 2, 
                'tahun' => 2021,
                'bulan' => 6,
                'meteran_air' => 1021,
                'kubik' => 13,
                'tarif' => 19500,
                'status' => 'Lunas',
                'tgl_bayar' => Carbon::parse('2021-06-19'),
            ],
            [
                'id' => 18,
                'id_anggota' => 3, 
                'tahun' => 2021,
                'bulan' => 6,
                'meteran_air' => 996,
                'kubik' => 10, 
                'tarif' => 15000,
                'status' => 'Lunas',
                'tgl_bayar' => Carbon::parse('2021-06-15'),
            ],
            [
                'id' => 19,
                'id_anggota' => 4,
                'tahun' => 2021,
                'bulan' => 6,
                'meteran_air' => 1020,
                'kubik' => 13,
                'tarif' => 19500,
                'status' => 'Lunas',
                'tgl_bayar' => Carbon::parse('2021-06-09'),
            ],
            [
                'id' => 20,
                'id_anggota' => 5,
                'tahun' => 2021,
                'bulan' => 6,
                'meteran_air' => 1209,
                'kubik' => 25,
                'tarif' => 40000,
                'status' => 'Lunas',
                'tgl_bayar' => Carbon::parse('2021-06-01'),
            ],
            [
                'id' => 21,
                'id_anggota' => 1, 
                'tahun' => 2021,
                'bulan' => 7,
                'meteran_air' => 1023,
                'kubik' => 14,
                'tarif' => 21000,
                'status' => 'Lunas',
                'tgl_bayar' => Carbon::parse('2021-07-04'),
            ],
            [
                'id' => 22,
                'id_anggota' => 2,
                'tahun' => 2021,
                'bulan' => 7,
                'meteran_air' => 1021,
                'kubik' => 13,
                'tarif' => 19500,
                'status' => 'Lunas',
                'tgl_bayar' => Carbon::parse('2021-07-24'),
            ],
            [
                'id' => 23,
                'id_anggota' => 3,
                'tahun' => 2021,
                'bulan' => 7,
                'meteran_air' => 996,
                'kubik' => 10,
                'tarif' => 15000,
                'status' => 'Lunas',
                'tgl_bayar' => Carbon::parse('2021-07-01'),
            ],
            [
                'id' => 24,
                'id_anggota' => 4,
                'tahun' => 2021,
                'bulan' => 7,
                'meteran_air' => 1098,
                'kubik' => 16,
                'tarif' => 24000,
                'status' => 'Lunas',
                'tgl_bayar' => Carbon::parse('2021-07-01'),
            ],
            [
                'id' => 25,
                'id_anggota' => 5,
                'tahun' => 2021,
                'bulan' => 7,
                'meteran_air' => 1023,
                'kubik' => 14,
                'tarif' => 21000,
                'status' =>'Lunas',
                'tgl_bayar' => Carbon::parse('2021-07-07'),
            ],
            [
                'id' => 26,
                'id_anggota' => 1,
                'tahun' => 2021,
                'bulan' => 8, 
                'meteran_air' => 1098,
                'kubik' => 16,
                'tarif' => 24000,
                'status' => 'Lunas',
                'tgl_bayar' => Carbon::parse('2021-08-16'),
            ],
            [
                'id' => 27,
                'id_anggota' => 2,
                'tahun' => 2021,
                'bulan' => 8,
                'meteran_air' => 1023,
                'kubik' => 14,
                'tarif' => 21000,
                'status' => 'Lunas',
                'tgl_bayar' => Carbon::parse('2021-08-10'),
            ],
            [
                'id' => 28,
                'id_anggota' => 3,
                'tahun' => 2021,
                'bulan' => 8,
                'meteran_air' => 1021,
                'kubik' => 13,
                'tarif' => 19500,
                'status' => 'Lunas',
                'tgl_bayar' => Carbon::parse('2021-08-21'),
            ],
            [
                'id' => 29,
                'id_anggota' => 4,
                'tahun' => 2021,
                'bulan' => 8,
                'meteran_air' => 996,
                'kubik' => 10,
                'tarif' => 15000,
                'status' => 'Lunas',
                'tgl_bayar' => Carbon::parse('2021-08-04'),
            ],
            [
                'id' => 30,
                'id_anggota' => 5,
                'tahun' => 2021,
                'bulan' => 8,
                'meteran_air' => 1020,
                'kubik' => 13,
                'tarif' => 19500,
                'status' => 'Lunas',
                'tgl_bayar' => Carbon::parse('2021-08-21'),
            ],
            [
                'id' => 31,
                'id_anggota' => 1,
                'tahun' => 2021,
                'bulan' => 9,
                'meteran_air' => 1209,
                'kubik' => 25,
                'tarif' => 40000,
                'status' => 'Lunas',
                'tgl_bayar' => Carbon::parse('2021-08-01'),
            ],
            [
                'id' => 32,
                'id_anggota' => 2,
                'tahun' => 2021,
                'bulan' => 9,
                'meteran_air' => 956,
                'kubik' => 8,
                'tarif' => 13000,
                'status' =>'Lunas',
                'tgl_bayar' => Carbon::parse('2021-09-22'),
            ],
            [
                'id' => 33,
                'id_anggota' => 3,
                'tahun' => 2021,
                'bulan' => 9,
                'meteran_air' => 976,
                'kubik' => 9,
                'tarif' => 14000,
                'status' => 'Lunas',
                'tgl_bayar' => Carbon::parse('2021-09-11'),
            ],
            [
                'id' => 34,
                'id_anggota' => 4,
                'tahun' => 2021,
                'bulan' => 9,
                'meteran_air' => 1098,
                'kubik' => 16, 
                'tarif' => 24000,
                'status' => 'Lunas',
                'tgl_bayar' => Carbon::parse('2021-09-22'),
            ],
            [
                'id' => 35,
                'id_anggota' => 5,
                'tahun' => 2021,
                'bulan' => 9,
                'meteran_air' => 1023,
                'kubik' => 14,
                'tarif' => 21000,
                'status' => 'Lunas',
                'tgl_bayar' => Carbon::parse('2021-09-01'),
            ],
            [
                'id' => 36,
                'id_anggota' => 1,
                'tahun' => 2021,
                'bulan' => 10,
                'meteran_air' => 1098,
                'kubik' => 16,
                'tarif' => 24000,
                'status' => 'Lunas',
                'tgl_bayar' => Carbon::parse('2021-10-01'),
            ],
            [
                'id' => 37,
                'id_anggota' => 2,
                'tahun' => 2021,
                'bulan' => 10,
                'meteran_air' => 1023,
                'kubik' => 14,
                'tarif' => 21000,
                'status' => 'Lunas',
                'tgl_bayar' => Carbon::parse('2021-10-20'),
            ],
            [
                'id' => 38,
                'id_anggota' => 3,
                'tahun' => 2021,
                'bulan' => 10,
                'meteran_air' => 1021,
                'kubik' => 13,
                'tarif' => 19500,
                'status' => 'Lunas',
                'tgl_bayar' => Carbon::parse('2021-10-01'),
            ],
            [
                'id' => 39,
                'id_anggota' => 4,
                'tahun' => 2021,
                'bulan' => 10,
                'meteran_air' => 996, 
                'kubik' => 10,
                'tarif' => 15000,
                'status' => 'Lunas',
                'tgl_bayar' => Carbon::parse('2021-10-20'),
            ],
            [
                'id' => 40,
                'id_anggota' => 5,
                'tahun' => 2021,
                'bulan' =>  10,
                'meteran_air' => 1020,
                'kubik' => 13,
                'tarif' => 19500,
                'status' => 'Lunas',
                'tgl_bayar' => Carbon::parse('2021-10-13'),
            ],
            [
                'id' => 41,
                'id_anggota' => 1,
                'tahun' => 2021,
                'bulan' => 11,
                'meteran_air' => 1209,
                'kubik' => 25,
                'tarif' => 40000,
                'status' => 'Lunas',
                'tgl_bayar' => Carbon::parse('2021-10-19'),
            ],
            [
                'id' => 42,
                'id_anggota' => 2,
                'tahun' => 2021,
                'bulan' => 11,
                'meteran_air' => 956,
                'kubik' => 8,
                'tarif' => 13000,
                'status' => 'Lunas',
                'tgl_bayar' => Carbon::parse('2021-10-23'),
            ],
            [
                'id' => 43,
                'id_anggota' => 3,
                'tahun' => 2021,
                'bulan' => 11,
                'meteran_air' =>  976,
                'kubik' => 9, 
                'tarif' => 14000,
                'status' => 'Lunas',
                'tgl_bayar' => Carbon::parse('2021-11-21'),
            ],
            [
                'id' => 44,
                'id_anggota' => 4,
                'tahun' => 2021,
                'bulan' => 11,
                'meteran_air' => 1098,
                'kubik' => 16,
                'tarif' => 24000,
                'status' => 'Lunas',
                'tgl_bayar' => Carbon::parse('2021-11-03'),
            ],
            [
                'id' => 45,
                'id_anggota' => 5,
                'tahun' => 2021,
                'bulan' => 11,
                'meteran_air' => 1023,
                'kubik' => 14,
                'tarif' => 21000,
                'status' => 'Lunas',
                'tgl_bayar' => Carbon::parse('2021-11-02'),
            ],
            [
                'id' => 46,
                'id_anggota' => 1,
                'tahun' => 2021,
                'bulan' => 12,
                'meteran_air' => 1020,
                'kubik' => 13,
                'tarif' => 19500,
                'status' => 'Lunas',
                'tgl_bayar' => Carbon::parse('2021-11-06'),
            ],
            [
                'id' => 47,
                'id_anggota' => 2,
                'tahun' => 2021,
                'bulan' => 12,
                'meteran_air' => 1209,
                'kubik' => 25,
                'tarif' => 40000,
                'status' => 'Lunas',
                'tgl_bayar' => Carbon::parse('2021-11-02'),
            ],
            [
                'id' => 48,
                'id_anggota' => 3,
                'tahun' => 2021,
                'bulan' => 12,
                'meteran_air' => 956,
                'kubik' => 8, 
                'tarif' => 13000,
                'status' => 'Lunas',
                'tgl_bayar' => Carbon::parse('2021-12-04'),
            ],
            [
                'id' => 49,
                'id_anggota' => 4,
                'tahun' => 2021,
                'bulan' => 12,
                'meteran_air' => 976,
                'kubik' => 9,
                'tarif' => 14000,
                'status' => 'Lunas',
                'tgl_bayar' => Carbon::parse('2021-12-08'),
            ],
            [
                'id' => 50,
                'id_anggota' => 5,
                'tahun' => 2021,
                'bulan' => 12,
                'meteran_air' => 1098,
                'kubik' => 16,
                'tarif' => 24000,
                'status' => 'Lunas',
                'tgl_bayar' => Carbon::parse('2021-12-02'),
            ],
            [
                'id' => 51,
                'id_anggota' => 1,
                'tahun' => 2022,
                'bulan' => 1,
                'meteran_air' => 1023,
                'kubik' => 14,
                'tarif' => 21000,
                'status' => 'Lunas',
                'tgl_bayar' => Carbon::parse('2022-01-21'),
            ],
            [
                'id' => 52,
                'id_anggota' => 2,
                'tahun' => 2022,
                'bulan' => 1,
                'meteran_air' => 1021,
                'kubik' => 13,
                'tarif' => 19500,
                'status' => 'Lunas',
                'tgl_bayar' => Carbon::parse('2022-01-13'),
            ],
            [
                'id' => 53,
                'id_anggota' => 3,
                'tahun' => 2022,
                'bulan' => 1,
                'meteran_air' => 996,
                'kubik' => 10,
                'tarif' => 15000,
                'status' => 'Lunas',
                'tgl_bayar' => Carbon::parse('2022-01-03'),
            ],
            [
                'id' => 54,
                'id_anggota' => 4,
                'tahun' => 2022,
                'bulan' => 1,
                'meteran_air' => 1020,
                'kubik' => 13,
                'tarif' => 19500,
                'status' => 'Lunas',
                'tgl_bayar' => Carbon::parse('2022-01-08'),
            ],
            [
                'id' => 55,
                'id_anggota' => 5,
                'tahun' => 2022,
                'bulan' => 1,
                'meteran_air' => 1098,
                'kubik' => 16,
                'tarif' => 24000,
                'status' => 'Lunas',
                'tgl_bayar' => Carbon::parse('2022-01-01'),
            ],
            [
                'id' => 56,
                'id_anggota' => 6,
                'tahun' => 2022,
                'bulan' => 1,
                'meteran_air' => 1023,
                'kubik' => 14,
                'tarif' => 21000,
                'status' => 'Lunas',
                'tgl_bayar' => Carbon::parse('2022-01-21'),
            ],
            [
                'id' => 57,
                'id_anggota' => 1,
                'tahun' => 2022,
                'bulan' => 2,
                'meteran_air' => 1021,
                'kubik' => 16,
                'tarif' => 24000,
                'status' => 'Lunas',
                'tgl_bayar' => Carbon::parse('2022-02-21'),
            ],
            [
                'id' => 58,
                'id_anggota' => 2, 
                'tahun' => 2022,
                'bulan' => 2,
                'meteran_air' => 996,
                'kubik' => 14,
                'tarif' => 21000,
                'status' => 'Lunas',
                'tgl_bayar' => Carbon::parse('2022-02-03'),
            ],
            [
                'id' => 59,
                'id_anggota' => 3, 
                'tahun' => 2022,
                'bulan' => 2,
                'meteran_air' => 1020,
                'kubik' => 13,
                'tarif' => 19500,
                'status' => 'Lunas',
                'tgl_bayar' => Carbon::parse('2022-02-04'),
            ],
            [
                'id' => 60,
                'id_anggota' => 4,
                'tahun' => 2022,
                'bulan' => 2,
                'meteran_air' => 1209,
                'kubik' => 10,
                'tarif' => 15000,
                'status' => 'Lunas',
                'tgl_bayar' => Carbon::parse('2022-02-23'),
            ],
            [
                'id' => 61,
                'id_anggota' => 5,
                'tahun' => 2022,
                'bulan' => 2,
                'meteran_air' => 956,
                'kubik' => 13,
                'tarif' => 19500,
                'status' => 'Lunas',
                'tgl_bayar' => Carbon::parse('2022-02-01'),
            ],
            [
                'id' => 62,
                'id_anggota' => 6,
                'tahun' => 2022,
                'bulan' => 2,
                'meteran_air' => 976,
                'kubik' => 25,
                'tarif' => 40000,
                'status' => 'Lunas',
                'tgl_bayar' => Carbon::parse('2022-02-06'),
            ],
            [
                'id' => 63,
                'id_anggota' => 1,
                'tahun' => 2022,
                'bulan' => 3,
                'meteran_air' => 1209,
                'kubik' => 25,
                'tarif' => 40000,
                'status' => 'Lunas',
                'tgl_bayar' => Carbon::parse('2022-03-21'),
            ],
            [
                'id' => 64,
                'id_anggota' => 2,
                'tahun' => 2022,
                'bulan' => 3,
                'meteran_air' => 956,
                'kubik' => 8,
                'tarif' => 13000,
                'status' => 'Lunas',
                'tgl_bayar' => Carbon::parse('2022-03-07'),
            ],
            [
                'id' => 65,
                'id_anggota' => 3,
                'tahun' => 2022,
                'bulan' => 3,
                'meteran_air' => 976,
                'kubik' => 9,
                'tarif' => 14000,
                'status' => 'Lunas',
                'tgl_bayar' => Carbon::parse('2022-03-04'),
            ],
            [
                'id' => 66,
                'id_anggota' => 4,
                'tahun' => 2022,
                'bulan' => 3,
                'meteran_air' => 1098,
                'kubik' => 16,
                'tarif' => 24000,
                'status' => 'Lunas',
                'tgl_bayar' => Carbon::parse('2022-03-08'),
            ],
            [
                'id' => 67,
                'id_anggota' => 5,
                'tahun' => 2022,
                'bulan' => 3,
                'meteran_air' => 1023,
                'kubik' => 14,
                'tarif' => 21000,
                'status' => 'Lunas',
                'tgl_bayar' => Carbon::parse('2022-03-05'),
            ],
            [
                'id' => 68,
                'id_anggota' => 6,
                'tahun' => 2022,
                'bulan' => 3,
                'meteran_air' => 1021,
                'kubik' => 13,
                'tarif' => 19500,
                'status' => 'Lunas',
                'tgl_bayar' => Carbon::parse('2022-03-07'),
            ],
            [
                'id' => 69,
                'id_anggota' => 7,
                'tahun' => 2022,
                'bulan' => 3,
                'meteran_air' => 996,
                'kubik' => 10,
                'tarif' => 15000,
                'status' => 'Lunas',
                'tgl_bayar' => Carbon::parse('2022-03-24'),
            ],
            [
                'id' => 70,
                'id_anggota' => 1,
                'tahun' => 2022,
                'bulan' => 4,
                'meteran_air' => 1020,
                'kubik' => 13,
                'tarif' => 19500,
                'status' => 'Lunas',
                'tgl_bayar' => Carbon::parse('2022-04-24'),
            ],
            [
                'id' => 71,
                'id_anggota' => 2,
                'tahun' => 2022,
                'bulan' => 4,
                'meteran_air' => 1098,
                'kubik' => 12,
                'tarif' => 18000,
                'status' => 'Lunas',
                'tgl_bayar' => Carbon::parse('2022-04-21'),
            ],
            [
                'id' => 72,
                'id_anggota' => 3,
                'tahun' => 2022,
                'bulan' => 4,
                'meteran_air' => 976,
                'kubik' => 9,
                'tarif' => 14000,
                'status' => 'Lunas',
                'tgl_bayar' => Carbon::parse('2022-04-04'),
            ],
            [
                'id' =>73,
                'id_anggota' => 4,
                'tahun' => 2022,
                'bulan' => 4,
                'meteran_air' => 1098,
                'kubik' => 16,
                'tarif' => 24000,
                'status' => 'Lunas',
                'tgl_bayar' => Carbon::parse('2022-04-02'),
            ],
            [
                'id' => 74,
                'id_anggota' => 5,
                'tahun' => 2022,
                'bulan' => 4,
                'meteran_air' => 1023,
                'kubik' => 14,
                'tarif' => 21000,
                'status' => 'Lunas',
                'tgl_bayar' => Carbon::parse('2022-04-02'),
            ],
            [
                'id' => 75,
                'id_anggota' => 6,
                'tahun' => 2022,
                'bulan' => 4,
                'meteran_air' => 1021,
                'kubik' => 13,
                'tarif' => 19500,
                'status' => 'Lunas',
                'tgl_bayar' => Carbon::parse('2022-04-02'),
            ],
            [
                'id' => 76,
                'id_anggota' => 7,
                'tahun' => 2022,
                'bulan' => 4,
                'meteran_air' => 996,
                'kubik' => 10,
                'tarif' => 15000,
                'status' => 'Lunas',
                'tgl_bayar' => Carbon::parse('2022-04-20'),
            ],
            [
                'id' => 77,
                'id_anggota' => 1,
                'tahun' => 2022,
                'bulan' => 5,
                'meteran_air' => 996,
                'kubik' => 10,
                'tarif' => 15000,
                'status' => 'Lunas',
                'tgl_bayar' => Carbon::parse('2022-05-06'),
            ],
            [
                'id' => 78,
                'id_anggota' => 2,
                'tahun' => 2022,
                'bulan' =>  5,
                'meteran_air' => 1020,
                'kubik' => 13,
                'tarif' => 19500,
                'status' => 'Lunas',
                'tgl_bayar' => Carbon::parse('2022-05-07'),
            ],
            [
                'id' => 79,
                'id_anggota' => 3,
                'tahun' => 2022,
                'bulan' =>  5,
                'meteran_air' => 1209,
                'kubik' => 13,
                'tarif' => 19500,
                'status' => 'Lunas',
                'tgl_bayar' => Carbon::parse('2022-05-08'),
            ],
            [
                'id' => 80,
                'id_anggota' => 4,
                'tahun' => 2022,
                'bulan' =>  5,
                'meteran_air' => 956,
                'kubik' => 10,
                'tarif' => 15000,
                'status' => 'Lunas',
                'tgl_bayar' => Carbon::parse('2022-05-12'),
            ],
            [
                'id' => 81,
                'id_anggota' => 5,
                'tahun' => 2022,
                'bulan' =>  5,
                'meteran_air' => 976,
                'kubik' => 13,
                'tarif' => 19500,
                'status' => 'Lunas',
                'tgl_bayar' => Carbon::parse('2022-05-15'),
            ],
            [
                'id' => 82,
                'id_anggota' => 6,
                'tahun' => 2022,
                'bulan' =>  5,
                'meteran_air' => 1209,
                'kubik' => 25,
                'tarif' => 40000,
                'status' => 'Lunas',
                'tgl_bayar' => Carbon::parse('2022-05-18'),
            ],
            [
                'id' => 83,
                'id_anggota' => 7,
                'tahun' => 2022,
                'bulan' =>  5,
                'meteran_air' => 956,
                'kubik' => 14,
                'tarif' => 21000,
                'status' => 'Lunas',
                'tgl_bayar' => Carbon::parse('2022-05-21'),
            ],
            [
                'id' => 84,
                'id_anggota' => 8,
                'tahun' => 2022,
                'bulan' =>  5,
                'meteran_air' => 976,
                'kubik' => 13,
                'tarif' => 19500,
                'status' => 'Lunas',
                'tgl_bayar' => Carbon::parse('2022-05-24'),
            ],
            [
                'id' => 85,
                'id_anggota' => 9,
                'tahun' => 2022,
                'bulan' =>  5,
                'meteran_air' => 1098,
                'kubik' => 16,
                'tarif' => 24000,
                'status' => 'Lunas',
                'tgl_bayar' => Carbon::parse('2022-01-27'),
            ]
        ];

        BukuAir::insert($datas);
    }
}