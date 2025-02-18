@foreach ($categorySectionFour as $sectionFourNews)
                               <div class="card__post card__post-list card__post__transition mt-30 ">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="card__post__transition">
                                                <a href="{{ route('news-details', optional($sectionFourNews)->slug) }}">
                                                    <img src="{{ asset($sectionFourNews->image) }}" class="img-fluid w-100" alt="News Image">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="card__post__body">
                                                <div class="card__post__content">
                                                    <div class="card__post__category">
                                                    {{ __('frontend.by') }}
                                                    {{ $sectionFourNews->author->name }}
                                                    </div>
                                                    <div class="card__post__author-info mb-2">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item">
                                                                <span class="text-primary">
                                                                    {{ __('frontend.by') }} {{ optional($sectionFourNews->author)->name }}
                                                                </span>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <span class="text-dark text-capitalize">
                                                                {{ date('M d, Y', strtotime($sectionFourNews->created_at)) }}
                                                                </span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="card__post__title">
                                                        <h5>
                                                            <a  href="{{ route('news-details', $sectionFourNews->slug) }}">
                                                                {!! truncate($sectionFourNews->title, limit: 50) !!}
                                                            </a>
                                                        </h5>
                                                        <p class="d-none d-lg-block d-xl-block mb-0">
                                                                {!! truncate($sectionFourNews->title, limit: 50) !!}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach