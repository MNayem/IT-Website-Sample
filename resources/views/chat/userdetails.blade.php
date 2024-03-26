<html lang="en">
<head>
  <title>Laravel Multiple File Upload Example</title>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>


  <div class="container">

    <h3 class="jumbotron">  User Details  </h3>
<form method="post"   action="/userdetailsprocess"  >
  @csrf

        
        <div class="clone ">
          <div class="control-group input-group" style="margin-top:10px">
            <h2>Exam Topics</h2>
            <hr>
                <input type="text" name="id" placeholder="ID" class="form-control">
                <input type="email" name="email" placeholder=" Email" class="form-control"><br>
                <p><b>Please</b> Select Your Subject Interests</p>
                 <input type="radio" id="math_basic" name="Math_Basic" value="Math Basic">
                 <label for="math_basic">Math Basic</label><br>
                 <input type="radio" id="math_intermediate" name="Math_Intermediate" value="Math Intermediate">
                 <label for="math_intermediate">Math Intermediate</label><br>
                 <input type="radio" id="math_advance" name="Math_Advance" value="Math Advance">
                 <label for="math_advance">Math Advance</label><br>
                 <input type="radio" id="english_basic" name="English_Basic" value="English Basic">
                 <label for="english_basic">English Basic</label><br>
                 <input type="radio" id="english_intermediate" name="English_Intermediate" value="English Intermediate">
                 <label for="english_intermediate">English Intermediate</label><br>
                 <input type="radio" id="english_advance" name="English_Advance" value="English Advance">
                 <label for="english_advance">English Advance</label><br>
                 <input type="radio" id="analytical_basic" name="Analytical_Basic" value="Analytical Basic">
                 <label for="analytical_basic">Analytical Basic</label><br>
                 <input type="radio" id="analytical_intermediate" name="Analytical_Intermediate" value="Analytical Intermediate">
                 <label for="analytical_intermediate">Analytical Intermediate</label><br>
                 <input type="radio" id="analytical_advance" name="Analytical_Advance" value="Analytical Advance">
                 <label for="analytical_advance">Analytical Advance</label><br>

            </div>
        </div>

        <button type="submit" class="btn btn-primary" style="margin-top:10px">Submit</button>

  </form>
  </div>


<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Email</th>
      <th scope="col">Math Basic</th>
      <th scope="col">Math Intermediate</th>
      <th scope="col">Math Advance</th>
      <th scope="col">English Basic</th>
      <th scope="col">English Intermediate</th>
      <th scope="col">English Advance</th>
      <th scope="col">Analytical Basic</th>
      <th scope="col">Analytical Intermediate</th>
      <th scope="col">Analytical Advance</th>
    </tr>
  </thead>
 
  <tbody>
       @foreach($userdetails as $userdetail)
    <tr>
      
      <td>{{$userdetail->id}}</td>
      <td>{{$userdetail->email}}</td>
      <td>{{$userdetail->Math_Basic}}</td>
      <td>{{$userdetail->Math_Intermediate}}</td>
      <td>{{$userdetail->Math_Advance}}</td>
      <td>{{$userdetail->English_Basic}}</td>
      <td>{{$userdetail->English_Intermediate}}</td>
      <td>{{$userdetail->English_Advance}}</td>
      <td>{{$userdetail->Analytical_Basic}}</td>
      <td>{{$userdetail->Analytical_Intermediate}}</td>
      <td>{{$userdetail->Analytical_Advance}}</td>
      
    </tr>
    @endforeach
  </tbody>
  
</table>
 

</body>
</html>
