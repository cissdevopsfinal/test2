<!DOCTYPE html>
         <html>
               <head>
                    <title>Register</title>
                    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
                    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
                   <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">

                    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
                    <meta name="csrf-token" content="{{ csrf_token() }}">
                </head>
                <body>

                <div class="main">
                    <h1 class="w3layouts_head" style="font-family: 'Quicksand', sans-serif;">Sun Sea & <b style="font-weight: bold">SOUND</b></h1>
                    <div class="w3layouts_main_grid">


                        <div class="form-group">

                            <form name="add_name" id="add_name" action="{{url('addmorepost')}}" method="post" >

                                @csrf
                                {{ csrf_field() }}
                                <div id="review" class="alert alert-danger print-error-msg" style="display:none">
                                    <ul></ul>
                                </div>


                                <div class="alert alert-success print-success-msg" style="display:none">
                                    <ul></ul>
                                </div>
                                <div class="w3_agileits_main_grid w3l_main_grid">
                                    <span class="agileits_grid">
                                <select class="select" name="optone[]" id="djSelect" size="1">
                                    <option value="" selected="selected">Select your DJ</option>
                                </select>
                                <br>
                                <br>
                                <select class="select" name="opttwo[]" id="categorySelect" size="1">
                                    <option value="" selected="selected">Select Ticket Type </option>
                                </select>
                                <br>
                                <br>
                                <select class="select" name="optthree[]" id="daySelect" size="1">
                                    <option value="" selected="selected">Select Pass</option>
                                </select>
                                    </span>
                                    <div class="input-group col-md-10">
                                        <input name="price[]"  id="price" class="form-control name_list" style="background:rgba(125,125,125,0.5);color: white;text-align: center;font-weight: bold;width: 100% !important;" placeholder="Select Previous Details" disabled></input>
                                        <span class="input-group-btn">
                                             <input class="btn btn-default" type="button" value="EGP"
                                                    style="background:rgba(125,125,125,0.5);color: white;font-weight: bold;"/>
                                        </span>


                                    </div>
                                    <div class="row">
                                    <div class="col-xl-2"><span class=""><textarea id="limit" class="form-control name_list" style="resize: none;background:rgba(125,125,125,0.5);color: white;text-align: center;font-weight: bold;width: 100%;height: auto" disabled>Select Previous To Show Reservation Conditions</textarea></span></div>
                                    </div>
                                    </div>
                                <div class="table-responsive">
                                    <table  id="dynamic_field">
                                        <div class="w3_agileits_main_grid w3l_main_grid"><span class="agileits_grid"><label>First Name: </label><input type="text" name="fname[]" placeholder="First Name" class="form-control name_list" required=""></span></div>
                                        <div class="w3_agileits_main_grid w3l_main_grid"><span class="agileits_grid"><label>Last Name: </label><input type="text" name="lname[]" placeholder="Last Name" class="form-control name_list" required=""></span></div>
                                        <div class="w3_agileits_main_grid w3l_main_grid"><span class="agileits_grid"><label>Phone Number: </label><input type="text" name="phone[]" placeholder="Phone Number" class="form-control name_list" required /></span></div>
                                        <div class="w3_agileits_main_grid w3l_main_grid"><span class="agileits_grid"><label>Email Address: </label><input type="text" name="email[]" placeholder="Email Address" class="form-control name_list"required /></span></div>
                                        <div class="w3_agileits_main_grid w3l_main_grid"><span class="agileits_grid"><label>Gender: </label><select  name="gender[]" style=" text-align: center;text-align-last: center;">
                                        <option style="background-color:white" DISABLED>Gender</option>
                                        <option value="Male" style="background-color: dimgrey">Male</option>
                                        <option value="Female" style="background-color: dimgrey">Female</option>
                                        </select></span></div>
                                        <div class="w3_agileits_main_grid w3l_main_grid"><span class="agileits_grid"><label>Age: </label><select  name="age[]" style=" text-align: center;text-align-last: center;"><option style="background-color:white" DISABLED>Age</option>@for ($i = 18; $i <= 100; $i++)<option value="{{ $i }}" style="background-color: dimgrey">{{ $i }}</option>@endfor</select></span></div>
                                        <div class="w3_agileits_main_grid w3l_main_grid"><span class="agileits_grid"><label>Facebook Link: </label><input type="text" name="link[]" placeholder="Link" class="form-control name_list" required /></span></div>

                                        <div class="w3_agileits_main_grid w3l_main_grid">
                                         <span class="agileits_grid">
                                         <button type="button" name="add" id="add" class="form-control btn btn-success" style="font-size: large"  >More Guests</button>
                                         </span>
                                        </div>

                                    </table>
                                    <input type="button" name="submit" id="submit" class="form-control btn btn-info " value="Submit" style="font-size: large" />
                                </div>


                            </form>
                        </div>
                    </div>

                </div>

                <script type="text/javascript">
                    $(document).ready(function(){
                        $pid=0;
                        $p1="{{\App\pricing::findprice(1)}}";
                        $p2="{{\App\pricing::findprice(2)}}";
                        $p3="{{\App\pricing::findprice(3)}}";
                        $p4="{{\App\pricing::findprice(4)}}";
                        $p5="{{\App\pricing::findprice(5)}}";
                        $p6="{{\App\pricing::findprice(6)}}";
                        $p7="{{\App\pricing::findprice(7)}}";
                        $p8="{{\App\pricing::findprice(8)}}";
                        $p9="{{\App\pricing::findprice(9)}}";
                        $p10="{{\App\pricing::findprice(10)}}";
                        $p11="{{\App\pricing::findprice(11)}}";
                        $p12="{{\App\pricing::findprice(12)}}";
                        $p13="{{\App\pricing::findprice(13)}}";
                        $p14="{{\App\pricing::findprice(14)}}";
                        $p15="{{\App\pricing::findprice(15)}}";
                        $p16="{{\App\pricing::findprice(16)}}";
                        $p17="{{\App\pricing::findprice(17)}}";
                        $p18="{{\App\pricing::findprice(18)}}";
                        var postURL = "<?php echo url('addmore'); ?>";
                        var i=1;



                        $('#add').click(function(){
                            i++;
                            $('#dynamic_field').append('<div id="row'+i+'"class="dynamic-added" ' +
                                '<h2 style="color:limegreen">Sub Guest</h2>'+
                                '                        <div class="w3_agileits_main_grid w3l_main_grid"><span class="agileits_grid"><label>First Name: </label><input type="text" name="fname[]" placeholder="First Name" class="form-control name_list" required=""></span></div>\n' +
                                '                        <div class="w3_agileits_main_grid w3l_main_grid"><span class="agileits_grid"><label>Last Name: </label><input type="text" name="lname[]" placeholder="Last Name" class="form-control name_list" required=""></span></div>\n' +
                                '                        <div class="w3_agileits_main_grid w3l_main_grid"><span class="agileits_grid"><label>Phone Number: </label><input type="text" name="phone[]" placeholder="Phone Number" class="form-control name_list" required /></span></div>\n'+
                                '                        <div class="w3_agileits_main_grid w3l_main_grid"><span class="agileits_grid"><label>Email Address: </label><input type="text" name="email[]" placeholder="Email Address" class="form-control name_list" required /></span></div>\n'+
                                '                        <div class="w3_agileits_main_grid w3l_main_grid"><span class="agileits_grid"><label>Gender: </label><select  name="gender[]" style=" text-align: center;text-align-last: center;"><option style="background-color:white" DISABLED>Gender</option><option value="Male" style="background-color: dimgrey">Male</option><option value="Female" style="background-color: dimgrey">Female</option></select></span></div>\n'+
                                '                        <div class="w3_agileits_main_grid w3l_main_grid"><span class="agileits_grid"><label>Age: </label><select  name="age[]" style=" text-align: center;text-align-last: center;"><option style="background-color:white" DISABLED>Age</option>@for ($i = 18; $i <= 100; $i++)<option value="{{ $i }}" style="background-color: dimgrey">{{ $i }}</option>@endfor</select></span></div>\n' +
                                '                        <div class="w3_agileits_main_grid w3l_main_grid"><span class="agileits_grid"><label>Facebook Link: </label><input type="text" name="link[]" placeholder="Link" class="form-control name_list" required /></span></div>\n'+
                                '                        <button type="button" name="remove" id="'+i+'" class="form-control btn btn-danger btn_remove">X</button>\n<br><br>' +
                                '</div>');
                        });


                        $(document).on('click', '.btn_remove', function(){
                            var button_id = $(this).attr("id");
                            $('#row'+button_id+'').remove();
                        });


                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                            }
                        });


                        $('#submit').click(function(){
                            var form = document.getElementById('add_name');
                            if(form.reportValidity()){
                                if(i<10){
                                    if(confirm("Your reservation may be rejected because you didn't meet minimum number of guests , Are You Sure You Want To Continue?")){

                                        temp=document.getElementById('price').value;
                                        document.getElementById('price').value=$pid;
                                        $("#price").prop('disabled', false);
                                        $.ajax({
                                            url:postURL,
                                            method:"POST",
                                            data:$('#add_name').serialize(),
                                            type:'POST',
                                            success:function(data)
                                            {
                                                if(data.error){
                                                    printErrorMsg(data.error);
                                                    location.href = "#";
                                                    location.href = "#review";
                                                }else{
                                                    i=1;
                                                    $('.dynamic-added').remove();
                                                    $('#add_name')[0].reset();
                                                    $(".print-success-msg").find("ul").html('');
                                                    $(".print-success-msg").css('display','block');
                                                    $(".print-error-msg").css('display','none');
                                                    $(".print-success-msg").find("ul").append('<li>Registered Successfully.</li>');
                                                    location.href = "#";
                                                    location.href = "#review";
                                                }
                                            }
                                        });
                                        $("#price").prop('disabled', true);
                                        document.getElementById('price').value=temp;
                                    }
                                }
                                else{

                                    temp=document.getElementById('price').value;
                                    document.getElementById('price').value=$pid;
                                    $("#price").prop('disabled', false);
                                    $.ajax({
                                        url:postURL,
                                        method:"POST",
                                        data:$('#add_name').serialize(),
                                        type:'POST',
                                        success:function(data)
                                        {
                                            if(data.error){
                                                printErrorMsg(data.error);
                                                location.href = "#";
                                                location.href = "#review";
                                            }else{
                                                i=1;
                                                $('.dynamic-added').remove();
                                                $('#add_name')[0].reset();
                                                $(".print-success-msg").find("ul").html('');
                                                $(".print-success-msg").css('display','block');
                                                $(".print-error-msg").css('display','none');
                                                $(".print-success-msg").find("ul").append('<li>Registered Successfully.</li>');
                                                location.href = "#";
                                                location.href = "#review";
                                            }
                                        }
                                    });
                                    $("#price").prop('disabled', true);
                                    document.getElementById('price').value=temp;
                                }
                            }
                            else{}
                        });
                        function printErrorMsg (msg) {
                            $(".print-error-msg").find("ul").html('');
                            $(".print-error-msg").css('display','block');
                            $(".print-success-msg").css('display','none');
                            $.each( msg, function( key, value ) {
                                $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
                            });
                        }
                    });
                </script>

                <script>

                    var stateObject = {
                        "Black coffee": {
                            "Standing": ["none"],
                            "VIP": ["none"],
                            "Backstage": ["none"]
                        },
                        "Rodge": {
                            "Standing": ["none"],
                            "Seated": ["Lounge","High-Table"],
                        },
                        "Black Coffee & Rodge": {
                            "Standing": ["none","Lounge","High-Table"],
                            "VIP": ["none","Lounge","High-Table"],
                            "Backstage": ["none","Lounge","High-Table"]
                        },
                        "Black Coffee & Rodge  & Aurora":{
                            "Backstage": ["none","Lounge","High-Table"]
                        }
                    }
                    window.onload = function () {
                        var stateSel = document.getElementById("djSelect"),
                            countySel = document.getElementById("categorySelect"),
                            citySel = document.getElementById("daySelect");
                        for (var state in stateObject) {
                            stateSel.options[stateSel.options.length] = new Option(state, state);
                        }
                        stateSel.onchange = function () {

                            document.getElementById("price").value="Select Previous Details";
                            document.getElementById("limit").innerHTML="Select Previous To Show Reservation Conditions";
                            countySel.length = 1; // remove all options bar first
                            citySel.length = 1; // remove all options bar first
                            if (this.selectedIndex < 1) {
                                countySel.options[0].text = "Please select DJ first"
                                citySel.options[0].text = "Please select Ticket Type first"
                                return; // done
                            }
                            countySel.options[0].text = "Please select Ticket Type"
                            for (var county in stateObject[this.value]) {
                                countySel.options[countySel.options.length] = new Option(county, county);
                            }

                            if (countySel.options.length==2) {
                                countySel.selectedIndex=1;
                                countySel.onchange();

                            }

                        }
                        stateSel.onchange(); // reset in case page is reloaded
                        countySel.onchange = function () {

                            document.getElementById("price").value="Select Previous Details";
                            document.getElementById("limit").innerHTML="Select Previous To Show Reservation Conditions";
                            citySel.length = 1; // remove all options bar first
                            if (this.selectedIndex < 1) {
                                citySel.options[0].text = "Please select ticket type first"

                                return; // done
                            }
                            citySel.options[0].text = "Extra Seating for Rodge ONLY"

                            var cities = stateObject[stateSel.value][this.value];
                            for (var i = 0; i < cities.length; i++) {
                                citySel.options[citySel.options.length] = new Option(cities[i], cities[i]);
                            }

                            if (citySel.options.length==2) {
                                citySel.selectedIndex=1;
                                citySel.onchange();

                            }


                        }
                        citySel.onchange= function () {

                            var op1 = stateSel.options[stateSel.selectedIndex].text;
                            var op2 = countySel.options[countySel.selectedIndex].text;
                            var op3 = citySel.options[citySel   .selectedIndex].text;

                            if(op1=="Black coffee" && op2=="Standing" && op3=="none"){
                                document.getElementById("price").value=$p1+" Per Ticket";
                                document.getElementById("limit").innerHTML="Entrance to Black Coffee ONLY";
                                $pid=1;
                                return;
                            }
                            ///////////////////////////////////////////////////////////////////////////////
                            if(op1=="Black coffee" && op2=="VIP" && op3=="none"){
                                document.getElementById("price").value=$p2+" Per Ticket";
                                document.getElementById("limit").innerHTML="Entrance to Black Coffee ONLY – VIP Table (min 10 pax – 15 pax) including 2 Free bouchons.";
                                $pid=2;
                                return;
                            }
                            ///////////////////////////////////////////////////////////////////////////////
                            if(op1=="Black coffee" && op2=="Backstage" && op3=="none"){
                                document.getElementById("price").value=$p3+" Per Ticket";
                                document.getElementById("limit").innerHTML="Entrance to Black Coffee ONLY – Backstage lounge (min 15 pax – max 20 pax) including 3 Free bouchons.";
                                $pid=3;
                                return;
                            }
                            ///////////////////////////////////////////////////////////////////////////////
                            if(op1=="Rodge" && op2=="Standing" && op3=="none"){
                                document.getElementById("price").value=$p4+" Per Ticket";
                                document.getElementById("limit").innerHTML="Entrance to Rodge beach party ONLY";
                                $pid=4;
                                return;
                            }
                            ///////////////////////////////////////////////////////////////////////////////
                            if(op1=="Rodge" && op2=="Seated" && op3=="Lounge"){
                                document.getElementById("price").value=$p5+" Per Ticket + 5000 (To be paid by the host only)";
                                document.getElementById("limit").innerHTML=" Entrance to Rodge beach party ONLY – including 2 free bouchons";
                                $pid=5;
                                return;
                            }
                            ///////////////////////////////////////////////////////////////////////////////
                            if(op1=="Rodge" && op2=="Seated" && op3=="High-Table"){
                                document.getElementById("price").value=$p6+" Per Ticket + 3000 (To be paid by the host only)";
                                document.getElementById("limit").innerHTML=" Entrance to Rodge beach party ONLY – including 2 free bouchons";
                                $pid=6;
                                return;
                            }
                            ///////////////////////////////////////////////////////////////////////////////
                            if(op1=="Black Coffee & Rodge" && op2=="Standing" && op3=="none"){
                                document.getElementById("price").value=$p7+" Per Ticket";
                                document.getElementById("limit").innerHTML=" Entrance to Black Coffee and Rodge beach party on regular basis.";
                                $pid=7;
                                return;
                            }
                            ///////////////////////////////////////////////////////////////////////////////
                            if(op1=="Black Coffee & Rodge" && op2=="Standing" && op3=="Lounge"){
                                document.getElementById("price").value=$p8+" Per Ticket + 5000 (To be paid by the host only)";
                                document.getElementById("limit").innerHTML=" Entrance to Black Coffee and Rodge beach party on regular basis.";
                                $pid=8;
                                return;
                            }
                            ///////////////////////////////////////////////////////////////////////////////
                            if(op1=="Black Coffee & Rodge" && op2=="Standing" && op3=="High-Table"){
                                document.getElementById("price").value=$p9+" Per Ticket + 3000 (To be paid by the host only)";
                                document.getElementById("limit").innerHTML=" Entrance to Black Coffee and Rodge beach party on regular basis.";
                                $pid=9;
                                return;
                            }
                            ///////////////////////////////////////////////////////////////////////////////
                            if(op1=="Black Coffee & Rodge" && op2=="VIP" && op3=="none"){
                                document.getElementById("price").value=$p10+" Per Ticket";
                                document.getElementById("limit").innerHTML="Entrance to Black Coffee VIP table (2 Free bouchons), and Rodge beach party as a regular";
                                $pid=10;
                                return;
                            }
                            ///////////////////////////////////////////////////////////////////////////////
                            if(op1=="Black Coffee & Rodge" && op2=="VIP" && op3=="Lounge"){
                                document.getElementById("price").value=$p11+" Per Ticket + 5000 (To be paid by the host only)";
                                document.getElementById("limit").innerHTML="Entrance to Black Coffee VIP table (2 Free bouchons), and Rodge beach party as a regular";
                                $pid=11;
                                return;
                            }
                            ///////////////////////////////////////////////////////////////////////////////
                            if(op1=="Black Coffee & Rodge" && op2=="VIP" && op3=="High-Table"){
                                document.getElementById("price").value=$p12+" Per Ticket + 3000 (To be paid by the host only)";
                                document.getElementById("limit").innerHTML="Entrance to Black Coffee VIP table (2 Free bouchons), and Rodge beach party as a regular";
                                $pid=12;
                                return;
                            }
                            ///////////////////////////////////////////////////////////////////////////////
                            if(op1=="Black Coffee & Rodge" && op2=="Backstage" && op3=="none"){
                                document.getElementById("price").value=$p13+" Per Ticket";
                                document.getElementById("limit").innerHTML="Entrance to Black Coffee Backstage lounge (3 Free bouchons), and Rodge beach party as a regular";
                                $pid=13;
                                return;
                            }
                            ///////////////////////////////////////////////////////////////////////////////
                            if(op1=="Black Coffee & Rodge" && op2=="Backstage" && op3=="Lounge"){
                                document.getElementById("price").value=$p14+" Per Ticket + 5000 (To be paid by the host only)";
                                document.getElementById("limit").innerHTML="Entrance to Black Coffee Backstage lounge (3 Free bouchons), and Rodge beach party as a regular";
                                $pid=14;
                                return;
                            }
                            ///////////////////////////////////////////////////////////////////////////////
                            if(op1=="Black Coffee & Rodge" && op2=="Backstage" && op3=="High-Table"){
                                document.getElementById("price").value=$p15+" Per Ticket + 3000 (To be paid by the host only)";
                                document.getElementById("limit").innerHTML="Entrance to Black Coffee Backstage lounge (3 Free bouchons), and Rodge beach party as a regular";
                                $pid=15;
                                return;
                            }
                            ///////////////////////////////////////////////////////////////////////////////
                            if(op1=="Black Coffee & Rodge & Aurora" && op2=="Backstage" && op3=="none"){
                                document.getElementById("price").value=$p16+" Per Ticket";
                                document.getElementById("limit").innerHTML="Entrance to Black Coffee Backstage lounge (3 Free bouchons), and Rodge beach party as a regular and entrance to Aurora as regular.";
                                $pid=16;
                                return;
                            }
                            ///////////////////////////////////////////////////////////////////////////////
                            if(op1=="Black Coffee & Rodge & Aurora" && op2=="Backstage" && op3=="Lounge"){
                                document.getElementById("price").value=$p17+" Per Ticket + 5000 (To be paid by the host only)";
                                document.getElementById("limit").innerHTML="Entrance to Black Coffee Backstage lounge (3 Free bouchons), and Rodge beach party as a regular and entrance to Aurora as regular.";
                                $pid=17;
                                return;
                            }
                            ///////////////////////////////////////////////////////////////////////////////
                            if(op1=="Black Coffee & Rodge & Aurora" && op2=="Backstage" && op3=="High-Table"){
                                document.getElementById("price").value=$p18+" Per Ticket + 3000 (To be paid by the host only)";
                                document.getElementById("limit").innerHTML="Entrance to Black Coffee Backstage lounge (3 Free bouchons), and Rodge beach party as a regular and entrance to Aurora as regular.";
                                $pid=18;
                                return;
                            }
                            document.getElementById("price").value="Select Previous Details";
                            document.getElementById("limit").innerHTML="Select Previous To Show Reservation Conditions";


                        }
                    }

                </script>
                </body>
                </html>
