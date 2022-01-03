<?php

function month()
{
    return array(
        "1" => "January",
        "2" => "February",
        "3"=>"March",
        "4"=>"April",
        "5"=>"May",
        "6"=>"June",
        "7"=>"july",
        "8"=>"August",
         "9"=>"September",
        "10"=>"October",
        "11"=>"November",
        "12"=>"December",
    );
}
function get_month($sta)
{
    $get_month = month();
    return $get_month[$sta];
}

function array_value($func, $arrVal)
{
    $get_Value = $func;
    return $get_Value[$arrVal];
}

function status()
{
    return array(
        "1" => "<span class='badge badge-success'>Active</span>",
        "2" => "<span class='badge badge-danger'>Deactive</span>"
    );
}

function get_status($sta)
{
    $get_status = status();
    return $get_status[$sta];
}

function usertype()
{
    return array(
        "1" => "<span class='badge badge-primary'>Admin</span>",
        "2" => "<span class='badge badge-info'>User</span>"
    );
}

function  get_usertype($sta)
{
    $get_usertype = usertype();
    return $get_usertype[$sta];
}

function role()
{
    return array(
        "1" => "Employer",
        "2" => "Jobseeker"
    );
}

function  get_role($sta)
{
    $get_role =role();
    return $get_role[$sta];
}


function number()
{
    return array(
        "0" => "0",
        "1" => " 1",
        "2" => "2",
        "3" => "3",
        "4" => "4",
        "5" => "5",
        "6" => "6",
        "7" => "7",
        "8" => "8",
        "9" => "9",
        "10" => "10",
        "11" => "10+"
    );
}



function get_number($sta)
{
    $get_number = number();
    return $get_number[$sta];
}

function expertise()    
{
    return array(
        "1" => " Expert",
        "2" => "Proficient",
        "3" => "Familiar",
        "4" => "Willing To Learn"
    );
}

function get_expertise($sta)
{
    $get_expertise = expertise();
    return  $get_expertise[$sta];
}

function state()
{
    return array(
        
        "1" =>" Andhra Pradesh",
        "2" => "Arunachal Pradesh",
        "3" => "Assam",
        "4" => "Bihar",
        "5" =>" Chhattisgarh",
        "6" => "Goa",
        "7" => "Gujarat",
        "8" => "Haryana",
        "9" => "Himachal Pradesh",
        "10" => "Jharkhand",
        "11" => "Karnataka",
        "12" => "Kerala",
        "13" => "Madhya Pradesh",
        "14" => "Manipur",
        "16" => "Meghalaya",
        "17" => "Mizoram",
        "18" => "Nagaland",
        "19" => "Odisha",
        "20" =>  "Punjab",
        "21" => "Rajasthan",
        "22" =>  "Sikkim",
        "23" => " Tamil Nadu",
        "24" =>  "Telangana",
        "25" =>  "Tripura",
        "26" =>  "Uttar Pradesh",
        "27" =>  "Uttarakhand",
        "28" =>"West Bengal",
        "29" =>  "Andaman and Nicobar Islands",
        "30" =>  "Chandigarh",
        "31" =>  "Dadra & Nagar Haveli and Daman & Diu",
        "32" => " Delhi",
        "33" => "Lakshadweep",
        "34" => "Puducherry",
        "35" =>  "Ladakh",
        "36" => "Jammu & Kashmir"
    );
}

function get_state($sta)
{
    $get_state = state();
    return $get_state[$sta];
}

function careerLevel()
{
    return array(
        "NO_EXPERIENCE" => "No Experience / Student",
        "STUDENT" => "Fresher",
        "NEW_GRAD" => "1-2 years experience",
        "EXPERIENCED" => "2-5 years experience",
        "EXECUTIVE" => "5+ years experience"
    );
}

function industry()
{
    return array(
        "1" => "Administrative Assistance",
        "2" => "Analytics",
    );
}

function time_elapsed_string($datetime, $full = false) {
    $now = new DateTime;
    $ago = new DateTime($datetime);
    $diff = $now->diff($ago);

    $diff->w = floor($diff->d / 7);
    $diff->d -= $diff->w * 7;

    $string = array(
        'y' => 'year',
        'm' => 'month',
        'w' => 'week',
        'd' => 'day',
        'h' => 'hour',
        'i' => 'minute',
        's' => 'second',
    );
    foreach ($string as $k => &$v) {
        if ($diff->$k) {
            $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
        } else {
            unset($string[$k]);
        }
    }

    if (!$full) $string = array_slice($string, 0, 1);
    return $string ? implode(', ', $string) . ' ago' : 'just now';
}

function jobtype(){
    return array(
        "1" => "Contract",
        "2" => "Permanent",
        "3" => "Temporary"
    );
}

function salary()
{
    return array(
        "1" => "0-1 Lakhs",
        "2" => "1 Lakhs - 2 Lakhs",
        "3" => "2 Lakhs - 5 Lakhs"
    );
}

function experience()
{
    return array(
        "1" => "0-1 Years",
        "2" => "1-2 Years",
        "3" => "2-5 Years"
    );
}
