
<!-- Modal -->
<div class="modal fade" id="college" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add College</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
      <form method="post"  action="{{route('colleges.store')}}" autocomplete="off" enctype="multipart/form-data">
      @csrf
      <div class="row">
      <div class="col">
      <div class="form-group">
        <label>Name: </label>
        <input type="text"  name="name" class="form-control" >
        </div>
      </div>


      <div class="col">
      <div class="form-group">
         <label>Note : </label>
         <input type="text"  name="note" class="form-control" >
         </div>
      </div>



  


      </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary button-mode" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary button-mode">Save</button>
      </div>
</form>
    </div>
  </div>
</div>







        

              