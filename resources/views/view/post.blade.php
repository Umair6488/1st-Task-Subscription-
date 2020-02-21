

<div class="container p-3 form-con">
    @if ($message = Session::get('message'))

        <div class="alert alert-success alert-block">

            <button type="button" class="close" data-dismiss="alert">×</button>

            <strong>{{ $message }}</strong>

        </div>

    @endif
    <form action="{{  route('post.store') }}" class="form-horizontal" method="POST">
        <h2><b>Add New Consumer</b></h2>
        @csrf

        <div class="row py-3">
            <div class="col-md-3  my-auto">
                <label class="control-label" for="id1">Name  (<span>*</span>):</label>
            </div>
            <div class="col-md-4 ">
                <input class="form-control" type="text" name="name" placeholder="Enter your Consumer Name" >

            </div>
            <div class="col-md-4">
                @error('name')
                <div style="color: red;margin:2px 0px 0px;">{{ $message }}</div>
                @enderror
            </div>
        </div>


        <div class="row py-3">
            <div class="col-md-3  my-auto">
                <label class="control-label" for="id1">FB Profile URL1 (<span>*</span>):</label>
            </div>
            <div class="col-md-4 ">
                <input class="form-control" id="p_url" name="url" placeholder="Enter your Facebook URL 1" >

            </div>
            <div class="col-md-4">
                @error('url')
                <div style="color: red;margin:2px 0px 0px;">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="row py-3">
            <div class="col-md-3  my-auto">
                <label class="control-label" for="id1">FB Profile URL2 :</label>
            </div>
            <div class="col-md-4 ">
                <input class="form-control" id="p_url" name="url2" placeholder="Enter your Facebook URL 2" >

            </div>

        </div>

        <div class="row py-3">
            <div class="col-md-3  my-auto">
                <label class="control-label" for="id1">FB Profile URL3 :</label>
            </div>
            <div class="col-md-4 ">
                <input class="form-control" id="p_url" name="url3" placeholder="Enter your Facebook URL 3" >

            </div>

        </div>

        <div class="row py-3">
            <div class="col-md-3  my-auto">
                <label class="control-label" for="id1">Whatsapp Number (<span>*</span>):</label>
            </div>
            <div class="col-md-4 ">
                <input class="form-control" type="text" id="c_phone" name="phone" placeholder="Enter 12 digits number start with 92" >

            </div>
            <div class="col-md-4">
                @error('phone')
                <div style="color: red;margin:2px 0px 0px;">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="row py-3">
            <div class="col-md-3  my-auto">
                <label class="control-label" for="id1">Street Address:</label>
            </div>
            <div class="col-md-4 ">
                <input class="form-control" type="text" id="id1" name="street_address" placeholder="Enter your Street Address">

            </div>
        </div>



        <div class="row py-3">
            <div class="col-md-3  my-auto">
                <label class="control-label" for="id1">Province:</label>
            </div>
            <div class="col-md-4 ">
                <input class="form-control" type="text" id="id1" name="province" placeholder="Enter your Province">

            </div>
        </div>
        <div class="row py-3">
            <div class="col-md-3  my-auto">
                <label class="control-label" for="id1">City:</label>
            </div>
            <div class="col-md-4 ">
                <input class="form-control" type="text" id="id1" name="city" placeholder="Enter your City">

            </div>
        </div>
        <div class="row py-3">
            <div class="col-md-3  my-auto">
                <label class="control-label" for="id1">Notes:</label>
            </div>
            <div class="col-md-4 ">
                <textarea rows="4" cols="35" class="form-control" name="notes" placeholder="Enter your Notes"></textarea>

            </div>
        </div>
        <div class="row py-3">
            <div class="col-md-3  my-auto">
                <label class="control-label" for="id1">Subscription Start Date (<span>*</span>):</label>
            </div>
            <div class="col-md-4 ">
                <input class="form-control" type="text" id="frmDate"  name="s_date" >
{{--                //id="frmDate"--}}
            </div>
            <div class="col-md-4">
                @error('s_date')
                <div style="color: red;margin:2px 0px 0px;">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="row py-3">
            <div class="col-md-3  my-auto">
                <label class="control-label" for="id1">Subscription End Date(<span>*</span>):</label>
            </div>
            <div class="col-md-4 ">
                <input class="form-control" type="text" id="endDate" name="e_date">

            </div>
            <div class="col-md-4">
                @error('e_date')
                <div style="color: red;margin:2px 0px 0px;">{{ $message }}</div>
                @enderror
            </div>
        </div>



        <div class="row py-3">
            <div class="col-md-3  my-auto">
                <label class="control-label" for="id1">Status (<span>*</span>):</label>
            </div>
            <div class="col-md-4 ">
                <div>
                    <input type="radio" class="mr-2" name="check" value="0"> Active

                    <input type="radio" class="mx-2 ml-4" name="check" value="1"> Inactive


                </div>
            </div>
            <div class="col-md-4">
                @error('check')
                <div style="color: red;margin:2px 0px 0px;">{{ $message }}</div>
                @enderror
            </div>
        </div>


        <div class="row p-3">
            <div class="col-md-7">
                <input type="checkbox" class="mr-5" name="tos"><label for=""> Please Accept the Terms and conditions: </label>
            </div>
            <div class="col-md-4">
                @error('tos')
                <div style="color: red;margin:2px 0px 0px;">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="row p-3">
            <button type="submit" class="btn btn-success" class="col-md-3"  id="submit">Submit</button>
        </div>


    </form>

</div>

