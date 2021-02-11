<table border="1">
    <tr>
    <th>Services</th>
    <th>LastChecked</th>
    <th>Status</th>
    </tr>
    
         @foreach ($datas as $data)
         <tr>
             <td> {{$data->service}}</td>
             <td> {{$data->lastchecked}}</td>
             <td> {{$data->status}}</td>
         
         </tr>
         @endforeach
        
    
    

</table>

