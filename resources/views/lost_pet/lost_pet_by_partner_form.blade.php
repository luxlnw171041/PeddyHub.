<style>
    .page-content{
        padding: 25px 5px;
    }
    
.div_alert{
  position: fixed;
  top: 115%;
  bottom: 0;
  left: 0;
  width: 100%;
  text-align: center;
  font-family: 'Kanit', sans-serif;
  z-index: 9999;
  
}
.div_alert span{
  background-color: #2DD284;
  border-radius:10px;
  color:white;
  padding:15px; 
  font-family: 'Kanit', sans-serif;
  z-index: 9999;
  
}
.up_down{
    animation: up-down 1s cubic-bezier(0.87, 0, 0.13, 1) 0s 2 alternate-reverse both;
}

@keyframes up-down {
	0% {
		opacity: 1;
		transform: translateY(-150px);
	}

	100% {
		opacity: 0;
		transform: translateY(0px);
	}
}
</style>

<div id="alert_copy" class="div_alert" role="alert">
    <span>
        คัดลอกเรียบร้อย
    </span>
</div>
<div class="card radius-10" style="font-family: 'Baloo Bhaijaan 2', cursive;font-family: 'Prompt', sans-serif;">
    <div class="card-header border-bottom-0 bg-transparent">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-3">
                <h2 style="margin-top: 10px;">แจ้งน้องหาย</h2>
            </div>
            <div class="col-12 col-md-9">
                <div style="margin-top: 10px;" class="row">
                    <div class="col-12 col-md-6">
                        <input type="text" class="form-control" name="gen_token" id="gen_token" value="{{ $token }}" readonly>
                    </div>
                    <div class="col-12 col-md-6">
                        <br class="mt-2 d-block d-md-none ">
                        <span class="btn btn-secondary text-white main-shadow main-radius" onclick="CopyToClipboard('gen_token')">
                            Copy
                        </span>
                    </div>
                    <div class="col-12 col-md-2">
                        <span class="btn btn-warning text-white main-shadow main-radius" onclick="Create_Token();">
                            Create Token
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-wrapper pet check">
            <div class="pet service">
                <section class="contact" style="margin-top:10px;">
                    <div class="row d-flex justify-content-end">
                        <hr>
                        <!-- MAP -->
                        <div class="col-12 col-md-3">
                            <div class="main-shadow main-radius" id="map">
                                <img style=" object-fit: contain; " width="280 px" src="{{ asset('/peddyhub/images/PEDDyHUB sticker line/15.png') }}" class="card-img-top center" style="padding: 10px;">
                                <div style="position: relative; z-index: 5">
                                    <div style="padding-top: 8px;" class="translate">
                                        <h4 style="font-family: 'Sarabun', sans-serif;">ขออภัยครับ</h4>
                                        <h6 style="font-family: 'Sarabun', sans-serif;">ดำเนินการไม่สำเร็จ กรุณาเปิดตำแหน่งที่ตั้ง และลองใหม่อีกครั้งครับ</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- DATA -->
                         <!-- DATA -->
                         <div class="card-body p-2 col-12 col-md-9">
                            <div class="card-title d-flex align-items-center">
                                <div><i class="fa-solid fa-location-dot me-1 font-22 text-danger"></i>
                                </div>
                                <h5 class="mb-0 text-danger">สถานที่</h5>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="validationServer03" class="form-label">จังหวัด</label>
                                    <select class="form-select" required="" aria-label="select example">
                                        <option value="">เลือกจังหวัด</option>
                                    </select>
                                    <div id="validationServer03Feedback" class="invalid-feedback">โปรดระบุจังหวัดที่ถูกต้อง.</div>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationServer03" class="form-label">อำเภอ</label>
                                    <select class="form-select" required="" aria-label="select example">
                                        <option value="">เลือกอำเภอ</option>
                                    </select>
                                    <div id="validationServer03Feedback" class="invalid-feedback">โปรดระบุอำเภอที่ถูกต้อง.</div>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationServer03" class="form-label">ตำบล</label>
                                    <select class="form-select" required="" aria-label="select example">
                                        <option value="">เลือกตำบล</option>
                                    </select>
                                    <div id="validationServer03Feedback" class="invalid-feedback">โปรดระบุตำบลที่ถูกต้อง.</div>
                                </div>
                            </div>
<hr>
                            <div class="card-title d-flex align-items-center mt-4">
                                <div><i class="fa-solid fa-memo-circle-info me-1 font-22 text-info"></i>
                                </div>
                                <h5 class="mb-0 text-info">ข้อมูลเจ้าของ</h5>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="inputLastName2" class="form-label">ชื่อ</label>
                                    <div class="input-group"> <span class="input-group-text bg-transparent"><i class="bx bxs-user"></i></span>
                                        <input type="text" class="form-control border-start-0" id="inputLastName2" placeholder="ชื่อเจ้าของ">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label for="inputPhoneNo" class="form-label">เบอร์ติดต่อ</label>
                                    <div class="input-group"> <span class="input-group-text bg-transparent"><i class="fa-solid fa-phone"></i></span>
                                        <input type="text" class="form-control border-start-0" id="inputPhoneNo" placeholder="หมายเลขโทรศัพท์">
                                    </div>
                                </div>
                            </div>
                            <hr>

                            <div class="card-title d-flex align-items-center mt-4">
                                <div><i class="fa-solid fa-paw me-1 font-22 text-primary"></i>
                                </div>
                                    <h5 class="mb-0 text-primary">ข้อมูลรายละเอียดสัตว์เลี้ยง</h5>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="row">
                                            <div class="col-12 col-md-6 form-group">
                                                <div class="d- form-group {{ $errors->has('pet_name') ? 'has-error' : ''}}">
                                                    <label for="pet_name" class="control-label">{{ 'ชื่อสัตว์เลี้ยง' }}</label>
                                                    <input class="form-control" name="pet_name" type="text" id="pet_name" value="{{ isset($lost_pet->pet_name) ? $lost_pet->pet_name : ''}}" required>
                                                    {!! $errors->first('pet_category_id', '<p class="help-block">:message</p>') !!}
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 form-group">
                                                <div class="d- form-group {{ $errors->has('pet_age') ? 'has-error' : ''}}">
                                                    <label for="pet_age" class="control-label">{{ 'อายุสัตว์เลี้ยง' }}</label>
                                                    <div class="input-group mb-3">
                                                        <input type="text" class="form-control" placeholder="ปี" aria-label="Username">
                                                        <input type="text" class="form-control" placeholder="เดือน" aria-label="Server" required>
                                                    </div>
                                                    <input class="form-control d-none" name="pet_age" type="text" id="pet_age" value="" readonly>
                                                    {!! $errors->first('pet_category_id', '<p class="help-block">:message</p>') !!}
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="col-6">asd</div>

                                </div>
                            <hr>
                        </div>
                        <div class="col-12 col-md-9 d-none" style="padding-right:20px;padding-left: 20px;">

                            <div class="col-12 col-md-12 form-group">
                            <br class="d-block d-md-none mt-5">
                            <div class="row">
                                    <h4>สถานที่<span style="color: red;">*</span></h4>
                                    <div class="col-12 col-md-3 form-group">
                                        <select name="select_province" id="select_province" class="form-control" onchange="select_A();" required>
                                            <option value="" selected>- เลือกจังหวัด -</option>
                                        </select>
                                        <input type="text" name="input_province" id="input_province" class="form-control d-none" readonly>
                                    </div>
                                    <div class="col-12 col-md-3 form-group">
                                        <select name="select_amphoe" id="select_amphoe" class="form-control" onchange="select_T();" required>
                                            <option value="" selected>- เลือกอำเภอ -</option>
                                        </select>
                                        <input type="text" name="input_amphoe" id="input_amphoe" class="form-control d-none" readonly>
                                    </div>
                                    <div class="col-12 col-md-3 form-group">
                                        <select name="select_tambon" id="select_tambon" class="form-control" onchange="select_lat_lng();" required>
                                            <option value="" selected>- เลือกตำบล -</option>
                                        </select>
                                        <input type="text" name="input_tambon" id="input_tambon" class="form-control d-none" readonly>
                                    </div>
                                    <div class="col-12 col-md-3 form-group">
                                        <!-- ว่าง -->
                                    </div>
                                </div>
                            </div>

                            <br>
                            <hr>

                            <div id="div_form" class="d-">
                                <div class="row">
                                    <!-- -------------------------------------- -->
                                    <!-- -ข้อมูลเจ้าของ -->
                                    <div class="col-12 col-md-12 form-group">
                                        <div class="row">
                                            <h4>ข้อมูลเจ้าของ</h4>
                                            <div class="col-12 col-md-4 form-group">
                                                <div class="faq form-group {{ $errors->has('owner_name') ? 'has-error' : ''}}">
                                                    <label for="owner_name" class="control-label">{{ 'ชื่อ' }}</label>
                                                    <input class="form-control" name="owner_name" type="text" id="owner_name" value="">
                                                    {!! $errors->first('owner_name', '<p class="help-block">:message</p>') !!}
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4 form-group">
                                                <div class="faq form-group {{ $errors->has('owner_phone') ? 'has-error' : ''}}">
                                                    <label for="owner_phone" class="control-label">{{ 'เบอร์ติดต่อ' }}</label>
                                                    <input class="form-control" name="owner_phone" type="text" id="owner_phone" value="">
                                                    {!! $errors->first('owner_phone', '<p class="help-block">:message</p>') !!}
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-8 form-group">
                                                <!-- ว่าง -->
                                            </div>
                                        </div>
                                        <br>
                                        <hr>
                                        <br>
                                    </div>

                                    <!-- ข้อมูลรายละเอียดสัตว์เลี้ยง -->
                                    <div class="col-12 col-md-6 form-group">
                                        <div class="row">
                                            <h4>ข้อมูลรายละเอียดสัตว์เลี้ยง</h4>
                                            <div class="col-12 col-md-6 form-group">
                                                <div class="d- form-group {{ $errors->has('pet_name') ? 'has-error' : ''}}">
                                                    <label for="pet_name" class="control-label">{{ 'ชื่อสัตว์เลี้ยง' }}</label>
                                                    <input class="form-control" name="pet_name" type="text" id="pet_name" value="{{ isset($lost_pet->pet_name) ? $lost_pet->pet_name : ''}}" required>
                                                    {!! $errors->first('pet_category_id', '<p class="help-block">:message</p>') !!}
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 form-group">
                                                <div class="d- form-group {{ $errors->has('pet_age') ? 'has-error' : ''}}">
                                                    <label for="pet_age" class="control-label">{{ 'อายุสัตว์เลี้ยง' }}</label>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <input class="form-control" name="pet_age_Y" type="number" id="pet_age_Y" value="" placeholder="ปี" onchange="input_pet_age();" min="0">
                                                        </div>
                                                        <div class="col-6">
                                                            <input class="form-control" name="pet_age_M" type="number" id="pet_age_M" value="" placeholder="เดือน" onchange="input_pet_age();" required min="0">
                                                        </div>
                                                    </div>
                                                    <input class="form-control d-none" name="pet_age" type="text" id="pet_age" value="" readonly>
                                                    {!! $errors->first('pet_category_id', '<p class="help-block">:message</p>') !!}
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 form-group">
                                                <br>
                                                <div class="d- form-group {{ $errors->has('pet_category_id') ? 'has-error' : ''}}">
                                                    <label for="pet_category_id" class="control-label">{{ 'ประเภทสัตว์เลี่ยง' }}</label>
                                                    <select style="margin:0px;" id="select_category" name="pet_category_id" class="form-control" onchange="species_select();" required>
                                                        <option class="translate" value="" selected> - โปรดเลือก - </option>
                                                    </select>
                                                    {!! $errors->first('pet_category_id', '<p class="help-block">:message</p>') !!}
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 form-group">
                                                <br>
                                                <div class="d- form-group {{ $errors->has('sub_category') ? 'has-error' : ''}}">
                                                    <label for="sub_category" class="control-label">{{ 'สายพันธุ์' }}</label>
                                                    <input class="form-control" name="sub_category" type="text" id="sub_category" value="" placeholder="ระบุสายพันธุ์">
                                                    {!! $errors->first('sub_category', '<p class="help-block">:message</p>') !!}
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-12 form-group">
                                                <br>
                                                <div class="d- form-group {{ $errors->has('pet_gender') ? 'has-error' : ''}}">
                                                    <label for="pet_gender" class="control-label">{{ 'เพศ' }}</label>
                                                    <div class="form-group">
                                                        <input type="radio" name="pet_gender" id="pet_gender_M" value="ชาย" required> ชาย &nbsp;&nbsp;
                                                        <input type="radio" name="pet_gender" id="pet_gender_W" value="หญิง"> หญิง &nbsp;&nbsp;
                                                        <input type="radio" name="pet_gender" id="pet_gender_O" value=""> ไม่ระบุ &nbsp;&nbsp;
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-12 form-group">
                                                <br>
                                                <div class=" form-group {{ $errors->has('detail') ? 'has-error' : ''}}">
                                                    <label for="detail" class="control-label">{{ 'รายละเอียด' }}</label>
                                                    <textarea class="form-control" name="detail" type="textarea" rows="4" id="detail" value=""></textarea>
                                                    {!! $errors->first('detail', '<p class="help-block">:message</p>') !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 form-group">
                                        <div class="row">
                                            <h4><br></h4>
                                            <div class="col-12 col-md-12 form-group">
                                                <div class="d- form-group {{ $errors->has('photo') ? 'has-error' : ''}}">
                                                    <label for="photo" class="control-label">{{ 'รูปภาพ' }}</label>
                                                    <input style="position:absolute;top:65%;right: 10%; width: 10%;z-index: -9;" class="form-control" name="photo" type="file" id="photo" value="{{ isset($lost_pet->photo) ? $lost_pet->photo : ''}}" required accept="image/*" onchange="document.getElementById('show_photo').src = window.URL.createObjectURL(this.files[0]),add_photo();" >
                                                    {!! $errors->first('photo', '<p class="help-block">:message</p>') !!}
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-12 form-group">
                                                <center>
                                                    <br>
                                                    <div class="fill parent" style="border:dotted #B8205B;border-radius:25px;padding:0px;object-fit: cover;height: 340px;z-index: 99;background-color: white;">
                                                        <br>
                                                        <div id="btn_add_photo" class="">
                                                            <i style="font-size:100px;margin-top: 85px;color: #B8205B;" class="fas fa-images btn" onclick="document.querySelector('#photo').click();"></i>
                                                            <br>
                                                            <span style="color:#B8205B;" class="btn" onclick="document.querySelector('#photo').click();">เพิ่มรูปภาพสัตว์เลี้ยง</span>
                                                        </div>
                                                        <img class="d- full_img main-shadow main-radius" style="padding:0px ;" width="50%" id="show_photo" onclick="document.querySelector('#photo').click();" />
                                                    </div>
                                                </center>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- ปุ่มส่งข้อมูล -->
                                    <div class="col-12 col-md-12 form-group">
                                        <br>
                                        <button style="float:right;margin-right: 20px;margin-top: 20px;width: 30%;" id="modal_submit" type="button" class="btn btn-primary button-three" data-toggle="modal" data-target="#exampleModalLabel" onclick="submit_form_lost_pet();">
                                            แจ้งน้องหาย
                                        </button>
                                        <input class="col-10 btn btn-primary d-none" id="lost_pet_submit" type="submit" value="{{ $formMode === 'edit' ? 'แจ้งน้องหาย' : 'แจ้งน้องหาย' }}">
                                        <div class="col-1"></div>
                                    </div>
                                    <!-- ------------------------------------ -->
                                </div>

                                <!-- ข้อมูล lat , lng -->
                                <div class="d-none form-group {{ $errors->has('lat') ? 'has-error' : ''}}">
                                    <label for="lat" class="control-label">{{ 'Let' }}</label>
                                    <input class="form-control" name="lat" type="text" id="lat" value="13.753882">
                                    {!! $errors->first('lat', '<p class="help-block">:message</p>') !!}
                                </div>
                                <div class="d-none form-group {{ $errors->has('lng') ? 'has-error' : ''}}">
                                    <label for="lng" class="control-label">{{ 'Long' }}</label>
                                    <input class="form-control" name="lng" type="text" id="lng" value="100.571329">
                                    {!! $errors->first('lng', '<p class="help-block">:message</p>') !!}
                                </div>
                                <input class="d-none" type="text" id="latlng" name="latlng" readonly>
                                <input class="d-none" type="text" id="num_zoom" name="num_zoom" value="6" readonly>
                                <input class="d-none" type="text" id="by_partner" name="by_partner" value="{{ Auth::user()->partner }}" >
                                <input class="d-none" type="text" id="by_api" name="by_api" value="No" >

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
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
<style>
    .gmnoprint{
        display: none;
    }.gm-style-cc{
        display: none;
    }
</style>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBgrxXDgk1tgXngalZF3eWtcTWI-LPdeus&language=th"></script>
<style type="text/css">
    #map {
        height: calc(65vh);
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', (event) => {
        // console.log("START");
        getLocation();
        select_province();
        select_category();
        document.querySelector('#btn_lost_pet_15day').click();
    });

    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(initMap);
        } else { 
            x.innerHTML = "Geolocation is not supported by this browser.";
        }
    }

    function initMap() {

let lat_text = document.querySelector("#lat");
let lng_text = document.querySelector("#lng");
let latlng = document.querySelector("#latlng");
let zoom = document.querySelector("#num_zoom").value;

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
    mapTypeControl: false,
    fullscreenControl: false,
    scaleControl: false,
    streetViewControl: false,
    
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

        document.querySelector('#div_form').classList.remove('d-none');

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

                    document.querySelector("#num_zoom").value = 14 ;
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

                    document.querySelector("#num_zoom").value = 12 ;
                    initMap();

                });
        }
    }

    function select_category() {
        let select_category = document.querySelector('#select_category');

        fetch("{{ url('/') }}/api/select_category/")
            .then(response => response.json())
            .then(result => {

                for (let item of result) {
                    let option = document.createElement("option");
                    option.text = item.name;
                    option.value = item.id;
                    select_category.add(option);
                }

            });
    }

    function input_pet_age(){
        let pet_age_Y = document.querySelector('#pet_age_Y').value ;
        let pet_age_M = document.querySelector('#pet_age_M').value ;

        if (pet_age_Y && pet_age_M) {
            document.querySelector('#pet_age').value = pet_age_Y + " ปี " + pet_age_M + " เดือน" ;
        }else if(pet_age_Y && !pet_age_M){
            document.querySelector('#pet_age').value = pet_age_Y + " ปี " ;
        }else{
            document.querySelector('#pet_age').value = pet_age_M + " เดือน" ;
        }

        if (pet_age_Y == "0" && pet_age_M) {
            document.querySelector('#pet_age').value = pet_age_M + " เดือน" ;
        }
    }

    function add_photo(){
        document.querySelector('#btn_add_photo').classList.add('d-none');
        document.querySelector('#show_photo').classList.remove('d-none');
    }


</script>
<script>
    function submit_form_lost_pet() {
        setTimeout(function() {
            document.getElementById("lost_pet_submit").click();
        }, 3000);
    }

    function Create_Token(){
        let id_partner = document.querySelector('#by_partner').value ;
        let gen_token = document.querySelector('#gen_token') ;

        fetch("{{ url('/') }}/api/Create_Token/" + id_partner)
            .then(response => response.text())
            .then(result => {

                // console.log(result);
                gen_token.value = result ;
            });
    }

    function CopyToClipboard(containerid) {
        var range = document.createRange();
            range.selectNode(document.getElementById(containerid));
            window.getSelection().addRange(range);
            document.execCommand("copy");

            document.querySelector('#alert_copy').classList.add('up_down');

            const animated = document.querySelector('.up_down');
            animated.onanimationend = () => {
                document.querySelector('#alert_copy').classList.remove('up_down');
            };
        
    }
    </script>
    <script>
        $(".phone").text(function(i, text) {
            text = text.replace(/(\d{3})(\d{3})(\d{4})/, "$1-$2-$3");
            return text;
        });
    </script>