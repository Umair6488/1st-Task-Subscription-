<div class="container text-center mb-5">
    <h1 class="py-5">Latest Updates</h1>

    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero quia, earum distinctio autem ullam laborum commodi animi accusamus! Modi quaerat nostrum provident reiciendis distinctio iure unde accusamus dolorem similique ea!</p>

    <table id="example" class="table table-responsive mb-5 table-dark table-striped" style="width:100%">
        <thead>
        <tr>

            <th>ID</th>
            <th>Name</th>
            <th>Whatsapp Number</th>
            <th>SubScription Start Date</th>
            <th>Subscription End Date</th>
            <th>Days Remainig</th>
            <th>Status</th>
            <th>City</th>
            <th>Street Address</th>
            <th>Province</th>
            <th>Notes</th>
            <th>FB Profile Url#1</th>
            <th>FB Profile Url#2</th>
            <th>FB Profile Url#3</th>

        </tr>
        </thead>
        <tbody>



       @foreach($consumers as $consumer)


        <tr>
            @php
            $id=$consumer['id'];
            @endphp
            <td>{{  $consumer['id'] }}</td>
            <td>{{  $consumer['name'] }}</td>
            <td>{{  $consumer['whatsapp_number'] }}</td>
            <td>{{ date('d-m-Y', strtotime($consumer['subscription_s_date'])) }}</td>
            <td>{{  date('d-m-Y', strtotime($consumer['subscription_e_date'])) }}</td>

            <td>
                @php
                    $current_date = date("d-m-Y");
                                        $enddate =$consumer['subscription_e_date'];
                                        $datediff = strtotime($enddate) - strtotime($current_date);

                                        $days=round($datediff / (60 * 60 * 24));

                @endphp
                @if($days<=1)
                    0 Days

                    @else
                    {{$days}} Days
                    @endif

            </td>
            <td>
                @if($days<=1)
                    <label class='inactive p-1'>Inactive</label>
                @else
                    <label class='active p-1'>Activated</label>
                @endif
            </td>
            <td>{{  $consumer['city'] }}</td>
            <td>{{  $consumer['street_address'] }}</td>
            <td>{{  $consumer['province'] }}</td>
            <td>{{  $consumer['notes'] }}</td>
            <td>{{  $consumer['fb_profile_url1'] }}</td>
            <td>{{  $consumer['fb_profile_url2'] }}</td>
            <td>{{  $consumer['fb_profile_url3'] }}</td>

        </tr>
        @endforeach


        </tbody>
        <tfoot>
        <tr>

            <th>ID</th>
            <th>Name</th>
            <th>Whatsapp Number</th>
            <th>SubScription Start Date</th>
            <th>Subscription End Date</th>
            <th>Days Remainig</th>
            <th>Status</th>
            <th>City</th>
            <th>Street Address</th>
            <th>Province</th>
            <th>Notes</th>
            <th>FB Profile Url#1</th>
            <th>FB Profile Url#2</th>
            <th>FB Profile Url#3</th>

        </tr>
        </tfoot>
    </table>


</div>
