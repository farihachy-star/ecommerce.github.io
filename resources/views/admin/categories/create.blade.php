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
        <div class="mx-3">
          @include('admin.partials.messages')
        </div>
        

       <div class='card px-5'>
          <div class="card-header"><h3>Add Category</h3></div>
           <div class=card-body>
               <form action="{{route('admin.category.store')}}" method='post' enctype="multipart/form-data">
                   @csrf
                 <div class="mb-3">
                   <label for="name" class="form-label" placeholder="Enter category name">Name</label>
                     <input type="text" name="name" class="form-control" id="name">
                        
                </div>
                <div class="mb-3">
                 <label for="description" class="form-label">Description</label>
                   <textarea name="description" class="form-control" id="description" rows="3"></textarea>
                </div>
           
                <div class="mb-3">
                 <label for="parent-category" class="form-label">Parent Category</label>
                   <select class="form-control" id="parent_id">
                      @foreach ($main_categories as $cat)

                      <option vlaue="{{$cat->id}}">{{$cat->name}}</option>
                          
                      @endforeach

                   </select>
                </div>
           

                     <div class="mb-3">
                   <label for="image" class="form-label">Category Image</label>
                     
                         
                         <input type="file" name="image" class="form-control" id="image">
                        
                </div>  
                
                     <button type="submit" class="btn btn-primary">Add Category</button>
                </form>
       
       
       
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