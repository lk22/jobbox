@extends('layouts.app')

@section('content')
    <div class=".container-fluid" id="job-application-wrapper">

        <form class="job-application-form" action="index.html" method="post">
            <div class="row">
                <div class="input-field col s6">
                  <input placeholder="Placeholder" id="first_name" type="text" class="validate">
                  <label for="first_name">First Name</label>
                </div>
            </div>

            <div class="row">
                
            </div>
        </form>

        <div class="fixed-action-btn horizontal click-to-toggle">
            <a class="btn-floating btn-large red">
              <i class="material-icons">menu</i>
            </a>
            <ul>
              <li><a class="btn-floating red"><i class="material-icons">insert_comment</i></a></li>
              <li><a class="btn-floating yellow darken-1"><i class="material-icons">save</i></a></li>
            </ul>
        </div>

    </div>
@stop
