@extends('layouts.skeleton')

@section('title', $contact->name )

@section('content')
{{-- Breadcrumb --}}
<section class="ph3 ph5-ns pt4 cf w-100 bg-gray-monica">
  <div class="mw7 center">
    <div class="full-page-modal-header ph4 pv3 bt br bl b--gray-monica">
      <ul>
        <li class="di"><a href="{{ route('people.show', $contact) }}">{{ trans('app.breadcrumb_profile', ['name' => $contact->name]) }}</a></li>
        <li class="di ph2">></li>
        <li class="di">{{ trans('people.activity_title') }}</li>
      </ul>
    </div>
  </div>
</section>

{{-- Main section --}}
<section class="ph3 ph5-ns cf w-100 bg-gray-monica mb5">
  <div class="mw8 center full-page-modal pt4">
    <h2 class="tc bb b--gray-monica pb4 mb3 normal">{{ trans('people.activities_profile_title', ['name' => $contact->first_name]) }}</h2>
    <div class="cf ph2-ns">

      {{-- Left sidebar --}}
      <div class="fl w-100 w-100-ns pa2">
        <div class="bg-white">
          <ul>
            @foreach($logs as $log)
            <li class="">

              {{ $log['description'] }}

              {{ $log['audited_at'] }}
            </li>
            @endforeach
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
