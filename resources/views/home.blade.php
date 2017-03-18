@extends('layouts.app')

@section('content')

  <div class="fixed-action-btn horizontal" style="bottom: 45px; right: 24px;">
      <button type="button" class="btn-floating btn-large red">
          <i class="large mdi-editor-mode-edit"></i>
      </button>
      <ul>
          <li><button type="button" class="btn-floating red"><i class="large mdi-editor-insert-chart"></i></button></li>
          <li><button type="button" class="btn-floating red"><i class="large mdi-editor-insert-chart"></i></button></li>
          <li><button type="button" class="btn-floating red"><i class="large mdi-editor-insert-chart"></i></button></li>
          <li><button type="button" class="btn-floating red"><i class="large mdi-editor-insert-chart"></i></button></li>
      </ul>
  </div>

@endsection
