<div id='header'>
	<img src="/img/logo.png">
	<h2>Travelight</h2>
	<h1>Sell, Buy, rent or swap travel products</h1>
	<h3>Save money, meet awesome people, and consume less</h3>

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
                <li><a href="#"><span class="glyphicon glyphicon-search"></span> See my product</a></li>
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


<!-- Results page -->
<div id="results" class="">
    <section class="container">
        <div class="row">
            <!-- Facets -->
            <div class="col-sm-3 hidden-xs" id="facets"></div>
            <!-- /Facets -->

            <div class="col-sm-9 col-xs-12">
                <div class="panel panel-default">
                    <!-- Stats + sort order menu -->
                    <div class="panel-heading">
                        <div class="pull-right">
                            <div class="btn-group">
                                <button type="button" class="btn btn-success dropdown-toggle btn-xs" data-toggle="dropdown">
                                    <span class="sort-by">Sort by Relevance</span> <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#" onclick="sortBy('', this); return false;">Sort by Relevance</a></li>
                                    <li><a href="#" onclick="sortBy('_price_asc', this); return false;">Lowest Price</a></li>
                                    <li><a href="#" onclick="sortBy('_price_desc', this); return false;">Highest Price</a></li>
                                </ul>
                            </div>
                        </div>
                        <span id="stats">&nbsp;</span>
                    </div>
                    <!-- /Stats + sort order menu -->

                    <!-- Hits -->
                    <div class="panel-body" id="hits"></div>
                    <!-- /Hits -->
                </div>

                <!-- Pagination -->
                <div id="pagination"></div>
                <!-- /Pagination -->
            </div>
        </div>
    </section>
    <div class="clearfix">dsfsdf</div>
</div>
<!-- /Results page -->

<!-- Facet template -->
<script type="text/template" id="facet-template">
    <div class="facet">
        <ul class="list-group">
            <!-- facet title -->
            <li class="list-group-item text-center list-group-item-info"><b>{{ title }}</b></li>

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
        <a class="pull-left" href="{{ url }}">
            <img class="media-object" src="{{ urlpicture }}" alt="{{ name }}">
        </a>
        <div class="media-body">
            <h3 class="pull-right text-right text-danger">
                ${{ price }}
            </h3>
            <h4>{{{ _highlightResult.name.value }}}</h4>
            <p class="text-muted">
                {{{ _highlightResult.description.value }}}
            </p>
            <ul class="list-inline">
                <li>{{{ _highlightResult.type.value }}}</li>
                <li>{{{ _highlightResult.category.value }}}</li>
                <li>{{ type }}</li>
            </ul>
        </div>
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
                <input type="text" data-slider-min="0" data-slider-max="{{ max }}" data-slider-step="1" data-slider-value="{{ current }}" data-slider-orientation="horizontal" data-slider-selection="after" id="{{ facet }}-slider" />
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
