@extends('layouts.master')
@section('title')
    {{__('dashboard.freecauses')}}
@endsection
@section('styles')
    <style>
        .btn-customize{
            color: black;
            background-color: white;
            border-radius: 0.4rem;
            border: 2px solid gold;
            padding: 10px 15px;
            margin: 0;
            width: 100%;
            height: 100%;
            transition: transform 0.3s ease-in-out;
            box-shadow: 5px 5px 5px black;
        }
        .btn-customize:hover{
            transform: scale(0.95);
            transition: scale 0.3s ease-in;
            background-color: gold!important;
            color: black!important;
        }
        .ifhover{
            height: 3rem;
            color: black;
        }
    </style>
@endsection
@section('modals')
@endsection
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="background-color: transparent;">
        <div style="font-family: 'Cortoba', Sans-Serif; color: gold; margin-top: 3vh; margin-bottom: 0vh;margin-right: 3vw;
                        -webkit-text-stroke: 1px black; font-size: 40px; text-shadow: 2px 2px 6px black;">
            * {{__('dashboard.freecauses')}}
        </div>
        <div class="table-responsive">
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid box-body">
                <table class="table table-bordered" style="border: none!important;">
                    <tr class="thead-dark">
                        <th scope="col">#</th>
                        <th scope="col">{{__('dashboard.username')}}</th>
                        <th scope="col">{{__('dashboard.casecount')}}</th>
                    </tr>

                    @forelse($users as $user)
                        <tr class="ifhover mt-10 bg-white">
                            <td class="align-middle" width="5%">{{ $counter++ }}</td>
                            <td class="align-middle" width="60%">{{ $user['name'] }}</td>
                            @if($user['casecount'] == null)
                                <td class="align-middle">{{ __('dashboard.nocases') }}</td>
                            @else
                                <td class="align-middle">{{ $user['casecount'] }}</td>
                                <td width="10%">
                                    <a href="{{route('getCaseToAdmin', $user['id'])}}"
                                       class="badge badge-secondary btn-customize">{{ __('dashboard.showcases') }}</a>
                                </td>
                            @endif
                        </tr>
                    @empty
                        <tr class="ifhover mt-10 bg-white">
                            <th colspan="3" style="text-align:center" class="align-middle">{{  __('dashboard.nothing') }}</th>
                        </tr>
                    @endforelse
                </table>

            </div>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection

