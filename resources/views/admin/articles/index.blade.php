{{-- @php
dd($articles);
@endphp --}}

@extends('layouts.app')
@section('content')
       <div class="container">
              <div class="row">
                     <div class="col-12">
                            <nav aria-label="breadcrumb">
                                   <ol class="breadcrumb">
                                          <li class="breadcrumb-item">
                                                 <a href="{{route('home')}}">Home</a>
                                          </li>
                                          <li class="breadcrumb-item active" aria-current="page">Pages</li>
                                   </ol>
                            </nav>
                     </div>
              </div>
              <div class="row">
                     <div class="col-12">
                            <div class="row">
                                   <div class="col-6">
                                          <h2>Pages</h2>
                                   </div>
                                   <div class="offset-3 col-3">
                                          <a href="{{route('admin.articles.create')}}">Crea una pagina</a>
                                   </div>
                            </div>
                            <table class="table table-dark">
                                   <thead class="thead-dark">
                                          <tr>
                                                 <th>ID</th>
                                                 <th>Title</th>
                                                 <th>Categories</th>
                                                 <th>Tags</th>
                                                 <th colspan="3">Actions</th>
                                          </tr>
                                   </thead>
                                   <tbody>
                                          <tr>
                                                 <td>{{$articles->id}}</td>
                                                 <td>{{$articles->title}}</td>
                                                 <td>{{$articles->category->name}}</td>
                                                 <td>@foreach ($articles->tags as $value)
                                                        {{$value->name}}
                                                 @endforeach</td>

                                                 <td><a class="btn btn-primary" href="">Visualizza</a></td>
                                                 <td><a class="btn btn-info" href="">Modifica</a></td>
                                                 <td>
                                                        <form class="" action="index.html" method="post">
                                                               <input value="Elimina"type="submit" class="btn btn-danger">
                                                        </form>
                                                 </td>
                                          </tr>
                                   </tbody>
                            </table>

                     </div>
              </div>
       </div>

@endsection
