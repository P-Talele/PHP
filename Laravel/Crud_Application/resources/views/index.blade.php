<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Record</title>
</head>
<body>
<table  border="1px">  
<thead>  
<tr>  
<td>  
ID </td>  
<td>  
First Name </td>  
<td>  
Last Name </td>  
<td>  
Gender </td>  
<td>  
Qualifications </td>  
</tr>  
</thead>  
<tbody>  
@foreach($cruds as $crud)  
        <tr border="none">  
            <td>{{$crud->id}}</td>  
            <td>{{$crud->first_name}}</td>  
            <td>{{$crud->last_name}}</td>  
            <td>{{$crud->gender}}</td>  
            <td>{{$crud->qualifications}}</td>  

          </td>  
  
         </tr>  
@endforeach  
</tbody>  
</table>
</body>
</html>