<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Feedbacks and Complaint</title>
</head>
<body class="bg-dark">
    
<div class="container mt-3">
<table class="table table-warning table-hover  table-striped table-responsive">
<thead>
    <tr>
        
        <th scope="col">Name</th>
        <th scope="col">Roll Number</th>
        <th scope="col">Branch</th>
        <th scope="col">Email</th>
        <th scope="col">Mobile Number</th>
        <th scope="col">Description</th>
    </tr>
</thead>
<tbody>

@foreach($feedbacks as $feedback)
<tr>
<td>{{ $feedback['name'] }}</td>
<td>{{ $feedback['rollnumber'] }}</td>
<td>{{ $feedback['branch'] }}</td>
<td>{{ $feedback['email'] }}</td>
<td>{{ $feedback['mobilenumber'] }}</td>
<td>{{ $feedback['description'] }}</td>
</tr>
@Endforeach

</tbody>
</table>
<a href="/"><button class="btn btn-primary"> Complaint Feedback Submission Form </button></a>
</div>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
crossorigin="anonymous"></script>
</body>
</html>