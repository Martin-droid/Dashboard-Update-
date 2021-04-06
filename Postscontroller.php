<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\detail;
use DB;
use App\Models\loan;
use App\Models\login;
Use App\Models\signup;
Use App\Http\Controllers\Auth;



use App\Http\Controllers\Controller;
class Postscontroller extends Controller

{

    public function tabs() {
        // Your logic here
        return view('tabs');
       }

    public function index()
    {
    return view('public.index');

}





public function all_details()
{

$details= detail::All();

return view('details', ["details"=>$details] );
}
public function create_details(Request $req){
    $details = new detail();
    $details->fname=$req->fname;
    $details->lname=$req->lname;
    $details->idno=$req->idno;
    $details->phone=$req->phone;
    $details->estate=$req->estate;
    $details->city=$req->city;
    $details->county=$req->county;
    $details->country=$req->country;
    $details->firstname=$req->firstname;
    $details->lastname=$req->lastname;
    $details->idnumber=$req->idnumber;
    $details->number=$req->number;
    $details->save();

    return redirect()->route('details');
}

public function all_loan()
{

$loan= loan::All();

return view('loan', ["loan"=>$loan]);
}
public function create_loan(Request $req){
    $loan = new loan();
    $loan->fname=$req->fname;
    $loan->idno=$req->idno;
    $loan->phone=$req->phone;
    $loan->town=$req->town;
    $loan->reason=$req->reason;
    $loan->need=$req->need;
    $loan->time=$req->time;

    $loan->save();

    return redirect()->route('loan');
}

public function all_login()
{
$login= login::All();
return view('login', ["login"=>$login]);

}

public function create_login(Request $req)
{
    $login = new login();
    $login->idno=$req->idno;
    $login->password=$req->password;

    $login->save();

    return redirect()->route('login');
}


public function all_signup()
{

    $signup= signup::All();
    return view('signup', ["signup"=>$signup]);

}

public function create_signup(Request $req)
{
    $signup = new signup();
    $signup->fname=$req->fname;
    $signup->lname=$req->lname;
    $signup->idno=$req->idno;
    $signup->password=$req->password;
    $signup->email=$req->email;


    $signup->save();

    return redirect()->route('signup');

}


public function details() {
    // Your logic here
    return view('details',);
   }


   public function tabledetails() {
    // Your logic here
    return view( 'tabledetails');
   }
}







