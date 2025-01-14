
<style>
    .input-provice{
        border-radius: 20px 0px 20px 20px ;
    }
</style>


            <!-- Button trigger modal -->
            <button id="btn_lost_pet_15day" type="button" class="btn btn-primary d-none" data-toggle="modal" data-target="#lost_pet_15day">
            </button>

            <!-- Modal -->
            <div class="modal fade" id="lost_pet_15day" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">แจ้งเตือน</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body text-center">
                            <img width="60%" src="{{ url('peddyhub/images/PEDDyHUB sticker line/01.png') }}">
                            <br><br>
                            <p style="font-size:30px;"><b>สวัสดีคุณ <span class="text-primary">{{ Auth::user()->profile->name }}</span></b></p>
                            <p>
                                ในการลงประกาศตามหาเจ้าตัวแสบ กรณีที่คุณยังค้นหาไม่พบคุณสามารถเข้ามาส่งข้อความอีกครั้งหลัง <span class="text-danger"><b>7 วัน</b></span> โดยไม่ต้องประกาศใหม่รวมไปถึงอัพเดทสถานะการค้นหาได้ที่หน้า <a href="{{ url('/my_post') }}"><u>โพสของฉัน</u></a>
                            </p>
                        </div>
                        <div class="modal-body text-center">
                            <b>สนับสนุนโดย</b>
                            @include ('layouts.partner_2_row')
                            <button type="button" class="btn btn-primary d-none">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- คุณมีประกาศของสัตว์เลี้ยงนี้อยู่ -->
            <button id="btn_lost_pet_You_have" type="button" class="btn btn-primary d-none" data-toggle="modal" data-target="#lost_pet_You_have">
            </button>

            <!-- Modal -->
            <div class="modal fade" id="lost_pet_You_have" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">แจ้งเตือน</h5>
                            <a style="float:right;" class="btn" href="{{ url('/my_post') }}">
                                <span aria-hidden="true">&times;</span>
                            </a>
                        </div>
                        <div class="modal-body text-center">
                            <img width="60%" src="{{ url('peddyhub/images/PEDDyHUB sticker line/09.png') }}">
                            <br><br>
                            <p style="font-size:30px;"><b>สวัสดีคุณ <span class="text-primary">{{ Auth::user()->profile->name }}</span></b></p>
                            <p style="font-size:20px;" class="text-danger">
                                <u><b>คุณมีประกาศของสัตว์เลี้ยงนี้อยู่</b></u>
                            </p>
                        </div>
                        <div class="modal-body text-center">
                            <b>สนับสนุนโดย</b>
                            @include ('layouts.partner_2_row')
                            <button type="button" class="btn btn-primary d-none">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>

<section class="contact">
    <div class="container">
        <div class="row">
            <!--  -->
            <div class="col-lg-5 col-md-12 col-sm-12"> 
                <div class="form wow fadeInLeft" style=" animation-name: fadeInLeft;">
                    <div class="range_slider">
                        <div class="context">
                            <div class="row">
                                <div class="col-8"> 
                                    <div class="heading">
                                        <p class="wow fadeInUp" style=" animation-name: fadeInUp;"><span class="purple"><i class="fas fa-paw"></i>
                                            </span><span class="orange"><i class="fas fa-paw"></i> </span><span class="purple"><i class="fas fa-paw"></i> </span></p>
                                        <h3 class="kanit">พื้นที่</h3>
                                    </div>
                                </div>
                                <div class="col-4 p-1 m-0">                 
                                    <a href="#heading" class="btn btn-success btn-md float-end kanit btn-block text-white" width="100%" style="width:100%;border-radius: 20px;position: absolute;bottom: 8px;right: 16px;" onclick="locations_myhome();">
                                        <i class="fa-solid fa-house-user"></i> บ้านของฉัน
                                    </a>
                                </div>
                            </div>
                            <div class="row col-12 m-0 p-0">
                               
                                <!--  -->
                                  <div class="form-group col-lg-4 col-12 p-1 m-0">
                                    <select name="select_province" id="select_province" class="input-provice form-control kanit" onchange="select_A();" required>
                                        <option value="" selected>- เลือกจังหวัด -</option>
                                    </select>
                                    <input type="text" name="input_province" id="input_province" class=" input-provice form-control d-none" readonly>
                                </div>
                                <!--  -->
                                <div class="form-group col-lg-4 col-12 p-1 m-0">
                                    <select name="select_amphoe" id="select_amphoe" class="form-control kanit input-provice " onchange="select_T();" required>
                                        <option value="" selected>- เลือกอำเภอ -</option>
                                    </select>
                                    <input type="text" name="input_amphoe" id="input_amphoe" class="input-provice form-control d-none" readonly>
                                </div>
                                <!--  -->
                                <div class="form-group col-lg-4 col-12 p-1 m-0">
                                    <select name="select_tambon" id="select_tambon" class="form-control kanit input-provice " onchange="select_lat_lng();" required>
                                        <option value="" selected>- เลือกตำบล -</option>
                                    </select>
                                    <input type="text" name="input_tambon" id="input_tambon" class="input-provice form-control d-none" readonly>
                                </div>
                            </div>
                            <div class="col-12 main-shadow main-radius d-none text-center" style="margin-top:15px; margin-bottom:10px;" id="map">
                                <div class="main-center">
                                    <img style=" object-fit: contain; width:50%;height:50%;" src="{{ asset('/peddyhub/images/PEDDyHUB sticker line/15.png') }}" class="card-img-top center">
                                    <div style=" z-index: 5" >
                                        <div style="padding-top: 8px;" class="translate">
                                            <h4 style="font-family: 'Sarabun', sans-serif;">ขออภัยครับ</h4>
                                            <h6 style="font-family: 'Sarabun', sans-serif;">ดำเนินการไม่สำเร็จ กรุณาเปิดตำแหน่งที่ตั้ง และลองใหม่อีกครั้งครับ</h6>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-1 col-md-0 col-sm-0"></div>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="faq wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">

                    <div class="heading" id="heading">
                        <p class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;"><span class="purple"><i class="fas fa-paw"></i> </span><span class="orange"><i class="fas fa-paw"></i> </span><span class="purple"><i class="fas fa-paw"></i> </span></p>
                        <h3 class="kanit">ตามหาเจ้าตัวแสบ</h3>
                    </div>
                    <div class="col-12 p-3 text-center" id="select-area" style="border: dotted #b8205b 3px;border-radius:20px">
                        <img style=" object-fit: contain; width:50%;height:50%;" src="{{ asset('/peddyhub/images/PEDDyHUB sticker line/31.png') }}" class="card-img-top center">
                        <h4 class="kanit mt-1">กรุณาเลือกพื้นที่ก่อน</h4>
                    </div>
                    <div class="row d-none" id="div_form">
                        
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <input class="form-control input-provice " name="phone" type="tel" id="phone" value="{{ Auth::user()->profile->phone }}" required onchange="check();">
                                {!! $errors->first('phone', '<p class="help-block">:message</p>') !!}
                                <div id="validationServer03Feedback" class="invalid-feedback">โปรดระบุเบอร์สำหรับการติดต่อกลับ.</div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <select name="select_pet" id="select_pet" class=" input-provice form-control" onchange="select_pet_id();" required>
                                    <option value="" selected>- เลือกเจ้าตัวแสบ -</option>
                                    @foreach($select_pet as $item)
                                    <option value="{{ $item->id }}" {{ request('name') == $item->name ? 'selected' : ''   }}>
                                        {{ $item->name }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-12 d-none" id="modal_submit">
                            <img id="img_pet" class="main-shadow main-radius" width="100%" style="max-height: 350px;object-fit:cover; border-radius: 20px 20px 0 0; " src="">
                                <button type="submit" id="btn_check_phone" class="mt-0 btn btn-block hvr-rectangle-in btn-primary kanit d-none" style="border-radius: 0 0 20px 20px;">
                                    แจ้งน้องหาย
                                </button>
                                <button type="submit" id="btn_modal_submit" class="mt-0 btn btn-block hvr-rectangle-in btn-primary kanit d-none" style="border-radius: 0 0 20px 20px;" data-toggle="modal" data-target="#modal_get_information" onclick="submit_form_lost_pet();">
                                    แจ้งน้องหาย
                                </button>
                            <input class="col-10 btn btn-primary d-none" id="lost_pet_submit" type="submit" value="{{ $formMode === 'edit' ? 'แจ้งน้องหาย' : 'แจ้งน้องหาย' }}">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<div class="main-wrapper pet check">
    <div class="pet service">
        <section class="contact" style="margin-top:10px;">
            <!-- <div class="row">
    <div class="col-12">
        <div class="row">
            <div class="col-12 col-md-12" style="margin-top:12px;">
                <a class="btn btn-sm btn-success text-white float-right" onclick="locations_myhome();">
                    <i class="fa-solid fa-house-user"></i> บ้านของฉัน
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-3" style="margin-top:12px;"></div>
            <div class="col-12 col-md-3" style="margin-top:12px;">
                <select name="select_province" id="select_province" class="form-control" onchange="select_A();" required>
                    <option value="" selected>- เลือกจังหวัด -</option>
                </select>
                <input type="text" name="input_province" id="input_province" class="form-control d-none" readonly>
            </div>
            <div class="col-12 col-md-3" style="margin-top:12px;">
                <select name="select_amphoe" id="select_amphoe" class="form-control" onchange="select_T();" required>
                    <option value="" selected>- เลือกอำเภอ -</option>
                </select>
                <input type="text" name="input_amphoe" id="input_amphoe" class="form-control d-none" readonly>

            </div>
            <div class="col-12 col-md-3" style="margin-top:12px;">
                <select name="select_tambon" id="select_tambon" class="form-control" onchange="select_lat_lng();" required>
                    <option value="" selected>- เลือกตำบล -</option>
                </select>
                <input type="text" name="input_tambon" id="input_tambon" class="form-control d-none" readonly>
            </div>
            <div class="col-12 col-md-3 d-none" style="margin-top:12px;">
                <a class="col-6 btn btn-success text-white float-right" onclick="getLocation();">
                    <i class="fa-solid fa-location-crosshairs"></i> ตำแน่งปัจจุบัน
                </a>
            </div>
        </div>
    </div>
</div> -->

            <div class="col-12 main-shadow main-radius d-none" style="margin-top:15px; margin-bottom:10px;" id="map">
                <img style=" object-fit: contain; " width="280 px" src="{{ asset('/peddyhub/images/PEDDyHUB sticker line/15.png') }}" class="card-img-top center" style="padding: 10px;">
                <div style="position: relative; z-index: 5">
                    <div style="padding-top: 8px;" class="translate">
                        <h4 style="font-family: 'Sarabun', sans-serif;">ขออภัยครับ</h4>
                        <h6 style="font-family: 'Sarabun', sans-serif;">ดำเนินการไม่สำเร็จ กรุณาเปิดตำแหน่งที่ตั้ง และลองใหม่อีกครั้งครับ</h6>
                    </div>
                </div>
            </div>
            <br>

            <div class="d-none">

                <div class="d-none form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
                    <label for="user_id" class="control-label">{{ 'User Id' }}</label>
                    <input class="form-control" name="user_id" type="number" id="user_id" value="{{ isset($lost_pet->user_id) ? $lost_pet->user_id : Auth::user()->id }}">
                    {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
                </div>

                <div class="d-none form-group {{ $errors->has('detail') ? 'has-error' : ''}}">
                    <label for="detail" class="control-label">{{ 'อธิบายลักษณะหรือจุดที่ผลัดหลงกับน้อง' }}</label>
                    <textarea class="form-control" name="detail" type="textarea" rows="4" id="detail" value=""></textarea>
                    {!! $errors->first('detail', '<p class="help-block">:message</p>') !!}
                </div>

                <br>

                <div class="d-none form-group {{ $errors->has('pet_id') ? 'has-error' : ''}}">
                    <label for="pet_id" class="control-label">{{ 'Pet Id' }}</label>
                    <input class="form-control" name="pet_id" type="number" id="pet_id" value="{{ isset($lost_pet->pet_id) ? $lost_pet->pet_id : ''}}">
                    {!! $errors->first('pet_id', '<p class="help-block">:message</p>') !!}
                </div>
                <div class="d-none form-group {{ $errors->has('photo') ? 'has-error' : ''}}">
                    <label for="photo" class="control-label">{{ 'Photo' }}</label>
                    <input class="form-control" name="photo" type="text" id="photo" value="{{ isset($lost_pet->photo) ? $lost_pet->photo : ''}}">
                    {!! $errors->first('photo', '<p class="help-block">:message</p>') !!}
                </div>
                <div class="d-none form-group {{ $errors->has('lat') ? 'has-error' : ''}}">
                    <label for="lat" class="control-label">{{ 'Let' }}</label>
                    <input class="form-control" name="lat" type="text" id="lat" value="">
                    {!! $errors->first('lat', '<p class="help-block">:message</p>') !!}
                </div>
                <div class="d-none form-group {{ $errors->has('lng') ? 'has-error' : ''}}">
                    <label for="lng" class="control-label">{{ 'Long' }}</label>
                    <input class="form-control" name="lng" type="text" id="lng" value="">
                    {!! $errors->first('lng', '<p class="help-block">:message</p>') !!}
                </div>

                <div class="d-none form-group {{ $errors->has('pet_category_id') ? 'has-error' : ''}}">
                    <label for="pet_category_id" class="control-label">{{ 'Long' }}</label>
                    <input class="form-control" name="pet_category_id" type="text" id="pet_category_id" value="{{ isset($lost_pet->pet_category_id) ? $lost_pet->pet_category_id : ''}}">
                    {!! $errors->first('pet_category_id', '<p class="help-block">:message</p>') !!}
                </div>

                <input class="d-none" type="text" id="latlng" name="latlng" readonly>

                <br>

                <!-- Modal -->
                <div class="modal fade " data-keyboard="false" data-backdrop="static" id="modal_thx" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-body text-center">
                                <h3>ได้รับข้อมูลเรียบร้อยแล้ว</h3>
                                <img width="60%" src="{{ asset('peddyhub/images/PEDDyHUB sticker line/03.png') }}">
                                <br><br>
                                <h5>สนับสนุนโดย</h5>
                                <div class="col-12 owl-carousel-two align-self-center" style="padding:0px;">
                                    <div class="owl-carousel">
                                        @foreach($partner as $item)
                                        <div class="item" style="padding:0px;z-index:-1;">
                                            <div class="testimon">
                                                <a href="{{$item->link}}" target="bank">
                                                    <img class="p-md-3 p-lg-3" style="width: 100%;object-fit: contain;max-height: 112px;" src="{{ url('storage/'.$item->logo )}}">
                                                </a>
                                            </div>
                                        </div>

                                        @endforeach
                                    </div>
                                </div>
                                <!-- <div class="row">
                                    <div class="col-3">
                                        <a href="https://manoonpetshop.co.th/" target="bank">
                                            <img width="100%" src="{{ asset('peddyhub/images/logo-partner/logomanoonpetshop2.png') }}">
                                        </a>
                                    </div>
                                    <div class="col-3">
                                        <a href="http://www.o2nature.co.th" target="bank">
                                            <img width="70%" src="{{ asset('peddyhub/images/logo-partner/o2.png') }}">
                                        </a>
                                    </div>
                                    <div class="col-3">
                                        <a href="https://facebook.com/DogInTownCafeEkkamai/?_rdc=1&_rdr" target="bank">
                                            <img width="100%" src="{{ asset('peddyhub/images/logo-partner/dogintown.jpg') }}">
                                        </a>
                                    </div>
                                    <div class="col-3" style="top:3px;">
                                        <a href="https://facebook.com/catsanovabkk/" target="bank">
                                            <img width="80%" src="{{ asset('peddyhub/images/logo-partner/Catsanova.png') }}">
                                        </a>
                                    </div>
                                    <div class="col-12"><br></div>
                                    <div class="col-3">
                                        <a href="https://www.facebook.com/neverlandsiberians/" target="bank">
                                            <img width="60%" src="{{ asset('peddyhub/images/logo-partner/turelove.jpg') }}">
                                        </a>
                                    </div>
                                    <div class="col-3 text-center">
                                        <a href="https://www.facebook.com/caturdaycatcafe/" target="bank">
                                            <img width="80%" src="{{ asset('peddyhub/images/logo-partner/Caturday.png') }}">
                                        </a>
                                    </div>
                                    <div class="col-3 text-center">
                                        <a href="https://www.facebook.com/Axoticcafe/" target="bank">
                                            <img width="80%" src="{{ asset('peddyhub/images/logo-partner/axotic.png') }}">
                                        </a>
                                    </div>
                                    <div class="col-3 text-center">
                                        <a href="https://www.viicheck.com" target="bank">
                                            <img width="80%" src="{{ asset('peddyhub/images/logo-partner/logo-viicheck.png') }}">
                                        </a>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </section>
    </div>
</div>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBgrxXDgk1tgXngalZF3eWtcTWI-LPdeus&language=th"></script>
<style type="text/css">
    #map {
        height: calc(45vh);
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', (event) => {
        // console.log("START");
        // getLocation();
        select_province();
        check();
        document.querySelector('#btn_lost_pet_15day').click();
    });

    // function getLocation() {
    //     if (navigator.geolocation) {
    //         navigator.geolocation.getCurrentPosition(initMap);
    //     } else { 
    //         x.innerHTML = "Geolocation is not supported by this browser.";
    //     }

    //     document.querySelector('#map').classList.remove('d-none');
    // }

    function initMap() {

        let lat_text = document.querySelector("#lat");
        let lng_text = document.querySelector("#lng");
        let latlng = document.querySelector("#latlng");

        // lat_text.value = position.coords.latitude ;
        // lng_text.value = position.coords.longitude ;
        // latlng.value = position.coords.latitude+","+position.coords.longitude ;

        let lat = parseFloat(lat_text.value);
        let lng = parseFloat(lng_text.value);

        var image = {
            url: "https://www.peddyhub.com/peddyhub/images/icons/location.png",
            scaledSize: new google.maps.Size(25, 33)
        };

        const map = new google.maps.Map(document.getElementById("map"), {
            zoom: 10,
            center: {
                lat: lat,
                lng: lng
            },
            mapTypeId: "terrain",
        });

        // ตำแหน่ง USER
        const user = {
            lat: lat,
            lng: lng
        };
        const marker_user = new google.maps.Marker({
            map,
            position: user,
            icon: image
        });

        

        const circle = new google.maps.Circle( {
        map           : map,
        center        : new google.maps.LatLng( lat, lng ),
        radius        : 15000,
        strokeColor   : '#B8205B',
        strokeOpacity : 1,
        strokeWeight  : 2,
        fillColor     : '#B8205B',
        fillOpacity   : 0.2
        } );

        // document.querySelector('#div_form').classList.remove('d-none');

    }

    function select_pet_id() {
        let select_pet = document.querySelector('#select_pet');
        let pet_id = document.querySelector('#pet_id');
        pet_id.value = select_pet.value;

        // ตรวจสอบมีการประกาศอยู่หรือไม่
        fetch("{{ url('/') }}/api/check_lost_pet/" + pet_id.value)
            .then(response => response.json())
            .then(result => {
                // console.log(result);

                if (result.length != 0) {
                    // คุณมีประกาศของสัตว์เลี้ยงนี้อยู่
                    document.querySelector('#btn_lost_pet_You_have').click();
                }else{
                    
                    fetch("{{ url('/') }}/api/select_img_pet/" + pet_id.value)
                        .then(response => response.json())
                        .then(result => {
                            // console.log(result);
                            let photo = document.querySelector('#photo');
                            photo.value = result[0]['photo'];

                            let img_pet = document.querySelector('#img_pet');
                            img_pet.src = "{{ url('storage')}}" + "/" + result[0]['photo'];

                            let pet_category_id = document.querySelector('#pet_category_id');
                            pet_category_id.value = result[0]['pet_category_id'];

                            document.querySelector('#modal_submit').classList.add('wow');
                            document.querySelector('#modal_submit').classList.add('fadeInDown');
                            
                            document.querySelector('#modal_submit').classList.remove('d-none');
                    });
                }
        });

    }

    function select_province() {
        let select_province = document.querySelector('#select_province');

        fetch("{{ url('/') }}/api/select_province/")
            .then(response => response.json())
            .then(result => {
                // console.log(result);

                select_province.innerHTML = "";

                let option_select = document.createElement("option");
                option_select.text = "- เลือกจังหวัด -";
                option_select.value = "";
                select_province.add(option_select);

                for (let item of result) {
                    let option = document.createElement("option");
                    option.text = item.changwat_th;
                    option.value = item.changwat_th;
                    select_province.add(option);
                }
            });
    }

    function select_A() {
        let select_province = document.querySelector('#select_province');
        let select_amphoe = document.querySelector('#select_amphoe');

        fetch("{{ url('/') }}/api/select_amphoe" + "/" + select_province.value)
            .then(response => response.json())
            .then(result => {
                // console.log(result);

                select_amphoe.innerHTML = "";

                let option_select = document.createElement("option");
                option_select.text = "- เลือกอำเภอ -";
                option_select.value = "";
                select_amphoe.add(option_select);

                for (let item of result) {
                    let option = document.createElement("option");
                    option.text = item.amphoe_th;
                    option.value = item.amphoe_th;
                    select_amphoe.add(option);
                }
            });
    }

    function select_T() {
        let select_province = document.querySelector('#select_province');
        let select_amphoe = document.querySelector('#select_amphoe');
        let select_tambon = document.querySelector('#select_tambon');

        fetch("{{ url('/') }}/api/select_tambon" + "/" + select_province.value + "/" + select_amphoe.value)
            .then(response => response.json())
            .then(result => {
                // console.log(result);

                select_tambon.innerHTML = "";

                let option_select = document.createElement("option");
                option_select.text = "- เลือกตำบล -";
                option_select.value = "";
                select_tambon.add(option_select);

                for (let item of result) {
                    let option = document.createElement("option");
                    option.text = item.tambon_th;
                    option.value = item.tambon_th;
                    select_tambon.add(option);
                }
            });

    }

    function select_lat_lng() {
        document.querySelector('#select-area').classList.add('d-none');
        document.querySelector('#div_form').classList.add('wow');
        document.querySelector('#div_form').classList.add('fadeInDown');

        setTimeout(function() {
            document.querySelector('#div_form').classList.remove('d-none');
        }, 1000);
       
       

        let select_province = document.querySelector('#select_province');

        if (select_province.value) {
            let select_amphoe = document.querySelector('#select_amphoe');
            let select_tambon = document.querySelector('#select_tambon');

            fetch("{{ url('/') }}/api/select_lat_lng" + "/" + select_province.value + "/" + select_amphoe.value + "/" + select_tambon.value)
                .then(response => response.json())
                .then(result => {
                    // console.log(result);

                    let lat = document.querySelector('#lat');
                    lat.value = result[0]['lat'];

                    let lng = document.querySelector('#lng');
                    lng.value = result[0]['lng'];

                    document.querySelector('#map').classList.remove('d-none');
                    initMap();

                });
        } else {
            let input_province = document.querySelector('#input_province');
            let input_amphoe = document.querySelector('#input_amphoe');
            let input_tambon = document.querySelector('#input_tambon');

            fetch("{{ url('/') }}/api/select_lat_lng" + "/" + input_province.value + "/" + input_amphoe.value + "/" + input_tambon.value)
                .then(response => response.json())
                .then(result => {
                    // console.log(result);

                    let lat = document.querySelector('#lat');
                    lat.value = result[0]['lat'];

                    let lng = document.querySelector('#lng');
                    lng.value = result[0]['lng'];

                    document.querySelector('#map').classList.remove('d-none');
                    initMap();

                });
        }


    }

    function locations_myhome() {

        document.querySelector('#select_province').classList.add('d-none');
        document.querySelector('#select_amphoe').classList.add('d-none');
        document.querySelector('#select_tambon').classList.add('d-none');

        document.querySelector('#input_province').classList.remove('d-none');
        document.querySelector('#input_amphoe').classList.remove('d-none');
        document.querySelector('#input_tambon').classList.remove('d-none');

        let select_province = document.querySelector('#select_province');
        let select_amphoe = document.querySelector('#select_amphoe');
        let select_tambon = document.querySelector('#select_tambon');

        select_province.value = "";
        select_amphoe.value = "";
        select_tambon.value = "";

        select_province.required = "";
        select_amphoe.required = "";
        select_tambon.required = "";

        let input_province = document.querySelector('#input_province');
        let input_amphoe = document.querySelector('#input_amphoe');
        let input_tambon = document.querySelector('#input_tambon');

        input_province.value = "{{ Auth::user()->profile->changwat_th }}";
        input_amphoe.value = "{{ Auth::user()->profile->amphoe_th }}";
        input_tambon.value = "{{ Auth::user()->profile->tambon_th }}";

        select_lat_lng();
    }
</script>
<script>
    function submit_form_lost_pet() {
        setTimeout(function() {
            document.getElementById("lost_pet_submit").click();
        }, 3000);
    }
</script>
<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
<script>
    function check() {
        let phone = document.querySelector('#phone');

        if (phone.value !== "") {
            document.getElementById('btn_check_phone').classList.add('d-none');
            document.getElementById('btn_modal_submit').classList.remove('d-none');
        }else{
            document.getElementById('btn_check_phone').classList.remove('d-none');
            document.getElementById('btn_modal_submit').classList.add('d-none');
        }
    }
</script>