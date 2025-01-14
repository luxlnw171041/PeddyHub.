@extends('layouts.peddyhub')

@section('content')


</section>
<meta property="og:title" content="YOUR TITLE HERE" />
<meta property="og:description" content="YOUR DESCRIPTION HERE" />
<meta property="og:image" content="YOUR THUMBNAIL URL HERE" />
<style>
    .parents {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        grid-template-rows: repeat(3, 0.5fr);
        grid-column-gap: 0px;
        grid-row-gap: 0px;
    }

    .div1 {
        grid-area: 1 / 1 / 2 / 2;
    }

    .div2 {
        grid-area: 1 / 2 / 2 / 4;
    }

    .div3 {
        grid-area: 1 / 4 / 4 / 5;
    }

    .div4 {
        grid-area: 2 / 1 / 3 / 4;
    }

    .div5 {
        grid-area: 3 / 1 / 4 / 2;
    }

    .div6 {
        grid-area: 3 / 2 / 4 / 3;
    }

    .div7 {
        grid-area: 3 / 3 / 4 / 4;
    }

    .rotatea {
        display: block;
        transform: rotate(-270deg);
        width: 500px;
    }

    .card-pet {
        margin-left: -80px;
        margin-top: 20px;
        margin-bottom: 50px;
    }

    .btn-load-pc {
        position: absolute;
        top: 110%;
        left: 40%;
    }

    .owl-nav {
        display: none;
    }

    .text-card {
        font-size: 11px !important;
    }

    .text_number {
        font-size: 17px !important;
    }

    .arrow {
        width: 13px;
        transition: transform 0.3s ease;
        color: #B8205B;
    }

    .arrow.open {
        transform: rotate(180deg);
    }

    .btn-dropdown {
        color: #6C6185;
        font-size: 18px;
        background: white;
        padding: 10px 30px;
        box-shadow: 3px 3px 30px rgba(118, 96, 168, 0.2);
        border-radius: 15px;
        display: inline-block;
        cursor: pointer;
        transition: transform 0.2s ease, box-shadow 0.2s ease, color 0.2s ease;
        margin-bottom: 15px;
    }

    .btn-dropdown:hover {
        color: #B8205B;
        transform: translateY(3px);
        box-shadow: 3px 3px 30px rgba(118, 96, 168, 0.17);
    }

    .dropdown-toggle::after {
        display: none;
    }

    .menu {
        color: #E3DFE9;
        font-size: 18px;
        background: white;
        padding-top: 10px;
        padding-bottom: 10px;
        border-radius: 15px;
        transition: transform 0.3s ease, opacity 0.3s ease, box-shadow 0.3s ease 0.15s;
        transform-origin: center top;
        transform: scale(0.01);
        box-shadow: 3px 3px 30px rgba(118, 96, 168, 0.15);
    }

    .item-dd {
        position: relative;
        color: #6C6185;
        text-decoration: none;
        display: block;
        padding: 12.5px 30px;
        transition: color 0.2s ease, background-color 0.2s ease, padding-left 0.2s ease;
        overflow: hidden;
    }

    .item-dd:hover {
        color: #b8205b;
        padding-left: 35px;
        background: #F1F1F1;
    }.sharebtn{
        margin-left: 10px !important;
    }
</style>

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v14.0&appId=556579368207089&autoLogAppEvents=1" nonce="plRRkMCA"></script>
<div class="pet about main-wrapper pet tm_profile">
    <section class="featured">
        <div class="crumb">
            <div class="container notranslate">
                <h4>
                    My <span class="wow pulse" data-wow-delay="1s"> Profile </span>
                </h4>
            </div>
        </div>
    </section>
    <section class="team" style="margin-top:-20px;padding-bottom:0px;">
        <div class="row">
            <div class="col-md-5 d-flex justify-content-center">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="member">
                        <div class="image">
                            @if(!empty($data->profile->photo))
                            <img style="width:350px; " src="{{ url('storage')}}/{{ $data->profile->photo }}" alt="image of client" title="client" class="img-fluid customer">

                            @else
                            <img src="{{ url('/peddyhub/images/home_5/team-1.png') }}" alt="image of client" title="client" class="img-fluid customer">
                            @endif
                            <!-- @if(!empty($data->photo))
                                                <img alt="" style="width:600px; border-radius: 50%;" title="" class="img-circle img-thumbnail isTooltip" src="{{ url('storage')}}/{{ $data->photo }}" data-original-title="Usuario"> 
                                            @else
                                                <img alt="" style="width:600px; border-radius: 50%;" title="" class="img-circle img-thumbnail isTooltip" src="{{$data->avatar}}" data-original-title="Usuario"> 
                                            @endif -->
                        </div>
                        <!-- @foreach($data->pets as $pet)
                            {{ $pet->name }}
                            <div class="d-flex justify-content-around">
                            <img src="{{ url('storage/'.$pet->photo )}}" width="295px" alt="image of pet" title="pet" class="img-fluid customer">
</div>
                            @endforeach -->
                        <div class="content">
                            <div class="name wow fadeInDown">
                                <a title="name" style="font-family: 'Kanit', sans-serif;" class="notranslate">{{ $data->profile->name }}</a>
                                @switch($data->profile->sex)
                                @case('ผู้หญิง')
                                <i style="font-size:28px;color:#F06491;margin-left:10px" class="fas fa-venus"></i>
                                @break
                                @case('ผู้ชาย')
                                <i style="font-size:28px;color:#00ADEF;margin-left:10px" class="fas fa-mars"></i>
                                @break
                                @case('ไม่ต้องการตอบ')
                                <i style="font-size:28px;color:#88C550;margin-left:10px" class="fas fa-venus-mars"></i>
                                @break
                                @endswitch

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="main-wrapper pet tm_profile">
                    <section class="profile team">
                        <div class="slide">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="spec card">
                                        <div class="row">
                                            <div class="col-12 col-md-12">
                                                <ul>
                                                    <li>
                                                        <h5 class="text-capitalize" style="font-family: 'Kanit', sans-serif;">
                                                            ข้อมูลส่วนตัว
                                                            <a href="{{ url('/user/' . $data->id . '/edit') }}" class="text-white float-right btn btn-warning ">
                                                                <i class="fas fa-edit"></i>
                                                            </a>
                                                            @switch($data->profile->language)
                                                            @case('en')
                                                            <a class="btn" href="#" data-toggle="modal" data-target="#exampleModal" style="padding:0px">
                                                                <img width="40px" height="26px" src="{{ asset('/peddyhub/images/national-flag/en.png') }}" style="border-radius: 5px;">
                                                            </a>
                                                            @break
                                                            @case('zh-TW')
                                                            <a class="btn" href="#" data-toggle="modal" data-target="#exampleModal" style="padding:0px">
                                                                <img width="40px" src="{{ asset('/peddyhub/images/national-flag/cn.png') }}" style="border-radius: 5px;">
                                                            </a>
                                                            @break
                                                            @case('hi')
                                                            <a class="btn" href="#" data-toggle="modal" data-target="#exampleModal" style="padding:0px">
                                                                <img width="40px" src="{{ asset('/peddyhub/images/national-flag/in.png') }}" style="border-radius: 5px;">
                                                            </a>
                                                            @break
                                                            @case('ar')
                                                            <a class="btn" href="#" data-toggle="modal" data-target="#exampleModal" style="padding:0px">
                                                                <img width="40px" src="{{ asset('/peddyhub/images/national-flag/ar.png') }}" style="border-radius: 5px;">
                                                            </a>
                                                            @break
                                                            @case('ru')
                                                            <a class="btn" href="#" data-toggle="modal" data-target="#exampleModal" style="padding:0px">
                                                                <img width="40px" src="{{ asset('/peddyhub/images/national-flag/ru.png') }}" style="border-radius: 5px;border: 1px solid; color:#8C8C8C;">
                                                            </a>
                                                            @break
                                                            @case('es')
                                                            <a class="btn" href="#" data-toggle="modal" data-target="#exampleModal" style="padding:0px">
                                                                <img width="40px" src="{{ asset('/peddyhub/images/national-flag/es.png') }}" style="border-radius: 5px;">
                                                            </a>
                                                            @break
                                                            @case('de')
                                                            <a class="btn" href="#" data-toggle="modal" data-target="#exampleModal" style="padding:0px">
                                                                <img width="40px" height="26px" src="{{ asset('/peddyhub/images/national-flag/de.png') }}" style="border-radius: 5px;">
                                                            </a>
                                                            @break
                                                            @case('ja')
                                                            <a class="btn" href="#" data-toggle="modal" data-target="#exampleModal" style="padding:0px">
                                                                <img width="40px" src="{{ asset('/peddyhub/images/national-flag/jp.png') }}" style="border-radius: 5px;border: 1px solid; color:#8C8C8C;">
                                                            </a>
                                                            @break
                                                            @case('ko')
                                                            <a class="btn" href="#" data-toggle="modal" data-target="#exampleModal" style="padding:0px">
                                                                <img width="40px" src="{{ asset('/peddyhub/images/national-flag/ko.png') }}" style="border-radius: 5px;border: 1px solid; color:#8C8C8C;">
                                                            </a>
                                                            @break
                                                            @case('th')
                                                            <a class="btn" href="#" data-toggle="modal" data-target="#exampleModal" style="padding:0px">
                                                                <img width="40px" src="{{ asset('/peddyhub/images/national-flag/th.png') }}" style="border-radius: 5px;">
                                                            </a>
                                                            @break
                                                            @case('lo')
                                                            <a class="btn" href="#" data-toggle="modal" data-target="#exampleModal" style="padding:0px">
                                                                <img width="40px" src="{{ asset('/peddyhub/images/national-flag/la.png') }}" style="border-radius: 5px;">
                                                            </a>
                                                            @break
                                                            @case('mr')
                                                            <a class="btn" href="#" data-toggle="modal" data-target="#exampleModal" style="padding:0px">
                                                                <img width="40px" src="{{ asset('/peddyhub/images/national-flag/my.png') }}" style="border-radius: 5px;">
                                                            </a>
                                                            @break
                                                            @endswitch
                                                        </h5>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <ul>
                                                    <li style="font-size:22px;font-family: 'Kanit', sans-serif;"><i class="fas fa-paw yellow me-2"></i> <span> username: </span> {{ $data->username }}</li>
                                                    <li style="font-size:22px;font-family: 'Kanit', sans-serif;"><i class="fas fa-paw yellow me-2"></i> <span> วันเกิด: </span>{{ thaidate("j F Y" , strtotime($data->profile->birth)) }}</li>
                                                    <li style="font-size:22px;font-family: 'Kanit', sans-serif;"><i class="fas fa-paw yellow me-2"></i> <span> อีเมล: </span> {{ $data->email }}</li>
                                                    <li style="font-size:22px;font-family: 'Kanit', sans-serif;"><i class="fas fa-paw yellow me-2"></i> <span> เบอร์: </span>{{ $data->profile->phone }}</li>
                                                </ul>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <center>
                                                    <hr class="d-block d-md-none" style="width: 65%;">
                                                </center>
                                                <h5 class="text-capitalize" style="font-family: 'Kanit', sans-serif;">
                                                    สัตว์เลี้ยงที่ยินยอมให้ส่งข้อความ
                                                </h5>
                                                <div class="row">
                                                    @php
                                                        $alert_lost_pet = $data->profile->alert_lost_pet ;
                                                        $data_alert_lost_pet = json_decode($alert_lost_pet, true);
                                                    @endphp

                                                    @if(!empty($data_alert_lost_pet))
                                                    @for ($i=0; $i < count($data_alert_lost_pet); $i++)
                                                        @switch ($data_alert_lost_pet[$i]) 
                                                            @case ('1')
                                                                @php
                                                                    $type_alert_lost_pet = "สุนัข" ;
                                                                    $tag_i_img = "fas fa-dog" ;
                                                                    $type_color = "#F7B000" ;
                                                                @endphp
                                                                @break;
                                                            @case ('2')
                                                                @php
                                                                    $type_alert_lost_pet = "แมว" ;
                                                                    $tag_i_img = "fas fa-cat" ;
                                                                    $type_color = "#02DBFF" ;
                                                                @endphp
                                                                @break;
                                                            @case ('3')
                                                                @php
                                                                    $type_alert_lost_pet = "นก" ;
                                                                    $tag_i_img = "fas fa-dove" ;
                                                                    $type_color = "#49AED9" ;
                                                                @endphp
                                                                @break;
                                                            @case ('4')
                                                                @php
                                                                    $type_alert_lost_pet = "ปลา" ;
                                                                    $tag_i_img = "fas fa-fish" ;
                                                                    $type_color = "#63AB86" ;
                                                                @endphp
                                                                @break;
                                                            @case ('5')
                                                                @php
                                                                    $type_alert_lost_pet = "สัตว์เล็ก" ;
                                                                    $tag_i_img = "fas fa-rabbit" ;
                                                                    $type_color = "#DB4C75" ;
                                                                @endphp
                                                                @break;
                                                            @case ('6')
                                                                @php
                                                                    $type_alert_lost_pet = "Exotic" ;
                                                                    $tag_i_img = "fas fa-spider" ;
                                                                    $type_color = "#black" ;
                                                                @endphp
                                                            @endswitch
                                                        <div class="col-4" style="padding: 15px;font-family: 'Sarabun', sans-serif;">
                                                            <i class="{{ $tag_i_img }}"  style="font-size:20px;color:{{ $type_color  }};"></i>&nbsp;&nbsp;{{ $type_alert_lost_pet }}
                                                        </div>
                                                    @endfor
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @if(!empty($data->profile->photo_id_card))
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="spec card">
                                        <ul>
                                            <li>
                                                <h5 style="font-family: 'Kanit', sans-serif;">บัตรประชาชน
                                                </h5>
                                            </li>
                                            <li>
                                                <img style="z-index:  5;" class="shadow img_cer" src="{{ url('storage')}}/{{ $data->profile->photo_id_card }}">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                @endif
                                @if(!empty($data->profile->photo_passport))
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="spec card">
                                        <ul>
                                            <li>
                                                <h5 class="text-capitalize" style="font-family: 'Kanit', sans-serif;">พาสปอร์ต
                                                </h5>
                                            </li>
                                            <li>
                                                <img style="z-index:  5;" class="shadow img_cer" src="{{ url('storage')}}/{{ $data->profile->photo_passport }}">
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
</div>
<div class="main-wrapper pet buy" id="pets">
    <section class="featured">
        <div class="crumb">
            <div class="container notranslate">
                <h4>
                    My <span class="wow pulse" data-wow-delay="1s"> Pet </span>
                </h4>
            </div>
        </div>
    </section>

    <div class="button wow fadeInUp ">
        <div class="container  d-flex justify-content-end">
            <a style="font-size:15px;font-family: 'Kanit', sans-serif;" href="{{ url('/pet/create') }}" class="btn main" title="contact">
                เพิ่มสัตว์เลี้ยง <i class="fas fa-paw"></i>
            </a>
        </div>
    </div>
   
    <div class="pet about second">
        <section class="team">
            <div class="container">
                <!-- <div class="heading text-center">
                        <p class="wow fadeInUp"><span class="purple"><i class="fas fa-paw"></i> </span><span
                                class="orange"><i class="fas fa-paw"></i> </span><span class="purple"><i
                                    class="fas fa-paw"></i> </span></p>
                        <h2 class="wow fadeInDown">Ready to Adopt <span class="wow pulse" data-wow-delay="1s">
                                Pets</span>
                        </h2>
                    </div> -->
                    
                <div class="row">
                    @foreach($petuser as $item)
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="member">
                            <div class="image">
                                <div class="owl-carousel">
                                    @if(!empty($item->photo))
                                    <div class="item">
                                        <div class="testimon">
                                            <div class="image">
                                                <img style="object-fit: cover;" src="{{ url('storage/'.$item->photo )}}" height="300px" alt="image of pet" title="pet" class=" customer">
                                            </div>
                                        </div>
                                    </div>
                                    @else
                                    <img src="{{ url('/peddyhub/images/home_5/team-1.png') }}" height="300px" alt="image of client" title="client" class=" customer">
                                    @endif

                                    @if(!empty($item->photo_2))
                                    <div class="item">
                                        <div class="testimon">
                                            <div class="image">
                                                <img style="object-fit: cover;" src="{{ url('storage/'.$item->photo_2 )}}" height="300px" alt="image of pet" title="pet" class=" customer">
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    @if(!empty($item->photo_3))
                                    <div class="item">
                                        <div class="testimon">
                                            <div class="image">
                                                <img style="object-fit: cover;" src="{{ url('storage/'.$item->photo_3 )}}" height="300px" alt="image of pet" title="pet" class=" customer">
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                </div>
                            </div>
                            <div class="content">
                                <h6 class="wow fadeInDown text-conter notranslate" style="font-family: 'Kanit', sans-serif;">
                                    @php
                                    $pet_category = $item->pet_category_id ;
                                    @endphp
                                    @include ('menubar.icon_categorie')
                                    {{ $item->name }}
                                    @switch($item->gender)
                                    @case('หญิง')
                                    <i style="font-size:28px;color:#F06491;margin-left:1px" class="fas fa-venus"></i>
                                    @break
                                    @case('ชาย')
                                    <i style="font-size:28px;color:#00ADEF;margin-left:1px" class="fas fa-mars"></i>
                                    @break
                                    @case('ไม่ระบุ')
                                    <i style="font-size:28px;color:#88C550;margin-left:1px" class="fas fa-venus-mars"></i>
                                    @break
                                    @endswitch
                                    <br class="d-block d-md-none">

                                </h6>
                                <ul style="font-size:20px;font-family: 'Kanit', sans-serif;">
                                    <li><i class="fas fa-paw"></i>วันเกิด : {{ thaidate("j/m/Y" , strtotime($item->birth)) }}</li>
                                    <li><i class="fas fa-paw"></i>อายุ :
                                        @if(\Carbon\Carbon::parse($item->birth)->diff(\Carbon\Carbon::now())->format('%y') != 0 )
                                        {{\Carbon\Carbon::parse($item->birth)->diff(\Carbon\Carbon::now())->format('%y')}} ขวบ
                                        @endif
                                        @if(\Carbon\Carbon::parse($item->birth)->diff(\Carbon\Carbon::now())->format('%m') != 0 )
                                        {{\Carbon\Carbon::parse($item->birth)->diff(\Carbon\Carbon::now())->format('%m')}} เดือน
                                        @endif
                                        @if( \Carbon\Carbon::parse($item->birth)->diff(\Carbon\Carbon::now())->format('%y') == 0 & \Carbon\Carbon::parse($item->birth)->diff(\Carbon\Carbon::now())->format('%m')== 0)
                                        {{\Carbon\Carbon::parse($item->birth)->diff(\Carbon\Carbon::now())->format('%d')}} วัน
                                        @endif
                                    </li>
                                    @if(!empty($item->blood_type))
                                    <li><i class="fas fa-paw"></i>กรุ๊ปเลือด : {{$item->blood_type}}</li>
                                    @endif
                                    @if($item->pet_category->name == "สุนัข" or $item->pet_category->name == "แมว")
                                    <li><i class="fas fa-paw"></i>พันธุ์ : {{$item->species}}</li>
                                    @endif

                                    @if(empty($item->blood_type))
                                    <br class="d-none d-lg-block">
                                    @endif
                                    @if($item->pet_category->name !== 'สุนัข' && $item->pet_category->name !== 'แมว')
                                    <br class="d-none d-lg-block">
                                    @endif
                                </ul>
                            </div>
                            <div class="row d-flex align-items-end">
                                <div class="col-6  d-flex align-items-end">
                                    <div class="btn-group">
                                        <button type="button" id="{{$item->id}}" style="font-family: 'Kanit', sans-serif;" class=" btn-dropdown dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onclick="arrow()">
                                            ข้อมูล &nbsp;
                                            <i id="arrow{{$item->id}}" class="fa-solid fa-angle-up arrow"></i>
                                        </button>
                                        <div class="dropdown-menu menu">
                                            <a class="dropdown-item item-dd" href="{{ url('/pet/' . $item->id) }}" style="font-family: 'Kanit', sans-serif;">บัตรประจำตัวสัตว์เลี้ยง</a>
                                            <a class="dropdown-item item-dd" href="{{ url('/user_pet_checklist/' . $item->id) }}" style="font-family: 'Kanit', sans-serif;">เอกสารเดินทาง</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 d-flex align-items-end">
                                    <div class="btn-group">
                                        <button type="button" id="{{$item->id}}" style="font-family: 'Kanit', sans-serif;" class=" btn-dropdown dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onclick="arrow_edit()">
                                            แก้ไข &nbsp;
                                            <i id="arrow_edit{{$item->id}}" class="fa-solid fa-angle-up arrow"></i>
                                        </button>
                                        <div class="dropdown-menu menu">
                                            <a class="dropdown-item item-dd" href="{{ url('/pet/' . $item->id . '/edit') }}" style="font-family: 'Kanit', sans-serif;">แก้ไขข้อมูล</a>
                                            <a class="dropdown-item item-dd" href="{{ url('/pet/' . $item->id . '/edit?edit=airplane') }}" style="font-family: 'Kanit', sans-serif;">แก้ไขเอกสารเดินทาง</a>
                                          
                                            <form method="POST" action="{{ url('/pet' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn dropdown-item item-dd" title="Delete MyPet" onclick="return confirm(&quot;Confirm delete?&quot;)"> ลบ</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
  
                    <div class="modal fade " width="500px" id="exampleModalCenter{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter{{$item->id}}" aria-hidden="true">
                        <div id="modal_pet{{$item->id}}" class="modal-dialog modal-dialog-centered" role="document" width="500px">
                            <div class="modal-content" style=" background-color: transparent;">
                                <div id="card_petswip{{$item->id}}" class="container " width="500px" style="padding:0px;">
                                    <div id="น้อง{{$item->name}}" class="card col-lg-12 col-12 " style="border: 2px solid #B8205B;padding:2px;background-image: url('{{ asset('/peddyhub/images/background/pattern-4.png') }}');background-repeat: no-repeat;background-attachment: fixed; background-size: cover;">
                                        <div class="card-body" style="padding:5px;">
                                            <div class="row">
                                                <div class="col-2 text-center d-flex align-items-center" style="padding-right:0px;">
                                                    @php
                                                    $pet_category = $pet->pet_category_id ;
                                                    @endphp
                                                    @switch( $pet_category )
                                                    @case (1)
                                                    <img id="icon_pet" style="font-size:25px;background-color: white;  border-radius: 25px;border: 1px solid black;padding:10px;" src="{{ asset('/peddyhub/images/img-icon/dog-1.png') }}" alt="">
                                                    @break
                                                    @case (2)
                                                    <img id="icon_pet" style="font-size:25px;background-color: white;  border-radius: 25px;border: 1px solid black;padding:10px;" src="{{ asset('/peddyhub/images/img-icon/cat-1.png') }}" alt="">
                                                    @break
                                                    @case (3)
                                                    <img id="icon_pet" style="font-size:25px;background-color: white;  border-radius: 25px;border: 1px solid black;padding:10px;" src="{{ asset('/peddyhub/images/img-icon/bird-1.png') }}" alt="">
                                                    @break
                                                    @case (4)
                                                    <img id="icon_pet" style="font-size:25px;background-color: white;  border-radius: 25px;border: 1px solid black;padding:10px;" src="{{ asset('/peddyhub/images/img-icon/fish-1.png') }}" alt="">
                                                    @break
                                                    @case (5)
                                                    <img id="icon_pet" style="font-size:25px;background-color: white;  border-radius: 25px;border: 1px solid black;padding:10px;" src="{{ asset('/peddyhub/images/img-icon/rabbit-1.png') }}" alt="">
                                                    @break
                                                    @case (6)
                                                    <img id="icon_pet" style="font-size:25px;background-color: white;  border-radius: 25px;border: 1px solid black;padding:10px;" src="{{ asset('/peddyhub/images/img-icon/spider-1.png') }}" alt="">
                                                    @break
                                                    @endswitch
                                                </div>
                                                <div class="col-7" style="padding-left: 2px;">
                                                    <p style="font-size: 21px;margin:0px;">
                                                        บัตรประจำตัว {{ $pet->pet_category->name}} {{ $pet->pet_category->id}} 
                                                    </p>

                                                    <div class="row" style="margin-left:2px;">
                                                        <div class="col-6" style="font-size: 12px;padding: 0px;margin-top:-10px;">
                                                            <span> <b> เลขประจำตัว{{ $pet->pet_category->name}}</b></span><br>
                                                            <span style="color:#B8205B"> <b> indentification </b></span>
                                                        </div>
                                                        <div class="col-6" style="padding: 0px;margin-top:-7px;">
                                                            <span style="font-size: 11px;" id="text_numberswip{{$item->id}}"> <b> {{ $pet->pet_category_id}} {{ date_format($pet->created_at,"Y") }} {{ str_pad($item->id, 5, '0', STR_PAD_LEFT) }} 52 1</b></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-3 ">
                                                    <img style="float: right;" src="{{ asset('/peddyhub/images/logo/logo-2.png') }}" width="80%" alt="">
                                                </div>
                                                <div class="col-12">
                                                    <div style="font-size: 12px;">
                                                        <span> <b> ชื่อตัวและชื่อสกุล</b></span>
                                                        <span style="font-size:20px;">
                                                            <b>
                                                                @switch( $item->gender )
                                                                @case ("ชาย")
                                                                เด็กชาย
                                                                @break
                                                                @case ("หญิง")
                                                                เด็กหญิง
                                                                @break
                                                                @endswitch
                                                                {{$item->name}}
                                                            </b>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="parents">
                                                        <div class="div1 text-center">
                                                            <a href="{{ url('/user_pet/' . $item->id) }}">
                                                                <img style="position:relative ;" width="80px" src="{{ url('storage/'.$item->qr_code )}}" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="div2">
                                                            <span style="font-size: 13px;"> <b> เกิดวันที่ </b></span> <span style="font-size:14px"> <b>{{ thaidate("j M Y" , strtotime($item->birth)) }}</b></span><br>
                                                            <span style="font-size: 13px;color:#B8205B"> <b> Birth </b></span> <span style="color:#B8205B; font-size:14px"> <b>{{ date("j M Y" , strtotime($item->birth)) }}</b></span><br>
                                                            <span style="font-size: 13px;"> <b> เบอร์ </b></span> <span style="font-size:14px"> <b> {{ preg_replace('~.*(\d{3})[^\d]{0,7}(\d{3})[^\d]{0,7}(\d{4}).*~', '$1-$2-$3', $item->profile->phone)  }} </b></span>
                                                            @if(!empty($item->blood_type))
                                                            <br>
                                                            <span style="font-size: 13px;"> <b> กรุ๊ปเลือด </b></span> <span style="font-size:14px"> <b> {{ $item->blood_type  }} </b></span>
                                                            @endif
                                                        </div>
                                                        <div class="div3 d-flex align-items-end">
                                                            <img src="{{ url('storage/'.$item->photo )}}" style="border: 2px solid #B8205B;border-radius: 7px;" width="100%" alt="image of pet" title="pet" class="fluid customer">
                                                        </div>
                                                        <div class="div4" style="margin-bottom:15px;">
                                                            <span style="font-size: 14px;"> <b> ที่อยู่</b></span> <span style="font-size: 14px;"> <b>{{ $pet->profile->tambon_th }} {{ $pet->profile->amphoe_th }} {{ $pet->profile->changwat_th }}</b></span><br>
                                                        </div>
                                                        <div class="div5">
                                                            <p id="text_btswip{{$item->id}}" style="font-size: 11px; line-height: 0.5;margin:0px;"> <b>{{ thaidate("j M Y" , strtotime($item->created_at)) }}</b></p>
                                                            <p id="text_vswip{{$item->id}}" style="font-size: 11px;margin:0px;"> <b>วันออกบัตร</b></p>
                                                            <p id="text_beswip{{$item->id}}" class="notranslate" style="font-size: 11px;margin:0px;line-height: 0.5;color:#B8205B"> <b>{{ date("j M Y" , strtotime($item->created_at)) }}</b></p>
                                                            <p id="text_doiswip{{$item->id}}" class="notranslate" style="font-size: 11px;margin:0px;color:#B8205B"> <b>Date of Issue</b></p>
                                                        </div>
                                                        <div class="div6 text-center ">
                                                            <br>
                                                            @if(!empty($item->profile->real_name))
                                                            <p style="font-size: 11px; line-height: 0.5;margin:0px;" class="notranslate"> <b>({{ $item->profile->real_name }})</b></p>
                                                            @else
                                                            <p style="font-size: 11px; line-height: 0.5;margin:0px;" class="notranslate"> <b>({{ $item->profile->name }})</b></p>
                                                            @endif
                                                            <p id="text_jswip{{$item->id}}" style="font-size: 11px;margin:0px;color:#B8205B"> <b>เจ้าของ</b></p>
                                                        </div>
                                                        <div class="div7 text-center text-card">
                                                            <p id="text_tswip{{$item->id}}" style="font-size: 11px; line-height: 0.5;margin:0px;"> <b>ตลอดชีพ</b></p>
                                                            <p id="text_wswip{{$item->id}}" style="font-size: 10px;margin:0px;"> <b>วันหมดอายุ</b></p>
                                                            <p id="text_lswip{{$item->id}}" class="notranslate" style="font-size: 11px;margin:0px;line-height: 0.5;color:#B8205B"> <b>Life Time</b></p>
                                                            <p id="text_dswip{{$item->id}}" class="notranslate" style="font-size: 11px;margin:0px;color:#B8205B"> <b>Date of Expiry</b></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                
                                <button id="{{$item->name}}" style="border-radius: 25px;" onclick="downloadimage()" class="btn btn-success btn-load-pc">Download</button>
                                <span id="swip{{$item->id}}"onclick="swipside(); namebtn();" style="margin-left:-100px;border-radius: 25px;" class="btn btn-success btn-load-pc">แนวตั้ง</span>
                                <div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button_count" data-size="large">
                                    <a target="_blank" id="sharebtn"  style="margin-left:120px;border-radius: 25px;" href="https://www.facebook.com/sharer/sharer.php?s=100&p[url]=www.peddyhub.com/pet/{{$item->id}}&p[images][0]=http://www.peddyhub.com/{{ url('storage/'.$item->photo )}}&p[title]={{$item->name}}มีบัตรประจำตัวแล้วนะ!&p[summary]=Recent+events+have+revealed+how+market-driven+education+policies,+deceivingly+labeled+as+%22reform,%22+are+revealing+their+truly+destructive+effects+on+the+streets+and+in+the+corridors+of+government:" class="fb-xfbml-parse-ignore btn btn-success btn-load-pc">
                                    แชร์</a></div>

                            </div>
                        </div>
                    </div>
                    <script>
                        function swipside() {
                            document.getElementById('{{$item->name}}').classList.toggle('d-none');
                            document.getElementById("text_number"+event.srcElement.id).classList.toggle('text-number');
                            document.getElementById("text_t"+event.srcElement.id).classList.toggle('text-card');
                            document.getElementById("text_w"+event.srcElement.id).classList.toggle('text-card');
                            document.getElementById("text_l"+event.srcElement.id).classList.toggle('text-card');
                            document.getElementById("text_d"+event.srcElement.id).classList.toggle('text-card');
                            document.getElementById(event.srcElement.id).classList.toggle('swip');
                            document.getElementById("sharebtn").classList.toggle('sharebtn');
                            var element = document.getElementById("card_pet" + event.srcElement.id);
                            element.classList.toggle("rotatea");
                            element.classList.toggle("card-pet");
                        }
                    </script>
                    <script>
                        function namebtn() {
                            var x = document.getElementById(event.srcElement.id);
                            if (x.innerHTML === "แนวตั้ง") {
                                x.innerHTML = "แนวนอน";
                                
                            } else {
                                x.innerHTML = "แนวตั้ง";
                            }
                        }
                    </script>
                    <script>
                        if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
                            document.querySelector('#text_tswip{{$item->id}}').classList.add('text-card');
                            document.querySelector('#text_wswip{{$item->id}}').classList.add('text-card');
                            document.querySelector('#text_lswip{{$item->id}}').classList.add('text-card');
                            document.querySelector('#text_dswip{{$item->id}}').classList.add('text-card');

                        } else {
                            // document.querySelector('#swip{{$item->id}}').classList.add('d-none');
                            document.querySelector('#card_petswip{{$item->id}}').classList.remove('rotatea');
                            document.querySelector('#card_petswip{{$item->id}}').classList.remove('card-pet');
                            document.querySelector("#text_numberswip{{$item->id}}").style.fontSize = "17px";
                            document.querySelector("#text_jswip{{$item->id}}").style.fontSize = "13px";
                            document.querySelector("#text_doiswip{{$item->id}}").style.fontSize = "13px";
                            document.querySelector("#text_beswip{{$item->id}}").style.fontSize = "13px";
                            document.querySelector("#text_vswip{{$item->id}}").style.fontSize = "13px";
                            document.querySelector("#text_btswip{{$item->id}}").style.fontSize = "13px";
                            document.querySelector('#text_tswip{{$item->id}}').style.fontSize = "13px";
                            document.querySelector('#text_wswip{{$item->id}}').style.fontSize = "13px";
                            document.querySelector('#text_lswip{{$item->id}}').style.fontSize = "13px";
                            document.querySelector('#text_dswip{{$item->id}}').style.fontSize = "13px";
                            // document.querySelector('#modal_pet{{$item->id}}').classList.add('modal-dialog-centered');

                        }
                    </script>

                    <script src="https://html2canvas.hertzen.com/dist/html2canvas.js"></script>
                    <script type="text/javascript">
                        function downloadimage() {
                            console.log(event.srcElement.id)
                            //var container = document.getElementById("image-wrap"); //specific element on page
                            var container = document.getElementById("น้อง"+event.srcElement.id); // full page 
                            let petname = event.srcElement.id;
                            html2canvas(container, {
                                allowTaint: true
                            }).then(function(canvas) {

                                var link = document.createElement("a");
                                document.body.appendChild(link);
                                link.download = "บัตรประจำตัวของ" + petname + ".png";
                                link.href = canvas.toDataURL();
                                link.target = '_blank';
                                link.click();
                            });
                        }
                    </script>
                    <script>
                        function myFunction() {
                            var x = document.getElementById("demo" + event.srcElement.id);
                            if (x.className.indexOf("w3-show") == -1) {
                                x.className += " w3-show";
                            } else {
                                x.className = x.className.replace(" w3-show", "");
                            }
                        }
                    </script>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
</div>
<script>
    function arrow() {
        document.getElementById("arrow" + event.srcElement.id).classList.toggle('open');
    }

    function arrow_edit() {
        document.getElementById("arrow_edit" + event.srcElement.id).classList.toggle('open');
    }
</script>



<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
@endsection

<!-- <div class="main-wrapper pet tm_profile">
        <section class="profile">
            <div class="container">
                <div class="slide">
                    <div class="row">
                        <div class="col-lg-5 col-md-12 col-sm-12">
                            <div class="images">
                                <img src="images/home_5/team-1.png" alt="Image of Member" title="Member"
                                    class="img-fluid">
                            </div>
                            <div class="card">
                                <ul>
                                    <li>
                                        <h4>Contact Info</h4>
                                    </li>

                                    <li><i class="fas fa-paw yellow me-2"></i> <span> Email: </span>
                                        <a href="mailto: example@example.com">example@example.com</a> </li>
                                    <li><i class="fas fa-paw yellow me-2"></i> <span> Phone: </span>  <a href="tel: 9328475899"> +9328475899</a>
                                    </li>
                                    <li><i class="fas fa-paw yellow me-2"></i> <span> Emergency: </span>
                                        <a href="tel: (08000) 5439 980"> (08000) 5439 980</a>
                                    </li>
                                    <li class="links mt-3 text-center">
                                        <a href="#" title="facebook"><i class="fas fa-facebook"></i></a>
                                        <a href="#" title="twitter">asd</a>
                                        <a href="#" title="instagram"><i class="fas fa-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-12 col-sm-12" >
                            <br>
                            <div class="spec card">
                                <ul>
                                    <li>
                                        <h5>ข้อมูลส่วนตัว</h5>
                                    </li>
                                    <li><i class="fas fa-paw yellow me-2"></i> <span> username: </span>  {{ $data->username }}</li>
                                    <li><i class="fas fa-paw yellow me-2"></i> <span> name: </span> {{ $data->name }}</li>
                                    <li><i class="fas fa-paw yellow me-2"></i> <span> Email: </span> {{ $data->email }}</li>
                                    <li><i class="fas fa-paw yellow me-2"></i> <span> tel: </span>{{ $data->tel }}</li>
                                    <li><i class="fas fa-paw yellow me-2"></i> <span> Availablity: </span> Mon -
                                        Sat 9:00 am To 6:00 pm</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div> -->