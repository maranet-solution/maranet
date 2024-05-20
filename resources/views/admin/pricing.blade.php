@extends('layouts.admin')

@section('content')
<div class="pt-5">
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <form method="post" class="modal-content save-form">
            @csrf
            <div class="modal-header">
              <h5 class="modal-title" id="editModalLabel">Update Plan</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <label>Name</label>
                <input name="name" class="name form-control" placeholder="plan name Here" >
              </div>
              <div class="form-group">
                <label>Price</label>
                <input name="price" type="number" class="price form-control" placeholder="price Here" >
              </div> 
              <div class="form-group">
                <label>Plan Duration</label>
                <input name="duration" type="text" class="duration form-control" placeholder="duration Here" >
              </div> 
              <div class="form-group">
                <label>Description & Features</label>
                <textarea name="description" rows="5" class="description form-control" placeholder="duration Here">
                </textarea>
              </div>
            </div>
           
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
          </form>
        </div>
      </div>
      <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <form method="post" class="modal-content save-form">
            @csrf
            <div class="modal-header">
              <h5 class="modal-title" id="editModalLabel">Update Plan</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <label>Name</label>
                <input name="name" class="name form-control" placeholder="plan name Here" >
              </div>
              <div class="form-group">
                <label>Price</label>
                <input name="price" type="number" class="price form-control" placeholder="price Here" >
              </div> 
              <div class="form-group">
                <label>Plan Duration</label>
                <input name="duration" type="text" class="duration form-control" placeholder="duration Here" >
              </div> 
              <div class="form-group">
                <label>Description & Features</label>
                <textarea name="description" rows="5" class="description form-control" placeholder="duration Here">
                </textarea>
              </div>
            </div>
           
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
          </form>
        </div>
      </div>
      <div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <form method="post" action="{{ route('create_plan') }}" class="modal-content save-form">
            @csrf
            <div class="modal-header">
              <h5 class="modal-title" id="createModallLabel">Create New Plan</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <label>Name</label>
                <input name="name" class="name form-control" placeholder="plan name Here" >
              </div>
              <div class="form-group">
                <label>Price</label>
                <input name="price" type="number" class="price form-control" placeholder="price Here" >
              </div> 
              <div class="form-group">
                <label>Plan Duration</label>
                <input name="duration" type="text" class="duration form-control" placeholder="duration Here" >
              </div> 
              <div class="form-group">
                <label>Description & Features</label>
                <textarea name="description" rows="5" class="description form-control" placeholder="duration Here">
                </textarea>
              </div>
            </div>
           
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Add Plan</button>
            </div>
          </form>
        </div>
      </div>
      <button class="btn btn-info mb-4" data-toggle="modal" data-target="#createModal" >Add Plan</button>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Amount</th>
            <th scope="col">Duration</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($plans as $plan)
            <tr>
                <th scope="row">{{$plan->id}}</th>
                <td>{{$plan->name}}</td>
                <td>kes.{{$plan->price}}</td>
                <td>{{$plan->duration}}
                  <button data-id="{{$plan->id}}" data-toggle="modal" data-target="#editModal" class="ml-2 px-2 py-1 btn btn-success"><i class="fa-solid fa-pen"></i></button>
                </td>
              </tr>
              
            @endforeach
         
        </tbody>
      </table>
</div>
<script>
    $(function() {
  $('#editModal').on('show.bs.modal', async(e)=> {
    let btn = $(e.relatedTarget); // e.related here is the element that opened the modal, specifically the row button
    let id = btn.data('id');
    let res = await fetch('/pricing/'+id).then(res=>res.json()).then(res=>res)
    $('.save-form').attr('action', '/pricing/update/'+id);

    $('.name').val(res.name);
    $('.description').val(res.description);
    $('.price').val(res.price);
    $('.duration').val(res.duration);
  })

  $('.saveEdit').on('click', function() {
    let id = $(this).data('id'); // the rest is just the same
    saveNote(id);
    $('#editModal').modal('toggle'); // this is to close the modal after clicking the modal button
  })
})
</script>
@endsection