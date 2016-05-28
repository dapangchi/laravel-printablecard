<?php
$nums = 6;
?>

<nav class="search-menu search open">
    <div class="left">
        <ul>
            <li class="dropdown" data-filter="card-type">
                <span>CARD TYPE</span>
            </li>
            <li class="dropdown" data-filter="style">
                <span>STYLE/TAG</span>
            </li>
        </ul>
    </div>
    <div class="right">
        <span>WANT UNIQUE DESIGNS</span>
        <div class="button-wrap">
            <a href="{{ route('design.category.all') }}">
                <div class="lg-but ord-des-but">ORDER DESIGN SERVICES</div>
            </a>
        </div>
    </div>
</nav>
<nav id="nav-filters" class="search-filter nav-filters">
    <div class="desktop">
        <div class="filter filter-card-type">
            <?php $totalCards = $cards->count(); ?>
            @for($i = 0; $i < ceil($totalCards / $nums); $i++)
            <ul>
                @for($j = 0; $j < $nums; $j++)
                    @if(isset($cards[$i*$nums+$j]))
                    <li><a href="{{ URL::route($base_route, ['card' => $cards[$i*$nums+$j]->slug]) }}">{{ $cards[$i*$nums+$j]->name }}</a></li>
                    @endif
                @endfor
            </ul>
            @endfor
        </div>
        <div class="filter filter-style">
            <?php $totalTags = $tags->count(); ?>
            @for($i = 0; $i < ceil($totalTags / $nums); $i++)
            <ul>
                @for($j = 0; $j < $nums; $j++)
                    @if(isset($tags[$i*$nums+$j]))
                    <li><a href="{{ URL::route($base_route, ['tag' => $tags[$i*$nums+$j]->name]) }}">{{ $tags[$i*$nums+$j]->name }}</a></li>
                    @endif
                @endfor
            </ul>
            @endfor
        </div>
    </div>
    
    <div class="ipad">
        <?php $nums = 3; ?>
        <div class="filter filter-card-type">
            <?php $totalCards = $cards->count(); ?>
            @for($i = 0; $i < $nums; $i++)
            <ul>
                @for($j = 0; $j < ceil($totalCards / $nums); $j++)
                    @if(isset($cards[$i*$nums+$j]))
                    <li><a href="{{ URL::route($base_route, ['card' => $cards[$i*$nums+$j]->slug]) }}">{{ $cards[$i*$nums+$j]->name }}</a></li>
                    @endif
                @endfor
            </ul>
            @endfor
        </div>
        <div class="filter filter-style">
            <?php $totalTags = $tags->count(); ?>
            @for($i = 0; $i < $nums; $i++)
            <ul>
                @for($j = 0; $j < ceil($totalCards / $nums); $j++)
                    @if(isset($tags[$i*$nums+$j]))
                    <li><a href="{{ URL::route($base_route, ['tag' => $tags[$i*$nums+$j]->name]) }}">{{ $tags[$i*$nums+$j]->name }}</a></li>
                    @endif
                @endfor
            </ul>
            @endfor
        </div>
    </div>
</nav>