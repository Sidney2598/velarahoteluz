@extends('Front.Layouts.layout')
@section('content')
<section class="ftco-section">
   <div class="container">
      <div class="row justify-content-center mb-5 pb-3">
         <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading">Velara Room</span>
            <h2>{{$rooms->name}}</h2>
         </div>
      </div>
      <div class="ftco-section ftc-no-pb ftc-no-pt">
         <div class="container">
            <div class="row ">
               <div class="col-lg-6 pt-5 news" >
                  <div class="home-slider owl-carousel">
                      @if(isset($rooms))
                         <div class="slider-item1" style="background-image:url({{asset('/'.$rooms->img)}});">
                            <div class="overlay"></div>
                         </div>
                          <div class="slider-item1" style="background-image:url({{asset('/'.$rooms->img)}});">
                              <div class="overlay"></div>
                          </div>
                          <div class="slider-item1" style="background-image:url({{asset('/'.$rooms->img)}});">
                              <div class="overlay"></div>
                          </div>
                        @endif
                  </div>
               </div>
               <div class="col-lg-6 py-5 wrap-about  ftco-animate">
                  <div class="heading-section heading-section-wo-line">
                     <div class="ml-md-0">
                        <h4 class="">Categories</h4>
                     </div>
                  </div>
                  <div class="pb-md-5">
                     <div class="ctegory-room">
                        <div class="room-about">
                           <span>Suite room</span><span class="room-span">(20)</span>
                        </div>
                        <div class="room-about">
                           <span>Suite room</span><span class="room-span">(20)</span>
                        </div>
                        <div class="room-about">
                           <span>Suite room</span><span class="room-span">(20)</span>
                        </div>
                        <div class="room-about">
                           <span>Suite room</span><span class="room-span">(20)</span>
                        </div>
                        <div class="room-about">
                           <span>Suite room</span><span class="room-span">(20)</span>
                        </div>
                        <div class="room-about">
                           <span>Suite room</span><span class="room-span">(20)</span>
                        </div>
                        <div class="room-about">
                           <span>Suite room</span><span class="room-span">(20)</span>
                        </div>

                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
    </div>
   </section>
   <section class="about-room mb-5">
      <div class="container">
          {{$rooms->body['uz']}}
      </div>
   </section>
@endsection
