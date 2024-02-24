@extends('admin.admin_layout.master')
@section('content_admin')
<div class="header11">
    <div class="myTable">
        <table cellspacing="20" style="padding:45px;margin-left:25px">
            <tbody>
                <?php $i = -1; ?>
                @foreach($allImages as $image)
                <?php
                $i++;
                if ($i % 4 == 0) {
                ?><tr><?php
                    }
                        ?>
                    <td  style="border-style:solid;padding:25px;">
                        <!-- <a href="detail/{{$image['id']}}"> -->
                            <img src="{{$image->path}}" height='170px' width='200px'>
                            <hr>
                            <h4 style="text-align:center;">{{$image->food_name}}</h4>
                            <h4 style="text-align:center;">Rs. {{$image->price}}</h4>
                        <!-- </a> -->
                    </td>
                    @endforeach
            </tbody>
        </table>
        <br>
        
    </div>
</div>
@endsection