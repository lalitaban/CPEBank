@extends('layouts.app')

@section('content')

<div>
<table class="table table-striped">
<thead>
<tr>
<th>Bcode</th>
<th>Name</th>
<th>Street</th>
<th>City</th>
<th>Province</th>
<th>ZIP</th>
<th></th>
</tr>
</thead>
<tbody>
@foreach($banks as $bank)
<tr>

<td>{{$bank->Bcode}}</td>
<td>{{$bank->Name}}</td>
<td>{{$bank->Street}}</td>
<td>{{$bank->City}}</td>
<td>{{$bank->Province}}</td>
<td>{{$bank->ZIP}}</td>
<td><input type="button" class="btn btn-danger" onclick="onClickDel({{$bank->Bcode}})"  value="DELETE" ></td>


</tr>
@endforeach

</tbody>
</table>
</div>
<div>
<div class="form-group">
        <label>Bcode</label>
        <input type=" text" class="form-control" id="Bcode" >

        <label>Name</label>
        <input type=" text" class="form-control" id="Name" >

        <label>Street</label>
        <input type=" text" class="form-control" id="Street" >

        <label>City</label>
        <input type=" text" class="form-control" id="City" >
 

        <label>Province</label>
        <input type=" text" class="form-control" id="Province" >


        <label>ZIP</label>
        <input type=" text" class="form-control" id="ZIP" >
    </div>


  <input type="button" id="addBank" class="btn btn-primary" value="Submit">
</div>


@endsection

@section('script')
<script>
    function onClickDel(Bcode){
        $.post("/del_bank",
                    {
                        Bcode: Bcode
                                    
                    },
                    function (data, status) {
                        if (data.status) {
                            document.location = document.location
                        }
                    });
    }

    $(document).ready(function() {
        $("#addBank").click(function(){
            var Bcode = $("#Bcode").val();
            var Name = $("#Name").val();
            var Street = $("#Street").val();
            var City = $("#City").val();
            var Province = $("#Province").val();
            var ZIP = $("#ZIP").val();


            $.post("/add_bank",
                    {
                        Bcode: Bcode,
                        Name: Name,
                        Street: Street,
                        City: City,
                        Province: Province,
                        ZIP: ZIP,
                                    
                    },
                    function (data, status) {
                        if (data.status) {
                            document.location = document.location
                        }
                    });
        });
    });
</script>
@endsection
