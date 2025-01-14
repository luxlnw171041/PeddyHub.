@extends('layouts.peddyhub')

@section('content')
<div class="pet about second">
    <div class="button wow fadeInUp " style="margin-bottom:-50px">  
        <div class="container">
            <div class="row col-12">
                @include ('menubar.menu')
            </div>
            <br>
            <div class="row col-12" style="padding:0px;">
                <div class="col-12 col-md-12 order-first order-md-2">
                    @if(Auth::check())
                        <a href="{{ url('/adoptpet/create') }}" style="margin-top:8px" class="btn main float-right" title="contact">
                        <span >โพสต์</span>  
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <section class="team" style="margin-top:80px;">
        <div class="container" >
            <div class="heading text-center">
                <p class="wow fadeInUp"><span class="purple"><i class="fas fa-paw"></i> </span><span
                        class="orange"><i class="fas fa-paw"></i> </span><span class="purple"><i
                            class="fas fa-paw"></i> </span></p>
                <h2 class="wow fadeInDown">Ready for  <span class="wow pulse" data-wow-delay="1s">
                        Adoption</span>
                </h2>
            </div>
            <div class="row">
                @foreach($adoptpet as $item)
                    @if($item->status != "delete")
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="member">
                                <div class="image">
                                    <img src="{{ url('storage/'.$item->photo )}}" style="width: 350px; height:292px;object-fit: cover;"  alt="image of pet" title="pet"
                                        class="img-fluid customer">
                                </div>
                                <div class="content">
                                    <a href="{{ url('/adoptpet/' . $item->id) }}">
                                        @php
                                            $pet_category = $item->pet_category_id ;
                                        @endphp
                                        <!-- icon_categorie -->
                                    

                                        <h4 class="wow fadeInDown notranslate">
                                            @include ('menubar.icon_categorie')
                                            {{ $item->titel }}
                                            @switch($item->gender)
                                                @case('หญิง')
                                                <i style="font-size:28px;color:#F06491;margin-left:10px" class="fas fa-venus"></i>
                                                @break
                                                @case('ชาย')
                                                    <i style="font-size:28px;color:#00ADEF;margin-left:10px" class="fas fa-mars"></i>
                                                @break
                                                @case('ไม่ระบุ')
                                                    <i style="font-size:28px;color:#88C550;margin-left:10px" class="fas fa-venus-mars"></i>
                                                @break
                                            @endswitch
                                        </h4>
                                    </a>
                                    <ul style="font-size:22px;">
                                        <li><i class="fas fa-paw"></i> ขนาด{{ $item->size }}</li>
                                        <li><i class="fas fa-paw"></i> {{ $item->age }}</li>
                                    </ul>
                                    <div class="button wow fadeInUp">
                                        @if($item->status != "get_home")
                                            <a href="{{ url('/adoptpet/' . $item->id) }}" class="btn main" title="contact">
                                                Adopt me <i class="fas fa-paw"></i>
                                            </a>
                                        @else
                                            <a disabled class=" disabled btn-found" title="contact">
                                               ได้บ้านแล้ว <i class="fas fa-paw"></i>
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach 
                <!-- <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="member">
                        <div class="image">
                            <img src="peddyhub/images/home_5/pet-1.png" alt="image of pet" title="pet"
                                class="img-fluid customer">
                        </div>
                        <div class="content">
                            <h4 class="wow fadeInDown">Scooby</h4>
                            <ul>
                                <li><i class="fas fa-paw"></i> Male Adult</li>
                                <li><i class="fas fa-paw"></i> American Staffordshire Terrier</li>
                                <li><i class="fas fa-paw"></i> Hollywood, FL</li>
                            </ul>

                            <div class="button wow fadeInUp">
                                <a href="pet-profile.html" class="btn main" title="contact">
                                    Adopt me <i class="fas fa-paw"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="member">
                        <div class="image">
                            <img src="peddyhub/images/home_5/pet-2.png" alt="image of pet" title="pet"
                                class="img-fluid customer">
                        </div>
                        <div class="content">
                            <h4 class="wow fadeInDown">Shawns</h4>
                            <ul>
                                <li><i class="fas fa-paw"></i> Male Adult</li>
                                <li><i class="fas fa-paw"></i> American Staffordshire Terrier</li>
                                <li><i class="fas fa-paw"></i> Hollywood, FL</li>
                            </ul>
                            <div class="button wow fadeInUp">
                                <a href="pet-profile.html" class="btn main" title="contact">
                                    Adopt me <i class="fas fa-paw"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="member">
                        <div class="image">
                            <img src="peddyhub/images/home_5/pet-3.png" alt="image of pet" title="pet"
                                class="img-fluid customer">
                        </div>
                        <div class="content">
                            <h4 class="wow fadeInDown">Roscoe</h4>
                            <ul>
                                <li><i class="fas fa-paw"></i> Male Adult</li>
                                <li><i class="fas fa-paw"></i> American Staffordshire Terrier</li>
                                <li><i class="fas fa-paw"></i> Hollywood, FL</li>
                            </ul>
                            <div class="button wow fadeInUp">
                                <a href="pet-profile.html" class="btn main" title="contact">
                                    Adopt me <i class="fas fa-paw"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="member">
                        <div class="image">
                            <img src="peddyhub/images/home_5/pet-4.png" alt="image of pet" title="pet"
                                class="img-fluid customer">
                        </div>
                        <div class="content">
                            <h4 class="wow fadeInDown">Gretchen</h4>
                            <ul>
                                <li><i class="fas fa-paw"></i> Male Adult</li>
                                <li><i class="fas fa-paw"></i> American Staffordshire Terrier</li>
                                <li><i class="fas fa-paw"></i> Hollywood, FL</li>
                            </ul>
                            <div class="button wow fadeInUp">
                                <a href="pet-profile.html" class="btn main" title="contact">
                                    Adopt me <i class="fas fa-paw"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="member">
                        <div class="image">
                            <img src="peddyhub/images/home_5/pet-5.png" alt="image of pet" title="pet"
                                class="img-fluid customer">
                        </div>
                        <div class="content">
                            <h4 class="wow fadeInDown">Caine</h4>
                            <ul>
                                <li><i class="fas fa-paw"></i> Male Adult</li>
                                <li><i class="fas fa-paw"></i> American Staffordshire Terrier</li>
                                <li><i class="fas fa-paw"></i> Hollywood, FL</li>
                            </ul>
                            <div class="button wow fadeInUp">
                                <a href="pet-profile.html" class="btn main" title="contact">
                                    Adopt me <i class="fas fa-paw"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="member">
                        <div class="image">
                            <img src="peddyhub/images/home_5/pet-6.png" alt="image of pet" title="pet"
                                class="img-fluid customer">
                        </div>
                        <div class="content">
                            <h4 class="wow fadeInDown">Rookie</h4>
                            <ul>
                                <li><i class="fas fa-paw"></i> Male Adult</li>
                                <li><i class="fas fa-paw"></i> American Staffordshire Terrier</li>
                                <li><i class="fas fa-paw"></i> Hollywood, FL</li>
                            </ul>
                            <div class="button wow fadeInUp">
                                <a href="pet-profile.html" class="btn main" title="contact">
                                    Adopt me <i class="fas fa-paw"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
</div>
    <!-- <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Adoptpet</div>
                    <div class="card-body">
                        <a href="{{ url('/adoptpet/create') }}" class="btn btn-success btn-sm" title="Add New Adoptpet">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        <form method="GET" action="{{ url('/adoptpet') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th><th>Titel</th><th>Detail</th><th>User Id</th><th>Photo</th><th>Gender</th><th>Size</th><th>Age</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($adoptpet as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->titel }}</td><td>{{ $item->detail }}</td><td>{{ $item->user_id }}</td><td>{{ $item->photo }}</td><td>{{ $item->gender }}</td><td>{{ $item->size }}</td><td>{{ $item->age }}</td>
                                        <td>
                                            <a href="{{ url('/adoptpet/' . $item->id) }}" title="View Adoptpet"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/adoptpet/' . $item->id . '/edit') }}" title="Edit Adoptpet"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/adoptpet' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Adoptpet" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $adoptpet->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div> -->
@endsection
<script>
    document.addEventListener('DOMContentLoaded', (event) => {
        console.log("START");
        add_color();
        
    });
    function add_color(){
        console.log("add_color");
        document.querySelector('#btn_a_adopt').classList.add('btn-primary');
        document.querySelector('#btn_a_adopt').classList.remove('btn-outline-primary');
    }
</script>