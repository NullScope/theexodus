@extends('layouts.home')

@section('head')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/day1.css')}}">
@endsection

@section('content')
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
                <iframe class="video" src="https://www.youtube.com/embed/GKfHcZC8CAM?rel=0&amp;controls=0&amp;showinfo=1&amp;modestbranding=1" frameborder="0" allowfullscreen></iframe>
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

                <div class="description-2">{!! trans('day1.outposts_desc_2') !!}</div>
            </div>
            <div id="auxiliaries" class="clearfix">
                <div class="title">{{ trans('day1.auxiliaries') }}</div>
                <div class="description">{!! trans('day1.auxiliaries_desc') !!}</div>
                <div class="wallpaper"></div>
                
                <div class="info clearfix">
                    <input type="button" id="soruq-bane" class="aux"></input>
                    <input type="button" id="diffusal-stone" class="aux"></input>
                    <input type="button" id="necrolic-equilibrium" class="aux"></input>
                    <input type="button" id="fundamental-boon" class="aux"></input>
                    <input type="button" id="damathryx-gift" class="aux"></input>
                    <input type="button" id="omniscience-blessing" class="aux"></input>
                    <input type="button" id="goblin-artillery" class="aux"></input>

                    <div id="aux-title"></div>
                    <div id="aux-description"></div>
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
                    <div class="title">{{ trans('day1.pronin') }}</div>
                    <div class="line"></div>
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

                <div class="container">
                    <div class="Inner">
                        <h3>General</h3>
                            <ul>
                                <li class="highlight">Reworked Ranked All Pick. Before the picking phase begins, there is a 15 second voting phase to ban heroes. Each player votes for a different hero. Afterwards, half of the heroes that were voted on will be randomly selected and banned.
                                    <div class="ChangeDetailsExtended">
                                        <p>Two players cannot vote for the same hero. The game displays heroes as they are voted on, but not who voted. The number of bans is equal to half the total number of votes. If there is an odd number of votes, the number of bans is randomly rounded up or down.</p>
                                        <p>The random ban selection will choose at most 3 heroes from one specific team's votes, so it's more evenly split.</p>
                                    </div>
                                </li>
                            </ul>
                    </div>
                </div>

                <!-- ITEMS -->
                <div class="container" id="Items">
                    <div class="Inner">
                        <b>NEW ITEMS</b>
                        <br />

                        <div class="ChangeNoteImage item">
                            <img src="http://cdn.dota2.com/apps/dota2/images/items/bloodthorn_lg.png?2">
                        </div>
                        <br style='clear: left;'/>
                        <strong>Bloodthorn</strong>
                        <br />

                        <ul>
                            <li class="highlight">New item formed from Orchid, Crystalys, and a Recipe<br />
                                <div class="ChangeDetailsExtended">
                                    <p>Requires:<br />
                                        Orchid (4075)<br />
                                        Crystalys (2120)<br />
                                        Recipe (1000)<br />
                                        Total: 7195</p>
                                    <p>Provides:<br />
                                        + 25 Intelligence<br />
                                        + 30 Attack Speed<br />
                                        + 60 Damage<br />
                                        + 150% Mana Regeneration</p>
                                    <p>Active:  All attacks on the silenced target, including from allies, gain True Strike and a 1.35x critical hit <span class="ChangeDetailsPopup">Still applies the same Silence mechanics from Orchid.</span></p>
                                    <p>Cooldown: 11 <span class="ChangeDetailsPopup">Orchid cooldown is 18</span></p>
                                    <p>Passive: Grants a chance to land a critical hit <span class="ChangeDetailsPopup">Same values as Crystalys: 20% chance to land a 175% damage critical hit.</span></p>
                                </div>
                            </li>
                        </ul>

                        <b>ITEM CHANGES</b>
                        <br />

                        [[basher]]
                        <ul>
                            <li>Bash damage reduced from 120 to 85</li>
                            <li>Recipe cost reduced from 1000 to 750</li>
                        </ul>

                    </div>
                </div>

                <!-- HEROES -->
                <div class="container" id="Heroes">
                    <div class="Inner">
                        <h3>Heroes</h3>
                        
                                [[abaddon]]
                                <ul>
                                    <li>Curse of Avernus slow increased from 5/10/15/20% to 8/12/16/20%</li>
                                </ul>
                    </div>
                </div>
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
                "soruq-bane" : "{!! trans('day1.soruq_bane_desc') !!}",
                "diffusal-stone" : "{!! trans('day1.diffusal_stone_desc') !!}",
                "necrolic-equilibrium" : "{!! trans('day1.necrolic_equilibrium_desc') !!}",
                "fundamental-boon" : "{!! trans('day1.fundamental_boon_desc') !!}",
                "damathryx-gift" : "{!! trans('day1.damathryx_gift_desc') !!}",
                "omniscience-blessing" : "{!! trans('day1.omniscience_blessing_desc') !!}",
                "goblin-artillery" : "{!! trans('day1.goblin_artillery_desc') !!}",
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

                $('#aux-title').text(auxTitles[auxName]);
                $('#aux-description').text(auxDescriptions[auxName]);
            }

            ShowAuxInfo("soruq-bane");
        })(jQuery);
    </script>

    <script>
        $( function () {
            var URL = ( location.protocol == 'https:' ) ? 'https://www.dota2.com/' : 'http://www.dota2.com/';
            URL = URL + 'jsfeed/heropediadata?feeds=herodata,itemdata';
            $.ajax(
                {
                    type:'GET',
                    cache:true,
                    url: URL,
                    dataType:'jsonp',
                    success: function( data )
                    {
                        g_HeroData = data['herodata'];
                        g_ItemData = data['itemdata'];
                        formatHeroAndItemNotes();
                    }
                }
            );
        } );

        var g_HeroData = false;
        var g_ItemData = false;
        function formatHeroAndItemNotes()
        {
            $.each( ['items','heroes'], function( i, type ) {
                var containers = ['#Heroes','#Items'];
                for ( i = 0; i < containers.length; i++ )
                {
                    container = containers[i];
                    var strContents = $(container).html();
                    if ( strContents )
                    {
                        var foundTags = strContents.match( /\[\[\w+\]\]/g );
                        if ( foundTags )
                        {
                            for ( x = 0; x < foundTags.length; x++ )
                            {
                                tag = foundTags[x];
                                tag = tag.substring( 2, tag.length-2 );
                                bUnfound = false;
                                if ( g_ItemData[tag] )
                                {
                                    path = 'items/'+tag+'_lg.png';
                                    name = g_ItemData[tag].dname;
                                    type = 'item'
                                }
                                else if ( g_HeroData[tag] )
                                {
                                    path = 'heroes/'+tag+'_sb.png';
                                    name = g_HeroData[tag].dname;
                                    type = 'hero'
                                }
                                else
                                {
                                    bUnfound = true;
                                }
                                if ( !bUnfound )
                                {
                                    var strHTML = '<div class="ChangeNoteImage ' + type + '"><img src="http://cdn.dota2.com/apps/dota2/images/'+path+'" /></div><br style="clear: left;"/>';
                                    strHTML += '<b>' + name + '</b>';
                                    strContents = strContents.replace( foundTags[x], strHTML );
                                }
                            }
                            $(container).html( strContents );
                        }
                    }
                }
            });

            var eCount = 0;
            $( '.ChangeDetailsExtended' ).each( function() {
                var $extended = $( this );
                $extended.attr( 'id', 'extended'+eCount );
                $extended.before( '<a href="#" class="ChangeDetailsEToggle" id="eToggle'+eCount+'" onclick="$(\'#extended'+eCount+'\').show();$(this).hide();return false;">+ Show Details</a>' );
                $extended.html( '<a href="#" id="eToggleHide'+eCount+'" class="ChangeDetailsEToggle HideButton" onclick="$(\'#extended'+eCount+'\').hide();$(\'#eToggle'+eCount+'\').show();return false;">- Hide Details</a>' + $extended.html() );
                eCount++;
            } );
            $( '.ChangeDetailsPopup' ).each( function() {
                var $popup = $( this );
                var $popupHoverButton = $( '<a href="#">[?]</a>' );
                $popup.before( $popupHoverButton );
                $popupHoverButton.hover( function() {
                    $popup.css( "display", "block" );
                }, function() {
                    $popup.css( "display", "none" );
                });
                $popupHoverButton.click( function() {
                    // Suppress the click event
                    return false;
                });
            } );
        }
    </script>
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
        <a class="follow steam" href="http://www.google.com"></a>
        <a class="follow twitter" href="http://www.google.com"></a>
        <a class="follow reddit" href="http://www.google.com"></a>
    </footer>
@endsection