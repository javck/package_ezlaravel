@extends('beautymail::templates.ark')

@section('content')

    @include('beautymail::templates.ark.heading', [
        'heading' => $title ,
        'level' => 'h1'
    ])


    @include('beautymail::templates.ark.contentStart')

    <div class="table-responsive">
				<table class="table table-bordered table-striped">
				  <colgroup>
					<col class="col-xs-2">
					<col class="col-xs-6">
				  </colgroup>
				  <tbody>
					<tr>
					  <td>
						<strong>聯絡人:</strong>
					  </td>
					  <td>{{ $contact->name }}</td>
					</tr>
					<tr>
					  <td>
						<strong>電子郵箱:</strong>
					  </td>
					  <td>{{ $contact->email }}</td>
					</tr>
					<tr>
					  <td>
						<strong>手機號碼:</strong>
					  </td>
					  <td>{{ $contact->mobile }}</td>
					</tr>
					<tr>
					  <td>
						<strong>主旨:</strong>
					  </td>
					  <td>{{ $contact->subject }}</td>
					</tr>
					<tr>
					  <td>
						<strong>路線:</strong>
					  </td>
					  <td>{{ $contact->deliver}}</td>
					</tr>
					{{-- <tr>
					  <td>
						<strong>貨物類型:</strong>
					  </td>
					  <td>{{ $contact->getCargoTypeName()}}</td>
					</tr> --}}
					<tr>
					  <td>
						<strong>目的城市:</strong>
					  </td>
					  <td>{{ $contact->destination}}</td>
					</tr>
					<tr>
					  <td>
						<strong>貨物重量:</strong>
					  </td>
					  <td>{{ $contact->weight}}公斤</td>
					</tr>
					<tr>
					  <td>
						<strong>貨物長度:</strong>
					  </td>
					  <td>{{ $contact->length}}公分</td>
					</tr>
					<tr>
					  <td>
						<strong>貨物寬度:</strong>
					  </td>
					  <td>{{ $contact->width}}公分</td>
					</tr>
					<tr>
					  <td>
						<strong>貨物高度:</strong>
					  </td>
					  <td>{{ $contact->height}}公分</td>
					</tr>
				  </tbody>
				</table>
			</div>

    @include('beautymail::templates.ark.contentEnd')

@stop