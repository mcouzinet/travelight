<div id='header'>
    <a href="/" class="white">
	<img src="/img/logo.png">
	<h2>Travelight</h2>
    </a>
	<h1>Sell, Buy, rent and swap travel products</h1>
	<h3>Save money, whenever you want, wherever you go</h3>

    <?php if(!$user): ?>
	<div id="btns">
	    <a href="/login" class="btn btn-link white">Login</a>
        <a href="/signup" class="btn btn-success">Signup</a>
	</div>
    <?php else: ?>

        <div id="btns" class="btn-group">
            <a href="#" class="btn btn-success"><?=$user->email?></a>
            <a href="#" class="btn btn-success dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="/product"><span class="glyphicon glyphicon-plus"></span> Add a product</a></li>
                <li class="divider"></li>
                <li><a href="/logout"><span class="glyphicon glyphicon-remove"></span> Logout</a></li>
            </ul>
        </div>
    <?php endif; ?>
</div>

<div id="search">
	<div class="form-group">
	  <div class="input-group">
          <input type="text" name="q" id="q" autocomplete="off" spellcheck="false" autocorrect="false" class="form-control" placeholder="What would you like to find ?">
            <span class="input-group-btn">
                <button class="btn btn-default btn-success" type="button" >Search</button>
            </span>
	  </div>
	</div>
</div>

<div class="container threepoint">

    <div class="col-lg-3 col-lg-offset-2">
        <img src="/img/Travelcc.png">
        <p>Save time and money</p>
    </div>
    <div class="col-lg-3 ">
        <img src="/img/MeetLocals.png">
        <p>Meet amazing locals</p>
    </div>
    <div class="col-lg-3">
        <img src="/img/enjoy.png">
        <p>Enjoy your trip</p>
    </div>

</div>


<!-- Results page -->
<div id="results" class="hide">
    <section class="container">
        <div class="row">
            <!-- Facets -->
            <div class="col-sm-3 hidden-xs" id="facets"></div>
            <!-- /Facets -->

            <div class="col-sm-9 col-xs-12">

                <div id="hits"></div>

                <div class="clearfix"></div>
                <!-- Pagination -->
                <div id="pagination"></div>
                <!-- /Pagination -->
            </div>
        </div>
    </section>
</div>
<!-- /Results page -->

<!-- Facet template -->
<script type="text/template" id="facet-template">
    <div class="facet">
        <ul class="list-group">
            <!-- facet title -->
            <li class="list-group-item text-center list-group-item-success"><b>{{ title }}</b></li>

            {{#values}}
            <li class="{{#refined}}refined{{/refined}} list-group-item">
                {{#disjunctive}}
                <input class="checkbox" type="checkbox" {{#refined}}checked="checked"{{/refined}} onclick="toggleRefine('{{ facet }}', '{{ value }}'); return false;">
                {{/disjunctive}}
                <a href="#" onclick="toggleRefine('{{ facet }}', '{{ value }}'); return false;">{{ label }}</a> ({{ count }})
            </li>
            {{/values}}

            <!-- other values will only be displayed if the use click on the "show more" link  -->
            {{#has_other_values}}
            <!-- "show more" link -->
            <li class="show-more list-group-item"><a href="#" onclick="showMoreLess(this); return false;"><i class="glyphicon glyphicon-chevron-down" /> more</a></li>

            <!-- other values -->
            {{#other_values}}
            <li class="{{#refined}}refined{{/refined}} show-more list-group-item" style="display: none">
                {{#disjunctive}}
                <input class="checkbox" type="checkbox" {{#refined}}checked="checked"{{/refined}} onclick="toggleRefine('{{ facet }}', '{{ value }}'); return false;">
                {{/disjunctive}}
                <a href="#" onclick="toggleRefine('{{ facet }}', '{{ value }}'); return false;">{{ label }}</a> ({{ count }})
            </li>
            {{/other_values}}

            <!-- "show less" link -->
            <li class="show-more list-group-item" style="display: none" onclick="showMoreLess(this); return false;"><a href=""><i class="glyphicon glyphicon-chevron-up" /> less</a></li>
            {{/has_other_values}}
        </ul>
    </div>
</script>

<!-- Hit template -->
<script type="text/template" id="hit-template">
    <div class="hit media">
        <a class="pull-left linkimg" href="/product/{{ objectID }}" style="background: url({{ urlpicture }}) no-repeat center center;background-size: cover;">
        </a>
        <a href="/product/{{ objectID }}">
            <div class="media-body">
                <h3 class="pull-right text-right text-danger price">
                    ${{ price }}
                </h3>
                <h4>{{{ _highlightResult.name.value }}}</h4>
                <p class="text-muted">
                    {{{ shortdescription }}}
                </p>
                <ul class="list-inline">
                    <li>{{{ _highlightResult.type.value }}}</li>
                    <li>{{{ _highlightResult.category.value }}}</li>
                    <li>{{ type }}</li>
                </ul>
            </div>
        </a>
    </div>
</script>

<!-- Pagination template -->
<script type="text/template" id="pagination-template">
    <div class="text-center">
        <ul class="pagination">
            <li {{^prev_page}}class="disabled"{{/prev_page}}><a href="#" onclick="{{#prev_page}}gotoPage({{ prev_page }});{{/prev_page}} return false;">&laquo;</a></li>
            {{#pages}}
            <li class="{{#current}}active{{/current}}{{#disabled}}disabled{{/disabled}}"><a href="#" onclick="{{^disabled}}gotoPage({{ number }});{{/disabled}} return false;">{{ number }}</a></li>
            {{/pages}}
            <li {{^next_page}}class="disabled"{{/next_page}}><a href="#" onclick="{{#next_page}}gotoPage({{ next_page }});{{/next_page}} return false;">&raquo;</a></li>
        </ul>
    </div>
</script>

<!-- Slider template -->
<script type="text/template" id="slider-template">
    <div class="facet">
        <ul class="list-group">
            <li class="list-group-item text-center list-group-item-info"><b>{{ title }}</b></li>
            <li class="list-group-item text-center">
                <b>0</b>
                <input type="text" data-slider-min="0" data-slider-max="{{ max }}" data-slider-step="1" data-slider-value="{{ current }}" data-slider-orientation="horizontal" data-slider-selection="none" id="{{ facet }}-slider" />
                <b>{{ max }}</b>
            </li>
        </ul>
    </div>
</script>

<!-- Stats template -->
<script type="text/template" id="stats-template">
    <div class="stats">
        We found <strong>{{ nbHits }}</strong> result{{#nbHits_plural}}s{{/nbHits_plural}} {{#query}}matching <strong>"{{ query }}"</strong>{{/query}}
    </div>
</script>
