<?php

function CarNum() {
  $Num = "0123456789";
  $CarNum = $Num . $Num . $Num . $Num . $Num . $Num;
  $MelNum = str_shuffle($CarNum);
  $CountNum = substr($MelNum, 0, $_POST['NumberCar']);
  return $CountNum;
}

function CarMin() {
  $Min = "azertyuiopqsdfghjklmwxcvbn";
  $CarMin = $Min . $Min;
  $MelMin = str_shuffle($CarMin);
  $CountMin = substr($MelMin, 0, $_POST['NumberCar']);
  return $CountMin;
}

function CarMaj() {
  $Maj = "AZERTYUIOPQSDFGHJKLMWXCVBN";
  $CarMaj = $Maj . $Maj;
  $MelMaj = str_shuffle($CarMaj);
  $CountMaj = substr($MelMaj, 0, $_POST['NumberCar']);
  return $CountMaj;
}

function CarSpc() {
  $Spc = "&é#~{}[]()-|è``_^çà@)=+$*µù%,?;./:§!";
  $CarSpc = $Spc . $Spc;
  $MelSpc = str_shuffle($CarSpc);
  $CountSpc = substr($MelSpc, 0, $_POST['NumberCar']);
  return $CountSpc;
}

function CarMinAndMaj() {
  $Min = "azertyuiopqsdfghjklmwxcvbn";
  $Maj = "AZERTYUIOPQSDFGHJKLMWXCVBN";
  $CarMinMaj = $Min . $Maj;
  $MelMinMaj = str_shuffle($CarMinMaj);
  $CountMinMaj = substr($MelMinMaj, 0, $_POST['NumberCar']);
  return $CountMinMaj;
}

function CarMinAndNum() {
  $Min = "azertyuiopqsdfghjklmwxcvbn";
  $Num = "0123456789";
  $CarMinNum = $Min . $Min . $Num . $Num;
  $MelMinNum = str_shuffle($CarMinNum);
  $CountMinNum = substr($MelMinNum, 0, $_POST['NumberCar']);
  return $CountMinNum;
}

function CarMajAndNum() {
  $Maj = "AZERTYUIOPQSDFGHJKLMWXCVBN";
  $Num = "0123456789";
  $CarMajNum = $Maj . $Maj . $Num . $Num;
  $MelMajNum = str_shuffle($CarMajNum);
  $CountMajNum = substr($MelMajNum, 0, $_POST['NumberCar']);
  return $CountMajNum;
}

function CarMinAndSpc() {
  $Min = "azertyuiopqsdfghjklmwxcvbn";
  $Spc = "&é#~{}[]()-|è``_^çà@)=+$*µù%,?;./:§!";
  $CarMinSpc = $Min . $Spc;
  $MelMinSpc = str_shuffle($CarMinSpc);
  $CountMinSpc = substr($MelMinSpc, 0, $_POST['NumberCar']);
  return $CountMinSpc;
}

function CarNumAndSpc() {
  $Num = "0123456789";
  $Spc = "&é#~{}[]()-|è``_^çà@)=+$*µù%,?;./:§!";
  $CarNumSpc = $Num . $Num . $Spc . $Spc;
  $MelNumSpc = str_shuffle($CarNumSpc);
  $CountNumSpc = substr($MelNumSpc, 0, $_POST['NumberCar']);
  return $CountNumSpc;
}

function CarMajAndSpc() {
  $Maj = "AZERTYUIOPQSDFGHJKLMWXCVBN";
  $Spc = "&é#~{}[]()-|è``_^çà@)=+$*µù%,?;./:§!";
  $CarMajSpc = $Maj . $Spc;
  $MelMajSpc = str_shuffle($CarMajSpc);
  $CountMajSpc = substr($MelMajSpc, 0, $_POST['NumberCar']);
  return $CountMajSpc;
}

function CarMinAndMajAndNum() {
  $Min = "azertyuiopqsdfghjklmwxcvbn";
  $Maj = "AZERTYUIOPQSDFGHJKLMWXCVBN";
  $Num = "0123456789";
  $CarMinMajNum = $Min . $Maj . $Num;
  $MelMinMajNum = str_shuffle($CarMinMajNum);
  $CountMinMajNum = substr($MelMinMajNum, 0, $_POST['NumberCar']);
  return $CountMinMajNum;
}

function CarMinAndMajAndSpc() {
  $Min = "azertyuiopqsdfghjklmwxcvbn";
  $Maj = "AZERTYUIOPQSDFGHJKLMWXCVBN";
  $Spc = "&é#~{}[]()-|è``_^çà@)=+$*µù%,?;./:§!";
  $CarMinMajSpc = $Min . $Maj . $Spc;
  $MelMinMajSpc = str_shuffle($CarMinMajSpc);
  $CountMinMajSpc = substr($MelMinMajSpc, 0, $_POST['NumberCar']);
  return $CountMinMajSpc;
}

function CarMinAndNumAndSpc() {
  $Min = "azertyuiopqsdfghjklmwxcvbn";
  $Num = "0123456789";
  $Spc = "&é#~{}[]()-|è``_^çà@)=+$*µù%,?;./:§!";
  $CarMinNumSpc = $Min . $Num . $Spc;
  $MelMinNumSpc =  str_shuffle($CarMinNumSpc);
  $CountMinNumSpc = substr($MelMinNumSpc, 0, $_POST['NumberCar']);
  return $CountMinNumSpc;
}

function CarMajAndNumAndSpc() {
  $Maj = "AZERTYUIOPQSDFGHJKLMWXCVBN";
  $Num = "0123456789";
  $Spc = "&é#~{}[]()-|è``_^çà@)=+$*µù%,?;./:§!";
  $CarMajNumSpc = $Maj . $Num . $Spc;
  $MelMajNumSpc = str_shuffle($CarMajNumSpc);
  $CountMajNumSpc = substr($MelMajNumSpc, 0, $_POST['NumberCar']);
  return $CountMajNumSpc;
}

function CarMinAndMajAndNumAndSpc() {
  $Min = "azertyuiopqsdfghjklmwxcvbn";
  $Maj = "AZERTYUIOPQSDFGHJKLMWXCVBN";
  $Num = "0123456789";
  $Spc = "&é#~{}[]()-|è``_^çà@)=+$*µù%,?;./:§!";
  $CarMinMajNumSpc = $Min . $Maj . $Num . $Spc;
  $MelMinMajNumSpc = str_shuffle($CarMinMajNumSpc);
  $CountMinMajNumSpc = substr($MelMinMajNumSpc, 0, $_POST['NumberCar']);
  return $CountMinMajNumSpc;
}

if (isset($_POST['Num']) && ($_POST['Min']) && ($_POST['Maj']) && ($_POST['Spc'])) {
  $Result = CarMinAndMajAndNumAndSpc();
  echo $Result;
}
elseif (isset($_POST['Num']) && ($_POST['Min']) && ($_POST['Maj'])) {
  $Result = CarMinAndMajAndNum();
  echo $Result;
}
elseif (isset($_POST['Spc']) && ($_POST['Min']) && ($_POST['Num'])) {
  $Result = CarMinAndNumAndSpc();
  echo $Result;
}
elseif (isset($_POST['Spc']) && ($_POST['Maj']) && ($_POST['Num'])) {
  $Result = CarMajAndNumAndSpc();
  echo $Result;
}
elseif (isset($_POST['Spc']) && ($_POST['Maj']) && ($_POST['Min'])) {
  $Result = CarMinAndMajAndSpc();
  echo $Result;
}
elseif (isset($_POST['Num']) && ($_POST['Min'])) {
  $Result = CarMinAndNum();
  echo $Result;
}
elseif (isset($_POST['Num']) && ($_POST['Maj'])) {
  $Result = CarMajAndNum();
  echo $Result;
}
elseif (isset($_POST['Min']) && ($_POST['Maj'])) {
  $Result = CarMinAndMaj();
  echo $Result;
}
elseif (isset($_POST['Spc']) && ($_POST['Min'])) {
  $Result = CarMinAndSpc();
  echo $Result;
}
elseif (isset($_POST['Spc']) && ($_POST['Maj'])) {
  $Result = CarMajAndSpc();
  echo $Result;
}
elseif (isset($_POST['Num'])) {
  $Result = CarNum();
  echo $Result;
}
elseif (isset($_POST['Min'])) {
  $Result = CarMin();
  echo $Result;
}
elseif (isset($_POST['Maj'])) {
  $Result = CarMaj();
  echo $Result;
}
elseif (isset($_POST['Spc'])) {
  $Result = CarSpc();
  echo $Result;
}

?>
