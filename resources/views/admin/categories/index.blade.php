<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/Go Fresh Logo.png" rel="icon">
  <title>Admin - Dashboard</title>
 @include('admin.partials.style')
</head>

<body id="page-top">
  <div id="wrapper">
    @include('admin.partials.sidebar')

    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
         @include('admin.partials.nav')

        <!-- Topbar -->

         {{-- partials --}}

        

       <div class='card px-5'>
          <div class="card-header"><h3>Manage Category</h3></div>
           <div class=card-body>
                @include('admin.partials.messages')
               <table class="table table-hover table-striped">

                  <tr>
                  
                   <th>#</th>
                   <th>Category Name</th>
                   <th>Category Image</th>
                   <th>Parent Category</th>
                   <th>Action</th>


                  </tr>
                  

                  @foreach ($categories as $category)
                     <tr>
                  
                   <td>#</td>
                   <td>
                   {{$category->name}}
                   </td>
                   <td>
                    <img src="{{asset('img/' .$category->image) }}"  width="100">
          
                   </td>
                   <td>
                     @if($category->parent_id == NULL)
                        Primary Category                   
                     @else
                     {{$category->parent->name}}

                     @endif

                   </td>
                   

                   <td><a href="{{route('admin.category.edit', $category->id ) }}" class="btn btn-success">Edit</a>

                   <a href="#deleteModal{{$category->id}}" data-toggle="modal" class="btn btn-danger">Delete</a>

                     {{-- delete modal --}}
                   <div class="modal fade" id="deleteModal{{$category->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                       <div class="modal-dialog" role="document">
                           <div class="modal-content">
                             <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Are you sure to delete?</h5>
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                 </button>
                              </div>
                            <div class="modal-body">
                                 <form action="{!! route('admin.category.delete', $category->id) !!}" method="post">
                                  @csrf

                                  <button type="submit" class="btn btn-danger mt-2">Permanent Delete</button>
                                 </form>

                                  
                             </div>
                                    <div class="modal-footer">
                                    
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>ll
                               </div>
                               </div>
                          </div>
                     </div>
                   
                   </td>
                   


                  </tr>


                  @endforeach


               </table>
       
       
           </div>
       </div>
 
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('js/ruang-admin.min.js')}}"></script>
  <script src="{{asset('vendor/chart.js/Chart.min.js')}}"></script>
  <script src="{{asset('js/demo/chart-area-demo.js')}}"></script>  
</body>

</html>