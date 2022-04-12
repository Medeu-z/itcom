
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    </html><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <link rel="stylesheet" type = "text/css" href = "{{url('css/myprofile.css')}}" >
    <title>My profile page</title>
</head>
<body>
<!--<div class="card">
  <img src="data:image/jpeg;base64,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" alt="John" style="width:100%">
  <h1>John Doe</h1>
  <p class="title">CEO & Founder, Example</p>
  <p>Harvard University</p>
  <a href="#"><i class="fa fa-dribbble"></i></a>
  <a href="#"><i class="fa fa-twitter"></i></a>
  <a href="#"><i class="fa fa-linkedin"></i></a>
  <a href="#"><i class="fa fa-facebook"></i></a>
  <p><button>Contact</button></p>
</div>-->
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="/main">Itty</a>
      </div>
      
      <ul class="nav navbar-nav">
          
        <div class="container-fluid mt-3">
            <div class="dropdown">
             <button type="button" class="btn  dropdown-toggle"  data-bs-toggle="dropdown">
               <i class="fa fa-fw fa-plus" ></i>
             </button>
             <ul class="dropdown-menu">
               <li><a class="dropdown-item" href="#">Link 1</a></li>
               <li><a class="dropdown-item" href="#">Link 2</a></li>
               <li><a class="dropdown-item" href="#">Link 3</a></li>
             </ul>
           </div>
         </div>
          <li><a href="#"><i class="fa fa-fw fa-bell"></i></a></li>
          <li><a href="#"><i class="fa fa-fw fa-user"></i></a></li>
        
      </ul>
    </div>
  </nav>
 
  <div class="row mb-4">
    <div class="col-sm-4 offset-sm-4">
      
      <img class="rounded-circle img-fluid" src="https://makeup.ru/storage/articles/27596/conversions/wfxIio6kxkAqWvNG1shhtsBIUa7ccv0w-content_front.jpg" alt="Profile photo">
      
    </div>
    
    
  </div>
  <h4 class="hed">Medeuova Zhaniya</h4>
  <h6 class="ter">@medeu</h6>
  <div class="stars">
  <span class="fa fa-star checked"></span>
  <span class="fa fa-star checked"></span>
  <span class="fa fa-star checked"></span>
  <span class="fa fa-star"></span>
  <span class="fa fa-star"></span>
  </div>
  <div class="baton">
    <button type="button" class="btn btn-primary">Edit Profile</button>
  </div>
<div class="container-fluid card shadow d-flex  mt-4">
    <!-- nav options -->
    <ul class="nav nav-pills mb-3 shadow-sm" id="pills-tab" role="tablist">
        <li class="nav-item"> <a class="nav-link active" id="pills-profile-tab" data-toggle="profile" href="#pills-myprofile" role="tab" aria-controls="pills-profile" aria-selected="true">Profile</a> </li>
        <li class="nav-item"> <a class="nav-link" id="pills-projects-tab" data-toggle="pill" href="#pills-myprojects" role="tab" aria-controls="pills-projects" aria-selected="false">My projects</a> </li>
        <li class="nav-item"> <a class="nav-link" id="pills-posts-tab" data-toggle="pill" href="#pills-myposts" role="tab" aria-controls="pills-posts" aria-selected="false">My posts</a> </li>
        <li class="nav-item"> <a class="nav-link" id="pills-comments-tab" data-toggle="pill" href="#pills-mycomments" role="tab" aria-controls="pills-comments" aria-selected="false">Comments</a> </li>
    </ul> <!-- content -->
    <div class="tab-content" id="pills-tabContent p-3">
        <!-- 1st card -->
        <div class="tab-pane fade show active" id="pills-profile" role="tabpanel" aria-labelledby="pills-myprofile-tab">
            <ul class="ccontent">   
                <li>
                    <div class="wrapp">
                        <h5>About me</h5>        
                    </div>
                </li>
            </ul>
        </div> <!-- 2nd card -->
        <div class="tab-pane fade" id="pills-projects" role="tabpanel" aria-labelledby="pills-myprojects-tab">
            <div class="form-group addinfo"> <label for="exampleFormControlTextarea1">Write additional info.</label> <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea> </div>
            <ul class="ccontent">   
                <li>
                    <div class="wrapp">
                        <h5>About me</h5>        
                    </div>
                </li>
            </ul>
        </div> <!-- 3nd card -->
        <div class="tab-pane fade third" id="pills-posts" role="tabpanel" aria-labelledby="pills-posts-tab">
            <div class="form">
                <div class="form-group"> <label for="exampleFormControlSelect1">Value Type<span>i</span></label> <select class="form-control round" id="exampleFormControlSelect1">
                        <option class="">United States Dollar</option>
                        <option class="amount">Indian Rupees</option>
                    </select> </div>
                <div class="form-group"> <label>amount</label> <input class="form-control amount" placeholder="1500" /> </div> <button class="btn btn-success">Insert</button>
            </div>
        </div>
    </div> <!-- 4th card -->
    <div class="tab-pane fade" id="pills-comments" role="tabpanel" aria-labelledby="pills-comments-tab">
        <div class="form-group addinfo"> <label for="exampleFormControlTextarea1">Write additional info.</label> <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea> </div>
    </div>
    </div>
</div>

</body>
</html>