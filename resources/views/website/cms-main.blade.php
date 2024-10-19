@extends('/layouts/default')
@section('page-content')

@foreach ($page->pageSections as $section )
@include('/website/templates/'.$section->template->filename,['data'=>$section])
@endforeach
@endsection
@push('scripts')
@endpush