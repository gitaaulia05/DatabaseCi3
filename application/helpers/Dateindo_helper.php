<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
if ( ! function_exists('dateindo'))
{
 function dateindo($date) { 
        if ($date=='0000-00-00') 
        {
        	return $kosong='-';
        }
        else
        {
        	$bulanindo = array("Januari", "Februari", "Maret",
                           "April", "Mei", "Juni",
                           "Juli", "Agustus", "September",
                           "Oktober", "November", "Desember");
    
	        $tahun = substr($date, 0, 4); // memisahkan format tahun menggunakan substring
	        $bulan = substr($date, 5, 2); // memisahkan format bulan menggunakan substring
	        $tgl   = substr($date, 8, 2); // memisahkan format tanggal menggunakan substring
	        
	        $result = (int)$tgl . " " . $bulanindo[(int)$bulan-1] . " ". $tahun;
	        return $result;
        }       
	}
}