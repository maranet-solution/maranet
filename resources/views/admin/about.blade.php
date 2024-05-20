@extends('layouts.admin')

@section('content')

<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <form action="{{ route('update_about') }}" method="post" class="modal-content save-form">
        @csrf
        <div class="modal-header">
          <h5 class="modal-title" id="editModalLabel">Update Plan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="form-group">
                <label>Vision </label>
                <textarea name="vission" rows="5" class="description form-control" placeholder="vision Here">{{$aboutUs['vission']}}
                </textarea>
              </div>
              <div class="form-group">
                <label>Mission </label>
                <textarea name="mission" rows="5" class="description form-control" placeholder="mission Here">{{$aboutUs['mission']}}
                </textarea>
              </div>
          <div class="form-group">
            <label>Strategy</label>
            <textarea name="strategy" rows="5" class="description form-control" placeholder="strategy Here">{{$aboutUs['strategy']}}
            </textarea>
          </div>
        </div>
       
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </form>
    </div>
  </div>
<div class="row p-4  gx-5 gy-5">
    <div class="col-12 col py-2">
        <button  data-toggle="modal" data-target="#editModal" class=" px-2 py-1 btn btn-success"><i class="fa-solid fa-pen"></i>
        Edit About
        </button>

    </div>
    <div class="col col-12 col-lg-6 p-4 shadow-sm">
        <h4>Mission</h4>
        <p>
            {{$aboutUs['mission']}}
        </p>
    </div>
    <div class="col col-12 col-lg-6 p-4 shadow-sm">
        <h4>Vision</h4>
        <p>
            {{$aboutUs['vission']}}
        </p>
    </div>
    <div class="col col-12 col-lg-6 p-4 shadow-sm">
        <h4>Strategy</h4>
        <p>
            {{$aboutUs['strategy']}}
        </p>
    </div>
</div>
    </div>
</div>
@endsection