@extends('layouts.app')
@section('content')
    
{{--  HEADER --}}
<div id="header">
  <div class="dark-overlay">
    <div class="home-inner">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 ">
            <h3 class="display-4 font-white d-block d-sm-none"> <center>ICA</center></h>
            <h1 class="display-4 font-white d-none d-sm-block"> Informatics Comprehensive Assessment</h1>
            <div class="d-flex flex-row">
              <div class="p-4 align-self-start">
                <i class="fa fa-check"></i>
              </div>
              <div class="p-4 align-self-end">
                New way of learning that you can fit in your own time.
              </div>
            </div>

            <div class="d-flex flex-row">
              <div class="p-4 align-self-start">
                <i class="fa fa-check"></i>
              </div>
              <div class="p-4 align-self-end">
                <p>Collection of learning resources provided by lecturers.</p>
              </div>
            </div>
            <div class="d-flex flex-row">
              <div class="p-4 align-self-start">
                <i class="fa fa-check"></i>
              </div>
              <div class="p-4 align-self-end">
                Comprehensive exam that is intended to evaluate student.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

{{-- END OF HEADER --}}


<!-- EXPLORE HEAD -->
  <section id="explore-head-section" class="font-white">
    <div class="container">
      <div class="row">
        <div class="col text-center">
          <div class="p-5">
            <h1 class="display-4">Explore</h1>
            <p class="lead">A web-based application that is intended to extend the learning experience of the students of Informatics International College - Cainta.</p>
            <a href="#" class="btn btn-outline-secondary">Find Out More</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- EXPLORE SECTION -->
  <section id="explore-section" class="bg-light text-muted py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="img/learn_ICA.jpg" alt="" class="img-fluid mb-3 rounded">
        </div>
        <div class="col-md-6">
          <h3>Explore & Learn</h3>
          <p>ICA subject is the main container of learning resources such as leturer's note, embed video and some file attachment that student can access anytime.</p>
          <div class="d-flex flex-row">
            <div class="p-4 align-self-start">
              <i class="fa fa-check fa-black"></i>
            </div>
            <div class="p-4 align-self-end">
              Helpful for lecturers that learning resources are in one place.
            </div>
          </div>
          <div class="d-flex flex-row">
            <div class="p-4 align-self-start">
              <i class="fa fa-check fa-black"></i>
            </div>
            <div class="p-4 align-self-end">
              Learning Resources helps student review in their subject
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>





  <!-- CREATE HEAD -->
  <section id="create-head-section" class="bg-info">
    <div class="container">
      <div class="row">
        <div class="col text-center">
          <div class="p-5">
            <h1 class="display-4">ICA</h1>
            <p class="lead">The purpose of the study is to design and develop a web-based application that is intended to extend the learning experience of the students of Informatics International College - Cainta </p>
            
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CREATE SECTION -->
  <section id="create-section" class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
            <h3>Create Your Passion</h3>
            <p>Make better use of technology tools for instruction, and to help students improve their technology skills</p>
            <div class="d-flex flex-row">
              <div class="p-4 align-self-start">
                <i class="fa fa-check"></i>
              </div>
              <div class="p-4 align-self-end">
                Informatics Comprehensive Assessment is tied to learning goals and standards. 

              </div>
            </div>
            <div class="d-flex flex-row">
              <div class="p-4 align-self-start">
                <i class="fa fa-check"></i>
              </div>
              <div class="p-4 align-self-end">
                Students can access learning resources that can help to enhance learning experience that promotes self-study habit and must own the assessment process by taking the comprehensive exam.
              </div>
            </div>
        </div>
        <div class="col-md-6">
            <img src="/img/group.jpeg" alt="" class="img-fluid mb-3 rounded-circle">
        </div>
      </div>
    </div>
  </section>




@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
             

        
    

@endsection


@push('styles')
<link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
<link href="{{ asset('css/stylehome.css') }}" rel="stylesheet">
@endpush