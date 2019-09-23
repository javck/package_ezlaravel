<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<div class="single-post nobottommargin">

						<!-- Single Post
						============================================= -->
						<div class="entry clearfix">

							<!-- Entry Title
							============================================= -->
							<div class="entry-title">
								<h2>{{ $article->title }}</h2>
							</div><!-- .entry-title end -->

							<!-- Entry Meta
							============================================= -->
							<ul class="entry-meta clearfix">
								<li><i class="icon-calendar3"></i> {{ $article->created_at->diffForHumans()}}</li>
								<li><a href="#"><i class="icon-user"></i> {{ $article->user->name }}</a></li>
								<li><i class="icon-tag"></i>
									@for ($i = 0; $i < count($article->tags); $i++)
										@if ($i != 0), @endif
										<a href="{{url($article->tags[$i]->link)}}">{{$article->tags[$i]->title}}</a>
									@endfor
								</li>
								<li><a href="#"><i class="icon-comments"></i><small> {{ trans('page.commentsCount',['count'=> $article->commentQty ]) }}</small></a></li>
								<li><i class="{{ $article->iconClass }}"></i></li>
							</ul><!-- .entry-meta end -->

							<!-- Entry Image
							============================================= -->
							@php
								if(isset($article->images)){
									if(json_decode($article->images) != null){
										$images = json_decode($article->images);
									}else{
										$images = array($article->images);
									}
								}else{
									$images = null;
								}
							@endphp
							@if ($article->mode == 'singleImg')
								@php
									if(isset($images)){
										if(gettype($images) == 'array'){
											$image = $images[0];
										}else{
											$image = $images;
										}
									}else{
										$image = setting('site.article_default_pic');
									}
								@endphp
								<div class="entry-image bottommargin">
									<img src="{{Voyager::image($image)}}" alt="{{$article->title}}">
								</div><!-- .entry-image end -->
							@elseif($article->mode == 'multiImgs')
							    @foreach($images as $image)
							    	<div class="entry-image bottommargin">
										<img src="{{Voyager::image($image)}}" alt="{{$article->title}}">
									</div><!-- .entry-image end -->
							    @endforeach
							@elseif($article->mode == 'film')
									<div class="entry-image bottommargin">
										<iframe src="{{ $article->mediums }}" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
									</div>
							@endif
							

							<!-- Entry Content
							============================================= -->
							<div class="entry-content notopmargin">
								@if ($article->mode == 'link')
									<a href="{{$article->mediums}}" target="_blank">{!! $article->mediums !!}</a>
								@else
									{!! $article->content !!}
								@endif
								<br/>
								<!-- Post Single - Content End -->

								<!--  文章附件 -->
								@php
									$paths = json_decode($article->attachment_paths,true);
								@endphp
								@if (count($paths) > 0 && $paths[0] != null )
									<div class="si-share noborder clearfix">
										<div>
											@for ($i = 0; $i < count($paths); $i++)
												{{-- <a href="{{url('article/'.$article->id.'/download/'.$i)}}" ><i class="icon-paperclip"></i>{{$article->getAttachNameAry()[$i]}}</a>&nbsp;&nbsp;
												@if ($i < count($paths) - 1) ,&nbsp;&nbsp; @endif --}}
												<a href="{{url('storage/'.$paths[$i]['download_link'])}}" ><i class="icon-paperclip"></i>{{$paths[$i]['original_name']}}</a>&nbsp;&nbsp;
												@if ($i < count($paths) - 1) ,&nbsp;&nbsp; @endif
											@endfor
										</div>
									</div>
								@endif

								<div class="clear"></div>
								<br/>
								<!--  文章附件 End -->

								<!-- Tag Cloud
								============================================= -->
								<div class="tagcloud clearfix bottommargin">
									@for ($i = 0; $i < count($article->tags); $i++)
										<a href="{{url($article->tags[$i]->link)}}">{{$article->tags[$i]->title}}</a>
									@endfor
								</div>

								<div class="clear"></div>
								<br/>
								<!--  Tag Cloud End -->

								<!-- Post Single - Share
								============================================= -->
								<div class="si-share noborder clearfix">
									<span>{{ trans('page.shareArticle') }}</span>
									<div>
										<a href="http://www.facebook.com/share.php?u={{ url('articles/' . $article->id) }}" class="social-icon si-borderless si-facebook">
											<i class="icon-facebook"></i>
											<i class="icon-facebook"></i>
										</a>
										<a href="http://twitter.com/home/?status={{trans('label.site_name')}} {{Request::fullUrl()}}" class="social-icon si-borderless si-twitter">
											<i class="icon-twitter"></i>
											<i class="icon-twitter"></i>
										</a>
										{{-- <a href="#" class="social-icon si-borderless si-pinterest">
											<i class="icon-pinterest"></i>
											<i class="icon-pinterest"></i> --}}
										</a>
										<a href="https://plus.google.com/share?url={{ url('articles/' . $article->id) }}" class="social-icon si-borderless si-gplus">
											<i class="icon-gplus"></i>
											<i class="icon-gplus"></i>
										</a>
										{{-- <a href="#" class="social-icon si-borderless si-rss">
											<i class="icon-rss"></i>
											<i class="icon-rss"></i>
										</a>
										<a href="#" class="social-icon si-borderless si-email3">
											<i class="icon-email3"></i>
											<i class="icon-email3"></i>
										</a> --}}
									</div>
								</div><!-- Post Single - Share End -->

							</div>
						</div><!-- .entry end -->
						<!-- Post Navigation
						============================================= -->
						<div class="post-navigation clearfix">
							<div class="col_half nobottommargin">
								@if (isset($lastArticle))
									<a href="{{url('articles/'.$lastArticle->id)}}">&lArr; {{ $lastArticle->title }}</a>
								@else
									&nbsp;
								@endif
							</div>
							
							<div class="col_half col_last tright nobottommargin">
								@if (isset($nextArticle))
									<a href="{{url('articles/'.$nextArticle->id)}}">{{ $nextArticle->title }} &rArr;</a>
								@else
									&nbsp;
								@endif
							</div>
							
							

						</div><!-- .post-navigation end -->

						<!-- Post Author Info
						============================================= -->
						@if(setting('admin.isShowAuthor') == "true")
							<div class="line"></div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">{{ trans('page.postBy')}} <span>{{$article->user->name}}</span></h3>
								</div>
								<div class="panel-body">
									<div class="author-image">
										<img src="{{url('images/'.$article->user->pic)}}" alt="{{$article->user->name}}" class="img-circle">
									</div>
									{{ $article->user->getPureDesc() }}
								</div>
							</div>
						@endif
						<!-- Post Single - Author End -->

						@if (isset($relatedArticles))
						<div class="line"></div>

						<h4>{{ trans('page.relatedArticle') }}</h4>

						<div class="related-posts clearfix">
						
						@for ($i = 0; $i < count($relatedArticles); $i++)
							@if ($i % 2 == 0)
							<div class="col_half nobottommargin {{$i == 2 ?'col_last' :''}}">
							@endif
								<div class="mpost clearfix">
									<div class="entry-image">
										<img src="{{url('images/'.$relatedArticles[$i]->getMediasAry()[0])}}" alt="{{$relatedArticles[$i]->title}}">
									</div>
									<div class="entry-c">
										<div class="entry-title">
											<h4><a href="{{url('news/'.$relatedArticles[$i]->id)}}">{{$relatedArticles[$i]->title}}</a></h4>
										</div>
										<ul class="entry-meta clearfix">
											<li><i class="icon-calendar3"></i> {{ $relatedArticles[$i]->created_at->diffForHumans() }}</li>
											<li><i class="icon-comments"></i> {{$relatedArticles[$i]->commentQty}}</li>
										</ul>
										<div class="entry-content">{{$relatedArticles[$i]->content_small}}</div>
									</div>
								</div>
							@if ($i % 2 == 1 or $i == count($relatedArticles)-1 )
							</div>
							@endif
						@endfor
						</div>
						@endif
						

						<!-- Comments
						============================================= -->
						@if (setting('admin.isUseComment') == "true")
							<div id="comments" class="clearfix">
							@if ($article->commentQty > 0)
								<h3 id="comments-title"><span>{{$article->commentQty}}</span> {{ trans('page.comments') }}</h3>

								<!-- Comments List
								============================================= -->
								<ol class="commentlist clearfix">

									@for ($i = 0; $i < count($comments) ; $i++)
									<li class="comment even thread-even depth-1" id="li-comment-{{$comments[$i]->id}}">

										<div id="comment-{{$comments[$i]->id}}" class="comment-wrap clearfix">

											<div class="comment-meta">

												<div class="comment-author vcard">

													<span class="comment-avatar clearfix">
													<img alt='' src='{{url('images/'.$comments[$i]->pic)}}' class='avatar avatar-60 photo avatar-default' height='60' width='60' /></span>

												</div>

											</div>

											<div class="comment-content clearfix">

												<div class="comment-author">{{ $comments[$i]->name }}<span>{{ $comments[$i]->created_at->diffForHumans() }}</span></div>

												<p>{{ $comments[$i]->content }}</p>

												{{-- <a class='comment-reply-link' href='#'><i class="icon-reply"></i></a> --}}

											</div>

											<div class="clear"></div>

										</div>

										<ul class='children'>

											@foreach ($comments[$i]->replys as $reply)
											<li class="comment byuser comment-author-_smcl_admin odd alt depth-2" id="li-comment-{{$reply->id}}">

												<div id="comment-{{$reply->id}}" class="comment-wrap clearfix">

													<div class="comment-meta">

														<div class="comment-author vcard">

															<span class="comment-avatar clearfix">
															<img alt='' src='{{url('images/'.$reply->pic)}}' class='avatar avatar-40 photo' height='40' width='40' /></span>

														</div>

													</div>

													<div class="comment-content clearfix">

														<div class="comment-author">{{ $reply->name }}<span>{{ $reply->created_at->diffForHumans() }}</span></div>

														<p>{{ $reply->content }}</p>

														<a class='comment-reply-link' href='#'><i class="icon-reply"></i></a>

													</div>

													<div class="clear"></div>

												</div>

											</li>
											@endforeach



										</ul>
									</li>
									@endfor

								</ol><!-- .commentlist end -->

								<div class="clear"></div>
							@endif
								<!-- Comment Form
								============================================= -->
								<div id="respond" class="clearfix">

									<h3>{{ trans('page.leaveA')}}<span>{{ trans('page.comment')}}</span></h3>

									{{ Form::open(['url'=>url('articles/'.$article->id.'/comment'),'role'=>'form','class'=>'clearfix','method'=>'POST']) }}
										<input type="hidden" id="currentUrl" name="currentUrl" value="{{Request::url()}}" />
										@if ( !Auth::check() )
										<div class="col_one_third">
											<label for="author">{{trans('label.name')}}</label>
											<input type="text" name="author" id="author" value="" size="22" tabindex="1" class="sm-form-control" />
										</div>

										<div class="col_one_third">
											<label for="email">{{trans('label.email')}}</label>
											<input type="text" name="email" id="email" value="" size="22" tabindex="2" class="sm-form-control" />
										</div>

										<div class="col_one_third col_last">
											<label for="url">{{trans('label.website')}}</label>
											<input type="text" name="url" id="url" value="" size="22" tabindex="3" class="sm-form-control" />
										</div>
										@endif

										<div class="clear"></div>

										<div class="col_full">
											<label for="comment">{{trans('page.comment')}}</label>
											<textarea name="comment" cols="58" rows="7" tabindex="4" class="sm-form-control"></textarea>
										</div>

										{!! NoCaptcha::display() !!}
										<br/>

										<div class="col_full nobottommargin">
											<button name="submit" type="submit" id="submit-button" tabindex="5" value="Submit" class="button button-3d nomargin">{{trans('page.submitComment')}}</button>
										</div>

									</form>

								</div><!-- #respond end -->

							</div><!-- #comments end -->
						@endif
						

					</div>

				</div>

			</div>

		</section><!-- #content end -->
