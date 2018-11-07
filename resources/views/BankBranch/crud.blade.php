@extends('layouts.app')

@section('content')

<div>
<table class="table table-striped">
<thead>
<tr>
<th>Bnumber</th>
<th>Name</th>
<th>Street</th>
<th>City</th>
<th>Province</th>
<th>ZIP</th>
<th>Phone</th>
<th>Bcode</th>
<th></th>
</tr>
</thead>
<tbody>
@foreach($branchs as $branch)
<tr>

<td>{{$branch->Bnumber}}</td>
<td>{{$branch->Name}}</td>
<td>{{$branch->Street}}</td>
<td>{{$branch->City}}</td>
<td>{{$branch->Province}}</td>
<td>{{$branch->ZIP}}</td>
<td>{{$branch->Phone}}</td>
<td>{{$branch->Bcode}}</td>
<td>
    <input type="button" class="btn btn-warning" Bnumber="{{$branch->Bnumber}}" BName="{{$branch->Name}}" BStreet="{{$branch->Street}}" BCity="{{$branch->City}}" BProvince="{{$branch->Province}}" BZIP="{{$branch->ZIP}}" BPhone="{{$branch->Phone}}" Bcode="{{$branch->Bcode}}" onclick="onClickEdit(this)"   value="EDIT">
    <input type="button" class="btn btn-danger" onclick="onClickDel({{$branch->Bnumber}})"  value="DELETE" >
    
</td>


</tr>
@endforeach

</tbody>
</table>
</div>
<div class="form-group">
    <input type="button" class="btn btn-primary" onclick="onAddBankClick()" value="Add Bank">
</div>
<div>
<div class="form-group">
        <label>Bnumber</label>
        <input type=" text" class="form-control" id="Bnumber" >

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

        <label>Phone</label>
        <input type=" text" class="form-control" id="Phone" >


        <label>Bcode</label>
        <select class="form-control" id="Bcode">
        @foreach($banks as $bank)
            <option value="{{$bank->Bcode}}">{{$bank->Bcode}} : {{$bank->Name}}</option>
        @endforeach
        </select>
    </div>

    
    <input type="button" id="edit" class="btn btn-warning" value="Edit">
    <input type="button" id="add" class="btn btn-primary" value="Submit">
</div>


@endsection

@section('script')
<script>
    function onAddBankClick(){
        $("#Bnumber").prop("disabled",false);
        
        $("#Bnumber").val("");
        $("#Name").val("");
        $("#Street").val("");
        $("#City").val("");
        $("#Province").val("");
        $("#ZIP").val("");
        $("#Phone").val("");
        $("#Bcode").val("");

        $("#edit").hide();
        $("#add").show();
    }

    function onClickEdit(param){
        var Bnumber = $(param).attr("Bnumber");
        var Name = $(param).attr("BName");
        var Street = $(param).attr("BStreet");
        var City = $(param).attr("BCity");
        var Province = $(param).attr("BProvince");
        var ZIP = $(param).attr("BZIP");
        var Phone = $(param).attr("BPhone");
        var Bcode = $(param).attr("Bcode");

        $("#Bnumber").prop("disabled",true);
        $("#Bnumber").val(Bnumber);
        $("#Name").val(Name);
        $("#Street").val(Street);
        $("#City").val(City);
        $("#Province").val(Province);
        $("#ZIP").val(ZIP);
        $("#Phone").val(Phone);
        $("#Bcode").val(Bcode);

        $("#edit").show();
        $("#add").hide();
    }

    function onClickDel(Bnumber){
        $.post("/del_branch",
                    {
                        Bnumber: Bnumber
                                    
                    },
                    function (data, status) {
                        if (data.status) {
                            document.location = document.location
                        }
                    });
    }

    $(document).ready(function() {
        $("#edit").hide();

        $("#edit").click(function(){
            var Bnumber = $("#Bnumber").val();
            var Name = $("#Name").val();
            var Street = $("#Street").val();
            var City = $("#City").val();
            var Province = $("#Province").val();
            var ZIP = $("#ZIP").val();
            var Phone = $("#Phone").val();
            var Bcode = $("#Bcode").val();

            $.post("/edit_branch",
                    {
                        Bnumber: Bnumber,
                        Name: Name,
                        Street: Street,
                        City: City,
                        Province: Province,
                        ZIP: ZIP,
                        Phone: Phone,
                        Bcode: Bcode,     
                                    
                    },
                    function (data, status) {
                        if (data.status) {
                            document.location = document.location
                        }
                    });
        });

        $("#add").click(function(){
            var Bnumber = $("#Bnumber").val();
            var Name = $("#Name").val();
            var Street = $("#Street").val();
            var City = $("#City").val();
            var Province = $("#Province").val();
            var ZIP = $("#ZIP").val();
            var Phone = $("#Phone").val();
            var Bcode = $("#Bcode").val();

            $.post("/add_branch",
                    {
                        Bnumber: Bnumber,
                        Name: Name,
                        Street: Street,
                        City: City,
                        Province: Province,
                        ZIP: ZIP,
                        Phone: Phone,
                        Bcode: Bcode,     
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
