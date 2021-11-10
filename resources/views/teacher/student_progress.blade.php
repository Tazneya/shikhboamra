@extends('layout.main')
@section('content')
<div class ="container">
<div class="table-responsive mt-30">

    <h3 class="text-center">Top 5 Strong Point</h3>
    <table class="table ucp-table">

        <thead class="thead-s">
            <tr>
                <th class="text-center" scope="col">Sl no</th>

                <th class="text-center" scope="col">Tag Name</th>

            </tr>
        </thead>
        <tbody>
            <?php $i=1;?>
            @foreach ($freqency as $data=>$key )

            {{-- @if($key>5) --}}
            <tr>
                <td class="text-center">{{ $i++ }}</td>

                <td class="text-center">{{ $data }}</td>



            </tr>
            {{-- @endif --}}
            @endforeach



        </tbody>
    </table>

    <h3 class="text-center">Top 5 Week Point</h3>
    <table class="table ucp-table">

        <thead class="thead-s">
            <tr>
                <th class="text-center" scope="col">Sl no</th>

                <th class="text-center" scope="col">Tag Name</th>

            </tr>
        </thead>
        <tbody>
            <?php $i=1;?>
            @foreach ($freqency as $data=>$key )
            {{-- @if($key<-5) --}}

            <tr>
                <td class="text-center">{{ $i++ }}</td>

                <td class="text-center">{{ $data }}</td>



            </tr>
        {{-- @endif --}}
            @endforeach



        </tbody>
    </table>
</div>
</div>
@endsection
