@extends('layouts.home')

@section('head')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/day1.css')}}">
@endsection

@section('content')
    <script>
        (function(d, s, id){
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {return;}
            js = d.createElement(s); js.id = id;
            js.src = "https://assets.gfycat.com/gfycat.js";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'gfycat-js'));
    </script>
    <div id="header">
        <div class="mod-logo"></div>
        <div class="presents-text">{{ trans('day1.presents') }}</div>
        <div class="logo"></div>
        <div class="choose-language">
            <a class="language en" href="http://en.{{ Config::get('app.base_address') }}"></a>
            <a class="language zh" href="http://zh.{{ Config::get('app.base_address') }}"></a>
            <a class="language ru" href="http://ru.{{ Config::get('app.base_address') }}"></a>
        </div>
        <div class="dividing-line"></div>
    </div>

    <div id="main">
        <div id="introduction">
            <div class="title">Fight or Flight</div>
            <div class="description">{!! trans('day1.description') !!}</div>
            <div id="showmatch">
                <iframe class="video" src="https://www.youtube.com/embed/GKfHcZC8CAM?rel=0&amp;controls=1&amp;showinfo=0&amp;modestbranding=0" frameborder="0" allowfullscreen></iframe>
                <div class="title">{!! trans('day1.watch_the_showmatch') !!}</div>
            </div>
            <div id="characteristics">
                <div class="shadow">
                </div>
                <div class="char-info difficulty">
                    <div class="title">{{ trans('day1.difficulty') }}</div>
                    <div class="description">{{ trans('day1.competitive') }}</div>
                </div>

                <div class="char-info duration">
                    <div class="title">{{ trans('day1.duration') }}</div>
                    <div class="description">{{ trans('day1.medium') }}</div>
                </div>

                <div class="char-info status">
                    <div class="title">{{ trans('day1.status') }}</div>
                    <div class="description">{{ trans('day1.released') }}</div>
                </div>

                <div class="characteristic status">

                </div>

                <div class="characteristic duration">

                </div>

                <div class="characteristic difficulty">

                </div>
            </div>
        </div>
        <div id="features">
            <div class="dividing-line"></div>
            <div class="title">{{ trans('day1.features') }}</div>
            <div id="voting">
                <div class="title">{{ trans('day1.choose_game_mode') }}</div>
                <div class="wallpaper"></div>
                <div class="dividing-line"></div>
            </div>
            <div id="item-draft">
                <div class="art"></div>
                <div class="header">
                    <div class="title">{{ trans('day1.item_draft') }}</div>
                </div>
                <div class="description">{!! trans('day1.item_draft_desc') !!}</div>
                <div class="wallpaper"></div>
                <div class="dividing-line"></div>
            </div>
            <div id="captains-mode">
                <div class="title">{{ trans('day1.captains_mode_intro') }}</div>
                <div class="description">{!! trans('day1.captains_mode') !!}</div>
                <div class="wallpaper"></div>
                <div class="dividing-line"></div>
            </div>
            <div id="orbs">
                <div class="art"></div>
                <div class="header">
                    <div class="title">{{ trans('day1.orbs') }}</div>
                </div>
                <div class="description">{!! trans('day1.orbs_desc') !!}</div>
                <div class="wallpaper"></div>
                <div class="dividing-line"></div>
                <div id="orbs-learn-more" class="learn-more"><span>{!! trans('day1.learn_more') !!}</span></div>
                <div class="extra"></div>
                <div class="dividing-line-2"></div>
            </div>
            <div id="outposts" class="clearfix">
                <div class="art"></div>
                <div class="header">
                    <div class="title">{{ trans('day1.outposts') }}</div>
                </div>
                <div class="description">{!! trans('day1.outposts_desc') !!}</div>
                <div class="wallpaper"></div>
                <div class="dividing-line"></div>

                <div class="info clearfix">
                    <div class="outpost-info wisdom">
                        <div class="header"></div>
                        <div class="title">{{ trans('day1.wisdom') }}</div>
                        <div class="background"></div>
                        <div class="model"></div>
                        <div class="description">{{ trans('day1.wisdom_desc') }}</div>
                    </div>
                    <div class="outpost-info celerity">
                        <div class="header"></div>
                        <div class="title">{{ trans('day1.celerity') }}</div>
                        <div class="background"></div>
                        <div class="model"></div>
                        <div class="description">{{ trans('day1.celerity_desc') }}</div>
                    </div>
                    <div class="outpost-info fury">
                        <div class="header"></div>
                        <div class="title">{{ trans('day1.fury') }}</div>
                        <div class="background"></div>
                        <div class="model"></div>
                        <div class="description">{{ trans('day1.fury_desc') }}</div>
                    </div>
                    <div class="outpost-info wealth last">
                        <div class="header"></div>
                        <div class="title">{{ trans('day1.wealth') }}</div>
                        <div class="background"></div>
                        <div class="model"></div>
                        <div class="description">{{ trans('day1.wealth_desc') }}</div>
                    </div>
                </div>

                <!-- <div class="description-2">{!! trans('day1.outposts_desc_2') !!}</div> -->
            </div>
            <div id="auxiliaries" class="clearfix">
                <div class="title">{{ trans('day1.auxiliaries') }}</div>
                <div class="description">{!! trans('day1.auxiliaries_desc') !!}</div>
                <div class="wallpaper"></div>
                <div class="auxes-learn-more">{!! trans('day1.auxiliaries_learn_more') !!}</div>
                
                <div id="auxes-info" class="info clearfix">
                    <input type="button" id="soruq-bane" class="aux"></input>
                    <input type="button" id="diffusal-stone" class="aux"></input>
                    <input type="button" id="necrolic-equilibrium" class="aux"></input>
                    <input type="button" id="fundamental-boon" class="aux"></input>
                    <input type="button" id="damathryx-gift" class="aux"></input>
                    <input type="button" id="omniscience-blessing" class="aux"></input>
                    <input type="button" id="goblin-artillery" class="aux"></input>

                    <!-- <div id="aux-info"> -->
                        <div id="aux-title"></div>
                        <div id="aux-description"></div>
                        <div id="aux-video"><div class="gfyitem" data-autoplay="true" data-controls="false" data-id="ImperfectIcyBlackbear"></div></div>
                    <!-- </div> -->
                </div>
                <div class="dividing-line"></div>
            </div>

            <div id="essence" class="clearfix">
                <div class="art"></div>
                <div class="header">
                    <div class="title">{{ trans('day1.essence') }}</div>
                </div>
                <div class="description">{!! trans('day1.essence_desc') !!}</div>
                <div class="wallpaper"></div>
                <div class="extra"></div>
                <div class="dividing-line"></div>
                <div class="dividing-line-2"></div>
            </div>

            <div id="altar" class="clearfix">
                <div class="art"></div>
                <div class="header">
                    <div class="title">{{ trans('day1.altar') }}</div>
                </div>
                <div class="description">{!! trans('day1.altar_desc') !!}</div>
                <div class="wallpaper"></div>
                <div class="dividing-line"></div>
                <div id="altar-learn-more" class="learn-more"><span>{!! trans('day1.learn_more') !!}</span></div>
            </div>

            <div id="pronin" class="clearfix">
                <div class="wallpaper"></div>
                <div class="header">
                    <div class="icon"></div>
                    <div class="title">{{ trans('day1.pronin') }}</div>
                </div>
                <div class="description">{!! trans('day1.pronin_desc') !!}</div>
                <div class="dividing-line"></div>
            </div>

            <div id="unique-items" class="clearfix">
                <div class="art"></div>
                <div class="header">
                    <div class="title">{{ trans('day1.unique_items') }}</div>
                </div>
                <div class="description">{!! trans('day1.unique_items_desc') !!}</div>
                <div class="wallpaper"></div>
                <div class="dividing-line"></div>
            </div>
        </div>

        <div id="changelog">
            <div class="header">
                <div class="title">{!! trans('day1.custom_balancing') !!}</div>
            </div>
            <div class="description">
                @include('changelog')
            </div>
            <div class="art">
        
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <script>
        (function($) {
            var auxTitles = {
                "soruq-bane" : "{!! trans('day1.soruq_bane') !!}",
                "diffusal-stone" : "{!! trans('day1.diffusal_stone') !!}",
                "necrolic-equilibrium" : "{!! trans('day1.necrolic_equilibrium') !!}",
                "fundamental-boon" : "{!! trans('day1.fundamental_boon') !!}",
                "damathryx-gift" : "{!! trans('day1.damathryx_gift') !!}",
                "omniscience-blessing" : "{!! trans('day1.omniscience_blessing') !!}",
                "goblin-artillery" : "{!! trans('day1.goblin_artillery') !!}",
            };

            var auxDescriptions = {
                'soruq-bane' : '{!! trans("day1.soruq_bane_desc") !!}',
                'diffusal-stone' : '{!! trans("day1.diffusal_stone_desc") !!}',
                'necrolic-equilibrium' : '{!! trans("day1.necrolic_equilibrium_desc") !!}',
                'fundamental-boon' : '{!! trans("day1.fundamental_boon_desc") !!}',
                'damathryx-gift' : '{!! trans("day1.damathryx_gift_desc") !!}',
                'omniscience-blessing' : '{!! trans("day1.omniscience_blessing_desc") !!}',
                'goblin-artillery' : '{!! trans("day1.goblin_artillery_desc") !!}',
            };

            var auxVideos = {
                "soruq-bane" : "ImperfectIcyBlackbear",
                "diffusal-stone" : "YoungNearAmericanindianhorse",
                "necrolic-equilibrium" : "VigorousMeaslyAnemone",
                "fundamental-boon" : "CookedGraciousAsiaticlesserfreshwaterclam",
                "damathryx-gift" : "WhiteDapperHornshark",
                "omniscience-blessing" : "EcstaticRevolvingAsiansmallclawedotter",
                "goblin-artillery" : "CarefulPlumpAlleycat",
            };

            $( ".aux" ).click(function() {
                ShowAuxInfo( $(this).attr("id") );
            });

            function ShowAuxInfo( auxName ){
                $('#soruq-bane').removeClass( 'active' );
                $('#diffusal-stone').removeClass( 'active' );
                $('#necrolic-equilibrium').removeClass( 'active' );
                $('#fundamental-boon').removeClass( 'active' );
                $('#damathryx-gift').removeClass( 'active' );
                $('#omniscience-blessing').removeClass( 'active' );
                $('#goblin-artillery').removeClass( 'active' );

                $('#'+auxName).addClass( 'active' );

                $('#aux-title').html(auxTitles[auxName]);
                $('#aux-description').html(auxDescriptions[auxName]);
                
                var collection = gfyCollection.get();
                collection[0].init({id: auxVideos[auxName]})

                $('#aux-video').show()

                $('body, html').animate({
                    scrollTop: $("#auxes-info").offset().top
                }, 500);
            };

            $('body,html').bind('scroll mousedown wheel DOMMouseScroll mousewheel keyup touchmove', function(e){
                if ( e.which > 0 || e.type == "mousedown" || e.type == "mousewheel" || e.type == "touchmove"){
                    $("html,body").stop();
                }
            });
        })(jQuery);
    </script>

    <script src="assets/js/fetch_heropedia.js"></script>
@endsection

@section('footer')
    <footer id="footer">
        <div class="line"></div>
        <div class="logo"></div>
        <div class="copyright">{!! trans('day1.copyright') !!}</div>
        <div class="play-button">
            <div class="background"></div>
            <a href="http://www.google.com">{!! trans('day1.start_playing') !!}</a>
        </div>
        <div class="follow_us">{{ trans('day1.follow_us') }}</div>
        <a class="follow steam" href="http://steamcommunity.com/groups/dota2fightorflight"></a>
        <a class="follow twitter" href="https://twitter.com/Jicyphex"></a>
        <a class="follow discord" href="https://discord.gg/mYK76Nc"></a>
        <a class="follow reddit" href="https://www.reddit.com/r/Dota2FoF/"></a>
    </footer>
@endsection
