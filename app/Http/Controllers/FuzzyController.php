<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FuzzyController extends Controller
{
 
public function FuzzyJarak(){
	$sensorUS = 25;
	$jarak = 10;

if ($sensorUS <= 90)
  { $jarak [0] = 1;}
  else if ($sensorUS > 90 && $sensorUS <= 110)
  {  $jarak [0] = (110 - $sensorUS)/(110 - 90); }
  else
  { $jarak [0] = 0;}

  // untuk gelas sedang
  if ($sensorUS <= 90)
  { $jarak [1] = 0;}
  else if ($sensorUS > 90 && $sensorUS <= 110)
  { $jarak [1] = ($sensorUS -90)/(20-90);}
  else if ($sensorUS > 110 && $sensorUS <= 125)
  { $jarak [1] = (125-$sensorUS)/(125 -110);}
  else
  { $jarak [1] = 0;}

  // untuk gelas tinggi
  if ($sensorUS <= 110)
  { $jarak [2] = 0;}
  else if ($sensorUS > 110 && $sensorUS <= 125)
  { $jarak [2] = ($sensorUS-110)/(110-125);}
  else if ($sensorUS > 125)
  { $jarak [2] = 1;}

return view('welcome.blade.php');

}

public function FuzzyServo(){
	$pos = 10;
	$jarak = '';

if ($pos <= 10)
  { $jarak [0] = 1;}
  else if ($pos > 10 && $pos <= 20)
  {  $jarak [0] = (20 - $pos)/(20 - 10); }
  else
  { $jarak [0] = 0;}

  // untuk kondisi sedang
  if ($pos <= 10)
  { $jarak [1] = 0;}
  else if ($pos > 10 && $pos <= 20)
  { $jarak [1] = ($pos -10)/(20-10);}
  else if ($pos > 20 && $pos <= 40)
  { $jarak [1] = (40-$pos)/(40 - 20);}
  else
  { $jarak [1] = 0;}

  // untuk kondisi lambat
  if ($pos <= 20)
  { $jarak [2] = 0;}
  else if ($pos > 20 && $pos <= 30)
  { $jarak [2] = ($pos-20)/(30-20);}
  else if ($pos > 30)
  { $jarak [2] = 1;}

}

public function RuleEva(){
int i, j;
 for ( i=0; i<=2; i=i+1)
 {
   for ( j=0; j<=2; j=j+1)
   {
     debit = min(servo[i], jarak[j]);
     rule [i][j] = debit;
   } 
 } 
 rule00 = rule [0][0]; // (lambat,rendah = Lambat)
 rule01 = rule [0][1]; // (lambat,sedang = Lambat)
 rule02 = rule [0][2]; // (lambat,tinggi = Lambat)
 
 rule10 = rule [1][0]; // (sedang,rendah = lambat)
 rule11 = rule [1][1]; // (sedang,sedang = Sedang)
 rule12 = rule [1][2]; // (sedang,tinggi = Cepat)
 
 rule20 = rule [2][0]; // (cepat,rendah = Cepat)
 rule21 = rule [2][1]; // (cepat,sedang = Cepat)
 rule22 = rule [2][2]; // (cepat,tinggi= Cepat)
}}



}

public function Defuzzifikasi(){

	float lambat = 40;
  float sedang = 80;
  float cepat = 105;
  RuleEva();
  pwm = (rule00 * lambat) + (rule01 * lambat)+ (rule02 *lambat)+ (rule10 * lambat)+ (rule11 * sedang)+ (rule12 * cepat) + (rule20 * cepat)+ (rule21 * cepat)+ (rule22 * cepat);

  defuz = 0;
  int i, j;
  for ( i=0; i<=2; i=i+1)
  {
    for ( j=0; j<=2; j=j+1)
    {
      defuz = defuz + rule [i][j];
    } 
  } 
  pwm = pwm / defuz;
}


}
