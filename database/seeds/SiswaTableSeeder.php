<?php

use Illuminate\Database\Seeder;

class SiswaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$siswa = [ 
    	['nama'=>'dedehikmat', 'jenis_kelamin'=>'laki-laki', 'tanggal_lahir'=>'2000-01-01'],
    	['nama'=>'iswanto', 'jenis_kelamin'=>'laki-laki', 'tanggal_lahir'=>'2000-05-29'],
    	['nama'=>'monik', 'jenis_kelamin'=>'perempuan', 'tanggal_lahir'=>'1999-01-01']];
    	//memasukan data ke database
        DB::table('siswa')->insert($siswa);
    }
}
