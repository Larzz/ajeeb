<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use App;
use Mail;

class HomeController extends Controller
{
    public function index() {
        $title = App::isLocale('ar') ? 'الصفحة الرئيسية - AJEEB-SWITCH.COM' :  'HOME - AJEEB-SWITCH.COM ';
        // $products = array_splice(array_unique( (array) $this->products()), 0, 3);
        $products = $this->twodshuffle( (array) $this->products());
        $meta_data = array('title' => $title, 'products' => $products);
        return view('home', $meta_data);
    }

    public function our_products() {
        $title = App::isLocale('ar') ? ' منتجاتنا  - AJEEB-SWITCH.COM'  :  'OUR PRODUCTS - AJEEB-SWITCH.COM ';
        $meta_data = array('products' => $this->products(), 'title' => $title);
        return view('our_products',$meta_data);
    }

    public function our_story() {
        $title = App::isLocale('ar') ? 'قصتنا - AJEEB-SWITCH.COM ' :  'OUR PRODUCTS - AJEEB-SWITCH.COM';
        $meta_data = array('title' => $title);
        return view('our_story', $meta_data);
    }

    public function get_in_touch() {
        $title = App::isLocale('ar') ? 'احصل على اتصال - AJEEB-SWITCH.COM' :  'GET IN TOUCH - AJEEB-SWITCH.COM';
        $meta_data = array('title' => $title);
        return view('contacts', $meta_data);
    }

    public function switcher($language) {
        Session::put(['locale' => $language]);
        return back();    
    }

    private function twodshuffle($array)
    {
        // Get array length
        $count = count($array);
        // Create a range of indicies
        $indi = range(0,$count-1);
        // Randomize indicies array
        shuffle($indi);
        // Initialize new array
        $newarray = array($count);
        // Holds current index
        $i = 0;
        // Shuffle multidimensional array
        foreach ($indi as $index)
        {
            $newarray[$i] = $array[$index];
            $i++;
        }
        return array_splice($newarray, 0, 3);
    }

    public function submit_contact(Request $request) {

        $status = false;

        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message
        );

        $email = $request->email;
        $name = $request->name;

        $send = Mail::send('email.newsletter', [ 'email' => $email, 'name' => $name, 'data' => $data ] , function ($messaage) use ($email, $name, $data) {
            $messaage->from('ajeeb@ajeeb-switch.com', 'ajeeb-switch.com');
            $messaage->to($email, $name)->subject('ajeeb-switch.com contact form');
            $messaage->bcc('larz.parba@gmail.com');
        });

        $status = true;

        $response = array('status' => $status);
        return response()->json($response);

    }

    public function submit_newsletter(Request $request) {
        
        $status = false;
        $email = $request->email;
        
        $send = Mail::send('email.contact', [ $email ],function ($m) use ($email) {
            $m->from('ajeeb@ajeeb-switch.com', 'ajeeb-switch.com');
            $m->to($email)->subject('ajeeb-switch.com newsletter subscription');
            $m->bcc('larz.parba@gmail.com');
        });

        $status = true;

        $response = array('status' => $status);
        return response()->json($response);
    }

    private function products() {

        return (object) [
            (object) [
                'name' => ' WHITE MEAT TUNA SOLID IN WATER',
                'name_ar' => 'لحم أبيض تونة صلب في الماء',
                'packing' => '16X3X170 GM',
                'class' => 'white_meat',
                'image' => asset('images/products/white_meat_tuna_water_only.png'),
                'description' => 'Has a very high level of Omega-3 which redules the body production of inflammatory compounds and prevents collagen breadown and keeps the skin young and fresh looking',
                'description_ar' => 'يحتوي على نسبة عالية جدًا من أوميغا 3 الذي يعيد إنتاج الجسم للمركبات الالتهابية ويمنع خبز الكولاجين ويحافظ على البشرة شابة ونضرة. ',
            ],
            (object)  [
                'name' => ' WHITE MEAT TUNA SOLID IN OLIVE OIL',
                'name_ar'=> 'لحم أبيض تونة صلب في زيت الزيتون',
                'packing' => '16X3X170 GM',
                'class' => 'white_meat',
                'image' => asset('images/products/white_meat_tuna_olive_oil.png'),
                'description_ar' => 'يحتوي على نسبة عالية جدًا من أوميغا 3 الذي يعيد إنتاج الجسم للمركبات الالتهابية ويمنع خبز الكولاجين ويحافظ على البشرة شابة ونضرة. ',
                'description' => 'Has a very high level of Omega-3 which redules the body production of inflammatory compounds and prevents collagen breadown and keeps the skin young and fresh looking '

            ],
            (object)  [
                'name' => 'WHITE MEAT TUNA SOLID IN SUNFLOWER OIL',
                'name_ar' => 'لحم أبيض تونة صلب في زيت عباد الشمس',
                'packing' => '16X3X170 GM',
                'class' => 'white_meat',
                'image' => asset('images/products/white_meat_tuna_sunflower_oil.png'),
                'description_ar' => 'يحتوي على نسبة عالية جدًا من أوميغا 3 الذي يعيد إنتاج الجسم للمركبات الالتهابية ويمنع خبز الكولاجين ويحافظ على البشرة شابة ونضرة. ',

                'description' => 'Has a very high level of Omega-3 which redules the body production of inflammatory compounds and prevents collagen breadown and keeps the skin young and fresh looking '

            ],
            (object) [
                'name' => ' YELLOWFIN CHUNK IN WATER',
                'name_ar' => 'قطعة صفراء في الماء',
                'packing' => '16X3X170 GM',
                'class' => 'yellowfin_chunk',
                'image' => asset('images/products/yellow_fin_meat_sunflower.png'),
                'description_ar' => 'يحتوي على نسبة عالية جدًا من أوميغا 3 الذي يعيد إنتاج الجسم للمركبات الالتهابية ويمنع خبز الكولاجين ويحافظ على البشرة شابة ونضرة. ',

                'description' => 'Has a very high level of Omega-3 which redules the body production of inflammatory compounds and prevents collagen breadown and keeps the skin young and fresh looking '

            ],
            (object) [
                'name' => 'YELLOWFIN CHUNK IN OLIVE OIL',
                'name_ar' => 'قطعة صفراء في زيت الزيتون',
                'packing' => '16X3X170 GM',
                'class' => 'yellowfin_chunk',
                'image' => asset('images/products/yellow_fin_olive_oil.png'),
                'description_ar' => 'يحتوي على نسبة عالية جدًا من أوميغا 3 الذي يعيد إنتاج الجسم للمركبات الالتهابية ويمنع خبز الكولاجين ويحافظ على البشرة شابة ونضرة. ',

                'description' => 'Has a very high level of Omega-3 which redules the body production of inflammatory compounds and prevents collagen breadown and keeps the skin young and fresh looking '

            ],
            (object) [
                'name' => ' YELLOWFIN CHUNK IN SUNFLOWER OIL',
                'name_ar' => 'قطع صفراء في زيت عباد الشمس',
                'packing' => '16X3X170 GM',
                'class' => 'yellowfin_chunk',
                'image' => asset('images/products/yellow_fin_meat_tuna_sunflower_oil.png'),
                'description_ar' => 'يحتوي على نسبة عالية جدًا من أوميغا 3 الذي يعيد إنتاج الجسم للمركبات الالتهابية ويمنع خبز الكولاجين ويحافظ على البشرة شابة ونضرة. ',

                'description' => 'Has a very high level of Omega-3 which redules the body production of inflammatory compounds and prevents collagen breadown and keeps the skin young and fresh looking '

            ],
            (object) [
                'name_ar' => 'سكيبجاك تونة بزيت عباد الشمس',
                'name' => 'SKIPJACK TUNA IN SUNFLOWER OIL',
                'packing' => '16X3X170 GM',
                'class' => 'skipjack_tuna',
                'image' => asset('images/products/skip_jack_tuna_sunflowe_oil.png'),
                'description_ar' => 'يحتوي على نسبة عالية جدًا من أوميغا 3 الذي يعيد إنتاج الجسم للمركبات الالتهابية ويمنع خبز الكولاجين ويحافظ على البشرة شابة ونضرة. ',

                'description' => 'Has a very high level of Omega-3 which redules the body production of inflammatory compounds and prevents collagen breadown and keeps the skin young and fresh looking '

            ],
            (object) [
                'name_ar' => 'لحم أبيض تونة صلب في الماء',
                'name' => 'WHITE MEAT TUNA SOLID IN WATER',
                'class' => 'white_meat',
                'image' => asset('images/products/white_meat_tuna_water_only.png'),
                'packing' => '48X170 GM',
                'description_ar' => 'يحتوي على نسبة عالية جدًا من أوميغا 3 الذي يعيد إنتاج الجسم للمركبات الالتهابية ويمنع خبز الكولاجين ويحافظ على البشرة شابة ونضرة. ',

                'description' => 'Has a very high level of Omega-3 which redules the body production of inflammatory compounds and prevents collagen breadown and keeps the skin young and fresh looking '

            ],
            (object) [
                'name_ar' => 'لحم أبيض تونة صلب في زيت الزيتون',
                'name' => 'WHITE MEAT TUNA SOLID IN OLIVE OIL',
                'class' => 'white_meat',
                'image' => asset('images/products/white_meat_tuna_olive_oil.png'),
                'packing' => '48X170 GM',
                'description_ar' => 'يحتوي على نسبة عالية جدًا من أوميغا 3 الذي يعيد إنتاج الجسم للمركبات الالتهابية ويمنع خبز الكولاجين ويحافظ على البشرة شابة ونضرة. ',

                'description' => 'Has a very high level of Omega-3 which redules the body production of inflammatory compounds and prevents collagen breadown and keeps the skin young and fresh looking '


            ],
            (object) [
                'name_ar' => 'لحم أبيض تونة صلب في زيت عباد الشمس',
                'name' => 'WHITE MEAT TUNA SOLID IN SUNFLOWER OIL',
                'class' => 'white_meat',
                'image' => asset('images/products/white_meat_tuna_sunflower_oil.png'),
                'packing' => '48X170 GM',
                'description_ar' => 'يحتوي على نسبة عالية جدًا من أوميغا 3 الذي يعيد إنتاج الجسم للمركبات الالتهابية ويمنع خبز الكولاجين ويحافظ على البشرة شابة ونضرة. ',

                'description' => 'Has a very high level of Omega-3 which redules the body production of inflammatory compounds and prevents collagen breadown and keeps the skin young and fresh looking '


            ],
            (object) [
                'name_ar' => 'قطع صفراء في زيت الزيتون متقطع في الماء',
                'name' => 'YELLOWFIN CHUNK IN OLIVE OIL',
                'class' => 'yellowfin_chunk',
                'image' => asset('images/products/yellow_fin_olive_oil.png'),
                'packing' => '48X170 GM',
                'description_ar' => 'يحتوي على نسبة عالية جدًا من أوميغا 3 الذي يعيد إنتاج الجسم للمركبات الالتهابية ويمنع خبز الكولاجين ويحافظ على البشرة شابة ونضرة. ',

                'description' => 'Has a very high level of Omega-3 which redules the body production of inflammatory compounds and prevents collagen breadown and keeps the skin young and fresh looking '


            ],
            (object) [
                'name_ar' => 'قطع صفراء في زيت عباد الشمس',
                'name' => 'YELLOWFIN CHUNK IN SUNFLOWER OIL',
                'class' => 'yellowfin_chunk' ,
                'image' => asset('images/products/yellow_fin_sunflower_oil.png'),
                'packing' => '48X170 GM',
                'description_ar' => 'يحتوي على نسبة عالية جدًا من أوميغا 3 الذي يعيد إنتاج الجسم للمركبات الالتهابية ويمنع خبز الكولاجين ويحافظ على البشرة شابة ونضرة. ',

                'description' => 'Has a very high level of Omega-3 which redules the body production of inflammatory compounds and prevents collagen breadown and keeps the skin young and fresh looking '


            ],
            (object) [
                'name_ar' => 'سكيبجاك تونة بزيت عباد الشمس',
                'name' => 'SKIPJACK TUNA IN SUNFLOWER OIL',
                'class' => 'skipjack_tuna',
                'image' => asset('images/products/skip_jack_tuna_sunflowe_oil.png'),
                'packing' => '48X170 GM',
                'description_ar' => 'يحتوي على نسبة عالية جدًا من أوميغا 3 الذي يعيد إنتاج الجسم للمركبات الالتهابية ويمنع خبز الكولاجين ويحافظ على البشرة شابة ونضرة. ',

                'description' => 'Has a very high level of Omega-3 which redules the body production of inflammatory compounds and prevents collagen breadown and keeps the skin young and fresh looking '


            ],
            (object) [
                'name_ar' => 'السردين المعلب في زيت عباد الشمس',
                'name' => 'CANNED SARDINE IN SUNFLOWER OIL',
                'class' => 'canned_sardine',
                'image' => asset('images/products/sardine_in_sunflower.png'),
                'description_ar' => 'يحتوي على نسبة عالية جدًا من أوميغا 3 الذي يعيد إنتاج الجسم للمركبات الالتهابية ويمنع خبز الكولاجين ويحافظ على البشرة شابة ونضرة. ',
                'description' => 'Has a very high level of Omega-3 which redules the body production of inflammatory compounds and prevents collagen breadown and keeps the skin young and fresh looking ',
                'packing' => '50X100 GM',

            ],
            (object) [
                'name_ar' => 'سردين معلب بزيت دوار الشمس مع الفلفل الحار',
                'name' => 'CANNED SARDINE IN SUNFLOWER OIL WITH CHILLY',
                'class' => 'canned_sardine',
                'image' => asset('images/products/sardine_in_sunflower_oil_with_chily.png'),
                'packing' => '50X100 GM',
                'description_ar' => 'يحتوي على نسبة عالية جدًا من أوميغا 3 الذي يعيد إنتاج الجسم للمركبات الالتهابية ويمنع خبز الكولاجين ويحافظ على البشرة شابة ونضرة. ',

                'description' => 'Has a very high level of Omega-3 which redules the body production of inflammatory compounds and prevents collagen breadown and keeps the skin young and fresh looking '
            ],
            (object) [
                'name_ar' => 'سردين معلب بزيت دوار الشمس بالليمون',
                'name' => 'CANNED SARDINE IN SUNFLOWER OIL WITH LEMON',
                'class' => 'canned_sardine',
                'image' => asset('images/products/sardine_in_sunflower_oil_lemon.png'),
                'packing' => '50X100 GM',
                'description_ar' => 'يحتوي على نسبة عالية جدًا من أوميغا 3 الذي يعيد إنتاج الجسم للمركبات الالتهابية ويمنع خبز الكولاجين ويحافظ على البشرة شابة ونضرة. ',

                'description' => 'Has a very high level of Omega-3 which redules the body production of inflammatory compounds and prevents collagen breadown and keeps the skin young and fresh looking '
            ],
            (object) [
                'name_ar' => 'صلصة الباستا حارة',
                'name' => 'PASTA SAUCE SPICY',
                'class' => 'pasta_sauced',
                'image' => asset('images/products/pasta_sauce_spicy.png'),
                'packing' => '12X360 GM',
                'description_ar' => 'يحتوي على نسبة عالية جدًا من أوميغا 3 الذي يعيد إنتاج الجسم للمركبات الالتهابية ويمنع خبز الكولاجين ويحافظ على البشرة شابة ونضرة. ',

                'description' => 'Has a very high level of Omega-3 which redules the body production of inflammatory compounds and prevents collagen breadown and keeps the skin young and fresh looking '
            ],
            (object) [
                'name_ar' => 'صلصة الباستا بالزيتون',
                'name' => 'PASTA SAUCE OLIVE',
                'class' => 'pasta_sauced',
                'image' => asset('images/products/pasta_sauce_olive.png'),
                'packing' => '12X360 GM',
                'description_ar' => 'يحتوي على نسبة عالية جدًا من أوميغا 3 الذي يعيد إنتاج الجسم للمركبات الالتهابية ويمنع خبز الكولاجين ويحافظ على البشرة شابة ونضرة. ',

                'description' => 'Has a very high level of Omega-3 which redules the body production of inflammatory compounds and prevents collagen breadown and keeps the skin young and fresh looking '
            ],
            (object) [
                'name_ar' => 'صلصة الباستا سادة',
                'name' => 'PASTA SAUCE PLAIN',
                'class' => 'pasta_sauced',
                'image' => asset('images/products/pasta_sauce_plain.png'),
                'packing' => '12X360 GM',
                'description_ar' => 'يحتوي على نسبة عالية جدًا من أوميغا 3 الذي يعيد إنتاج الجسم للمركبات الالتهابية ويمنع خبز الكولاجين ويحافظ على البشرة شابة ونضرة. ',

                'description' => 'Has a very high level of Omega-3 which redules the body production of inflammatory compounds and prevents collagen breadown and keeps the skin young and fresh looking '
            ],
            (object) [
                'name_ar' => 'سردين متنوعة',
                'name' => 'SARDINE ASSORTED',
                'class' => 'canned_sardine',
                'image' => asset('images/products/sardine_assorted.png'),
                'packing' => '5X10X100 GM',
                'description_ar' => 'يحتوي على نسبة عالية جدًا من أوميغا 3 الذي يعيد إنتاج الجسم للمركبات الالتهابية ويمنع خبز الكولاجين ويحافظ على البشرة شابة ونضرة. ',

                'description' => 'Has a very high level of Omega-3 which redules the body production of inflammatory compounds and prevents collagen breadown and keeps the skin young and fresh looking '
            ],
            (object) [
                'name_ar' => 'صلصة الباستا',
                'name' => 'PASTA SAUCE',
                'class' => 'pasta_sauced',
                'image' => asset('images/products/pasta_sauce_plain.png'),
                'packing' => '6x2x360GM',
                'description_ar' => 'يحتوي على نسبة عالية جدًا من أوميغا 3 الذي يعيد إنتاج الجسم للمركبات الالتهابية ويمنع خبز الكولاجين ويحافظ على البشرة شابة ونضرة. ',

                'description' => 'Has a very high level of Omega-3 which redules the body production of inflammatory compounds and prevents collagen breadown and keeps the skin young and fresh looking '
            ],
        ];
    }

}
