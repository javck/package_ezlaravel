@extends('beautymail::templates.ark')

@section('content')

    @include('beautymail::templates.ark.heading', [
        'heading' => $title ,
        'level' => 'h1'
    ])


    @include('beautymail::templates.ark.contentStart')

        <!-- 留言通知 -->
		@if ($mode == 'comment')
			<div class="table-responsive">
				<table class="table table-bordered table-striped">
				  <colgroup>
					<col class="col-xs-2">
					<col class="col-xs-6">
				  </colgroup>
				  <tbody>
					<tr>
					  <td>
						<strong>姓名:</strong>
					  </td>
					  <td>{{ $comment->name }}</td>
					</tr>
					<tr>
					  <td>
						<strong>電子郵箱:</strong>
					  </td>
					  <td>{{ $comment->email }}</td>
					</tr>
					<tr>
					  <td>
						<strong>網址:</strong>
					  </td>
					  <td>{{ $comment->website }}</td>
					</tr>
					<tr>
					  <td>
						<strong>內容:</strong>
					  </td>
					  <td>{{ $comment->content}}</td>
					</tr>
				  </tbody>
				</table>
			</div><!-- 留言通知結束 -->
		@elseif ($mode == 'signUp')
			<!-- 報名課程通知 -->
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
						<strong>學員姓名:</strong>
					  </td>
					  <td>{{ $contact->std_name }}</td>
					</tr>
					<tr>
					  <td>
						<strong>學員年級:</strong>
					  </td>
					  <td>{{ $contact->getGradeName() }}</td>
					</tr>
					<tr>
					  <td>
						<strong>報名課程:</strong>
					  </td>
					  <td>{{ $contact->getCourseName() }}</td>
					</tr>
					<tr>
					  <td>
						<strong>報名班別:</strong>
					  </td>
					  <td>{{ $contact->getModeName() }}</td>
					</tr>
					<tr>
					  <td>
						<strong>如何得知:</strong>
					  </td>
					  <td>{{ $contact->getSourceName() }}</td>
					</tr>
					<tr>
					  <td>
						<strong>是否學過:</strong>
					  </td>
					  <td>{{ $contact->getIsLearnedName() }}</td>
					</tr>
					<tr>
					  <td>
						<strong>報名單位:</strong>
					  </td>
					  <td>{{ $contact->getPartnerName() }}</td>
					</tr>
					<tr>
					  <td>
						<strong>主旨:</strong>
					  </td>
					  <td>{{ $contact->subject }}</td>
					</tr>
					<tr>
					  <td>
						<strong>內容:</strong>
					  </td>
					  <td>{{ $contact->message}}</td>
					</tr>
				  </tbody>
				</table>
			</div><!-- 報名課程通知 -->
		@elseif ($mode == 'contact')
			<!-- 聯絡單通知 -->
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
						<strong>所需服務:</strong>
					  </td>
					  <td>{{ $contact->getServiceName() }}</td>
					</tr>
					<tr>
					  <td>
						<strong>主旨:</strong>
					  </td>
					  <td>{{ $contact->subject }}</td>
					</tr>
					<tr>
					  <td>
						<strong>內容:</strong>
					  </td>
					  <td>{{ $contact->message}}</td>
					</tr>
					<tr>
					  <td>
						<strong>如何得知</strong>
					  </td>
					  <td>{{ $contact->getSourceName() }}</td>
					</tr>
				  </tbody>
				</table>
			</div><!-- 聯絡單通知 -->
		@endif

    @include('beautymail::templates.ark.contentEnd')

@stop